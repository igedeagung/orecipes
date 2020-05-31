<?php

namespace Orecipes\Application\EditProfil;

use Orecipes\Domain\Repository\UserRepository;

class EditProfilService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(EditProfilRequest $request)
    {
        $result = $this->userRepository->update($request->getId(), $request->getNama(), $request->getEmail());
        if($result){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Profil berhasil diubah!",
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Profil gagal diubah! Silahkan coba lagi"
            ];
        }
        return $response;
    }
}