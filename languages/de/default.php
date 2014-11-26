<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  4ward.media 2010
 * @author     Christoph Wiechert <christoph.wiechert@4wardmedia.de>
 * @package    boxes
 * @license    LGPL 
 * @filesource
 */


/**
 * Box content elements
 */
$GLOBALS['TL_LANG']['Boxes_CTE']['texts']     = 'Text-Elemente';
$GLOBALS['TL_LANG']['Boxes_CTE']['headline']  = array('Überschrift', 'Erzeugt eine Überschrift (h1 - h6).');
$GLOBALS['TL_LANG']['Boxes_CTE']['text']      = array('Text', 'Erzeugt ein Rich-Text-Element.');
$GLOBALS['TL_LANG']['Boxes_CTE']['html']      = array('HTML', 'Erlaubt das Hinzufügen von eigenem HTML-Code.');
$GLOBALS['TL_LANG']['Boxes_CTE']['images']    = 'Bild-Elemente';
$GLOBALS['TL_LANG']['Boxes_CTE']['image']     = array('Bild', 'Erzeugt ein einzelnes Bild.');
$GLOBALS['TL_LANG']['Boxes_CTE']['gallery']   = array('Galerie', 'Erzeugt eine lightbox Bildergalerie.');
$GLOBALS['TL_LANG']['Boxes_CTE']['files']     = 'Datei Elemente';
$GLOBALS['TL_LANG']['Boxes_CTE']['download']  = array('Download', 'Erzeugt einen Link zum Download einer Datei.');
$GLOBALS['TL_LANG']['Boxes_CTE']['downloads'] = array('Downloads', 'Erzeugt mehrere Links zum Download von Dateien.');
$GLOBALS['TL_LANG']['Boxes_CTE']['includes']  = 'Include-Elemente';
$GLOBALS['TL_LANG']['Boxes_CTE']['article']   = array('Artikel', 'Fügt einen anderen Artikel ein.');
$GLOBALS['TL_LANG']['Boxes_CTE']['alias']     = array('Inhaltselement', 'Fügt ein anderes Inhaltselement ein.');
$GLOBALS['TL_LANG']['Boxes_CTE']['module']    = array('Modul', 'Fügt ein Frontend-Modul ein.');
?>