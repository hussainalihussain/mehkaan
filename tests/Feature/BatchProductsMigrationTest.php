<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BatchProductsMigrationTest extends TestCase
{
    protected static $table = 'batch_products';
    protected static $needTable = true;

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_products_table_has_product_id_field(): void
    {
        $this->factory('product_id', ['bigint', 'integer']);
    }

    public function test_products_table_has_batch_product_id_field(): void
    {
        $this->factory('batch_product_id', ['bigint', 'integer']);
    }
}
