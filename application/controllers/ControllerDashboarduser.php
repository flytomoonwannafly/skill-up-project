<?php
 namespace Application\Controller;
 use Application\Core\Controller;
 use Application\Core\View;
 use Application\Model\ModelDashboarduser;

 class ControllerDashboarduser extends Controller{
     function __construct()
     {
         $this->model = new ModelDashboarduser();
         $this->view = new View();
     }

     function action_index()
     {
         $data=[];
         $id = 1;
         $data = $this->model->show_notes($id);
         $this->view->generate('dashboarduser_view.php', 'template_view.php', $data);
     }
     function action_delete_note($id){
         $this->model->delete_note($id);
         header("Location: /dashboarduser");
         exit();
     }
 }