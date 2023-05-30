<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;

    ?>

    <?= 
         GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => SerialColumn::className()],
                'id',
                'kode_obat',
                'harga',
                'stok_obat',
                ['class' => ActionColumn::className()]
            ]
        ])
    ?>
