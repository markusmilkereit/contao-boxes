<?php

/**
 * Extension for: TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that
 * specializes in accessibility and generates W3C-compliant HTML code. It
 * provides a wide range of functionality to develop professional websites
 * including a built-in search engine, form generator, file and user manager,
 * CSS engine, multi-language support and many more. For more information and
 * additional TYPOlight applications like the TYPOlight MVC Framework please
 * visit the project website http://www.typolight.org.
 *
 * PHP version 5
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus@computino.de>
 * @package    Boxes
 * @license    GPL
 * @filesource
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Magmell\Boxes;


/**
 * Class: ModuleBoxes
 *
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus@computino.de>
 *
 * Based on the class tl_boxen by Christian Wenzel
 * Class modification notes
 * Module has been updated to support more of the typolight fields. The following fields have been added:
 * Headline - Actually a 2-column array, Headline provides the ability to apply a label as well as indicating which of the
 * h-series tags (e.g. h1, h2, h3) to use to style the headline.
 * Space - CSS margins above or below box element
 * cssID - Actually a 2-column array, cssID provides the ability to apply classes and/or id labels for futher styling
 *
 * All box modules follow their own mod_boxen template, which wraps around individual boxes.
 * All boxes within a single module are now displayed according to the mod_boxen_items template, which resides within
 * the wrapper class, mod_contentbox
 *
 * It should be noted that all of the additional functionality came from the ContentElement class located in modules/frontend.
 * Aside from the modifications made in this file, I modified the template file accordingly to support the additional
 * attributes.  I also renamed the template file to be more in-line with the standard Typolight approach.  Not necessary, just
 * my personal preference.
 *
 *
 */
class ModuleBoxes extends \Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_box';
	

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### CONTENT BOXES ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;
			return $objTemplate->parse();
		}

		$objRows = $this->Database->prepare("SELECT COUNT(*) as itemCount FROM tl_boxen WHERE modul_id=?")
			        	->limit(1)
			        	->execute($this->id);

		// Avoid an error due an empty result set from $objRows
		if ($objRows->itemCount > 0)
		{
			return parent::generate();
		}
		else
		{
			return;
		}
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		// get navigation-path
		$arrPathIDs = array();
		$currPage = $GLOBALS['objPage'];
		while($currPage->pid != '0')
		{
			$arrPathIDs[] = $currPage->id;
			$currPage = $this->Database->prepare('SELECT id,pid FROM tl_page WHERE id=?')->execute($currPage->pid);
		}
		// forgot to pick up the root page / pid = 0
		$arrPathIDs[] = $currPage->id;
		
		// get boxes
		$objBoxen = $this->Database->prepare("SELECT * FROM tl_boxen WHERE modul_id=? " . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<".time().") AND (stop='' OR stop>".time().") AND published=1" : "") . " ORDER BY position ASC")
					           ->execute($this->id);		

		// Generate all boxes content elements
		$strContent = '';
		while($objBoxen->next())
		{
			$pages = strlen($objBoxen->pages) ? unserialize($objBoxen->pages) : array();
			$reversePages = $objBoxen->reversePages;
			$inheritPages = $objBoxen->inheritPages;
			
			// only if it passes the choosen pages 
			// inherit currently overwrites reverse - better solution next time
			if( (in_array($GLOBALS['objPage']->id, $pages) && !$reversePages) || 
				(!in_array($GLOBALS['objPage']->id, $pages) && $reversePages) ||
				($inheritPages && count(array_intersect($arrPathIDs, $pages)) > 0)
			){
				$strContent .= $this->getBoxesContentElement($objBoxen);
			}
		}

		$this->Template->items = $strContent;
	}
	
	
	/**
	 * Generate a boxes content element return it as HTML string
	 * @param integer
	 * @return string
	 */
	protected function getBoxesContentElement($objElement)
	{
		// Show to guests only
		if ($objElement->guests && FE_USER_LOGGED_IN && !BE_USER_LOGGED_IN && !$objElement->protected)
		{
			return '';
		}

		// Protected element
		if ($objElement->protected && !BE_USER_LOGGED_IN)
		{
			if (!FE_USER_LOGGED_IN)
			{
				return '';
			}

			$this->import('FrontendUser', 'User');
			$groups = deserialize($objElement->groups);

			if (!is_array($groups) || count($groups) < 1 || count(array_intersect($groups, $this->User->groups)) < 1)
			{
				return '';
			}
		}

		// Remove spacing in the back end preview
		if (TL_MODE == 'BE')
		{
			$objElement->space = null;
		}

		$strClass = false;
		foreach ($GLOBALS['TL_Boxes_CTE'] as $v)
		{
			foreach ($v as $kk=>$vv)
			{
				if ($kk == $objElement->type)
				{
					$strClass = $vv;
					break 2;
				}
			}
		}		
		
		// Return if the class does not exist
		if (!$this->classFileExists($strClass))
		{
			$this->log('Boxes content element class "'.$strClass.'" (boxes content element "'.$objElement->type.'") does not exist', 'ModuleBoxes getBoxesContentElement()', TL_ERROR);
			return '';
		}

		$objElement->typePrefix = 'boxesce_';

		$objElement->text = $objElement->content;
		$objElement = new $strClass($objElement);
		
		// add boxes_item class
		$objElement->cssID = array
		(
			$objElement->cssID[0],
			$objElement->cssID[1].' mod_box_items'
		);
		
		$strBuffer = $objElement->generate();

		// HOOK: add custom logic
		if (isset($GLOBALS['TL_HOOKS']['getContentElement']) && is_array($GLOBALS['TL_HOOKS']['getContentElement']))
		{
			foreach ($GLOBALS['TL_HOOKS']['getContentElement'] as $callback)
			{
				$this->import($callback[0]);
				$strBuffer = $this->$callback[0]->$callback[1]($objElement, $strBuffer);
			}
		}

		return $strBuffer;
	}	
	
}
