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
        $response = $this->userRepository->checkCount($userId);

        if($response[0]['count_likes'] >= 10){
            $success="Success";
        }
        else{
            $success="Anda tidak berhak menulis resep, karena belum menyukai 10 resep";
        }

        return $success;
    }
}