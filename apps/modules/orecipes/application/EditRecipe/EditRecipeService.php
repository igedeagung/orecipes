<?php

namespace Orecipes\Application\EditRecipe;

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
        $response = $this->recipeRepository->update($request->getId(), $request->getJudul(),$request->getIsi());

        if($response){
            $success="Success";
        }
        else{
            $success="Gagal";
        }

        return $success;
    }
}