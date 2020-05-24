<?php

namespace Orecipes\Application\ShowRecipe;

use Orecipes\Domain\Repository\RecipeRepository;

class ShowRecipeService
{
    protected $repository;

    public function __construct(RecipeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle()
    {
        $recipes = $this->repository->showAllRecipe();

        return $recipes;
    }
}