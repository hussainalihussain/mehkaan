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

    public function test_customer_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Customer'));
    }

    public function test_customers_migration_exists(): void
    {
        $customers_migration = $this->getMigration('create_customers_table.php');

        $this->assertNotEmpty($customers_migration);
    }

    public function test_expense_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Expense'));
    }

    public function test_expenses_migration_exists(): void
    {
        $expenses_migration = $this->getMigration('create_expenses_table.php');

        $this->assertNotEmpty($expenses_migration);
    }

    public function test_supplier_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Supplier'));
    }

    public function test_suppliers_migration_exists(): void
    {
        $suppliers_migration = $this->getMigration('create_suppliers_table.php');

        $this->assertNotEmpty($suppliers_migration);
    }

    public function test_employee_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Employee'));
    }

    public function test_employees_migration_exists(): void
    {
        $employees_migration = $this->getMigration('create_employees_table.php');

        $this->assertNotEmpty($employees_migration);
    }

    public function test_material_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Material'));
    }

    public function test_materials_migration_exists(): void
    {
        $materials_migration = $this->getMigration('create_materials_table.php');

        $this->assertNotEmpty($materials_migration);
    }

    public function test_batch_product_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\BatchProduct'));
    }

    public function test_batch_products_migration_exists(): void
    {
        $product_batch_products_migration = $this->getMigration('create_batch_products_table.php');

        $this->assertNotEmpty($product_batch_products_migration);
    }

    public function test_material_product_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\MaterialProduct'));
    }

    public function test_material_products_migration_exists(): void
    {
        $material_products_migration = $this->getMigration('create_material_products_table.php');

        $this->assertNotEmpty($material_products_migration);
    }

    public function test_order_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\Order'));
    }

    public function test_orders_migration_exists(): void
    {
        $orders_migration = $this->getMigration('create_orders_table.php');

        $this->assertNotEmpty($orders_migration);
    }

    public function test_order_item_model_exists(): void
    {
        $this->assertTrue(class_exists('App\Models\OrderItem'));
    }

    public function test_order_items_migration_exists(): void
    {
        $order_items_migration = $this->getMigration('create_order_items_table.php');

        $this->assertNotEmpty($order_items_migration);
    }
}
