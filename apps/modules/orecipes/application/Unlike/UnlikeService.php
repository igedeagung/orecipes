<?php

namespace Orecipes\Application\Unlike;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Model\UserLikes;
use Orecipes\Domain\Repository\LikeRepository;
use Orecipes\Domain\Repository\UserRepository;

class UnlikeService
{
    private $likeRepository;
    private $userRepository;

    public function __construct(  LikeRepository $likeRepository, UserRepository $userRepository)
    {
        $this->likeRepository = $likeRepository;
        $this->userRepository = $userRepository;
    }

    public function handle(UnlikeRequest $request)
    {
        $like = Likes::makeLikes($request->getIdUser(), $request->getIdRecipes());
        $response = $this->likeRepository->delete($like);

        $userFromDb = $this->userRepository->byId($request->getIdUser());
        $userLikeNew = new UserLikes($userFromDb[0]['id'], $userFromDb[0]['count_likes']);
        $userLikeNew->minLike();
        $response2 = $this->userRepository->updateLike($userLikeNew);

        if($response){
            $success="Success";
        }
        else{
            $success="Gagal";
        }

        return $success;
    }
}