<?php

namespace Tests\Unit\Models;

use Tests\BaseModelTest;
use App\Models\Order;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'customer_id',
            'sold_by_employee_id',
            'status',
            'date',
            'total',
            'discount',
            'currency',
        ];
    }

    public function test_order_model_fillable_is_correct(): void
    {
        $model = new Order();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
