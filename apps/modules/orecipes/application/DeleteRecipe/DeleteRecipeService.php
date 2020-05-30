<?php

namespace Orecipes\Application\DeleteRecipe;

use Orecipes\Domain\Repository\RecipeRepository;

class DeleteRecipeService
{
    private $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function handle(DeleteRecipeRequest $request)
    {
        $result = $this->recipeRepository->delete($request->getId());

        if($result){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Resep berhasil dihapus!"
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Resep gagal dihapus! Silahkan coba lagi"
            ];
        }

        return $response;
    }
}