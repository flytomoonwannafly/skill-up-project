<?php

return[
    #
    '' => 'application/index',
    'user/login'=> 'login/index',
    'dashboarduser/logout'=> 'dashboarduser/logout',
    'user/register' => 'register/index',
    '404' => 'application/wrong_page',
    'dashboarduser'=>'dashboarduser/index',
    'dashboarduser/delete_note/([0-9]+)?'=>'dashboarduser/delete_note/$1',
    'dashboarduser/create_note'=>'dashboarduser/create_note',
    'dashboarduser/update_note/([0-9]+)?'=>'dashboarduser/update_note/$1'


];
