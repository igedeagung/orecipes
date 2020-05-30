<?php

namespace Orecipes\Application\ValidityAddRecipe;

use Orecipes\Domain\Model\UserLikes;
use Orecipes\Domain\Repository\UserRepository;

class ValidityAddRecipeService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(ValidityAddRecipeRequest $request)
    {
        $userId = $request->getIdUser();
        $result = $this->userRepository->checkCount($userId);

        if($result[0]['count_likes'] < 10){
            $response=[
                "kode" => "Gagal",
                "pesan" => "Anda tidak berhak menulis resep, karena belum menyukai 10 resep!"
            ];
        }

        return $response;
    }
}