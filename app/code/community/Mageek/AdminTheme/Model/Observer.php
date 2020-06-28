<?php

/**
 * @category    Mageek
 * @package     Mageek_AdminTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://hejlik.cz/)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

class Mageek_AdminTheme_Model_Observer
{

    public function selectedTheme()
    {

        $theme = Mage::helper('mageek_admintheme')->setAdminTheme();

        if (!empty($theme)) {
            Mage::getDesign()->setArea('adminhtml')->setTheme($theme);
        }

    }

}
