<?php

namespace Tests\Unit\Models;

use App\Models\Expense;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class ExpenseModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'type',
            'name',
            'description',
            'date',
            'payment_method',
            'paid_by_name',
            'amount',
        ];
    }

    public function test_expense_model_fillable_is_correct(): void
    {
        $model = new Expense();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }

}
