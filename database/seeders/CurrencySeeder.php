<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currencies = [
            ['name' => 'Saudi Riyal', 'code' => 'SAR', 'symbol' => '﷼', 'description' => 'Saudi Riyal', 'is_default' => true],
        ];

        foreach ($currencies as $currency) {
            Currency::firstOrCreate(
                ['code' => $currency['code'], 'name' => $currency['name']],
                $currency
            );
        }
    }
}
