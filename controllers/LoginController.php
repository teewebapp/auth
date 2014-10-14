<?php

namespace Tee\Auth\Controllers;

use Tee\System\Controllers\BaseController;
use View, Input, Auth, Redirect, Theme, Config;

class LoginController extends BaseController {

    public function __construct() {
        Config::set('site.theme', 'admin');
        parent::__construct();
    }

    public function index() {
        $username = Input::get('username');
        $password = Input::get('password');
        $error = null;
        if(Input::has('username')) 
        {
            if (Auth::attempt(array('email' => $username, 'password' => $password))) {
                return Redirect::intended('admin');
            } else {
                $error = 'Nome de usuário ou senha inválido';
            }
        }
        return View::make('auth::login.index', compact(
            'username',
            'password',
            'error'
        ));
    }

    public function logout() {
        Auth::logout();
        return Redirect::to('/login');
    }

}