<?php

namespace Orecipes\Application\GetUserById;

use Orecipes\Domain\Repository\UserRepository;

class GetUserByIdService
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($id)
    {
        $result = $this->repository->getUserById($id);
        
        if($result){
            $response=[
                "kode" => "Berhasil",
                "hasil" => $result
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "User tidak ditemukan!"
            ];
        }

        return $response;
    }
}