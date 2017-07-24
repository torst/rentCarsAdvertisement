<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Domain\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function update(Request $request){

        $this->service->update($request->all());
        return response()->json(['data'=>['message'=>'Your data has been updated.']],200);

    }

}
