<?php


namespace application\controllers;


use application\core\Controller;

class UserController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'user';
    }

    public function userProfileAction()
    {
        $this->view->Render("Профиль пользователя");
    }
}