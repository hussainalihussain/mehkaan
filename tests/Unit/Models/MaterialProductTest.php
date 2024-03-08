<?php

namespace Tests\Unit\Models;

use App\Models\MaterialProduct;
use Tests\BaseModelTest;
use PHPUnit\Framework\TestCase;

class MaterialProductTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'material_id',
            'product_id',
            'description',
        ];
    }

    public function test_material_product_model_fillable_is_correct(): void
    {
        $model = new MaterialProduct();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
