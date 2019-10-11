<?php

use Illuminate\Database\Seeder;

class KatagoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katagori')->insert([
            'name' => 'kamar',
            'barang' => 'kasur',
        ]);
    }
}
