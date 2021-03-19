<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['id' => 1],
            [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678'),
                'user_type' => 'Admin',
                'enroll' => 'Manual'
            ]);
    }
}
