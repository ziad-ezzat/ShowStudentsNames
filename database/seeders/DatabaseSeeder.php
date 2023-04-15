<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        students::factory(100)->create();
    }
}
