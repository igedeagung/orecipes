<?php

namespace Idy\Idea\Domain\Repository;

use Idy\Idea\Domain\Model\Users;

interface UserRepository
{
    public function save(Users $user);
    public function find(string $email, string $password);
}