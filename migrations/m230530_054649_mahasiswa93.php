<?php

use yii\db\Migration;

/**
 * Class m230530_054649_mahasiswa93
 */
class m230530_054649_mahasiswa93 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->createTable('{{%mahasiswa93}}', [
            'id93' => $this->primaryKey(),
            'nim93' =>$this->string()->notNull()->unique(),
            'nama93' =>$this->string()->notNull(),
            'kelas93' =>$this->string()->notNull(),
            'status93' =>$this->string()->notNull(),
            
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa93}}');

        return false;
    }

    
}
