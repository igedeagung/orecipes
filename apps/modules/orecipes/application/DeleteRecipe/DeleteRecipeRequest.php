<?php

namespace Orecipes\Application\DeleteRecipe;

class DeleteRecipeRequest
{
    private $id;

    public function __construct($recipeId)
    {
        $this->id = $recipeId;
    }

    public function getId()
    {
        return $this->id;
    }
}