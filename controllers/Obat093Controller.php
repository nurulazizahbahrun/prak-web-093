<?php

namespace app\controllers;
use app\models\Obat093;
use yii\data\ActiveDataProvider;

class Obat093Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
   
        $dataProvider = new ActiveDataProvider([
            'query'=> Obat093::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    }
    public function actionTambah()
    {
     $Obat093 = new Obat093;
     if ($Obat093-> load($this->request->post()&& $Obat093->save())) {
         return $this->redirect(['index']);
     }
     return $this->render('create', ['Obat093' => $Obat093]);
    }
    public function actionUpdate()
    {
     $Obat093 = Obat093::findOne([$id = '']);
     if ($Obat093-> load($this->request->post()&& $Obat093->save())) {
         return $this->redirect(['index']);
     }
     return $this->render('Update', ['Obat093' => $Obat093]);
     }
     public function actionDelete()
    {
     $Obat093 = Obat093::findOne([$id = '']);
     if ($Obat093->delete()){
         return $this->redirect(['index']);
     }
     }
    

}
