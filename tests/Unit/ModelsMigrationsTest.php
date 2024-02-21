<?php

namespace Tests\Unit;

use Illuminate\Support\Collection;
use PHPUnit\Framework\TestCase;

class ModelsMigrationsTest extends TestCase
{
    protected $migrations;

    public function setUp(): void
    {
        $this->migrations = collect(scandir('database/migrations'));
    }

    protected function getMigration(string $name): Collection
    {
        return $this->migrations->filter(fn($migration) => str_contains($migration, $name));
    }

    public function test_product_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Product'));
    }

    public function test_products_migration_exists(): void
    {
        $products_migration = $this->getMigration('create_products_table.php');

        $this->assertNotEmpty($products_migration);
    }
}
