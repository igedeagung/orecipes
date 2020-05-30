<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Users;
use Orecipes\Domain\Model\UserLikes;

interface UserRepository
{
    public function save(Users $user);
    public function find(string $email, string $password);
    public function byId(int $id);
    public function updateLike(UserLikes $userlike);
}