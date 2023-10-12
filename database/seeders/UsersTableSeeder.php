<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('superadmin'),
            'role' => 'SSR',
            'account_type' => 'Credit',
            'date_of_birth' => '0001-01-01',
            'currency' => 'MYR',
            'time_zone' => now(),
            'credit_limit' => 0,
            'used_credit' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
