<?php

namespace Orecipes\Application\AddLike;

use Orecipes\Domain\Model\Likes;
use Orecipes\Domain\Model\UserLikes;
use Orecipes\Domain\Repository\LikeRepository;
use Orecipes\Domain\Repository\UserRepository;

class AddLikeService
{
    private $likeRepository;
    private $userRepository;

    public function __construct(  LikeRepository $likeRepository, UserRepository $userRepository)
    {
        $this->likeRepository = $likeRepository;
        $this->userRepository = $userRepository;
    }

    public function handle(AddLikeRequest $request)
    {
        $like = Likes::makeLikes($request->getIdUser(), $request->getIdRecipes());
        $response1 = $this->likeRepository->save($like);

        $userFromDb = $this->userRepository->byId($request->getIdUser());
        $userLikeNew = new UserLikes($userFromDb[0]['id'], $userFromDb[0]['count_likes']);
        $userLikeNew->addLike();
        $response2 = $this->userRepository->updateLike($userLikeNew);

        if($response1 && $response2){
            $success="Success";
        }
        else{
            $success="Gagal";
        }

        return $success;
    }
}