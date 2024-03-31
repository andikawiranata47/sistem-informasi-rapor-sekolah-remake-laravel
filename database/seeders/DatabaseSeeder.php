<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use App\Models\MataPelajaran;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();
        Siswa::factory(1080)->create();
        Kelas::factory(36)->create();
        MataPelajaran::factory(25)->create();


        // User::create([
        //     'email' => 'a@email.com', 
        //     'password' => '123', 
        //     'nama' => 'andika', 
        //     'nip' => '123456',
        //     'akses' => 'guru mata pelajaran',
        //     'ttd' => 'a.jpg'
        // ]);

        // User::create([
        //     'email' => 'b@email.com', 
        //     'password' => '123', 
        //     'nama' => 'wiranata', 
        //     'nip' => '567890',
        //     'akses' => 'guru mata pelajaran',
        //     'ttd' => 'b.jpg'
        // ]);

        // User::create([
        //     'email' => 'c@email.com', 
        //     'password' => '123', 
        //     'nama' => 'wiranata', 
        //     'nip' => '567890',
        //     'akses' => 'guru mata pelajaran',
        //     'ttd' => 'b.jpg'
        // ]);

        // User::create([
        //     'email' => 'd@email.com', 
        //     'password' => '123', 
        //     'nama' => 'wiranata', 
        //     'nip' => '567890',
        //     'akses' => 'guru mata pelajaran',
        //     'ttd' => 'b.jpg'
        // ]);

        // Kelas::create([
        //     'user_id' => 3,
        //     'tingkat' => 10,
        //     'jurusan' => 'TKR',
        //     'abjad' => 'A'
        // ]);

        // Kelas::create([
        //     'user_id' => 4,
        //     'tingkat' => 11,
        //     'jurusan' => 'TKR',
        //     'abjad' => 'B'
        // ]);

        // Kelas::create([
        //     'user_id' => 1,
        //     'tingkat' => 11,
        //     'jurusan' => 'TKR',
        //     'abjad' => 'B'
        // ]);

        // Kelas::create([
        //     'user_id' => 2,
        //     'tingkat' => 11,
        //     'jurusan' => 'TKR',
        //     'abjad' => 'B'
        // ]);

        // MataPelajaran::create([
        //     'mata_pelajaran' => 'bahasa indonesia',
        //     'kelompok' => 'B'
        // ]);

        // MataPelajaran::create([
        //     'mata_pelajaran' => 'matematika',
        //     'kelompok' => 'A'
        // ]);

        // Siswa::create([
        //     'nis' => '111',
        //     'nisn' => '10001',
        //     'kelas_id' => 2,
        //     'nama' => 'dika',
        //     'fase' => 'E'
        // ]);

        // Siswa::create([
        //     'nis' => '112',
        //     'nisn' => '10002',
        //     'kelas_id' => 4,
        //     'nama' => 'wira',
        //     'fase' => 'F'
        // ]);

        // Siswa::create([
        //     'nis' => '113',
        //     'nisn' => '10003',
        //     'kelas_id' => 3,
        //     'nama' => 'wira',
        //     'fase' => 'F'
        // ]);

        // Siswa::create([
        //     'nis' => '114',
        //     'nisn' => '10004',
        //     'kelas_id' => 1,
        //     'nama' => 'wira',
        //     'fase' => 'F'
        // ]);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
