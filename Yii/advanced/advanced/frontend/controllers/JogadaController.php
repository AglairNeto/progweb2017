<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class JogadaController extends Controller
{
    public function actionPlay()
    	{
    		if(!Yii::$app->request->getIsPost()) {
       			$this->redirect('/user/index',302);
       			exit(0);
       		}	
    	}

    public function actionRanking()
    	{

    	}

    public function actionSave()
    	{
    		if (!Yii::$app->user->isGuest) {
				$pontuacao = Yii::$app->request->post('pontuacao');
				$user = Yii::$app->user->identity->id;
				$jogada = new Jogada;
				$jogada->id_user = $user;
				$jogada->pontuacao = $pontuacao;
				if ($jogada->save()) {
					return 1;
						} else {
					return 0;
				}
			}

    	}		
}
