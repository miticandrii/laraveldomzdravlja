<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DomZdravlja;

class DomZdravljaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DomZdravlja::factory()->count(25)->create();
    }
}
