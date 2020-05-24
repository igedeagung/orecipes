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
        $response = $this->recipeRepository->delete($request->getId());

        $success="Success";

        return $success;
    }
}