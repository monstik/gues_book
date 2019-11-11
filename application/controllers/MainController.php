<?php


namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;

class MainController extends Controller
{
    public function indexAction()
    {
        $pagination = new Pagination($this->route, $this->model->getCount());
        $vars = [
            'list' => $this->model->getPostList($this->route),
            'pagination' => $pagination->getPages(),
        ];
        $this->view->Render("Главная страница", $vars);
    }

    public function postAction()
    {
        $adminModel = new Admin();
        if (!$adminModel->is_post_exist($this->route['page'])) {
            $this->view->errorPage(404);
        }
        $vars = [
            'data' => $this->model->getPost($this->route['page']),
        ];
        $this->view->Render("Посты", $vars);
    }
}