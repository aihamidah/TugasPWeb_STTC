<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'name' => 'Adzril eskom',
            'nidn' => '1022200000',
            'program_studi' => 'teknik kehutanan',
            'email' => 'adzrillasu@gmail.com',
            'phone' => '10234249104',
            'address' => 'afrika'
        ]);
    }
}
