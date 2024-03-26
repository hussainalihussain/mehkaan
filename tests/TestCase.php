<?php

namespace Tests;

use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
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

        Artisan::call('migrate:fresh');
    }

    protected function factory($column, $type)
    {
        $dbType = Schema::getColumnType(static::$table, $column);
        $this->assertTrue(Schema::hasColumn(static::$table, $column));

        if(is_array($type)) {
            $this->assertContains($dbType, $type);

            return;
        }

        if(in_array($type, ['enum', 'string', 'varchar'])) {
            $this->assertContains($dbType, ['varchar', 'enum', 'string']);

            return;
        }

        $this->assertEquals($type, $dbType);
    }
}
