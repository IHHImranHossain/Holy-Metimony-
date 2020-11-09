<?php namespace App\Models;
use CodeIgniter\Model;

class AdminLoginModel extends Model
{
    protected $table = "admin";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['user_name','email','password','type'];
    protected $skipValidation     = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $useSoftDeletes = false;
    protected $returnType = 'array';
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    
    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
    


    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }
    


    protected function passwordHash(array $data)
    {
        if(isset($data['data']['password']))
          $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    
        return $data;
    }

}