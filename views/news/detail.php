<?php 
echo __FILE__;

if(isset(Yii::$app->params['item']) && !empty(Yii::$app->params['item'])){
    print_r(Yii::$app->params['item']);
}