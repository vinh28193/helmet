<?php

use yii\db\Migration;
use yii\db\Expression;
class m160427_061456_user extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(32),
            'auth_key' => $this->string(32)->notNull(),
            'access_token' => $this->string(40)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'oauth_client' => $this->string(),
            'oauth_client_user_id' => $this->string(),
            'email' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%user_profile}}', [
            'user_id' => $this->primaryKey(),
            'firstname' => $this->string(),
            'middlename' => $this->string(),
            'lastname' => $this->string(),
            'avatar_base_url' => $this->string(),
            'avatar_path' => $this->string(),
            'locale' => $this->string(32)->notNull(),
            'gender' => $this->smallInteger(1)
        ], $tableOptions);

        $this->addForeignKey('fk_user', '{{%user_profile}}', 'user_id', '{{%user}}', 'id', 'cascade', 'cascade');

        $this->insert('{{%user}}', [
            'id' => 1,
            'username' => 'administrator',
            'email' => 'administrator@example.com',
            'password_hash' => Yii::$app->getSecurity()->generatePasswordHash('administrator'),
            'auth_key' => Yii::$app->getSecurity()->generateRandomString(),
            'access_token' => Yii::$app->getSecurity()->generateRandomString(40),
            'status' => 1,
            'created_at' => new Expression('Now()'),
            'updated_at' => new Expression('Now()'),
        ]);
        $this->insert('{{%user_profile}}', [
            'user_id'=>1,
            'locale'=>Yii::$app->sourceLanguage,
            'firstname' => 'Admin',
            'middlename' => '',
            'lastname' => 'Stupid',
            'avatar_base_url' => Yii::getAlias(Yii::$app->params['uploadStogare']),
            'avatar_path' => 'user/default.jpg',
            'locale' => Yii::$app->language,
            'gender' => 1,
        ]);
    }

    public function down()
    {
        $this->delete('{{%user_profile}}', [
            'user_id'=>1
        ]);
        $this->delete('{{%user}}', [
            'id'=>1
        ]);
        $this->dropForeignKey('fk_user', '{{%user_profile}}');
        $this->dropTable('{{%user_profile}}');
        $this->dropTable('{{%user}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
