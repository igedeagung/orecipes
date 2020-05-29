<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Likes;

interface LikeRepository
{
    public function save(Likes $like);
    public function delete(Likes $like);
    public function countLikeByIdUser(int $id_user);
}
