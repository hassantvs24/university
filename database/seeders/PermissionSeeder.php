<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        // create permissions
        Permission::create(['name' => 'Edit']);
        Permission::create(['name' => 'Delete']);
        Permission::create(['name' => 'Create']);
        Permission::create(['name' => 'View']);

        $role = Role::create(['name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());
    }
}
