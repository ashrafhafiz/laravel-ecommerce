<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Brands',
                'slug' => 'brands',
                'parent_id' => NULL,
                'created_at' => '2022-04-17 09:34:38',
                'updated_at' => '2022-04-17 09:34:38',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Styles',
                'slug' => 'styles',
                'parent_id' => NULL,
                'created_at' => '2022-04-17 09:34:38',
                'updated_at' => '2022-04-17 09:34:38',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Nike',
                'slug' => 'nike',
                'parent_id' => 1,
                'created_at' => '2022-04-17 09:35:44',
                'updated_at' => '2022-04-17 09:35:44',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'New In',
                'slug' => 'new-in',
                'parent_id' => 3,
                'created_at' => '2022-04-17 09:38:15',
                'updated_at' => '2022-04-17 09:38:21',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'Summer',
                'slug' => 'summer',
                'parent_id' => 2,
                'created_at' => '2022-04-17 09:36:18',
                'updated_at' => '2022-04-17 09:36:18',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'Winter',
                'slug' => 'winter',
                'parent_id' => 2,
                'created_at' => '2022-04-17 09:36:18',
                'updated_at' => '2022-04-17 09:36:18',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}
