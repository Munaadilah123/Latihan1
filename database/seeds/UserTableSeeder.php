<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('users')->insert([
                'name' => 'muna',
                'email' => 'munaadilah123@gmail.com',
                'password' => bcrypt('abcdefg'),
            ]);
        
    }
}
