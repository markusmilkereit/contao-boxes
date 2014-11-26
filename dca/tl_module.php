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
 * This file modifies the data container array of table tl_module.
 *
 * PHP version 5
 * @copyright  Christian Wenzel/Fred Bliss 2007 / computino.de Webservice 2008 / Magmell - Agentur für Film, Web und Print 2014
 * @author     Christian Wenzel <wenzel@saiga.de>
 * @author     Fred Bliss <fred@stevensdesign.com>
 * @author     Markus Milkereit <markus.milkereit@magmell.de>
 * @package    Boxes
 * @license    GPL
 * @filesource
 */


/**
 * Add palettes to tl_module
 */
if(VERSION >= 2.7)
{
  $GLOBALS['TL_DCA']['tl_module']['palettes']['contentbox'] = '{title_legend},name,type,headline;{expert_legend:hide},align,space,cssID';
} 
else
{
  $GLOBALS['TL_DCA']['tl_module']['palettes']['contentbox'] = 'name,type,headline;box_column;align;space,cssID';
}
