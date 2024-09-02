<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Using ORM Eloquent
        $user =new User;
        $user ->document  = 75000001;
        $user ->fullname  = 'John Wick';
        $user ->gender    = 'Male';
        $user ->birthdate = '1988-10-07';
        $user ->phone     = '3100000001';
        $user ->email     = 'jhonwick@gmail.com';
        $user ->password  = bcrypt('admin');
        $user ->role      = 'Administrator';
        $user ->save();

        $user =new User;
        $user ->document  = 75000002;
        $user ->fullname  = 'Laura Blanco';
        $user ->gender    = 'Female';
        $user ->birthdate = '1988-10-07';
        $user ->phone     = '3137960439';
        $user ->email     = 'lauravblanco93@gmail.com';
        $user ->password  = bcrypt('admin');
        $user ->role      = 'Administrator';
        $user ->save();

        //Using db Array
        DB::table('users')->insert([
            'document' => 75000003,
            'fullname' => 'Alanis Morrisete',
            'gender' => 'Female',
            'birthdate' => '1970-05-10',
            'phone' => '31000000003',
            'email' => 'alanism@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'customer',
            'created_at'=> now(),
            'updated_at' =>now()

        ]);





    }
}
