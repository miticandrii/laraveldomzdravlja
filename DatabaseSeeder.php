<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DomZdravljaSeeder;
use Database\Seeders\LekarSeeder;
use Database\Seeders\PacijentSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ds = new DomZdravljaSeeder();
        $ls = new LekarSeeder();
        $ps = new PacijentSeeder();

        $ds->run();
        $ls->run();
        $ps->run();

    }
}
