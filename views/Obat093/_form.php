<?php
use yii\helpers\Html;
use yii\widgates\ActiveFom;
?>
<?php $fom = ActionForm::begin() ?>
<?= $fom->filed($Obat093, 'kode_obat') ?>
<?= $fom->filed($Obat093, 'harga') ?>
<?= $fom->filed($Obat093, 'stok_obat') ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>
