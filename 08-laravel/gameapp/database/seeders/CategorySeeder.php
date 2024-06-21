<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Nintendo Switch',
            'manufacturer' => 'Nintendo',
            'releasedate' => '2017-03-03',
            'description' => 'Lorem Ipsim dolor sit amet'
        ]); 

        $cat = new Category;
        $cat -> name = 'xbox series X';
        $cat -> manufacturer = 'Microsoft';
        $cat -> releasedate = '2020-11-10';
        $cat -> description = 'Lorem Ipsum dolor sit ame';
        $cat -> save();

        $cat = new Category;
        $cat -> name = 'xbox series S';
        $cat -> manufacturer = 'Microsoft';
        $cat -> releasedate = '2020-11-10';
        $cat -> description = 'Lorem Ipsum dolor sit ame';
        $cat -> save();

        $cat = new Category;
        $cat -> name = 'xbox series 5';
        $cat -> manufacturer = 'Microsoft';
        $cat -> releasedate = '2020-11-12';
        $cat -> description = 'Lorem Ipsum dolor sit ame';
        $cat -> save();
    }
}
