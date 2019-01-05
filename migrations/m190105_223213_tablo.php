<?php

use yii\db\Migration;


class m190105_223213_tablo extends Migration
{
    /**
     * {@inheritdoc}
     */

    
    
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $TABLE_NAME = 'sss';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'category' => $this->string(20)->notNull(),
            'question' => $this->text()->notNull(),
            'answer' => $this->text()->notNull()

        ], $tableOptions);



        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'usersss';
        $this->createTable($TABLE_NAME, [
            'id' => $this->primaryKey(),
            'question' => $this->text()->notNull(),
            'email' => $this->text()->notNull()
        ], $tableOptions);


    }

    public function down()
    {
         $TABLE_NAME = 'sss';
        $this->dropTable($TABLE_NAME);


        $TABLE_NAME = 'usersss';
        $this->dropTable($TABLE_NAME);
    }
    
}
