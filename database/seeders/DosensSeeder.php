<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Log::info('Running DosensSeeder...');

        DB::table('dosens')->insert([
            [
                'name' => 'Adzril eskom',
                'nidn' => '1022200000',
                'program_studi' => 'teknik kehutanan',
                'email' => 'adzrillasu@gmail.com',
                'phone' => '10234249104',
                'address' => 'afrika'
            ],
            [
                'name' => 'reza eskom',
                'nidn' => '102220000',
                'program_studi' => 'teknik kelautan',
                'email' => 'rezaasu@gmail.com',
                'phone' => '10234249104',
                'address' => 'afrika'
            ]
        ]);

        Log::info('DosensSeeder completed!');
    }
}
