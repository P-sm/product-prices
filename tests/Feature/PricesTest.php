<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Currency;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PricesTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed(\Database\Seeders\CurrencySeeder::class);
        $this->seed(\Database\Seeders\ProductSeeder::class);
    }

    public function test_get_prices_with_currency_conversion()
    {
        $response = $this->json('GET', '/api/prices/USD');
        $response->assertStatus(200);
        foreach ($response->decodeResponseJson()['data'] as $item) {
            $this->assertStringContainsString('$', $item['price']); // Проверяем форматированную цену
        }
    }
}