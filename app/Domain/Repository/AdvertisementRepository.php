<?php
/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:24
 */

namespace App\Domain\Repository;


use App\Domain\Contracts\AdvertisementContracts;
use App\Models\Advertisement;
use App\Models\User;
use Ramsey\Uuid\Uuid;

class AdvertisementRepository implements AdvertisementContracts
{

    public function __construct()
    {
    }


    public function create(User $user, array $dados)
    {
        $advertisement = (new Advertisement())->fill($dados);
        $advertisement->uuid = Uuid::uuid1()->toString();

        $user->advertisements()->save($advertisement);
//        $this->getCover($advertisement);

        return $advertisement;
    }


    public function update(Advertisement $user, array $dados)
    {
        $user->fill($dados);
        $user->update();
        return $user;
    }

    public function search(array $dados)
    {
        // TODO: Implement search() method.
    }
}