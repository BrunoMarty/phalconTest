<?php

use Phalcon\Forms\Form;
use Phalcon\Mvc\Controller;


class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->title = "Phalcon-FR";
    }

    public function tutoAction()
    {
        $this->view->title = "Liste de Tutos test";
    }

    public function forumAction()
    {

        $categories =  Categories::find();
        $tab = Array();
        foreach($categories as $key => $cat) {
            $scategories = Categories::find("parent_id =" . $cat->getId());
            foreach ($scategories as $skey => $scat) {
                $tab[$scat->getNom()] = $cat->getNom();
            }
        }
        $this->view->categories = $tab;
        $this->view->title = "Forum";


    }

}

