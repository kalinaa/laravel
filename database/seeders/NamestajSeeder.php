<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Namestaj;

class NamestajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Namestaj::factory()->count(20)->create();
    }
}
