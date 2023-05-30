<?php
    use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_obat',
            'harga',
            'stok_obat',
        ]
    ])
?>