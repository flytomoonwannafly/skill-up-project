<?php
 namespace Application\Controller;
 use Application\Core\Controller;
 use Application\Core\View;
 use Application\Model\ModelNote;
 use Application\Model\ModelUser;

 class ControllerDashboarduser extends Controller{
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
     function action_delete_note(){
         $this->usermodel->check_logined();
         $pars = explode('/', $_SERVER['REQUEST_URI']);
         $pars = $pars[3];
         $this->modelnote->delete_note($pars);
         header("Location: /dashboarduser");
         exit();
     }
     public function action_create_note(){
        $user_id = $this->usermodel->check_logined();
        $this->view->generate('create_new_note_view.php', 'template_view.php');
        if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        if (!empty($title) && !empty($content)) {
            $this->modelnote->create_note($user_id, $title, $content);
            header("Location: /dashboarduser");
            exit();
         }
     }}
     public function action_update_note(){
         $user_id = $this->usermodel->check_logined();
         $pars = explode('/', $_SERVER['REQUEST_URI']);
         $id = $pars[3];
         $data = $this->modelnote->show_note($id);
         $this->view->generate('update_note_view.php', 'template_view.php', $data);
         if(isset($_POST['submit'])) {
             $title = $_POST['title'];
             $content = $_POST['content'];
             if (!empty($title) && !empty($content)) {
                 $this->modelnote->update_note($title, $content, $id);
                 header("Location: /dashboarduser");
                 exit();
             }
         }
     }

     public function action_logout(){
         $this->usermodel->logout();
     }

 }