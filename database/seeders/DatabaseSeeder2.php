<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder2 extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'guru1',
               'name'=>'Akun Guru1',
               'email'=>'guru1@example.com',
                'role'=>'guru',
               'password'=> 'Guru1_',
            ],
            [
                'username' => 'siswa1',
               'name'=>'Akun Siswa1',
               'email'=>'siswa1@example.com',
                'role'=>'siswa',
               'password'=> 'S1sw4_',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
