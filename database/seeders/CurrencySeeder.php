<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::insert([
            ['code' => 'RUB', 'rate' => 1,   'format' => '%d ₽'],
            ['code' => 'USD', 'rate' => 90, 'format' => '$%.2f'],
            ['code' => 'EUR', 'rate' => 100,'format' => '€%.2f'],
        ]);
    }
}
