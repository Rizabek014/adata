<?php

namespace Tests\Unit;

use App\Service\Aggregator;
use App\Service\CalculateExperienceService;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function CalculateExperiencePositiveTest(): void
    {
        $dataProvider = [
            'name' => 'Job1',
            'start' => '05.2012',
            'end' => '08.2015',
        ];

        $aggregator = new Aggregator($dataProvider);
        $calculateExperienceService = new CalculateExperienceService();
        $result = $calculateExperienceService->execute($aggregator->getData());

        $this->assertEquals(72, $result);
    }
}
