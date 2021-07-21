<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alamat_model;

class Alamat extends Controller
{
    public function index()
    {
        $model = new Alamat_model();
        $data['alamat']  = $model->getAlamat()->getResult();
        $data['customer'] = $model->getCustomer()->getResult();
        $data['kota'] = $model->getKota()->getResult();
        echo view('alamat_view', $data);
    }

    public function save()
    {
        $model = new Alamat_model();
        $data = array(
            'customer_id'    => $this->request->getPost('customer'),
            'alamat'         => $this->request->getPost('alamat'),
            'kode_pos'       => $this->request->getPost('kode_pos'),
            'no_telp'        => $this->request->getPost('telp'),
            'contact_person' => $this->request->getPost('contact'),
            'kota_id'        => $this->request->getPost('kota'),
            'type_alamat'    => $this->request->getPost('type'),
        );
        $model->saveAlamat($data);
        return redirect()->to('/alamat');
    }

    public function update()
    {
        $model = new Alamat_model();
        $id = $this->request->getPost('address_id');
        $data = array(
            'customer_id'    => $this->request->getPost('customer'),
            'alamat'         => $this->request->getPost('alamat'),
            'kode_pos'       => $this->request->getPost('kode_pos'),
            'no_telp'        => $this->request->getPost('telp'),
            'contact_person' => $this->request->getPost('contact'),
            'kota_id'        => $this->request->getPost('kota'),
            'type_alamat'    => $this->request->getPost('type'),
        );
        $model->updateAlamat($data, $id);
        return redirect()->to('/alamat');
    }

    public function delete()
    {
        $model = new Alamat_model();
        $id = $this->request->getPost('address_id');
        $model->deleteAlamat($id);
        return redirect()->to('/alamat');
    }

}