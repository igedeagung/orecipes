<?php

namespace Orecipes\Application\AddRecipe;

use Orecipes\Domain\Model\Recipes;
use Orecipes\Domain\Repository\RecipeRepository;

class AddRecipeService
{
    private $recipeRepository;

    public function __construct(  RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function handle(AddRecipeRequest $request)
    {
        $recipe = Recipes::makeRecipe($request->getIdUser(), $request->getJudul(),$request->getIsi());

        $result = $this->recipeRepository->save($recipe);

        if($result){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Penambahan resep berhasil!"
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Penambahan resep gagal! Silahkan coba lagi"
            ];
        }

        return $response;
    }
}