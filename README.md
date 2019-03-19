# Google Cloud PHP Autoloader

Autoload Google Cloud PHP classes for use with Magento 1.9.

By default, only [google/cloud-core](https://packagist.org/packages/google/cloud-core) and its dependencies
are installed. If you're using this module with [NickolasBurr\_GoogleCloudStorage](https://github.com/auroraextensions/NickolasBurr_GoogleCloudStorage),
make the following updates to the `composer.json` file and run `composer update`:

```diff
diff --git a/composer.json b/composer.json
index 8bf5c11..369087d 100644
--- a/composer.json
+++ b/composer.json
@@ -17,14 +17,16 @@
   "require": {
     "php": ">=5.5",
     "mnsami/composer-custom-directory-installer": "1.1.*",
-    "google/cloud-core": "~1.23"
+    "google/cloud-core": "~1.23",
+    "google/cloud-storage": "~1.9"
   },
   "config": {
     "vendor-dir": "./lib/GoogleCloud/"
   },
   "extra": {
     "installer-paths": {
-      "./lib/GoogleCloud/core": ["google/cloud-core"]
+      "./lib/GoogleCloud/core": ["google/cloud-core"],
+      "./lib/GoogleCloud/storage": ["google/cloud-storage"]
     }
   }
 }
```

## Requirements

+ [Composer](https://getcomposer.org)
+ Magento 1.9

## Installation

```
modman clone https://github.com/auroraextensions/NickolasBurr_GoogleCloud.git
composer install --no-dev --working-dir=./.modman/NickolasBurr_GoogleCloud
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
