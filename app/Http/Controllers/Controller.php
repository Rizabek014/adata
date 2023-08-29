<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculateExperienceRequest;
use App\Service\Aggregator;
use App\Service\CalculateExperienceService;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function CalculateExperience(Request $request)
    {
        $aggregator                 = new Aggregator($request);
        $calculateExperienceService = new CalculateExperienceService();
        $result                     = $calculateExperienceService->execute($aggregator->getData());

        return response()->json([
            'Job experience',
            [
                'Total' => $result,
            ]]
        );
    }
}
