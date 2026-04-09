<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
<<<<<<< HEAD

abstract class TestCase extends BaseTestCase
{
    //
=======
use Laravel\Fortify\Features;

abstract class TestCase extends BaseTestCase
{
    protected function skipUnlessFortifyHas(string $feature, ?string $message = null): void
    {
        if (! Features::enabled($feature)) {
            $this->markTestSkipped($message ?? "Fortify feature [{$feature}] is not enabled.");
        }
    }
>>>>>>> 0a5a29f58d1eb073bb43845033db6a4243d82e1d
}
