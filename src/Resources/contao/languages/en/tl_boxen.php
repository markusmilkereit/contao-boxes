<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * Language file for table tl_boxen (de).
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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_boxen']['title']     = array('Title', 'Title');
$GLOBALS['TL_LANG']['tl_boxen']['headline']  = array('Headline', 'If you enter a headline, it will be shown on top of the content element.');                
$GLOBALS['TL_LANG']['tl_boxen']['content']   = array('Content', '');
$GLOBALS['TL_LANG']['tl_boxen']['cssID']     = array('Style sheet ID and class', 'Here you can enter a style sheet ID (id attribute) and one or more style sheet classes (class attributes) to be able to format the content element using CSS.');
$GLOBALS['TL_LANG']['tl_boxen']['pages']     = array('Pages', 'Select on ore more pages on which the box should appear');
$GLOBALS['TL_LANG']['tl_boxen']['reversePages'] = array('Reverse page selection', 'With this option, the box does not get displayed on the selected pages. No pages selected means the box is displayed everywhere.');
$GLOBALS['TL_LANG']['tl_boxen']['inheritPages'] = array('Choose subpages', 'The box will shown on all subpages too.');
$GLOBALS['TL_LANG']['tl_boxen']['position']  = array('Position/Order', 'Type in a number (eg. 1 or 2 etc) to define the order of the boxes.');
$GLOBALS['TL_LANG']['tl_boxen']['modul_id']  = array('Connect to Modul', 'Choose the Box-Modul in which the Box should appear. Please read the Wiki for more information.');
$GLOBALS['TL_LANG']['tl_boxen']['space']     = array('Space in front and after', 'Please enter the spacing in front of and after the article in pixel.');
$GLOBALS['TL_LANG']['tl_boxen']['addImage']  = array('Add an image', 'If you choose this option, an image will be added to the news article.');
$GLOBALS['TL_LANG']['tl_boxen']['imageUrl']  = array('Use image as link', 'Please enter a complete target URL including the network protocol (e.g. <em>http://www.domain.com</em>) to use the image as link. Note that in this case it will not be possible to view the image fullsize anymore.');
$GLOBALS['TL_LANG']['tl_boxen']['published'] = array('Publish box', 'Make the box publicly visible on the website.');
$GLOBALS['TL_LANG']['tl_boxen']['start']     = array('Show from', 'Do not show the box on the website before this day.');
$GLOBALS['TL_LANG']['tl_boxen']['stop']      = array('Show until', 'Do not show the box on the website after this day.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_boxen']['title_legend']     = 'Title and headline';
$GLOBALS['TL_LANG']['tl_boxen']['text_legend']      = 'Text content';
$GLOBALS['TL_LANG']['tl_boxen']['image_legend']     = 'Image settings';
$GLOBALS['TL_LANG']['tl_boxen']['column_legend']    = 'Module settings';
$GLOBALS['TL_LANG']['tl_boxen']['protected_legend'] = 'Access protection';
$GLOBALS['TL_LANG']['tl_boxen']['pages_legend']     = 'Page-dependent display';
$GLOBALS['TL_LANG']['tl_boxen']['expert_legend']    = 'Expert settings';
$GLOBALS['TL_LANG']['tl_boxen']['publish_legend']   = 'Publish settings';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_boxen']['new']    = array('Create new Box', '');
$GLOBALS['TL_LANG']['tl_boxen']['edit']   = array('Edit', '');
$GLOBALS['TL_LANG']['tl_boxen']['copy']   = array('Copy', '');
$GLOBALS['TL_LANG']['tl_boxen']['delete'] = array('Delete', '');

/**
 * Insert tags
 */
$GLOBALS['TL_LANG']['XPL']['modul_id'] = array
(
  array('Anzeigen in Modul', 'Wählen Sie hier das Box-Modul aus, in welchem die aktuelle Box angezeigt 
    werden soll. Box-Module legen Sie bitte zunächst im Backend unter Module an. Dort wählen Sie als Modultyp
    Boxen aus und weisen der Box einen Seitenbereich (links, rechts, mitte, etc) zu. Anschließend müssen Sie das neu erstellte
    Box-Modul unter Seitenlayout mit einem Seitenbereich (links, mitte, rechts, etc) verknüpfen. Wählen Sie hier bitte den gleichen
    Seitenbereich, den Sie auch vorher für die Box definiert haben.
    Weitere Informationen dazu finden Sie im Wiki-Eintrag zu diesem Modul
    '),
);
