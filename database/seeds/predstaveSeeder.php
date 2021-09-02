<?php

use Illuminate\Database\Seeder;

class predstaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('predstavas')->insert([
            'ime'=>'Kad su cvetale tikve',
            'datum'=>'23.10.2021',
            'zanr'=>'Drama',
            'pozoriste_id'=>3
            

        ]);
    }
}
