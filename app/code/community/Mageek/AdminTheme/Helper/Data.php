<?php

/**
 * @category    Mageek
 * @package     Mageek_AdminTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://hejlik.cz/)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Mageek_AdminTheme_Helper_Data extends Mage_Core_Helper_Data
{

    public function setAdminTheme()
    {

        if (Mage::getStoreConfigFlag('admin/mageek_admintheme/theme_enable')) {
            $theme = "mageek";
        } else {
            $theme = "default";
        }

        return $theme;
    }

}
