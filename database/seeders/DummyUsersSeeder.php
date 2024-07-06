<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ketua Prodi',
                'email' => 'ketuaprodi411@gmail.com',
                'role' => 'ketua_prodi',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Staf Prodi',
                'email' => 'stafprodi411@gmail.com',
                'role' => 'staf',
                'password' => Hash::make('12345678')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
