<?php

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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Magmell\Boxes;

class BoxesContentModule extends \ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'boxesce_container';


    /**
     * Generate content element
     */
    protected function compile()
    {
        $objModule = \ModuleModel::findByPK($this->module);

        if ($objModule === null)
        {
            return;
        }

        $strClass = \Module::findClass($objModule->type);

        if (!class_exists($strClass))
        {
            return '';
        }

        $objModule->typePrefix = 'ce_';
        $objModule = new $strClass($objModule);

        $this->Template->content = $objModule->generate();
    }
}
