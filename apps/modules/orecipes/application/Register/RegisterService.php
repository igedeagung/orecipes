<?php

namespace Orecipes\Application\Register;

use Orecipes\Domain\Model\Users;
use Orecipes\Domain\Repository\UserRepository;

class RegisterService
{
    private $userRepository;

    public function __construct(  UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(RegisterRequest $request)
    {
        $user = Users::makeUser($request->getNama(), $request->getEmail(),$request->getPassword());

        $response = $this->userRepository->save($user);

        $success="Success";

        return $success;
    }
}