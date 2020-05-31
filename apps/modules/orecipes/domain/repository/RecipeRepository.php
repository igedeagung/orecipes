<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Recipes;

interface RecipeRepository
{
    public function showAllRecipe();
    public function save(Recipes $recipe);
    public function showRecipeById(int $id);
    public function update(Recipes $recipe);
    public function delete(int $id);
    public function getFlagLike(int $id_recipes,$id_user);
    public function searchByKey(string $key);
}
