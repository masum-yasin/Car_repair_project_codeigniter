<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;



class CustomerController extends BaseController
{
    private $customer;
    protected $helpers = ['form'];
    public function __construct()
    {
      $this->customer = new CustomerModel();  
    }

    public function index()
    {
        $data['customers'] = $this->customer->findAll();
        return view('customer_list/customer_table',$data);
    }
   public function create(){
    return view('customer_list/customer_form');
   }
   public function store(){
    $data = [
        'name'=>$this->request->getVar('name'),
        'email'=>$this->request->getVar('email'),
        'phone_Number'=>$this->request->getVar('phone'),
        'address' =>$this->request->getVar('address'),
        'state' =>$this->request->getVar('state'),
        'created_at' =>$this->request->getVar('date'),
        'details' =>$this->request->getVar('subject'),
    ];
    // print_r($data);
    $rules= [
        'name' => 'required|max_length[100]|min_length[3]',
       //  'description' => 'required|max_length[250]|min_length[10]',
       // 'price' => 'required|numeric',
       // // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg]',
       // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg,png,webp]'

   ];
   if(! $this->validate($rules)){
        return view('/customer/create/');
   }
   else{
   $this->customer->insert($data);
   $session = session();
   $session->getFlashdata('msg','inserted And Update Successfully');
   $this->response->redirect('/customer');
   }
    
   }
}

