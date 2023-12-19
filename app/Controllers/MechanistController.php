<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MechanistModel;




class MechanistController extends BaseController
{
    private $mechanist;
    protected $helpers = ['form','url','file'];
    public function __construct()
    {
      $this->mechanist =new MechanistModel();
    }

    public function index()
    {
        $data['machanists'] = $this->mechanist->findAll();
        return view('machanistlist/machanist_table',$data);
    }
    public function create(){
        return view('machanistlist/machanist_create');
    }
    public function store(){
        $imgstore = $this->request->getFile('image');
        $imgName = $imgstore->getName();
        $data =[
                'name'=>$this->request->getVar('mechanist'),
                'contact'=>$this->request->getVar('contact'),
                'email'=>$this->request->getVar('email'),
                'Joining_Date'=>$this->request->getVar('date'),
                'image'=>$imgName,
        
	
        ];
        // print_r($data);
        $rules= [
            'mechanist' => 'required|max_length[100]|min_length[3]',
           //  'description' => 'required|max_length[250]|min_length[10]',
           // 'price' => 'required|numeric',
           // // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg]',
           // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg,png,webp]'

       ];
        if(!$this->validate($rules)){
            return view('machanistlist/machanist_create');
        }
        else{
            $imgstore->move('assets/uploads',$imgName);
            $this->mechanist->insert($data);
            $session = session();
            $session->getFlashdata("msg","Mechanist insert and update Successfully");
            $this->response->redirect('/machanist');
        }
    }
    // Mechanist Edit start here//
    public function edit($id){
        $data = $this->mechanist->find($id);
        return view('mechanist/edit');
    }
    
}
