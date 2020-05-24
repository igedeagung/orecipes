<?php
namespace Orecipes\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Orecipes\Application\Login\LoginService;
use Orecipes\Application\Login\LoginRequest;

class LoginController extends Controller
{
    protected $loginService;

    public function initialize()
    {
        $this->loginService = $this->di->get('loginService');
    }

    public function indexAction(){
        if($this->session->has("id")){
            return $this->response->redirect('orecipes/recipe');
        }
    }
    public function submitAction(){
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $request = new LoginRequest($email, $password);
            $response = $this->loginService->handle($request);

            $id = $response[0]['id'];
            if($response){
                $this->session->set("id", $id);
                return $this->response->redirect('orecipes/recipe');
            }
            else{
                return $this->response->redirect('orecipes/login');;
            }
        }
        else{
            echo "Gagal!!!";
        }
    }

    public function logoutAction(){
        $this->session->destroy();
        $this->response->redirect();
    }
}