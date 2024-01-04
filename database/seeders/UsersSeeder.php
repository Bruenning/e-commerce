<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Users::factory()->create([
            'id' => '0',
            'login' => 'admin',
            'password' => hash('sha256', 'admin', false),
            'name' => 'Administrador',
            'company_id' => '0',
            'email' => 'admin@admin.com'            
        ]);
        Users::factory(10)->create();
    }
}
