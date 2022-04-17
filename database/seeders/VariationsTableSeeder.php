<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('variations')->truncate();

        DB::table('variations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'product_id' => 1,
                'title' => 'Black',
                'price' => 9000,
                'type' => 'color',
                'sku' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2022-04-17 12:45:43',
                'updated_at' => '2022-04-17 12:45:43',
            ),
            1 =>
            array (
                'id' => 2,
                'product_id' => 1,
                'title' => 'White',
                'price' => 9000,
                'type' => 'color',
                'sku' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2022-04-17 12:45:43',
                'updated_at' => '2022-04-17 12:45:43',
            ),
            2 =>
            array (
                'id' => 3,
                'product_id' => 1,
                'title' => '8',
                'price' => 9000,
                'type' => 'size',
                'sku' => 'abc',
                'parent_id' => 1,
                'order' => 1,
                'created_at' => '2022-04-17 12:47:34',
                'updated_at' => '2022-04-17 12:47:34',
            ),
            3 =>
            array (
                'id' => 4,
                'product_id' => 1,
                'title' => '9',
                'price' => 9000,
                'type' => 'size',
                'sku' => 'def',
                'parent_id' => 1,
                'order' => 2,
                'created_at' => '2022-04-17 12:47:34',
                'updated_at' => '2022-04-17 12:47:34',
            ),
            4 =>
            array (
                'id' => 5,
                'product_id' => 1,
                'title' => '8',
                'price' => 9000,
                'type' => 'size',
                'sku' => 'ghi',
                'parent_id' => 2,
                'order' => 1,
                'created_at' => '2022-04-17 12:48:45',
                'updated_at' => '2022-04-17 12:48:45',
            ),
            5 =>
            array (
                'id' => 6,
                'product_id' => 1,
                'title' => '9',
                'price' => 9000,
                'type' => 'size',
                'sku' => 'jkl',
                'parent_id' => 2,
                'order' => 2,
                'created_at' => '2022-04-17 12:48:45',
                'updated_at' => '2022-04-17 12:48:45',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
