
Yii2 AdminBSB - Material Design
===============================
Asset Bundle for AdminBSB - Material Design

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pipa7/yii2-admin-bsb-material-design "*"
```

or add

```
"pipa7/yii2-admin-bsb-material-design": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply edit the file in assets/AppAsset.php and add the following line in $depends: a

```php
        'pipa7\adminbsb\assets\ThemeAsset'
```

Should stay like this:
```php
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'pipa7\adminbsb\assets\ThemeAsset'
    ];
}
```
=======
# yii2-admin-bsb-material-design
Yii2 AdminBSB - Material Design

