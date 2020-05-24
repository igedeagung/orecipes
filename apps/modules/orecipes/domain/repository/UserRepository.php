<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Users;

interface UserRepository
{
    public function save(Users $user);
    public function find(string $email, string $password);
}