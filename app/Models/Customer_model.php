<?php namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    
    public function getCategory()
    {
        $builder = $this->db->table('category');
        return $builder->get();
    }

    public function getCustomers()
    {
        $builder = $this->db->table('customer');
        $builder->select('*');
        return $builder->get();
    }

    public function saveProduct($data){
        $query = $this->db->table('customer')->insert($data);
        return $query;
    }

    public function updateCustomer($data, $id)
    {
        $query = $this->db->table('customer')->update($data, array('customer_id ' => $id));
        return $query;
    }

    public function deleteCustomer($id)
    {
        $query = $this->db->table('customer')->delete(array('customer_id ' => $id));
        return $query;
    } 

  
}