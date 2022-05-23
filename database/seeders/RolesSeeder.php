<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $super_admin = Role::create([
            'name' => 'super_admin',
            'display_name' => 'Super Admin',
            'description' => 'CEO and founder',
            'color'     => 'bg-danger'
        ]);
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'Team Lead',
            'color'     => 'bg-primary'
        ]);
        $hr = Role::create([
            'name' => 'hr',
            'display_name' => 'Hr Admin',
            'description' => 'HR',
            'color'     => 'bg-success'
        ]);
        $employee = Role::create([
            'name' => 'employee',
            'display_name' => 'Employee',
            'description' => 'Web Developer',
            'color'     => 'bg-secondary'
        ]);



        $read = Permission::create([
            'name' => 'read',
            'display_name' => 'Read',
            'description' => 'Read Data',
        ]);

        $write = Permission::create([
            'name' => 'write',
            'display_name' => 'Write',
            'description' => 'Write Data',
        ]);
        $delete = Permission::create([
            'name' => 'delete',
            'display_name' => 'Delete',
            'description' => 'Delete Date',
        ]);



        // Set up roles permission
        $super_admin->attachPermissions([$read, $write, $delete]);
        $admin->attachPermission($read);
        $hr->attachPermissions([$read, $write, $delete]);
        $employee->attachPermission($read);


    }
}
