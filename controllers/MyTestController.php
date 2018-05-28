<?php
/**
 * Created by PhpStorm.
 * User: Di13
 * Date: 28.05.2018
 * Time: 16:29
 */
namespace app\controllers;
use yii\web\Controller;

class MyTestController extends Controller
{
	public function actionIndex (){

	 return $this->render('index', ['title' => 'My test templates', 'content' => 'Yes!!! All Worked!!! Cool!']);

	}
}