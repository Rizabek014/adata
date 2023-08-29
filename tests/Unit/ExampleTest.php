<?php

namespace Tests\Unit;

use App\Service\CalculateExperienceService;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $service = new CalculateExperienceService();
        $this->assertEquals(4, $service);
    }
}
