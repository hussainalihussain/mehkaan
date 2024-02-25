<?php

namespace Tests\Unit\Models;

use App\Models\OrderItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class OrderItemModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'order_id',
            'product_id',
            'quantity',
            'price',
            'total',
            'per_item_discount',
            'total_discount',
        ];
    }

    public function test_order_item_model_fillable_is_correct(): void
    {
        $model = new OrderItem();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
