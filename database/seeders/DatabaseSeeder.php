<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'guru',
               'name'=>'Akun Guru',
               'email'=>'guru@example.com',
                'role'=>'guru',
               'password'=> bcrypt('Guru1_'),
            ],
            [
                'username' => 'siswa',
               'name'=>'Akun Siswa',
               'email'=>'siswa@example.com',
                'role'=>'siswa',
               'password'=> bcrypt('S1sw4_'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
