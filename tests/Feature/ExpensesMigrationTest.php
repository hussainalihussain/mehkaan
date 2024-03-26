<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExpensesMigrationTest extends TestCase
{
    protected static $table = 'expenses';
    protected static $needTable = true;

    public function test_expenses_table_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_expenses_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_expenses_type_field_is_enum_or_varchar(): void
    {
        $this->factory('type', 'enum');
    }

    public function test_expenses_name_field_is_varchar(): void
    {
        $this->factory('name', 'varchar');
    }

    public function test_expenses_description_field_is_text(): void
    {
        $this->factory('description', 'text');
    }

    public function test_expenses_date_field_is_date_or_timestamp(): void
    {
        $this->factory('date', ['date', 'timestamp']);
    }

    public function test_expenses_payment_method_field_is_enum_or_varchar(): void
    {
        $this->factory('payment_method', 'enum');
    }

    public function test_expenses_paid_by_name_field_is_varchar(): void
    {
        $this->factory('paid_by_name', 'varchar');
    }

    public function test_expenses_amount_field_is_float_or_double(): void
    {
        $this->factory('amount', ['float', 'double']);
    }
}
