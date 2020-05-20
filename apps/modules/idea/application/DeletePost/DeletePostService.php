<?php

namespace Idy\Idea\Application\DeletePost;

use Idy\Idea\Domain\Repository\PostRepository;

class DeletePostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(DeletePostRequest $request)
    {
        $response = $this->postRepository->delete($request->getId());

        $success="Success";

        return $success;
    }
}