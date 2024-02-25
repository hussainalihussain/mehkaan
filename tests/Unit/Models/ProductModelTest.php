<?php

namespace Tests\Unit\Models;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class ProductModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'batch_id',
            'added_by_user_id',
            'name',
            'type',
            'weight',
            'weight_unit',
            'cost',
            'price',
            'selling_min_price',
            'selling_max_price',
        ];
    }

    public function test_product_model_fillable_is_correct(): void
    {
        $model = new Product();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
