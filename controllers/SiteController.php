<?php
/**
 * Created by PhpStorm.
 * User: shared
 * Date: 8/15/18
 * Time: 21:29
 */

namespace app\controllers;


use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex ()
    {
        return $this->render('index');
    }
}