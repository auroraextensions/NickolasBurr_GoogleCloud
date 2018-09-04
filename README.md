# Google Cloud PHP Autoloader

Google Cloud PHP Autoloader provides autoloading of [google/cloud-core](https://packagist.org/packages/google/cloud-core) classes for use with Magento 1.x.

## Requirements

+ [Composer](https://getcomposer.org)
+ Magento >=1.8

Composer is required for installing packages and autoloading classes for use by Google Cloud PHP Autoloader.
From there, Google Cloud PHP Autoloader will load the necessary classes within the context of Magento.

## Installation

```
cd lib/GoogleCloud
composer install --no-dev
```

## Usage

To use Google Cloud PHP classes in your module, add it as a dependency in your global configuration XML file:

```
<config>
  <modules>
    <Vendor_Package>
      <active>true</active>
      <codePool>community</codePool>
      <depends>
        <NickolasBurr_GoogleCloud/>
      </depends>
    </Vendor_Package>
  </modules>
</config>
```
