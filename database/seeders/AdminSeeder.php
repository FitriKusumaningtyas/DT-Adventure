<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk data admin.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Admin DT Adventure',
            'email' => 'dt_adventure@gmail.com',
            'password' => Hash::make('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
