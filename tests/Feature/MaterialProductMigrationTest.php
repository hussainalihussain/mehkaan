<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MaterialProductMigrationTest extends TestCase
{
    protected static $table = 'material_product';
    protected static $needTable = true;

    public function test_expenses_table_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_expenses_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_expenses_table_has_material_id_field(): void
    {
        $this->factory('material_id', ['bigint', 'integer']);
    }

    public function test_expenses_table_has_product_id_field(): void
    {
        $this->factory('product_id', ['bigint', 'integer']);
    }

    public function test_expenses_table_has_description_field(): void
    {
        $this->factory('description', ['text', 'varchar']);
    }
}
