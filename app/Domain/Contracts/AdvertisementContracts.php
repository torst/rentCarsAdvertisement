<?php
namespace App\Domain\Contracts;



use App\Models\Advertisement;
use App\Models\User;

/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:16
 */
interface AdvertisementContracts
{
    public function create(User $user, array $advertisement);

    public function update(Advertisement $advertisement, array $dados);

    public function search(array $dados);

}
