<?php

namespace Tests\Unit\Models;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class EmployeeModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'user_id',
            'name',
            'type',
            'phone',
            'address',
            'email',
            'salary',
            'salary_type',
        ];
    }

    public function test_employee_model_fillable_is_correct(): void
    {
        $model = new Employee();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
