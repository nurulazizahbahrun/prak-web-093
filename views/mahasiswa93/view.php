<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mahasiswa93,
        'attributes' => [
            'id93',
            'nim93',
            'nama93',
            'kelas93',
            'status93',
        ],
    ]);
?>