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
$GLOBALS['TL_LANG']['tl_boxen']['title']     = array('Titel', 'Interne Bezeichnung der Box (nur im Backend sichtbar)');
$GLOBALS['TL_LANG']['tl_boxen']['headline']  = array('Überschrift', 'Wenn Sie eine Überschrift eingeben, wird sie zu Beginn des Inhaltselements angezeigt.');           
$GLOBALS['TL_LANG']['tl_boxen']['content']   = array('Content', 'Inhalt der Box');
$GLOBALS['TL_LANG']['tl_boxen']['cssID']     = array('Stylesheet ID und Klasse', 'Hier können Sie eine Stylesheet ID (id attribute) sowie eine odere mehrere Stylesheet Klassen (class attribute) eingeben, um das Inhaltselement mittles CSS formatieren zu können.');
$GLOBALS['TL_LANG']['tl_boxen']['pages']     = array('Seiten', 'Auswählen, auf welchen Seiten die Box erscheinen soll');
$GLOBALS['TL_LANG']['tl_boxen']['reversePages'] = array('Seitenauswahl-Logik umkehren', 'Ausgewählte Seiten werden *nicht* angezeigt. Auswahl hier und keine der Seiten aktiv ist gleichbedeutend mit "alle Seiten".');
$GLOBALS['TL_LANG']['tl_boxen']['inheritPages'] = array('Unterseiten wählen', 'Die Box wird zusätzlich auf allen Unterseiten angezeigt.');
$GLOBALS['TL_LANG']['tl_boxen']['position']  = array('Position', 'Definiert in welcher Reihenfolge die Boxen ausgegeben werden');
$GLOBALS['TL_LANG']['tl_boxen']['modul_id']  = array('Anzeigen in Modul', 'Bitte das Box-Modul auswählen, in welchem die aktuelle Box erscheinen soll.');
$GLOBALS['TL_LANG']['tl_boxen']['space']     = array('Abstand davor und dahinter', 'Bitte geben Sie den Abstand vor und hinter dem Inhaltselement in Pixeln ein.');
$GLOBALS['TL_LANG']['tl_boxen']['addImage']  = array('Ein Bild hinzufügen', 'Wenn Sie diese Option wählen, wird dem Inhaltselement ein Bild hinzugefügt.');
$GLOBALS['TL_LANG']['tl_boxen']['imageUrl']  = array('Bild als Link einfügen', 'Bitte geben Sie die komplette URL inklusive des Netzwerk-Protokolls (z.B. <em>http://www.domain.com</em>) ein, um das Bild als Link zu nutzen. Hinweis: In diesem Fall kann das Bild nicht mehr in der Großansicht angezeigt werden.');
$GLOBALS['TL_LANG']['tl_boxen']['published'] = array('Box veröffentlichen', 'Die Box auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_boxen']['start']     = array('Anzeigen ab', 'Die Box erst ab diesem Tag auf der Webseite anzeigen.');
$GLOBALS['TL_LANG']['tl_boxen']['stop']      = array('Anzeigen bis', 'Die Box nur bis zu diesem Tag auf der Webseite anzeigen.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_boxen']['title_legend']     = 'Titel und Überschrift';
$GLOBALS['TL_LANG']['tl_boxen']['text_legend']      = 'Text-Inhalt';
$GLOBALS['TL_LANG']['tl_boxen']['image_legend']     = 'Bild-Einstellungen';
$GLOBALS['TL_LANG']['tl_boxen']['column_legend']    = 'Moduleigenschaften';
$GLOBALS['TL_LANG']['tl_boxen']['protected_legend'] = 'Zugriffsschutz';
$GLOBALS['TL_LANG']['tl_boxen']['pages_legend']     = 'Seitenspezifische Anzeige';
$GLOBALS['TL_LANG']['tl_boxen']['expert_legend']    = 'Experten-Einstellungen';
$GLOBALS['TL_LANG']['tl_boxen']['publish_legend']   = 'Veröffentlichung';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_boxen']['new']    = array('Neue Box anlegen', '');
$GLOBALS['TL_LANG']['tl_boxen']['edit']   = array('Bearbeiten', '');
$GLOBALS['TL_LANG']['tl_boxen']['copy']   = array('Kopieren', '');
$GLOBALS['TL_LANG']['tl_boxen']['delete'] = array('Löschen', '');

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