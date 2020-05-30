<?php

namespace Orecipes\Application\Unlike;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Repository\LikeRepository;

class UnlikeService
{
    private $likeRepository;

    public function __construct(  LikeRepository $likeRepository)
    {
        $this->likeRepository = $likeRepository;
    }

    public function handle(UnlikeRequest $request)
    {
        $response = $this->likeRepository->delete($request->getIdUser(), $request->getIdRecipes());

        if($response){
            $success="Success";
        }
        else{
            $success="Gagal";
        }

        return $success;
    }
}