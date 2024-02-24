<?php

namespace Tests;

use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected static $table = '';
    protected static $needTable = false;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();

        if(static::$needTable && !static::$table) {
            throw new Exception('Table name not set');
        }
    }

    protected function factory($column, $type)
    {
        $this->assertTrue(Schema::hasColumn(static::$table, $column));

        if(is_array($type)) {
            $this->assertContains(Schema::getColumnType(static::$table, $column), $type);
            return;
        }

        $type !== 'enum' ?
            $this->assertEquals($type, Schema::getColumnType(static::$table, $column)) :
            $this->assertContains(Schema::getColumnType(static::$table, $column), ['varchar', 'enum']);
    }
}
