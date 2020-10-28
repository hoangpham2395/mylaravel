<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'email' => 'admin@gmail.com',
            'name' => 'Administrator',
            'password' => Hash::make('admin123'),
            'role_type' => 0,
            'created_at' => Carbon::now(),
        ]);
    }
}
