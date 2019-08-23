<?php

namespace Magmell\Contao\Boxes;

use Contao\Database;

abstract class ContaoBoxesRunOnce
{
    /**
     * Run database migrations
     *  fix size (remove proportional size if dimensions are empty)
     * @return void
     */
    public static function run()
    {
        $objResult = Database::getInstance()->query("SELECT `id`, `size` FROM `tl_boxen`;");

        while ($objResult->next())
        {
            if (!$objResult->size) {
                continue;
            }

            $arrSize = unserialize($objResult->size);

            if (!is_array($arrSize)) {
                continue;
            }

            if (!$arrSize[0] && !$arrSize[1] && 'proportional' === $arrSize[2])
            {
                Database::getInstance()->prepare("UPDATE `tl_boxen` SET `size`=? WHERE `id`=?;")->execute(serialize(['', '', '']), $objResult->id);
            }
        }
    }
}
