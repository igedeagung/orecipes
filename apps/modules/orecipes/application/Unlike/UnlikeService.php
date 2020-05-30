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
        $result1 = $this->likeRepository->delete($like);

        $userFromDb = $this->userRepository->byId($request->getIdUser());
        $userLikeNew = new UserLikes($userFromDb[0]['id'], $userFromDb[0]['count_likes']);
        $userLikeNew->minLike();
        $result2 = $this->userRepository->updateLike($userLikeNew);

        if($result1 && $result2){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Batal meyukai resep berhasil!"
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Batal meyukai resep gagal! Silahkan coba lagi"
            ];
        }

        return $response;
    }
}