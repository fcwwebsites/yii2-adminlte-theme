<?php
namespace prawee\themes;
/**
 * Description of AdminLteAsset
 * May 19, 2015 11:15:49 AM
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 */
use yii\web\AssetBundle;
class AdminLteAsset extends AssetBundle{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css'
    ];
    public $js = [
        'js/app.min.js'
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}