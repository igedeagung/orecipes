<?php

namespace Orecipes\Application\Unlike;

class UnlikeRequest
{
    private $id_recipes;
    private $id_user;

    public function __construct($id_recipes, $id_user)
    {
        $this->id_recipes=$id_recipes;
        $this->id_user=$id_user;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }
    public function getIdRecipes()
    {
        return $this->id_recipes;
    }

}