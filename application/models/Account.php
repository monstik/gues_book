<?php


namespace application\models;


use application\core\Model;

class Account extends Model
{
    public $error;

    public function registerValidation($post)
    {
        $loginL = iconv_strlen($post['login']);
        $passwordL = iconv_strlen($post['password']);

        if ($loginL > 20 or $loginL < 3) {
            $this->error = 'длинна логина должна быть от 3 до 20 символов';
            return false;
        }
        if (!preg_match("#^[_a-zA-Z][-a-zA-Z0-9-_]*$#", $post['login'])) {
            $this->error = 'недопустимый логин';
            return false;
        }
        if ($passwordL > 20 or $passwordL < 3) {
            $this->error = 'длинна пароля должна быть от 3 до 20 символов';
            return false;
        }
        if (!preg_match("#^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$#", $post['password'])) {
            $this->error = 'Пароль должен состоять хотя бы из 6 символов и содержать минимум одну цифру, одну заглавную и одну строчную буквы! Пример : 123456Test';
            return false;
        }
        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'неверно указан email';
            return false;
        }
        if ($this->is_login_exists($post['login'])) {
            $this->error = 'этот логин уже занят';
            return false;
        }
        if ($this->is_email_exists($post['email'])) {
            $this->error = 'пользователь с таким email уже зарегистрирован';
            return false;
        }

        return true;
    }

    public function is_login_exists($str)
    {
        $params = [
            'login' => $str,
        ];

        if ($this->db->row('SELECT * FROM users WHERE login = :login', $params)) {
            return true;
        }

        return false;
    }

    public function is_email_exists($str)
    {
        $params = [
            'email' => $str,
        ];

        if ($this->db->row('SELECT * FROM users WHERE email = :email', $params)) {
            return true;
        }

        return false;
    }

    public function register($post)
    {

    }
}