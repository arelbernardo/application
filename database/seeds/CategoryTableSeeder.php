<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();
        DB::table('category')->insert([
            [
                'name' => 'Personal',
                'description' => 'Personal',
                'created_at' => Carbon::now('Asia/Manila')
            ],
            [
                'name' => 'Social',
                'description' => 'Social',
                'created_at' => Carbon::now('Asia/Manila')
            ],
            [
                'name' => 'Work',
                'description' => 'Work',
                'created_at' => Carbon::now('Asia/Manila')
            ],
            [
                'name' => 'Family',
                'description' => 'Family',
                'created_at' => Carbon::now('Asia/Manila')
            ]
        ]);
    }
}
