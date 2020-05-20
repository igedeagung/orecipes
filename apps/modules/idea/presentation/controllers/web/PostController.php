<?php
namespace Idy\Idea\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Application\ShowPost\ShowPostService;
use Idy\Idea\Application\ShowPostById\ShowPostByIdService;
use Idy\Idea\Application\AddPost\AddPostService;
use Idy\Idea\Application\AddPost\AddPostRequest;
use Idy\Idea\Application\EditPost\EditPostService;
use Idy\Idea\Application\EditPost\EditPostRequest;
use Idy\Idea\Application\DeletePost\DeletePostService;
use Idy\Idea\Application\DeletePost\DeletePostRequest;

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
            $id_user=$this->session->get('id');

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
    
    public function editAction($id){
        $this->view->post=$this->showPostByIdService->handle($id);
    }

    public function editSubmitAction(){
        if ($this->request->isPost()) {
            $postId = $this->request->getPost('postId');
            $judul = $this->request->getPost('judul');
            $isi = $this->request->getPost('isi');

            $request = new EditPostRequest($postId, $judul, $isi);
            $response = $this->editPostService->handle($request);
            if($response==="Success"){
                return $this->response->redirect('idea/post');
            }
            else{
                return $this->response->redirect('idea/post/edit/' . $postId);
            }
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function deleteAction($id){
        $request = new deletePostRequest($id);
        $response = $this->deletePostService->handle($request);
        if($response==="Success"){
            return $this->response->redirect('idea/post');
        }
        else{
            echo "Gagal!!!";
        }
    }
}