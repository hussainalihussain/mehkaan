<?php

namespace Tests\Unit\Models;

use Tests\BaseModelTest;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModelTest extends BaseModelTest
{
    protected static function fillable(): array
    {
        return [
            'name',
            'email',
            'password',
            'type',
        ];
    }

    public function test_user_model_fillable_is_correct(): void
    {
        $user = new User();

        $this->assertEquals(static::fillable(), $user->getFillable());
    }
}
