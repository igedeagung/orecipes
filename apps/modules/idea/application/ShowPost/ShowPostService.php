<?php

namespace Idy\Idea\Application\ShowPost;

use Idy\Idea\Domain\Repository\PostRepository;

class ShowPostService
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle()
    {
        $posts = $this->repository->showAllPost();

        return $posts;
    }
}