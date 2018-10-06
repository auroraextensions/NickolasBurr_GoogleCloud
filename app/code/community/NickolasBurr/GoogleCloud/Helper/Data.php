<?php
/**
 * Data.php
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

class NickolasBurr_GoogleCloud_Helper_Data extends Mage_Core_Helper_Abstract
{
    /** @constant XML_PATH_FIELD_MODULE_STATE */
    const XML_PATH_FIELD_MODULE_STATE = 'googlecloud/general/enable_module';

    /**
     * Get current timestamp, properly formatted for entry.
     *
     * @return int
     */
    public function getCurrentTimestamp()
    {
        return Mage::getModel('core/date')->timestamp(time());
    }

    /**
     * Whether this module is enabled or not.
     *
     * @param $field Active status field.
     * @return bool
     */
    public function isModuleEnabled($field = self::XML_PATH_FIELD_MODULE_STATE)
    {
        return Mage::getStoreConfigFlag($field, Mage::app()->getStore());
    }

    /**
     * Get lib/$module path.
     *
     * @param string $module Module name.
     * @return string
     */
    public static function getLibModulePath($module)
    {
        return Mage::getBaseDir('lib') . DIRECTORY_SEPARATOR . $module;
    }
}
