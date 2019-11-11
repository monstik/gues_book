<?php


namespace application\controllers;


use application\core\Controller;

class AccountController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'default';
    }

    public function loginAction()
    {
        $this->view->Render("Вход");
    }

    public function registerAction()
    {


        if (!empty($_POST)) {
            if ($this->model->registerValidation($_POST)) {
                $this->model->register($_POST);
                $this->view->message('Success', 'регистрация прошла успешно');
            } else {
                $this->view->message('Error', $this->model->error);
            }


        }

        $this->view->Render("Регистрация");
    }
}