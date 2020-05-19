<?php
namespace Idy\Idea\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Idy\Idea\Application\Register\RegisterService;
use Idy\Idea\Application\Register\RegisterRequest;

class RegisterController extends Controller
{
    protected $registerService;

    public function initialize()
    {
        $this->registerService = $this->di->get('registerService');
    }
    public function indexAction(){
        
    }
    public function submitAction(){
        if ($this->request->isPost()) {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $request = new RegisterRequest($nama, $email, $password);
            $response = $this->registerService->handle($request);
            if($response==="Success"){
                return $this->response->redirect('idea/post');
            }
            else{
                return $this->response->redirect('idea/register');
            }
        }
        else{
            echo "Gagal!!!";
        }
        
    }
}
