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
        $recipes = $this->repository->showRecipeById($id);
        
        return $recipes;
    }
}