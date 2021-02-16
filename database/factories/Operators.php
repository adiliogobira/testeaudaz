<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Operator;
use Faker\Generator as Faker;

$factory->define(Operator::class, function (Faker $faker) {
    $data = [];
    for ($op = 0; $op <= 5; $op++) {
        $data[]['name'] = "OP{$op}";
    }
    return [
        $data
    ];
});
