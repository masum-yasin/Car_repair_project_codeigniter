<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
      return view('/login_form');
    }
    public function login(){
        $session = session();
        $userModel = new UserModel();
        $eamil = $this->request->getVar('email');
        $formpass = $this->request->getVar('password');
        $data = $userModel->where('email',$eamil)->first();
        print_r($data);
    }
}
