<?php

namespace Idy\Idea\Domain\Repository;

use Idy\Idea\Domain\Model\Posts;

interface PostRepository
{
    public function showAllPost();
    public function save(Posts $post);
    public function showPostById(int $id);
}
