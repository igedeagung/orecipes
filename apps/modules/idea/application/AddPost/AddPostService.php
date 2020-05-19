<?php

namespace Idy\Idea\Application\AddPost;

use Idy\Idea\Domain\Model\Posts;
use Idy\Idea\Domain\Repository\PostRepository;

class AddPostService
{
    private $postRepository;

    public function __construct(  PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(AddPostRequest $request)
    {
        $post = Posts::makePost($request->getIdUser(), $request->getJudul(),$request->getIsi());

        $response = $this->postRepository->save($post);

        $success="Success";

        return $success;
    }
}