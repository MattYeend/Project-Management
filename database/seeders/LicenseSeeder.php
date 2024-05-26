<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('licenses')->insert([
            [
                'name' => 'Free Trail',
                'type' => 'Free',
                'price' => 0.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bronze License',
                'type' => 'Bronze',
                'price' => 95.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Silver License',
                'type' => 'Silver',
                'price' => 195.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Gold License',
                'type' => 'Gold',
                'price' => 295.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Platinum License',
                'type' => 'Platinum',
                'price' => 395.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
