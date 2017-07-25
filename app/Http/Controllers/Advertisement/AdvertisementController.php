<?php

namespace App\Http\Controllers\Advertisement;

use App\Domain\Service\AdvertisementService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementRequest;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{

    private $service;

    public function __construct(AdvertisementService $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        $this->service->create($request->user(), $request->all());

        return response()->json(['message'=> 'OK'], 201);
//            return fractal($user, new UserTransformer());

    }
}
