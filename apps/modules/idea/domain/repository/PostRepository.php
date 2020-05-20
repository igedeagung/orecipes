<?php

namespace Idy\Idea\Domain\Repository;

use Idy\Idea\Domain\Model\Posts;

interface PostRepository
{
    public function showAllPost();
    public function save(Posts $post);
    public function showPostById(int $id);
    public function update(int $id, string $judul, string $isi);
    public function delete(int $id);
}
