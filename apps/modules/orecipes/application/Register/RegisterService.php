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
        if($request->getPassword() === $request->getKPassword())
        {
            $user = Users::makeUser($request->getNama(), $request->getEmail(),$request->getPassword());

            $result = $this->userRepository->save($user);

            if($result){
                $response=[
                    "kode" => "Berhasil",
                    "pesan" => "Pendaftaran akun berhasil!"
                ];
            }
            else{
                $response=[
                    "kode" => "Gagal",
                    "pesan" => "Pendaftaran akun gagal! Silahkan coba lagi"
                ];
            }
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Password dan konfirmasi password tidak cocok!"
            ];
        }

        return $response;
    }
}