<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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
 * This is the Content Boxes configuration file.
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
 * -------------------------------------------------------------------------
 * Box CONTENT ELEMENTS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_Boxes_CTE'] = array
(
	'texts' => array
	(
		'headline'  => 'Magmell\Boxes\BoxesContentHeadline',
		'text'      => 'Magmell\Boxes\BoxesContentText',
		// 'html'      => 'BoxesContentHtml', // TODO implement class
	),
	'images' => array
	(
		// 'image'     => 'BoxesContentImage', // TODO implement class
		'gallery'   => 'Magmell\Boxes\BoxesContentGallery'
	),
	'files' => array
	(
		// 'download'  => 'BoxesContentDownload', // TODO implement class
		// 'downloads' => 'BoxesContentDownloads' // TODO implement class
	),
	'includes' => array
	(
		'article'   => 'Magmell\Boxes\BoxesContentArticle',
		// 'alias'     => 'BoxesContentAlias', // TODO implement class
		'module'    => 'Magmell\Boxes\BoxesContentModule',
	)
);

/**
 * -------------------------------------------------------------------------
 * BACK END MODULES
 * -------------------------------------------------------------------------
 */
array_insert($GLOBALS['BE_MOD']['content'], sizeof($GLOBALS['BE_MOD']['content']), array('contentbox' => array
(
    'tables' 	 => array('tl_boxen'),
    'icon'   	 => 'system/modules/boxes/assets/icon.gif',
)
));

/**
 * -------------------------------------------------------------------------
 * FRONT END MODULES
 * -------------------------------------------------------------------------
 */ 
array_insert($GLOBALS['FE_MOD']['miscellaneous'],0, array
(
  'contentbox' => 'Magmell\Boxes\ModuleBoxes'
));