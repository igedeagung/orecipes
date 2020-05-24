<?php
namespace Orecipes\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Orecipes\Application\Register\RegisterService;
use Orecipes\Application\Register\RegisterRequest;

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
                return $this->response->redirect('orecipes/login');
            }
            else{
                return $this->response->redirect('orecipes/register');
            }
        }
        else{
            echo "Gagal!!!";
        }
        
    }
}
