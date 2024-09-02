<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Nini Supiarti',
            'email' => 'ninisupiarti534@gmail.com',
            'level' => "Super Admin",
            'password' => bcrypt(12341234),
        ]);

        Admin::factory()->create([
            'name' => 'Super Administrator',
            'email' => 'superadmin@gmail.com',
            'level' => "Super Admin",
            'password' => bcrypt(12341234),
        ]);
    }
}
