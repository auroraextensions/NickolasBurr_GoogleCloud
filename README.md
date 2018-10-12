# Google Cloud PHP Autoloader

Autoload Google Cloud PHP classes for use with Magento 1.x.

By default, [google/cloud-core](https://packagist.org/packages/google/cloud-core) and dependencies are installed.

## Requirements

+ [Composer](https://getcomposer.org)
+ Magento 1.8+

## Installation

```
git clone https://github.com/nickolasburr/googlecloudphpautoloader.git
cd googlecloudphpautoloader
composer install --no-dev
```

## Usage

To use Google Cloud PHP classes in your module, add `<NickolasBurr_GoogleCloud>` as a dependency:

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
