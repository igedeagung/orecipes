<?php

namespace Idy\Idea\Application\Login;

use Idy\Idea\Domain\Model\Users;
use Idy\Idea\Domain\Repository\UserRepository;

class LoginService
{
    private $userRepository;

    public function __construct(  UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(LoginRequest $request)
    {
        $response = $this->userRepository->find($request->getEmail(), $request->getPassword());

        return $response;
    }
}