<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MaterialsMigrationTest extends TestCase
{
    protected static $table = 'materials';
    protected static $needTable = true;

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_products_table_has_added_by_user_id_field(): void
    {
        $this->factory('added_by_user_id', ['bigint', 'integer']);
    }

    public function test_products_table_has_supplier_id_field(): void
    {
        $this->factory('supplier_id', ['bigint', 'integer']);
    }

    public function test_products_table_has_name_field(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_products_table_has_type_field(): void
    {
        $this->factory('type', 'enum');
    }

    public function test_products_table_has_date_field(): void
    {
        $this->factory('date', ['date', 'timestamp']);
    }

    public function test_products_table_has_cost_field(): void
    {
        $this->factory('cost', ['float', 'double']);
    }

    public function test_products_table_has_weight_field(): void
    {
        $this->factory('weight', ['float', 'double']);
    }

    public function test_products_table_has_quantity_field(): void
    {
        $this->factory('quantity', ['float', 'double']);
    }
}
