<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderItemsMigrationTest extends TestCase
{
    protected static $table = 'order_items';
    protected static $needTable = true;

    public function test_order_items_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_product_items_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_order_items_table_has_order_id_field(): void
    {
        $this->factory('order_id', ['bigint', 'integer']);
    }

    public function test_order_items_table_has_product_id_field(): void
    {
        $this->factory('product_id', ['bigint', 'integer']);
    }

    public function test_order_items_table_has_quantity_field(): void
    {
        $this->factory('quantity', ['bigint', 'integer']);
    }

    public function test_order_items_table_has_price_field(): void
    {
        $this->factory('price', ['float', 'double']);
    }

    public function test_order_items_table_has_total_field(): void
    {
        $this->factory('total', ['float', 'double']);
    }

    public function test_order_items_table_has_per_item_discount_field(): void
    {
        $this->factory('per_item_discount', ['float', 'double']);
    }

    public function test_order_items_table_has_total_discount_field(): void
    {
        $this->factory('total_discount', ['float', 'double']);
    }
}
