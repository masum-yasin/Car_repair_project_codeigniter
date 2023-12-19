<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;



class ServiceController extends BaseController
{
    private $service;
    protected $helpers=['form','url','file'];
    public function __construct()
    {
        $this->service = new ServiceModel();
    }
    public function index()
    {
        $data['services'] = $this->service->findAll();
        return view('service/index',$data);
    }
    public function create(){
        return view('service/create');
    }
    public function store(){
        
        $imagestore= $this->request->getFile('img');
        $img_Name =  $imagestore->getName();
        $data =[
            'service' =>$this->request->getVar('service'),
            'description' => $this->request->getVar('description'),
            'price'   =>$this->request->getVar('price'),
            'date_created' => $this->request->getVar('date'),
            'image'=> $img_Name, 

        ];
        // print_r($data);
        $rules= [
             'service' => 'required|max_length[100]|min_length[3]',
            //  'description' => 'required|max_length[250]|min_length[10]',
            // 'price' => 'required|numeric',
            // // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg]',
            // 'image' => 'uploaded[image]|max_size[image,102400]|ext_in[image,jpg,jpeg,png,webp]'

        ];
        
        if(! $this->validate($rules)){
            return view('/service/create');
        }
        else{
        
           $imagestore->move('assets/uploads', $img_Name);
            $this->service->insert($data);
            $session = session();
            $session->setFlashdata('msg','service insert and Upload Successfully');
            $this->response->redirect('/service');
        }

    }
    // Data Edit of Service//
    public function edit($id){
        $data = $this->service->find($id);
        return view('service/edit',$data);
    }
    // Data Update Of service//
    public function update($id){
        $data = [
           'service'=> $this->request->getVar('service'),
           'description'=> $this->request->getVar('description'), // form attribute input
           'price'=> $this->request->getVar('price'),
           'date_created'=> $this->request->getVar('date'),
           'image'=> $this->request->getVar('image'),

        ];
        // Service update section
        $this->service->update($id,$data);
        $session = session();
        $session->setFlashdata('msg' ,'update Successfully');
        $this->response->redirect('/service');

    }
    public function delete($id){
        $this->service->where('id',$id);
        $this->service->delete();
        $this->response->redirect('/service');
    }
   
}
