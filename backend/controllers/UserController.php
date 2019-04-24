<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\User; 

class UserController extends Controller
{
	public function actionIndex()
	{
		$users = User::find()->all();
		return $this->render('index',['users'=>$users]);
	}
}

?>
