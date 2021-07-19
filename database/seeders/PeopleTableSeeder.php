<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'age' => '10'
        ];
        DB::table('people')->insert($param);
        $param=[
            'name' => 'jiro',
            'age' => '20'
        ];
        DB::table('people')->insert($param);
        $param=[
            'name' => 'saburo',
            'age' => '30'
        ];
        DB::table('people')->insert($param);
    }
}
