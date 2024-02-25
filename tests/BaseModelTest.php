<?php

namespace Tests;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class BaseModelTest extends TestCase
{
    abstract protected static function fillable(): array;
}
