<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        \App\Models\User::insert([
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123'),
                'role_id'=>'1',
                'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
