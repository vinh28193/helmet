<?php

use yii\db\Migration;

class m160428_064554_products extends Migration
{
    public function up()
    {
    	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%product_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512)->notNull(),
            'slug' => $this->string(1024)->notNull(),
            'parent_id' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%product_master}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512)->notNull(),
            'slug' => $this->string(1024)->notNull(),
            'body' => $this->text()->notNull(),
            'view' => $this->string(),
            'short_description' => $this->string(1024),
            'description' => $this->text(),
            'thumbnail_base_url' => $this->string(1024),
            'thumbnail_path' => $this->string(1024),
            'category_id' => $this->integer(),
            'author_id' => $this->integer(),
            'updater_id' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'published_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%product_component}}', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'title' => $this->string(512)->notNull(),
            'short_description' => $this->string(1024),
            'description' => $this->text(),
            'style' => $this->integer(),
            'base_url' => $this->string(),
            'path' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addForeignKey('fk_product_product_component', '{{%product_component}}', 'product_id', '{{%product_master}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_product_author', '{{%product_master}}', 'author_id', '{{%user}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_product_updater', '{{%product_master}}', 'updater_id', '{{%user}}', 'id', 'set null', 'cascade');
        $this->addForeignKey('fk_product_category', '{{%product_master}}', 'category_id', '{{%product_category}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_product_category_section', '{{%product_category}}', 'parent_id', '{{%product_category}}', 'id', 'cascade', 'cascade');


    }

    public function down()
    {
       $this->dropForeignKey('fk_product_product_component', '{{%product_component}}');
        $this->dropForeignKey('fk_product_author', '{{%product_master}}');
        $this->dropForeignKey('fk_product_updater', '{{%product_master}}');
        $this->dropForeignKey('fk_product_category', '{{%product_master}}');
        $this->dropForeignKey('fk_product_category_section', '{{%product_category}}');

        $this->dropTable('{{%product_component}}');
        $this->dropTable('{{%product_master}}');
        $this->dropTable('{{%product_category}}');
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
