<?php

use yii\db\Migration;

class m160511_065051_seed_data extends Migration
{
    public function up()
    {
        $this->batchInsert(
            '{{%product_category}}',
            ['id', 'title', 'slug', 'parent_id', 'thumbnail_base_url','thumbnail_path','status','created_at','updated_at'],
            [
                [1, 'ASAGI', 'asagi',null,'stogares','category/asagi.png',1, time(),time()],
                [2, 'IBUKI', 'ibuki',null,'stogares','category/ibuki.png',1, time(),time()],
                [3, 'RT 33', 'rt-33',null,'stogares','category/rt_33.png',1, time(),time()],
            ]
        );
        $this->batchInsert(
            '{{%product_master}}',
            ['id', 'title', 'slug', 'short_description','thumbnail_base_url','thumbnail_path','category_id','price','quantity','status','published_at','updated_at'],
            [
                [1, 'ASAGI CLEGANT', 'asagi-clegant','some description','stogares','product/asagi_clegant_flatblack.png',1,27000,100,1,time(),time()],
                [2, 'IBUKI ENVOY', 'ibuki-envoy','','stogares','product/ibuki_envoy_flatblack.png',2,53000,100,1,time(),time()],
                [3, 'IBUKI', 'ibuki','some description','stogares','product/ibuki_blackmetallic.png',2,47000,100,1,time(),time()],
                [4, 'RT - 33 DAISAKU', 'rt-33-daisaku','some description','stogares','product/rt33_daisaku_blue.png',3,43000,100,1,time(),time()],
                [5, 'RT - 33 RAPID', 'rt-33-rapid','some description','stogares','product/rt33_rapid_flatblacksilver.png',3,42000,100,1,time(),time()],
                [6, 'RT - 33', 'rt-33','some description','stogares','product/rt33_blackmetalic.png',3,36000,100,1,time(),time()],
            ]
        );

        //local image :: web/stogares/product
        $this->batchInsert(
            '{{%product_color}}',
            ['id', 'product_id', 'code', 'base_url','path','status','created_at','updated_at'],
            [
                // product ASAGI CLEGANT :: id = 1
                [1, 1, 'Flatblack','stogares','product/asagi_clegant_flatblack.png',1,time(),time()],
                [2, 1, 'Pearlwhite','stogares','product/asagi_clegant_pearlwhite.png',1,time(),time()],
                // product IBUKI ENVOY :: id = 2
                [3, 2, 'Flatblack','stogares','product/ibuki_envoy_flatblack.png',1,time(),time()],
                [4, 2, 'Pearlwhite','stogares','product/ibuki_envoy_pearlwhite.png',1,time(),time()],
                // product IBUKI :: id = 3
                [5, 3, 'Blackmetallic','stogares','product/ibuki_blackmetallic.png',1,time(),time()],
                [6, 3, 'Flatblack','stogares','product/ibuki_flatblack.png',1,time(),time()],
                [7, 3, 'Pearlwhite','stogares','product/ibuki_pearlwhite.png',1,time(),time()],
                [8, 3, 'Shinyred','stogares','product/ibuki_shinyred.png',1,time(),time()],
                [9, 3, 'Royalgunmetal','stogares','product/ibuki_royalgunmetal.png',1,time(),time()],
                // product RT - 33 DAISAKU :: id = 4
                [10, 4, 'Blue','stogares','product/rt33_daisaku_blue.png',1,time(),time()],
                // product RT - 33 RAPID :: id = 5
                [11, 5, 'Flatblacksilver','stogares','product/rt33_rapid_flatblacksilver.png',1,time(),time()],
                [12, 5, 'Tricolor','stogares','product/rt33_rapid_tricolor.png',1,time(),time()],
                // product RT - 33 :: id = 6
                [13, 6, 'Blackmetalic','stogares','product/rt33_blackmetalic.png',1,time(),time()],
                [14, 6, 'Flatblack','stogares','product/rt33_flatblack.png',1,time(),time()],
                [15, 6, 'Red','stogares','product/rt33_red.png',1,time(),time()],
                [16, 6, 'Whitemetalic','stogares','product/rt33_whitemetalic.png',1,time(),time()],
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
            'id' => [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]
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
