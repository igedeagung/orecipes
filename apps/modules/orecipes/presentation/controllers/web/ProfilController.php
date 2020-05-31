<?php
namespace Orecipes\Presentation\Controllers\Web;

use Phalcon\Mvc\Controller;
use Orecipes\Application\Login\LoginService;
use Orecipes\Application\Login\LoginRequest;
use Orecipes\Application\Register\RegisterService;
use Orecipes\Application\Register\RegisterRequest;
use Orecipes\Application\GetUserById\GetUserByIdRequest;
use Orecipes\Application\EditProfil\EditProfilRequest;
use Orecipes\Application\EditProfil\EditProfilService;

class ProfilController extends Controller
{
    public function registerAction(){
        
    }

    public function registerSubmitAction(){
        if ($this->request->isPost()) {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $kpassword = $this->request->getPost('kpassword');

            $request = new RegisterRequest($nama, $email, $password, $kpassword);
            $response = $this->registerService->handle($request);
            
            if($response['kode']==="Berhasil"){
                $this->flashSession->success($response['pesan']);
                return $this->response->redirect('orecipes/profil/login');
            }
            else{
                $this->flashSession->error($response['pesan']);
                return $this->response->redirect('orecipes/profil/register');
            }
        }
        else{
            $this->flashSession->error("Harap isi semua bidang!");
            return $this->response->redirect('orecipes/profil/register');
        }
    }

    public function loginAction(){
        if($this->session->has("id")){
            $this->flashSession->warning("Anda telah login");
            return $this->response->redirect('orecipes/recipe');
        }
    }
    public function loginSubmitAction(){
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
                return $this->response->redirect('orecipes/profil/login');
            }
        }
        else{
            $this->flashSession->error("Harap isi semua bidang!");
            return $this->response->redirect('orecipes/profil/login');
        }
    }

    public function logoutAction(){
        $this->session->destroy();
        $this->flashSession->success("Anda telah keluar dari akun");
        $this->response->redirect();
    }

    public function editAction(){
        $id = $this->session->get('id');
        $response = $this->getUserByIdService->handle($id);
        if($response['kode'] === "Berhasil"){
            $this->view->user=$response['hasil'];
        }
        else{
            $this->flashSession->error($response['pesan']);
            return $this->response->redirect('orecipes/recipe');
        }
    }

    public function editSubmitAction(){
        $id = $this->session->get('id');
        if ($this->request->isPost()) {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');

            $request = new EditProfilRequest($id, $nama, $email);
            $response = $this->editProfilService->handle($request);
            
            if($response['kode']==="Berhasil"){
                $this->flashSession->success($response['pesan']);
                return $this->response->redirect('orecipes/recipe');
            }
            else{
                $this->flashSession->error($response['pesan']);
                return $this->response->redirect('orecipes/profil/edit');
            }
        }
        else{
            $this->flashSession->error("Harap isi semua bidang!");
            return $this->response->redirect('orecipes/profil/edit');
        }
    }
}