<?php

namespace Orecipes\Application\Login;

use Orecipes\Domain\Model\Users;
use Orecipes\Domain\Repository\UserRepository;

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