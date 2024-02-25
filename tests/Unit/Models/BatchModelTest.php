<?php

namespace Tests\Unit\Models;

use Tests\BaseModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Batch;

class BatchModelTest extends BaseModelTest
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

    public function test_batch_model_fillable_is_correct(): void
    {
        $model = new Batch();

        $this->assertEquals(static::fillable(), $model->getFillable());
    }
}
