<?php

namespace Idy\Idea\Presentation\Controllers\Web;

#use Idy\Idea\Application\CreateNewIdea\CreateNewIdeaRequest;
#use Idy\Idea\Application\CreateNewIdea\CreateNewIdeaService;
#use Idy\Idea\Application\RateIdea\RateIdeaRequest;
#use Idy\Idea\Application\RateIdea\RateIdeaService;
#use Idy\Idea\Application\ViewAllIdeas\ViewAllIdeasService;
#use Idy\Idea\Application\VoteIdea\VoteIdeaRequest;
#use Idy\Idea\Application\VoteIdea\VoteIdeaService;
use Phalcon\Mvc\Controller;

class UserController extends Controller
{
    public function initialize()
    {
    }

    protected function send($data, $code = 200, $message = 'OK')
    {
        $this->response->setContentType('application/json');

        $json = json_encode($data, JSON_PRETTY_PRINT);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException('Failed to convert server response to JSON: ' . json_last_error_msg());
        }

        $this->response->setStatusCode($code, $message);
        $this->response->setContent($json);
        $this->response->send();
    }

    public function indexAction()
    {
        
    }

    public function registerPageAction()
    {
        return $this->view->pick('register');
    }

    public function registerAction()
    {
        $fullName = $this->request->getPost('fullName');
        $userEmail = $this->request->getPost('userEmail');
        $userName  = $this->request->getPost('userName');
        $password = $this->security->hash($this->request->getPost('password'));

        

    }
}