<?php
namespace Idy\Idea\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Application\Login\LoginService;
use Idy\Idea\Application\Login\LoginRequest;

class LoginController extends Controller
{
    protected $loginService;

    public function initialize()
    {
        $this->loginService = $this->di->get('loginService');
    }

    public function indexAction(){
        
    }
    public function submitAction(){
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $request = new LoginRequest($email, $password);
            $response = $this->loginService->handle($request);
            
            if($response!= null){
                $this->_registerSession($response);
                return $this->response->redirect('/idea/post');
            }
            else{
                return $this->response->redirect('/idea/login');;
            }
        }
        else{
            echo "Gagal!!!";
        }
    }
}