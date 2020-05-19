<?php

namespace Idy\Idea\Application\Register;

use Idy\Idea\Domain\Model\Users;
use Idy\Idea\Domain\Repository\UserRepository;

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