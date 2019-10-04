<?php

namespace frontend\controllers;

use frontend\models\AsosSearch;

class OshxonaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model=AsosSearch::find()->all();
        return $this->render('index',[
            'model'=>$model,
        ]);
    }

}
