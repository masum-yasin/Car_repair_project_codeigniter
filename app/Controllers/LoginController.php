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
        // print_r($data);
        if($data){
          $dbpass = $data['password'];
          $varified = password_verify($formpass,$dbpass);
          if($varified){
            $userData=[
              'name'=>$data['name'],
              'email'=>$data['email'],
              'isLoggedIn'=>TRUE
            ];
            $session->set($userData);
            return redirect()->to('/');

          }
          else{
            $session->setFlashdata('msg','Your Password is incorrect');
            return redirect()->to('/login');
          }
          
        }
       
        else{
          $session->setFlashdata('msg','your Email is incorrect');
          return redirect()->to('/login');
        }
    }
    public function logout(){
      session()->destroy();
      return redirect()->to('/login');
    }
}
