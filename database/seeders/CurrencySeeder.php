<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'United States Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'symbol_position' => 'left',
                'rate' => '1.00',
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'symbol_position' => 'left',
                'rate' => '0.95',
            ],
            [
                'name' => 'British Pound Sterling',
                'code' => 'GBP',
                'symbol' => '£',
                'symbol_position' => 'left',
                'rate' => '0.82',
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
