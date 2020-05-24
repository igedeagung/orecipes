<?php

namespace Orecipes\Domain\Repository;

use Orecipes\Domain\Model\Recipes;

interface RecipeRepository
{
    public function showAllRecipe();
    public function save(Recipes $recipe);
    public function showRecipeById(int $id);
    public function update(int $id, string $judul, string $isi);
    public function delete(int $id);
}
