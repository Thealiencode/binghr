<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();


        // This seeder creates dummy data to be displayed on the table

        User::create([
                    'employee_id' => '1001',
                    'firstname' => 'David',
                    'lastname' => 'Wagnar',
                    'phone' => '737382892982',
                    'username'  => 'david',
                    'profile_picture' => 'user_1.png',
                    'email' => 'david_wagnar@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('super_admin');

            User::create([

                    'employee_id' => '1002',
                    'firstname' => 'Ina',
                    'lastname' => 'hogan',
                    'phone' => '744382892982',
                    'username'  => 'Ina',
                    'profile_picture' => 'user_2.png',
                    'email' => 'ina_hogan@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('admin');

            User::create([

                    'employee_id' => '1003',
                    'firstname' => 'Devin',
                    'lastname' => 'Hamon',
                    'phone' => '347382892982',
                    'username'  => 'devin',
                    'profile_picture' => 'user_3.png',
                    'email' => 'devinhamon@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('hr');
            User::create([

                    'employee_id' => '1004',
                    'firstname' => 'Lena',
                    'lastname' => 'page',
                    'phone' => '7373828322982',
                    'username'  => 'lena',
                    'profile_picture' => 'user_4.png',
                    'email' => 'lena_page@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('employee');
            User::create([

                    'employee_id' => '1005',
                    'firstname' => 'Eula',
                    'lastname' => 'Hornon',
                    'phone' => '737382892982',
                    'username'  => 'Eula',
                    'profile_picture' => 'user_5.png',
                    'email' => 'eula_honon@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('super_admin');

            User::create([

                    'employee_id' => '1006',
                    'firstname' => 'Victoria',
                    'lastname' => 'perex',
                    'phone' => '737382892982',
                    'username'  => 'victoria',
                    'profile_picture' => 'user_6.png',
                    'email' => 'victoria_perex@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('hr');

            User::create([

                    'employee_id' => '1007',
                    'firstname' => 'cora',
                    'lastname' => 'Median',
                    'phone' => '737382892982',
                    'username'  => 'cora',
                    'profile_picture' => 'user_7.png',
                    'email' => 'cora_median@example.com',
                    'password' => Hash::make('golden'),
            ])->attachRole('employee');

    }
}
