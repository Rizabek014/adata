<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class cx extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function CalculateExperience(Request $request)
    {
        $command = [];



        return response()->success(
            'Данные получены',
            [
                'nbTotal' => 0,
            ]
        );
    }
}
