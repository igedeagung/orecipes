<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Likes;

interface RecipeRepository
{
    public function countLikeByIdUser(int $id_user);
}
