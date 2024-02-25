<?php

namespace Tests\Unit\Models;

use App\Models\Material;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\BaseModelTest;

class MaterialModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'added_by_user_id',
            'supplier_id',
            'name',
            'type',
            'date',
            'cost',
            'weight',
            'quantity',
        ];
    }

    public function test_material_model_fillable_is_correct(): void
    {
        $model = new Material();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
