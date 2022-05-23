<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        $createPost = Permission::create([
            'name' => 'read',
            'display_name' => 'Read',
            'description' => 'Read Data',
            ]);

            $editUser = Permission::create([
            'name' => 'write',
            'display_name' => 'Write',
            'description' => 'Write Data',
            ]);
            $editUser = Permission::create([
            'name' => 'delete',
            'display_name' => 'Delete',
            'description' => 'Delete Date',
            ]);
    }
}
