<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeesMigrationTest extends TestCase
{
    protected static $table = 'employees';
    protected static $needTable = true;

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_products_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }


    public function test_products_table_has_user_id_field(): void
    {
        $this->factory('user_id', ['bigint', 'integer']);
    }

    public function test_products_table_has_name_field(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_products_table_has_type_field(): void
    {
        $this->factory('type', 'enum');
    }

    public function test_products_table_has_phone_field(): void
    {
        $this->factory('phone', 'varchar');
    }

    public function test_products_table_has_address_field(): void
    {
        $this->factory('address', 'text');
    }

    public function test_products_table_has_email_field(): void
    {
        $this->factory('email', 'varchar');
    }

    public function test_products_table_has_salary_field(): void
    {
        $this->factory('salary', ['float', 'double']);
    }

    public function test_products_table_has_salary_type_field(): void
    {
        $this->factory('salary_type', 'enum');
    }
}
