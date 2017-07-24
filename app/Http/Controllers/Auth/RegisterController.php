<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Service\UserService;
use App\Http\Requests\RegisterRequest;
use App\Http\Transformer\UserTransformer;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    private $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }

    public function register(RegisterRequest $request)
    {
            $this->service->create($request->all());

            return response()->json(['message'=> 'OK'], 201);
//            return fractal($user, new UserTransformer());

    }
}
