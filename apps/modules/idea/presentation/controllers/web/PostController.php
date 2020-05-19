<?php
namespace Idy\Idea\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Application\ShowPost\ShowPostService;

class PostController extends Controller
{
    /**
     * @var ShowPostService $showPostService
     */
    protected $showPostService;

    public function initialize()
    {
        $this->showPostService = $this->di->get('showPostService');
    }

    public function indexAction(){
        $this->view->posts=$this->showPostService->handle();
    }
}