<?php

namespace Tests\Unit\Models;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class CustomerModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'added_by_user_id',
            'name',
            'date',
            'start_at',
            'end_at',
        ];
    }

    public function test_customer_model_fillable_is_correct(): void
    {
        $model = new Customer();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
