<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ServiceModel;



class ServiceController extends BaseController
{
    private $service;
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
        $data =[
            'service' =>$this->request->getVar('service'),
            'description' => $this->request->getVar('description'),
            'price'   =>$this->request->getVar('price'),
            'date_created' => $this->request->getVar('date'),

        ];
        // print_r($data);
        $rules= [
             'service' => 'required|max_length[100]|min_length[3]',
             'description' => 'required|max_length[250]|min_length[10]',
            // 'description' => 'required|max_length[150]min_length[10]',
        ];
        if( $this->validate($rules)){
            return view('/service/create');
        }
        else{
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
        ];
        $this->service->update($id,$data);
        $session = session();
        $session->setFlashdata('msg' ,'update Successfully');
        $this->response->redirect('/service');

    }
   
}
