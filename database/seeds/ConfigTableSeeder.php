<?php

use App\Shop\Configurations\Configuration as Configuration;
use App\Shop\Couriers\Courier;
use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    public function run()
    {
        factory(Configuration::class)->create([
            'is_open' => 1
        ]);
    }
}