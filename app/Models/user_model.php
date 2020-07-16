<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class user_model extends Model
{
    protected $table = 'datauser';
    protected $allowedFields =['id','name','email'];
 
    public function getUser()
    {
        $builder = $this->db->table('datauser');
        $builder->select('*');
        return $builder->get();
    }

    public function saveUser($data){
        $query = $this->db->table('datauser')->insert($data);
        return $query;
    }
 
    public function updateUser($data, $id)
    {
        $query = $this->db->table('datauser')->update($data, array('id' => $id));
        return $query;
    }
 
    public function deleteUser($id)
    {
        $query = $this->db->table('datauser')->delete(array('id' => $id));
        return $query;
    } 
 
   
}