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
            $this->flashSession->warning("Anda telah login");
            return $this->response->redirect('orecipes/recipe');
        }
    }
    public function submitAction(){
        if ($this->request->isPost()) {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $request = new LoginRequest($email, $password);
            $response = $this->loginService->handle($request);

            $id = $response['id'];
            if($response['kode']==="Berhasil"){
                $this->session->set("id", $id);
                $this->flashSession->success($response['pesan']);
                return $this->response->redirect('orecipes/recipe');
            }
            else{
                $this->flashSession->error($response['pesan']);
                return $this->response->redirect('orecipes/login');
            }
        }
        else{
            $this->flashSession->error("Harap isi semua bidang!");
            return $this->response->redirect('orecipes/login');
        }
    }

    public function logoutAction(){
        $this->session->destroy();
        $this->flashSession->success("Anda telah keluar dari akun");
        $this->response->redirect();
    }
}