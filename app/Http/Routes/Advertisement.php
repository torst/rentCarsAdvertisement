<?php
/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 19/07/2017
 * Time: 21:05
 */

namespace App\Http\Routes;


use Faker\Guesser\Name;
use Illuminate\Routing\Router;

class Advertisement

{
    public function map(Router $router){

        $router->post('advertisements', 'AdvertisementController@create');

//        $router->post('login', 'LoginController@login');
//
//        $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//
//        $router->post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
//
//        $router->put('me', 'UserController@update')->middleware('auth:api');

    }
}