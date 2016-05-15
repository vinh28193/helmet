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

        //local image :: web/stogares/product
        $this->batchInsert(
            '{{%product_color}}',
            ['id', 'product_id', 'code', 'base_url','path','status','created_at','updated_at'],
            [
                // product ASAGI CLEGANT :: id = 1
                [1, 1, 'FF0000','stogares','product/asagi_waikestabilizer.png',1,time(),time()],
                [2, 1, '00FF00','stogares','product/asagi_waikestabilizer.png',1,time(),time()],
                [3, 1, '0000FF','stogares','product/asagi_waikestabilizer.png',1,time(),time()],
                // product IBUKI ENVOY :: id = 2
                [4, 2, 'FF0000','stogares','product/ibuki_blackmetallic.png',1,time(),time()],
                [5, 2, '00FF00','stogares','product/ibuki_blackmetallic.png',1,time(),time()],
                [6, 2, '0000FF','stogares','product/ibuki_blackmetallic.png',1,time(),time()],
                // product IBUKI :: id = 3
                [7, 3, 'FF0000','stogares','product/ibuki_chinopen_img_sun_close.png',1,time(),time()],
                [8, 3, '00FF00','stogares','product/ibuki_chinopen_img_sun_close.png',1,time(),time()],
                [9, 3, '0000FF','stogares','product/ibuki_chinopen_img_sun_close.png',1,time(),time()],
                // product TR - 33 DAISAKU :: id = 4
                [10, 4, 'FF0000','stogares','product/rt33_whitemetalic50.png',1,time(),time()],
                [11, 4, '00FF00','stogares','product/rt33_whitemetalic50.png',1,time(),time()],
                [12, 4, '0000FF','stogares','product/rt33_whitemetalic50.png',1,time(),time()],
                // product TR - 33 RAPID :: id = 5
                [13, 5, 'FF0000','stogares','product/kazami_fblue_black.png',1,time(),time()],
                [14, 5, '00FF00','stogares','product/kazami_sred_fblack.png',1,time(),time()],
                [15, 5, '0000FF','stogares','product/kazami_whitem_fblack.png',1,time(),time()],
                // product TR - 33 :: id = 6
                [16, 6, 'FF0000','stogares','product/kamui2_img_wakestavi2.png',1,time(),time()],
                [17, 6, '00FF00','stogares','product/kamui2_img_wakestavi2.png',1,time(),time()],
                [18, 5, '0000FF','stogares','product/kazami_fblack.png',1,time(),time()],
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
        $this->delete('product_color',[
            'id' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18]
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
