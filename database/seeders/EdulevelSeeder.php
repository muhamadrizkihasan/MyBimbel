<?php

namespace Database\Seeders;

use App\Models\Edulevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Edulevel::create([
                'name' => 'SMP',
                'desc' => 'SMP / MTS',
        ]);
        Edulevel::create([
                'name' => 'SMK',
                'desc' => 'SMK / SMA',
        ]);
    }
}
