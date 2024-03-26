<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BatchesMigrationTest extends TestCase
{
    protected static $table = 'batches';
    protected static $needTable = true;

    public function test_customers_migration_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_batches_table_has_id_field(): void
    {
        $this->factory('id', ['bigint', 'integer']);
    }

    public function test_batches_table_has_added_by_user_id_field(): void
    {
        $this->factory('added_by_user_id', ['bigint', 'integer']);
    }

    public function test_batches_table_has_name_field(): void
    {
        $this->factory('name', ['varchar', 'string']);
    }

    public function test_batches_table_has_date_field(): void
    {
        $this->factory('date', 'date');
    }

    public function test_batches_table_has_time_consumed_field(): void
    {
        $this->factory('time_consumed', ['time']);
    }

    public function test_batches_table_has_start_at_field(): void
    {
        $this->factory('start_at', ['datetime', 'timestamp']);
    }

    public function test_batches_table_has_end_at_field(): void
    {
        $this->factory('end_at', ['datetime', 'timestamp']);
    }

}
