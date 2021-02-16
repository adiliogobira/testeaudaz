<?php

use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($op = 0; $op <= 5; $op++) {
            $data[]['name'] = "OP{$op}";
        }
        \Illuminate\Support\Facades\DB::table("operators")->insert($data);
    }
}
