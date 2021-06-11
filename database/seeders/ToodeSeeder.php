<?php

namespace Database\Seeders;

use App\Models\Toode;
use Illuminate\Database\Seeder;

class ToodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Toode::factory(9)->create();

    }
}
