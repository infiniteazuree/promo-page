<?php

use Illuminate\Database\Seeder;

class OddsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('odds')->insert([
            'odds' => '[0.3,0.25,0.2,0.1,0.07,0.05,0.02,0.01]',
        ]);
    }
}
