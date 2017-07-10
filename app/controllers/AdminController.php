<?php

use Phalcon\Forms\Form;
use Phalcon\Mvc\Controller;


class AdminController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->title = "Panneau d'administration";
    }

    public function new_tutoAction()
    {
        $this->view->title = "Ajout de Tuto";
    }

    public function add_tutoAction()
    {
        $tuto = new Tutos();

        if ($this->request->isPost()) {
            // Access POST data
            $tuto->setContent($this->request->getPost("editor"));
            $tuto->setTitle($this->request->getPost("name"));
            $tuto->setDate(date("Y-m-d"));
        }
        if ($tuto->save() === false) {
            echo "Umh, We can't store robots right now: \n";

            $messages = $tuto->getMessages();

            foreach ($messages as $message) {
                echo $message, "\n";
            }
        } else {
            echo 'Great, a new robot was saved successfully!';
        }
    }

}

