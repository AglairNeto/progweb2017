<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'id_curso' => 'integer NOT NULL  REFERENCES curso(id)',

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%curso}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(45)->notNull()->unique(),
            'sigla' => $this->string(4)->notNull(),
            'descricao' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%jogada}}', [
            'id' => $this->primaryKey(),
            'id_user' => 'integer NOT NULL  REFERENCES user(id)',
            'pontuacao' => $this->integer()->notNull(),
            'data_hora' => $this->string(45)->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%curso}}');
        $this->dropTable('{{%jogada}}');
    }
}