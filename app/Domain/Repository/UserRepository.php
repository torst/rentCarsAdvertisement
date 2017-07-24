<?php
/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:24
 */

namespace App\Domain\Repository;


use App\Domain\Contracts\UserContracts;
use App\Models\User;

class UserRepository implements UserContracts
{

    public function __construct()
    {
    }


    public function create(array $user)
    {
        $user = (new User())->fill($user);
        $user->save();

        return $user;
    }

    public function findByEmail($email)
    {
        $user = (new User())->Where('email', $email)->first();
        return $user;
    }

    public function update(array $dados)
    {

        $user = (new User())->fill($dados);
        $usuario = $this->findByEmail($user->email);

        $usuario->setAttribute('name', $user->name);

        $usuario->update();
        return $usuario;
    }
}