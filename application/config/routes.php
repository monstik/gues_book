<?php
return [
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add'
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit'
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete'
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout'
    ],
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login'
    ],
    'admin/posts/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts'
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts'
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'user/userProfile' => [
        'controller' => 'user',
        'action' => 'userProfile'
    ],
    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],
    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post'
    ],
];