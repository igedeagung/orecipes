<?php

namespace Orecipes\Domain\Model;

class UserLikes
{
    private $id_user;
    private $count_likes;

    const INIT_COUNT = 0;

    public function __construct($id_user, $count_likes)
    {
        $this->id_user = $id_user;
        $this->count_likes = $count_likes;
    }

    public function id_user() : int
    {
        return $this->id_user;
    }

    public function count_likes() : int
    {
        return $this->count_likes;
    }

    public static function makeUserLikes($id_user, $count_likes): UserLikes
    {
        return new UserLikes($id_user, $count_likes);
    }

    public function addLike(){
        $this->count_likes = $this->count_likes + 1;
    }

    public function minLike(){
        $this->count_likes = $this->count_likes - 1;
    }
}