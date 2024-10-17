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

        $dosen = User::create([
            'name' => 'Dosen',
            'nip' => 'NIP',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('dosen123'),
        ]);

        $dosen->assignRole('dosen');

         $mahasiswa = User::create([
            'name' => 'Mahasiswa',
            'nip' => 'nim',
            'email' => 'mahasiswa@gmail.com',
            'password' => bcrypt('mahasiswa123'),
        ]);

        $mahasiswa->assignRole('mahasiswa');
    }
}
