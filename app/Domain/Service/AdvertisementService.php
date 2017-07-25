<?php
/**
 * Created by PhpStorm.
 * User: Aluno
 * Date: 20/07/2017
 * Time: 19:12
 */

namespace App\Domain\Service;


use App\Domain\Contracts\AdvertisementContracts;
use App\Models\Advertisement;
use App\Models\User;

class AdvertisementService
{

    private $advertisementRepository;

    public function __construct(AdvertisementContracts $advertisementRepository)
    {

        $this->advertisementRepository = $advertisementRepository;

    }

    public function create(User $user, array $advertisement)
    {
        return $this->advertisementRepository->create($user, $advertisement);

    }

    public function update(Advertisement $advertisement, array $dados)
    {
        return $this->advertisementRepository->update($advertisement, $dados);

    }

}