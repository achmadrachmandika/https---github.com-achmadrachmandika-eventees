<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'nip' => '2041720125',
            'email' => 'admineventees@gmail.com',
            'password' => bcrypt('eventeesjaya123'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'nip' => 'NIP',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('dosen123'),
        ]);

        $user->assignRole('user');
    }
}
