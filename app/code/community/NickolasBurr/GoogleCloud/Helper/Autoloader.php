<?php
/**
 * Autoloader.php
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

class NickolasBurr_GoogleCloud_Helper_Autoloader extends NickolasBurr_GoogleCloud_Helper_Data
{
    /** @constant LIB_MODULE_GOOGLECLOUD */
    const LIB_MODULE_GOOGLECLOUD = 'GoogleCloud';

    /** @property $_registered */
    protected static $_registered = false;

    /**
     * Prepend our autoloader, which will load our external library classes.
     */
    public function register()
    {
        if (!self::$_registered) {
            /* Initialize library classes. */
            self::_initialize();
            self::$_registered = true;
        }
    }

    /**
     * Load library classes.
     */
    protected static function _initialize()
    {
        /**
         * Get lib/GoogleCloud/autoload.php path,
         * and set lib/GoogleCloud in include_path.
         */
        $autoloader = self::getLibModulePath(self::LIB_MODULE_GOOGLECLOUD) . DIRECTORY_SEPARATOR . 'autoload.php';
        \set_include_path(\get_include_path() . PATH_SEPARATOR . self::getLibModulePath(self::LIB_MODULE_GOOGLECLOUD));

        /* Require Composer autoloader. */
        require_once $autoloader;
    }
}
