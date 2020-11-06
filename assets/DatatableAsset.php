<?php
namespace app\assets;
use yii\web\AssetBundle;

class DatatableAsset extends AssetBundle
{
    //public $sourcePath = '@app/themes/nz1/assets';

    public $css = [
        'https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css'
    ];

    public $js = [
        'https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        
    }

}