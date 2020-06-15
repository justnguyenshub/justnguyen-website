<?php

use Illuminate\Database\Seeder;

class images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['img_id' => 1, 'img_path' => './public/post_imgs/88.jpg', 'po_id' => 1],
            ['img_id' => 2, 'img_path' => './public/post_imgs/22.jpg', 'po_id' => 2],
            ['img_id' => 3, 'img_path' => './public/post_imgs/55.jpg', 'po_id' => 3],
            ['img_id' => 4, 'img_path' => './public/post_imgs/77.jpg', 'po_id' => 4],
            ['img_id' => 5, 'img_path' => './public/post_imgs/1.jpg', 'po_id' => null],
            ['img_id' => 6, 'img_path' => './public/post_imgs/2.jpg', 'po_id' => null],
            ['img_id' => 7, 'img_path' => './public/post_imgs/3.jpg', 'po_id' => null],
            ['img_id' => 8, 'img_path' => './public/post_imgs/4.jpg', 'po_id' => null],
            ['img_id' => 9, 'img_path' => './public/post_imgs/5.jpg', 'po_id' => null],
            ['img_id' => 10, 'img_path' => './public/post_imgs/6.jpg', 'po_id' => null],
            ['img_id' => 11, 'img_path' => './public/post_imgs/7.jpg', 'po_id' => null],
            ['img_id' => 12, 'img_path' => './public/post_imgs/8.jpg', 'po_id' => null],
            ['img_id' => 13, 'img_path' => './public/post_imgs/9.jpg', 'po_id' => null],
            ['img_id' => 14, 'img_path' => './public/images/index_cover.jpg', 'po_id' => 5],
            ['img_id' => 15, 'img_path' => './public/images/a.jpg', 'po_id' => 6],
            ['img_id' => 16, 'img_path' => './public/images/index_cover.jpg', 'po_id' => 7],
            ['img_id' => 17, 'img_path' => './public/images/a.jpg', 'po_id' => 8],
        ]);
    }
}
