<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'username' => 'admin',
            'lastName' => 'admin',
            'firstName' => 'first name',
            'email' => 'arelbernardo@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now('Asia/Manila'),
            'updated_at' => Carbon::now('Asia/Manila')
        ]);
    }
}
