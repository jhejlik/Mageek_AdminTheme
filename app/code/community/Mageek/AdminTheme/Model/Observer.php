<?php

/**
 * @category    Mageek
 * @package     Mageek_AdminTheme
 * @author      Jindra Hejlík <jindra@hejlik.cz>
 * @copyright   Copyright (c) Mageek (http://mageek.cz/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Mageek_AdminTheme_Model_Observer
{

    public function selectedTheme()
    {

        $theme = Mage::helper('mageek_admintheme')->getThemeName();

        if (!empty($theme)) {
            Mage::getDesign()->setArea('adminhtml')->setTheme($theme);
        }

    }

}
