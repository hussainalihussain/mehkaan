<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomersMigrationTest extends TestCase
{
    protected static $table = 'customers';

    protected function setUp(): void
    {
        parent::setUp();

        Artisan::call('migrate:fresh');
    }

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
        // need to check if auto incremented
    }

    public function test_name_field_is_varchar_in_customers_migration(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_type_field_is_enum_in_customers_migration(): void
    {
        $this->factory('type', 'enum');
    }

    public function test_address_field_is_varchar_in_customers_migration(): void
    {
        $this->factory('address', 'varchar');
    }

    public function test_phone_field_is_varchar_in_customers_migration(): void
    {
        $this->factory('phone', 'varchar');
    }

    public function test_email_field_is_varchar_in_customers_migration(): void
    {
        $this->factory('email', 'varchar');
    }
}
