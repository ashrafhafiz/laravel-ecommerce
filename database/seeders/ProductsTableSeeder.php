<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();

        DB::table('products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Nike Air Force 1',
                'slug' => 'nike-air-force-1',
                'description' => 'Nike Air Force 1 Description',
                'price' => 5000,
                'live_at' => '2022-04-17 12:42:16',
                'created_at' => '2022-04-17 12:42:16',
                'updated_at' => '2022-04-17 12:42:16',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
