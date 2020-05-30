<?php

namespace Orecipes\Domain\Model;

class Likes
{
    private $id_user;
    private $id_recipes;

    public function __construct($id_user, $id_recipes)
    {
        $this->id_user = $id_user;
        $this->id_recipes = $id_recipes;
    }

    public function id_user() : int
    {
        return $this->id_user;
    }

    public function id_recipes() : int
    {
        return $this->id_recipes;
    }

    public static function makeLikes($id_user, $id_recipes): Likes
    {
        return new Likes($id_user, $id_recipes);
    }

}