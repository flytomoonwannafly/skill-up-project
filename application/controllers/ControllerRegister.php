<?php
namespace Application\Controller;
use Application\Core\Controller;
use Application\Model\ModelUser;
use Application\Core\View;
class ControllerRegister extends Controller
{

    function __construct()
    {
        $this->model = new ModelUser();
        $this->view = new View();
    }

    function action_index()
    {
        $data = [];
        if (isset($_POST['btn'])) { // перевіряємо, чи була натиснута кнопка "Увійти"
            $login = $_POST['login'];
            $password = $_POST['password'];
            if (!empty($login) && !empty($password)) {
                $data['is_uniq'] = $this->model->register_user($login, $password);
            }
        }
        $this->view->generate('register_view.php', 'template_view.php', $data);
    }
}
