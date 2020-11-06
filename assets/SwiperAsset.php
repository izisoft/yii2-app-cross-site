<?php
namespace app\assets;
use yii\web\AssetBundle;

class SwiperAsset extends AssetBundle
{
    //public $sourcePath = '@app/themes/nz1/assets';

    public $css = [
        'https://unpkg.com/swiper/swiper-bundle.min.css'
    ];

    public $js = [
        'https://unpkg.com/swiper/swiper-bundle.min.js'
    ];

    public function init()
    {
        
    }

}