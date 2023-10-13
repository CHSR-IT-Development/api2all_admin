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
            'name' => 'ptn777',
            'email' => 'admin@admin.com',
            'password' => Hash::make('superadmin'),
            'role' => 'SSR',
            'account_type' => 'Credit',
            'date_of_birth' => '1995-01-01',
            'currency' => 'MYR',
            'time_zone' => now(),
            'credit_limit' => 0,
            'used_credit' => 0,
            'key' => '4EE1E150-FB37-44E8-B788-4015F2845298',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
