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
        $like = Likes::makeLikes($request->getIdUser(), $request->getIdRecipes());

        $response = $this->likeRepository->delete($like);

        $success="Success";

        return $success;
    }
}