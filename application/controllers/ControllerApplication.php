<?php

namespace Application\Controller;
use Application\Core\Controller;

class ControllerApplication extends Controller
{
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }
    function wrong_page(){
        $this->view->generate('404_view.php', 'template_view.php');
    }
}