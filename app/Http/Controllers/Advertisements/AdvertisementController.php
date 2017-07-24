<?php

namespace App\Http\Controllers\Advertisements;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

}
