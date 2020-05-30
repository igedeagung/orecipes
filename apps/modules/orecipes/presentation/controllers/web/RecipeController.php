<?php
namespace Orecipes\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Orecipes\Application\ShowRecipe\ShowRecipeService;
use Orecipes\Application\ShowRecipeById\ShowRecipeByIdService;
use Orecipes\Application\ValidityAddRecipe\ValidityAddRecipeService;
use Orecipes\Application\ValidityAddRecipe\ValidityAddRecipeRequest;
use Orecipes\Application\AddRecipe\AddRecipeService;
use Orecipes\Application\AddRecipe\AddRecipeRequest;
use Orecipes\Application\AddLike\AddLikeService;
use Orecipes\Application\AddLike\AddLikeRequest;
use Orecipes\Application\Unlike\UnlikeService;
use Orecipes\Application\Unlike\UnlikeRequest;
use Orecipes\Application\EditRecipe\EditRecipeService;
use Orecipes\Application\EditRecipe\EditRecipeRequest;
use Orecipes\Application\DeleteRecipe\DeleteRecipeService;
use Orecipes\Application\DeleteRecipe\DeleteRecipeRequest;

class RecipeController extends Controller
{
    /**
     * @var ShowRecipeService $showRecipeService
     */
    protected $showRecipeService;
    protected $showRecipeByIdService;

    public function initialize()
    {
        $this->showRecipeService = $this->di->get('showRecipeService');
        $this->showRecipeByIdService = $this->di->get('showRecipeByIdService');
    }

    public function indexAction(){
        $this->view->recipes=$this->showRecipeService->handle();
    }

    public function addAction(){
        $id = $this->session->get('id');

        $validRequest = new ValidityAddRecipeRequest($id);
        $validResponse = $this->validityAddRecipeService->handle($validRequest);

        if($validResponse != "Success"){
            $this->flashSession->error($validResponse);
            return $this->response->redirect('orecipes/recipe');
        }
    }

    public function addSubmitAction(){
        if ($this->request->isPost()) {
            $judul = $this->request->getPost('judul');
            $isi = $this->request->getPost('isi');
            $id_user=$this->session->get('id');

            $request = new AddRecipeRequest($judul, $isi, $id_user);
            $response = $this->addRecipeService->handle($request);
            if($response==="Success"){
                return $this->response->redirect('orecipes/recipe');
            }
            else{
                return $this->response->redirect('orecipes/recipe/add');
            }
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function showAction($id){
        $this->view->flagLike=$this->showRecipeByIdService->getFlagLike($id, $this->session->get('id'));
        
        $this->view->recipe=$this->showRecipeByIdService->handle($id);
    }
    
    public function editAction($id){
        $this->view->recipe=$this->showRecipeByIdService->handle($id);
    }

    public function editSubmitAction(){
        if ($this->request->isPost()) {
            $recipeId = $this->request->getPost('recipeId');
            $judul = $this->request->getPost('judul');
            $isi = $this->request->getPost('isi');

            $request = new EditRecipeRequest($recipeId, $judul, $isi);
            $response = $this->editRecipeService->handle($request);
            if($response==="Success"){
                return $this->response->redirect('orecipes/recipe');
            }
            else{
                return $this->response->redirect('orecipes/recipe/edit/' . $recipeId);
            }
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function deleteAction($id){
        $request = new deleteRecipeRequest($id);
        $response = $this->deleteRecipeService->handle($request);
        if($response==="Success"){
            return $this->response->redirect('orecipes/recipe');
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function likeAction($id){
        $request = new addLikeRequest($id, $this->session->get("id"));
        $response= $this->addLikeService->handle($request);
        if($response==="Success"){
            return $this->response->redirect('orecipes/recipe/show/'.$id);
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function unlikeAction($id){
        $request = new unlikeRequest($id, $this->session->get("id"));
        $response= $this->unlikeService->handle($request);
        if($response==="Success"){
            return $this->response->redirect('orecipes/recipe/show/'.$id);
        }
        else{
            echo "Gagal!!!";
        }
    }
}