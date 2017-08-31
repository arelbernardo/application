<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('Asia/Manila');
        DB::table('module')->truncate();
        DB::table('module')->insert([
            [
                'name' => 'Budget & Finance',
                'description' => 'Budget & Finance for managing your expenses monthly.',
                'url' => '/app/finance',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Notes',
                'description' => 'Take down every notes that you want.',
                'url' => '/app/notes',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
