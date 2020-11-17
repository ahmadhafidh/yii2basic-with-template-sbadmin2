<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/vendor/fontawesome-free/css/all.min.css',
        'theme/css/sb-admin-2.min.css',
        ''
    ];
    public $js = [
        'theme/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'theme/vendor/jquery-easing/jquery.easing.min.js',
        'theme/js/sb-admin-2.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
