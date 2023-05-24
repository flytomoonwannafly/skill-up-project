<?php

namespace Application\Controller;

use Application\Core\Controller;
use Application\Model\ModelUser;
use Application\Core\View;

class ControllerApplication extends Controller
{
    function __construct()
    {
        $this->usermodel = new ModelUser();
        $this->view = new View();
    }
    function action_index()
    {
        $user_id = $this->usermodel->check_logined();
        if (!empty($user_id)){
            header("Location: /dashboarduser");
            exit();
        }


        $this->view->generate('main_view.php');
    }

    function action_wrong_page()
    {
        $this->view->generate('404_view.php');
    }
}