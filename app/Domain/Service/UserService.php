<?php
/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:12
 */

namespace App\Domain\Service;


use App\Domain\Contracts\UserContracts;
use App\Models\User;

class UserService
{

    private $userRepository;

    public function __construct(UserContracts $userRepository)
    {

        $this->userRepository = $userRepository;

    }

    public function create(array $user)
    {
        return $this->userRepository->create($user);

    }

    public function findByEmail(User $user)
    {
        return $this->userRepository->create($user);

    }

    public function update(User $user, array $dados)
    {
        return $this->userRepository->update($user, $dados);

    }

}