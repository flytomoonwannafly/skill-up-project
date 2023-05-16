<?php

namespace Application\Controller;

use Application\Core\Controller;
use Application\Core\View;
use Application\Model\ModelNote;
use Application\Model\ModelUser;

class ControllerDashboarduser extends Controller
{
    function __construct()
    {
        $this->modelnote = new ModelNote();
        $this->usermodel = new ModelUser();
        $this->view = new View();
    }

    function action_index()
    {
        $user_id = $this->usermodel->check_logined();
        $data = $this->modelnote->show_notes($user_id);
        $this->view->generate('dashboarduser_view.php', 'template_view.php', $data);
    }

    function action_delete_note($id)
    {
        $this->usermodel->check_logined();
        $this->modelnote->delete_note($id);
        header("Location: /dashboarduser");
        exit();
    }

    public function action_create_note()
    {
        $user_id = $this->usermodel->check_logined();
        $this->view->generate('form_note_view.php', 'template_view.php');
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            if (!empty($title) && !empty($content)) {
                $this->modelnote->create_note($user_id, $title, $content);
                header("Location: /dashboarduser");
                exit();
            }
        }
    }

    public function action_update_note($id)
    {
        $user_id = $this->usermodel->check_logined();
        $data = $this->modelnote->get_note_date($id);
        $this->view->generate('form_note_view.php', 'template_view.php', $data);
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            if (!empty($title) && !empty($content)) {
                $this->modelnote->update_note($title, $content, $id);
                header("Location: /dashboarduser");
                exit();
            }
        }
    }

    public function action_logout()
    {
        $this->usermodel->logout();
    }

}