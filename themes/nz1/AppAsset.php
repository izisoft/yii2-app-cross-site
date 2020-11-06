<?php
namespace app\themes\nz1;
use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/nz1/assets';

    public $css = [
        // '//cdn.iziweb.net/font-awesome/5.15.1/css/all.min.css',
        'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
        'https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDancing+Script%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&subset=vietnamese&ver=5.5.3',
        'css/site.css'
    ];

    public $js = [
        // 'https://gojapan.vn/wp-content/cache/minify/5c852.js',
        // 'https://gojapan.vn/wp-content/cache/minify/c38ec.js',
        // 'https://gojapan.vn/wp-content/cache/minify/f60ea.js',
        // 'https://gojapan.vn/wp-content/cache/minify/9f110.js',
        'js/main.js'
    ];

    public function init()
    {
        \Yii::$app->view->registerJs(<<<JS
    var ElementorProFrontendConfig={}
    var elementorFrontendConfig={"environmentMode":{"edit":false,"wpPreview":false},"i18n":{},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.11","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":""},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"}};
    
    JS
, \yii\web\View::POS_HEAD);
        
    }

}