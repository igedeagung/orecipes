<?php

namespace Idy\Idea\Application\ShowPostById;

use Idy\Idea\Domain\Repository\PostRepository;

class ShowPostByIdService
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($id)
    {
        $posts = $this->repository->showPostById($id);
        
        return $posts;
    }
}