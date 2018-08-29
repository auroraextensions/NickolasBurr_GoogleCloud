<?php
/**
 * Observer.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License, which
 * is bundled with this package in the file LICENSE.txt.
 *
 * It is also available on the Internet at the following URL:
 * https://docs.nickolasburr.com/magento/extensions/1.x/googlecloud/LICENSE.txt
 *
 * @package        NickolasBurr_GoogleCloud
 * @copyright      Copyright (C) 2018 Nickolas Burr <nickolasburr@gmail.com>
 * @license        MIT License
 */

class NickolasBurr_GoogleCloud_Model_Observer
{
    /** @constant XML_PATH_HELPER_AUTOLOADER */
    const XML_PATH_HELPER_AUTOLOADER = 'googlecloud/autoloader';

    /**
     * Add our autoloader before Varien autoloader.
     *
     * @param Varien_Event_Observer $observer The <controller_action_init_before> observer.
     */
    public function controllerFrontInitBefore(Varien_Event_Observer $observer)
    {
        /** @var NickolasBurr_GoogleCloud_Helper_Autoloader $helper */
        $helper = Mage::helper(self::XML_PATH_HELPER_AUTOLOADER);

        if ($helper->isModuleEnabled()) {
            $helper->register();
        }
    }
}
