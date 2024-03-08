<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderMigrationTest extends TestCase
{
    protected static $table = 'orders';
    protected static $needTable = true;

    public function test_orders_table_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_orders_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_orders_table_has_customer_id_field(): void
    {
        $this->factory('customer_id', ['bigint', 'integer']);
    }

    public function test_orders_table_has_sold_by_employee_id_field(): void
    {
        $this->factory('sold_by_employee_id', ['bigint', 'integer']);
    }

    public function test_orders_table_has_status_field(): void
    {
        $this->factory('status', ['enum', 'varchar']);
    }

    public function test_orders_table_has_date_field(): void
    {
        $this->factory('date', ['date', 'timestamp', 'datetime']);
    }

    public function test_orders_table_has_total_field(): void
    {
        $this->factory('total', ['float', 'double']);
    }

    public function test_orders_table_has_discount_field(): void
    {
        $this->factory('discount', ['float', 'double']);
    }

    public function test_orders_table_has_currency_field(): void
    {
        $this->factory('currency', ['varchar']);
    }
}
