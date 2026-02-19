<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // AKUN ADMIN
        // URL Login : http://localhost:8000/admin/login
        // Email     : admin@pabrikonline.id
        // Password  : admin123
        // ============================================
        User::firstOrCreate(
            ['email' => 'admin@pabrikonline.id'],
            [
                'name'              => 'Super Admin',
                'password'          => bcrypt('admin123'),
                'role'              => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // ============================================
        // AKUN USER BIASA
        // Email     : user@pabrikonline.id
        // Password  : user123
        // ============================================
        User::firstOrCreate(
            ['email' => 'user@pabrikonline.id'],
            [
                'name'              => 'User Demo',
                'password'          => bcrypt('user123'),
                'role'              => 'user',
                'email_verified_at' => now(),
            ]
        );
    }
}
