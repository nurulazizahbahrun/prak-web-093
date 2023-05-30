<?php

namespace app\controllers;

use app\models\Mahasiswa93;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa93Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa93::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa93 = new Mahasiswa93;
        $mahasiswa93->nim93 = '60200121093'.rand(100,999);
        $mahasiswa93->nama93 = 'aziza';
        $mahasiswa93->kelas93 = 'A';
        $mahasiswa93->status93 = 'Baru';
        if ($mahasiswa93->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa93 = Mahasiswa93::findOne(['id93' => $id]);
        if($mahasiswa93 !== null){
            $mahasiswa93->kelas93 = 'C';
            $mahasiswa93->status93 = 'Update';
            $mahasiswa93->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa93 = Mahasiswa93::findOne(['id93' => $id]);
        if($mahasiswa93->delete())
        Yii::$app->session->setFlash('success', 'Data Terdelete');
        {
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mahasiswa93 = Mahasiswa93::findOne($id);
        return $this->render('view', ['mahasiswa93' => $mahasiswa93]);
    }
}