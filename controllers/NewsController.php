<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class NewsController extends ControllerBase
{
    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        
        
        return $this->render('index');
    }
    

    public function actionIndex2()
    {
        
        
        
        return $this->render('index2');
    }
    
    public function actionDetail()
    {
        return $this->render($this->action->id);
    }

      
}
