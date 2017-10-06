<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Magmell\Boxes',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Models
    'Magmell\Boxes\BoxenModel'           => 'system/modules/boxes/models/BoxenModel.php',

    // Modules
    'Magmell\Boxes\ModuleBoxes'          => 'system/modules/boxes/ModuleBoxes.php',

    // Boxes Content Elements
    'Magmell\Boxes\BoxesContentArticle'  => 'system/modules/boxes/BoxesContentArticle.php',
    'Magmell\Boxes\BoxesContentGallery'  => 'system/modules/boxes/BoxesContentGallery.php',
    'Magmell\Boxes\BoxesContentHeadline' => 'system/modules/boxes/BoxesContentHeadline.php',
    'Magmell\Boxes\BoxesContentModule'   => 'system/modules/boxes/BoxesContentModule.php',
    'Magmell\Boxes\BoxesContentText'     => 'system/modules/boxes/BoxesContentText.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'mod_box'               => 'system/modules/boxes/templates',
    'mod_box_items'         => 'system/modules/boxes/templates',
    'boxesce_container'     => 'system/modules/boxes/templates',
    'boxesce_gallery'       => 'system/modules/boxes/templates',
    'boxesce_headline'      => 'system/modules/boxes/templates',
    'boxesce_text'          => 'system/modules/boxes/templates',
));
