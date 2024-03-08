<?php

namespace Tests\Unit\Models;

use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class SupplierModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'name',
            'address',
            'phone',
            'email',
            'note',
        ];
    }

    public function test_supplier_model_fillable_is_correct(): void
    {
        $model = new Supplier();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
