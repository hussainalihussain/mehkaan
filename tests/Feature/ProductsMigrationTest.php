<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;

class ProductsMigrationTest extends TestCase
{
    protected static $table = 'products';

    protected function setUp(): void
    {
        parent::setUp();

        Artisan::call('migrate:fresh');
    }

    public function test_products_table_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
        // need to check if auto incremented
    }

    public function test_products_table_has_name_field(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_products_table_has_type_field(): void
    {
        $this->factory('type', 'enum');
    }

    public function test_products_table_has_weight_field(): void
    {
        $this->factory('weight', ['float', 'double']);
    }

    public function test_products_table_has_weight_unit_field(): void
    {
        $this->factory('weight_unit', 'enum');
    }

    public function test_products_table_has_cost_field(): void
    {
        $this->factory('cost', ['float', 'double']);
    }

    public function test_products_table_has_price_field(): void
    {
        $this->factory('price', ['float', 'double']);
    }

    public function test_products_table_has_selling_min_price_field(): void
    {
        $this->factory('selling_min_price', ['float', 'double']);
    }

    public function test_products_table_has_selling_max_price_field(): void
    {
        $this->factory('selling_max_price', ['float', 'double']);
    }
}
