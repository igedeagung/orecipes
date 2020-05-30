<?php

namespace Orecipes\Application\ValidityAddRecipe;

class ValidityAddRecipeRequest
{
    private $id_user;

    public function __construct($id_user)
    {
        $this->id_user=$id_user;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

}