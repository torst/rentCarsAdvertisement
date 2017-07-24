<?php
namespace App\Http\Transformer;

/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 19/07/2017
 * Time: 21:30
 */

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    public function transform(User $user){
        return [
            'name' => $user->name,
            'email' => $user->email,
            'api_token' => $user->api_token
        ];
    }
}
