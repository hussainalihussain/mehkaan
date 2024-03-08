<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserMigrationTest extends TestCase
{
    protected static $table = 'users';

    protected function setUp(): void
    {
        parent::setUp();

        Artisan::call('migrate');
    }
    public function test_users_table_exists(): void
    {
        $this->assertTrue(Schema::hasTable(static::$table));
    }

    public function test_users_table_have_type_field(): void
    {
        $this->assertTrue(Schema::hasColumn(static::$table, 'type'));
    }
}
