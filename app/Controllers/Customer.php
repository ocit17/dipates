<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Customer_model;

class Customer extends Controller
{
    public function index()
    {
        $model = new Customer_model();
        $data['customers']  = $model->getCustomers()->getResult();
        echo view('customer_view', $data);
    }

    public function save()
    {
        $model = new Customer_model();
        $data = array(
            'nama' => $this->request->getPost('name'),
            'npwp' => $this->request->getPost('npwp'),
            'area' => $this->request->getPost('area'),
            'type' => $this->request->getPost('type'),
        );
        $model->saveProduct($data);
        return redirect()->to('/customer');
    }

    public function update()
    {
        $model = new Customer_model();
        $id = $this->request->getPost('customer_id');
        $data = array(
            'nama' => $this->request->getPost('name'),
            'npwp' => $this->request->getPost('npwp'),
            'area' => $this->request->getPost('area'),
            'type' => $this->request->getPost('type'),
        );
        $model->updateCustomer($data, $id);
        return redirect()->to('/customer');
    }

    public function delete()
    {
        $model = new Customer_model();
        $id = $this->request->getPost('customer_id');
        $model->deleteCustomer($id);
        return redirect()->to('/customer');
    }

}