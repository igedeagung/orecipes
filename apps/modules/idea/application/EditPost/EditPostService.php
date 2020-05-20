<?php

namespace Idy\Idea\Application\EditPost;

use Idy\Idea\Domain\Repository\PostRepository;

class EditPostService
{
    private $postRepository;

    public function __construct(  PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(EditPostRequest $request)
    {
        $response = $this->postRepository->update($request->getId(), $request->getJudul(),$request->getIsi());

        $success="Success";

        return $success;
    }
}