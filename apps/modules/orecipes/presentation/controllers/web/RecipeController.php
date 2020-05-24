<?php
namespace Orecipes\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Orecipes\Application\ShowRecipe\ShowRecipeService;
use Orecipes\Application\ShowRecipeById\ShowRecipeByIdService;
use Orecipes\Application\AddRecipe\AddRecipeService;
use Orecipes\Application\AddRecipe\AddRecipeRequest;
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
        $haha=$this->showRecipeByIdService->handle($id);
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
}