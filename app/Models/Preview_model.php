<?php namespace App\Models;

use CodeIgniter\Model;

class Preview_model extends Model
{

    public function getPreview()
    {
        $builder = $this->db->table('alamat a');
        $builder->select('a.*, b.nama as customer_name, b.npwp, b.area, b.type, c.nama_kota');
        $builder->join('customer b', 'a.customer_id = b.customer_id','left');
        $builder->join('kota c', 'a.kota_id =c. kota_id','left');
        return $builder->get();
    }

  
}

