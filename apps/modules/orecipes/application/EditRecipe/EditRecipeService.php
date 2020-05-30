<?php

namespace Orecipes\Application\EditRecipe;

use Orecipes\Domain\Model\Recipes;
use Orecipes\Domain\Repository\RecipeRepository;

class EditRecipeService
{
    private $recipeRepository;

    public function __construct(  RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function handle(EditRecipeRequest $request)
    {
        $recipe = Recipes::makeRecipe($request->getId(), $request->getJudul(),$request->getIsi());
        $result = $this->recipeRepository->update($recipe);

        if($result){
            $response=[
                "kode" => "Berhasil",
                "pesan" => "Perubahan resep berhasil disimpan!"
            ];
        }
        else{
            $response=[
                "kode" => "Gagal",
                "pesan" => "Perubahan resep gagal disimpan! Silahkan coba lagi"
            ];
        }

        return $response;
    }
}