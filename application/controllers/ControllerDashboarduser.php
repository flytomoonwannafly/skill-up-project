<?php
 namespace Application\Controller;
 use Application\Core\Controller;
 use Application\Core\View;
 use Application\Model\ModelDashboarduser;
 use Application\Model\ModelUser;

 class ControllerDashboarduser extends Controller{
     function __construct()
     {
         $this->model = new ModelDashboarduser();
         $this->usermodel = new ModelUser();
         $this->view = new View();
     }

     function action_index()
     {
         if(!($user_id = $this->usermodel->is_user_logined())){
             header("Location: /");
             exit();
         }
         $data = $this->model->show_notes($user_id);
         $this->view->generate('dashboarduser_view.php', 'template_view.php', $data);
     }
     function action_delete_note(){
         if(!($user_id = $this->usermodel->is_user_logined())){
             header("Location: /");
             exit();
         }
         $pars = explode('/', $_SERVER['REQUEST_URI']);
         $pars = $pars[3];
         $this->model->delete_note($pars);
         header("Location: /dashboarduser");
         exit();
     }
     public function action_create_note(){
         if(!($user_id = $this->usermodel->is_user_logined())){
             header("Location: /");
             exit();
         }
        $title = $_POST['title'];
        $content = $_POST['content'];
        if (!empty($title) && !empty($content)) {
            $this->model->create_note($user_id, $title, $content);
            header("Location: /dashboarduser");
            exit();
         }
     }
     public function action_display_form() {
         if(!($user_id = $this->usermodel->is_user_logined())){
             header("Location: /");
             exit();
         }
         $this->view->generate('create_new_note_view.php', 'template_view.php');
     }

     public function action_logout(){
         $this->usermodel->logout();
     }

 }