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
    public function getFlagLike($id_recipes, $id_user){
        $flag=$this->repository->getFlagLike($id_recipes, $id_user);
        
        return $flag;
    }
}