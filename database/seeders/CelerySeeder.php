<?php

namespace Database\Seeders;

use App\Models\Celery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CelerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Celery::factory(200)->create();
    }
}
