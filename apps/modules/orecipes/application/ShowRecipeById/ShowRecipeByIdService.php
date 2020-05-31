<?php

namespace Orecipes\Application\ShowRecipeById;

use Orecipes\Domain\Repository\RecipeRepository;

class ShowRecipeByIdService
{
    protected $repository;

    public function __construct(RecipeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($id)
    {
        $result = $this->repository->showRecipeById($id);
        
        if($result){
            $response=[
                "kode" => "Berhasil",
                "hasil" => $result
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Resep tidak ditemukan!"
            ];
        }

        return $response;
    }
    public function getFlagLike($id_recipes, $id_user){
        $flag=$this->repository->getFlagLike($id_recipes, $id_user);
        
        return $flag;
    }
}