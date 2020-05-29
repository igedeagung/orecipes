<?php

namespace Orecipes\Application\AddLike;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Repository\LikeRepository;

class AddLikeService
{
    private $likeRepository;

    public function __construct(  LikeRepository $likeRepository)
    {
        $this->likeRepository = $likeRepository;
    }

    public function handle(AddLikeRequest $request)
    {
        $like = Likes::makeLikes($request->getIdUser(), $request->getIdRecipes());

        $response = $this->likeRepository->save($like);

        $success="Success";

        return $success;
    }
}