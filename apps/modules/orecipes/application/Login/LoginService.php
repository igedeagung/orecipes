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
        $result = $this->userRepository->find($request->getEmail(), $request->getPassword());
        if($result != NULL){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Login berhasil!",
                "id" => $result[0]['id']
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Login gagal! Silahkan coba lagi"
            ];
        }
        return $response;
    }
}