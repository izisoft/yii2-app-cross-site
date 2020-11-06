<?php
namespace app\themes\nz1;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/nz1/assets';

    public $css = [
        // '//cdn.iziweb.net/font-awesome/5.15.1/css/all.min.css',
        'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
        'css/site.css'
    ];

    public $js = [
        'js/main.js'
    ];

    public function init()
    {
        
    }

}