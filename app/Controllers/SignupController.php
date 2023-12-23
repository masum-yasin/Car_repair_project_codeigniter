<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;



class SignupController extends BaseController
{
   protected $helpers = ['form','url'];
  
    public function index()
    {
        $data = [];
        return view('/signup_form',$data);
    }
   public function store(){
    $rules = [
        'user_name'          => 'required|min_length[4]|max_length[50]',
        'email'         => 'required|min_length[4]|max_length[100]|valid_email',
        'password'      => 'required|min_length[4]|max_length[50]',
        // 'confirmpassword'  => 'matches[password]'
    ];
    if($this->validate($rules)){
        $data = [
            'name'=>$this->request->getVar('user_name'),
            'email'=>$this->request->getVar('email'),
            'password'=>password_hash($this->request->getVar('password'),PASSWORD_DEFAULT),
        ];
        $userModel = new UserModel();
        $userModel->save($data);
        $session = session();
        $session->getFlashdata('msg','Singup Successfully');
        return redirect()->to('/login');
   }
   else{
    $data['validation']=$this->validator;
    return view('/signup');
   }
  
}
}
