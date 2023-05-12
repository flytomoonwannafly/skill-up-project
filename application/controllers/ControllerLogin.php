<?php
namespace Application\Controller;
use Application\Core\Controller;
use Application\Model\ModelUser;
use Application\Core\View;
class ControllerLogin extends Controller {
    function __construct()
    {
        $this->model = new ModelUser();
        $this->view = new View();
    }

    function action_index()
    {
        $data = [];
        if(isset($_POST['btn'])) { // перевіряємо, чи була натиснута кнопка "Увійти"
            $login = $_POST['login'];
            $password = $_POST['password'];

            if(!empty($login) && !empty($password)) { // перевіряємо, чи заповнені поля логіну та пароля

                $data = $this->model->auth($login, $password);
                if($data == true){
                    header("Location: /dashboarduser");
                    exit();
                }
                else{
                    $data['is_logined'] = false;
                }

            }
        }
        $this->view->generate('login_view.php', 'template_view.php', $data);
    }
}