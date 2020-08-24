<?php

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
        $param =[
            'name' => 'taro',
            'mail' => 'taro@yamead.jp',
            'age' => 11,
        ];
        DB::table('people')->insert($param);

        $param =[
            'name' => 'hanek',
            'mail' => 'jfa@yamead.jp',
            'age' => 22,
        ];
        DB::table('people')->insert($param);
        $param =[
            'name' => 'jfapfj',
            'mail' => 'fjfj@yamead.jp',
            'age' => 21,
        ];
        DB::table('people')->insert($param);
    }
}
