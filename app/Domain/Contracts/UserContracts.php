<?php
namespace App\Domain\Contracts;



use App\Models\User;

/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:16
 */
interface UserContracts
{
    public function create(array $user);

    public function findByEmail($email);

    public function update(array $dados);

}
