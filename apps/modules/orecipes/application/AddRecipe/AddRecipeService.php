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

        $response = $this->recipeRepository->save($recipe);

        if($response){
            $success="Success";
        }
        else{
            $success="Gagal";
        }

        return $success;
    }
}