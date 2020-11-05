<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>    
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php 
/**
 * Block header
 */
 

// $this->renderPartial('before_header');

$this->renderPartial('header');

// $this->renderPartial('after_header');
/**
 * Block main content
 */



echo '<div id="system-alert" class="system-alert">'. Alert::widget() .'</div>';
echo '<div id="main" class="main-outside w-100">'. $content .'</div>';
/**
 * Block footer
 */
$this->renderPartial('footer');
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
