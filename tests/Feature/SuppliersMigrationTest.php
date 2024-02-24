<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SuppliersMigrationTest extends TestCase
{
    protected static $table = 'suppliers';
    protected static $needTable = true;

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_products_table_has_name_field(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_products_table_has_address_field(): void
    {
        $this->factory('address', 'varchar');
    }

    public function test_products_table_has_phone_field(): void
    {
        $this->factory('phone', 'varchar');
    }

    public function test_products_table_has_email_field(): void
    {
        $this->factory('email', 'varchar');
    }

    public function test_products_table_has_note_field(): void
    {
        $this->factory('note', 'text');
    }
}
