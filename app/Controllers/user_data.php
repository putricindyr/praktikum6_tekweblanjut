<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\user_model;
 
class user_data extends Controller
{
    public function index()
    {
        $model = new user_model();
        $data['datauser']  = $model->getUser()->getResult();
        echo view('/user_view', $data);
    }
 
    public function save()
    {
        $model = new user_model();
        $data = array(
            'id'         => $this->request->getPost('id'),
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),

        );
        $model->saveUser($data);
        return redirect()->to(base_url('user_data')); 
    }
 
    public function update()
    {
        $model = new user_model();
        $id = $this->request->getPost('id');
        $data = array(
            'id'        => $this->request->getPost('id'),
            'name'      => $this->request->getPost('name'),
            'email'     => $this->request->getPost('email'),

        );
        $model->updateUser($data, $id);
        return redirect()->to(base_url('user_data')); 
    }
 
    public function delete()
    {
        $model = new user_model();
        $id = $this->request->getPost('id');
        $model->deleteUser($id);
        return redirect()->to(base_url('user_data')); 
    }
 
}