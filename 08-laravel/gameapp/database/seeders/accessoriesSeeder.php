<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accessories;

class accessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessories = new Accessories;
        $accessories->name = "Bolsos";
        $accessories->image = "Bolsos";
        $accessories->save();

        $accessories = new Accessories;
        $accessories->name = "Tacones";
        $accessories->image = "Tacones";
        $accessories->save();

        $accessories = new Accessories;
        $accessories->name = "Maquillaje";
        $accessories->image = "Maquillaje";
        $accessories->save();
    }
}
