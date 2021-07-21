<?php namespace App\Models;

use CodeIgniter\Model;

class Alamat_model extends Model
{
    
    public function getCustomer()
    {
        $builder = $this->db->table('customer');
        return $builder->get();
    }
    
    public function getKota()
    {
        $builder = $this->db->table('kota');
        return $builder->get();
    }

    public function getAlamat()
    {
        $builder = $this->db->table('alamat a');
        $builder->select('a.*, b.nama as customer_name, c.nama_kota');
        $builder->join('customer b', 'a.customer_id = b.customer_id','left');
        $builder->join('kota c', 'a.kota_id =c. kota_id','left');
        return $builder->get();
    }

    public function saveAlamat($data){
        $query = $this->db->table('alamat')->insert($data);
        return $query;
    }

    public function updateAlamat($data, $id)
    {
        $query = $this->db->table('alamat')->update($data, array('address_id' => $id));
        return $query;
    }

    public function deleteAlamat($id)
    {
        $query = $this->db->table('alamat')->delete(array('address_id' => $id));
        return $query;
    } 

  
}

