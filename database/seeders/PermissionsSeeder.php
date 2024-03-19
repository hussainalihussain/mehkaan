<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            [
                'name'       => 'view dashboard',
                'guard_name' => 'web',
            ],
            [
                'name'       => 'view users',
                'guard_name' => 'web',
            ],
            [
                'name'       => 'view roles',
                'guard_name' => 'web',
            ],
            [
                'name'       => 'view permissions',
                'guard_name' => 'web',
            ],
            [
                'name'       => 'view logs',
                'guard_name' => 'web',
            ],
            [
                'name'       => 'view settings',
                'guard_name' => 'web',
            ],
        ]);
    }
}
