<?php
namespace Idy\Idea\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Application\ShowPost\ShowPostService;
use Idy\Idea\Application\ShowPostById\ShowPostByIdService;
use Idy\Idea\Application\AddPost\AddPostService;
use Idy\Idea\Application\AddPost\AddPostRequest;

class PostController extends Controller
{
    /**
     * @var ShowPostService $showPostService
     */
    protected $showPostService;
    protected $showPostByIdService;

    public function initialize()
    {
        $this->showPostService = $this->di->get('showPostService');
        $this->showPostByIdService = $this->di->get('showPostByIdService');
    }

    public function indexAction(){
        $this->view->posts=$this->showPostService->handle();
    }

    public function addAction(){

    }

    public function addSubmitAction(){
        if ($this->request->isPost()) {
            $judul = $this->request->getPost('judul');
            $isi = $this->request->getPost('isi');
            $id_user=1;

            $request = new AddPostRequest($judul, $isi, $id_user);
            $response = $this->addPostService->handle($request);
            if($response==="Success"){
                return $this->response->redirect('idea/post');
            }
            else{
                return $this->response->redirect('idea/post/add');
            }
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function showAction($id){
        $haha=$this->showPostByIdService->handle($id);
        $this->view->post=$this->showPostByIdService->handle($id);
    }
}