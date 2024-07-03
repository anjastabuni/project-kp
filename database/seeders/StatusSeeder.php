<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['id_status' => 'ACC', 'status' => 'Accepted', 'keterangan' => 'Proposal diterima dan Disetujui'],
            ['id_status' => 'INP', 'status' => 'In Progress', 'keterangan' => 'Proposal dalam proses'],

        ]);
    }
}
