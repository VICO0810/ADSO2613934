<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\outfit;

class outfitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outfits')->insert([
            'name' => 'Casual',
            'image' => 'casual.jpg',
            'description' => 'Description',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('outfits')->insert([
            'name' => 'universidad',
            'image' => 'universidad.jpg',
            'description' => 'Description',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('outfits')->insert([
            'name' => 'oficina',
            'image' => 'oficina.jpg',
            'description' => 'Description',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
