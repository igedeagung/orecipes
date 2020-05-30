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
            $kpassword = $this->request->getPost('kpassword');

            $request = new RegisterRequest($nama, $email, $password, $kpassword);
            $response = $this->registerService->handle($request);
            
            if($response['kode']==="Berhasil"){
                $this->flashSession->success($response['pesan']);
                return $this->response->redirect('orecipes/login');
            }
            else{
                $this->flashSession->error($response['pesan']);
                return $this->response->redirect('orecipes/register');
            }
        }
        else{
            $this->flashSession->error("Harap isi semua bidang!");
            return $this->response->redirect('orecipes/register');
        }
        
    }
}
