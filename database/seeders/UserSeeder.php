<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Sekolah',
                'email' => 'admin@sekolah.test',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'kelas_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Guru Matematika',
                'email' => 'guru@sekolah.test',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'kelas_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siswa Andi',
                'email' => '1234567890', // bisa NISN
                'password' => Hash::make('siswa123'),
                'role' => 'siswa',
                'kelas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Orang Tua Andi',
                'email' => 'ortu@sekolah.test',
                'password' => Hash::make('ortu123'),
                'role' => 'ortu',
                'kelas_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
