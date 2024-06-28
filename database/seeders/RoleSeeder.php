<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Pastikan role 'User' belum ada sebelumnya
        $role = Role::where('name', 'User')->first();

        if (!$role) {
            Role::create(['name' => 'User']);
            $this->command->info('Role User berhasil ditambahkan.');
        } else {
            $this->command->info('Role User sudah ada.');
        }
    }
}
