<?php

use yii\db\Migration;

class m160511_065051_seed_data extends Migration
{
    public function up()
    {
        $this->batchInsert(
            '{{%product_category}}',
            ['id', 'title', 'slug', 'parent_id', 'status','created_at','updated_at'],
            [
                [1, 'ASAGI', 'asagi', null,1, time(),time()],
                [2, 'IBUKI', 'ibuki', null,1, time(),time()],
                [3, 'RT 33', 'rt-33', null,1, time(),time()],
            ]
        );
        $this->batchInsert(
            '{{%product_master}}',
            ['id', 'title', 'slug', 'short_description','category_id','price','quantity','status','published_at','updated_at'],
            [
                [1, 'ASAGI CLEGANT', 'asagi-clegant','some description',1,27000,100,1,time(),time()],
                [2, 'IBUKI ENVOY', 'ibuki-envoy','some description',2,53000,100,1,time(),time()],
                [3, 'IBUKI', 'ibuki-envoy','some description',2,47000,100,1,time(),time()],
                [4, 'TR - 33 DAISAKU', 'rt-33-daisaku','some description',3,43000,100,1,time(),time()],
                [5, 'TR - 33 RAPID', 'rt-33-rapid','some description',3,42000,100,1,time(),time()],
                [6, 'TR - 33', 'rt-33','some description',3,36000,100,1,time(),time()],
            ]
        );
    }

    public function down()
    {
        $this->delete('product_master',[
            'id' => [1,2,3,4,5,6]
            ]);
        $this->delete('product_category',[
            'id' => [1,2,3]
            ]);
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
