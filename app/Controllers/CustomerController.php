<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;



class CustomerController extends BaseController
{
    private $customer;
    protected $helpers = ['form','url'];
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
   public function edit($id){
    $data = $this->customer->find($id);
    return view('customer_list/customer_edit',$data);
   }
   public function update($id){
     $data = [
        'name'=> $this->request->getVar('name'),
        'email'=> $this->request->getVar('email'),
        'phone_Number'=> $this->request->getVar('phone'),
        'address' => $this->request->getVar('address'),
        'state' =>$this->request->getVar('state'),
        'created_at'=>$this->request->getVar('date'),
        'details'  =>$this->request->getVar('subject')
     ];
     $this->customer->update($id,$data);
     $session = session();
     $session->getFlashdata('msg','Update Successfully');
     $this->response->redirect('/customer');
   }
   public function delete($id){
    $this->customer->where('id',$id);
   $this->customer->delete();
   $this->response->redirect('/customer');
   }
}

