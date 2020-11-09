<?php namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = "user";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['first_name','last_name','email','gender','phone_number','password','upload_image','type'];
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

    function get_recent_post()
    {
        $query = $this->db->query("SELECT * FROM USER JOIN register ON user.id=register.user_id  ORDER BY user.id DESC");
        $results = $query->getResultArray();
        return $results;
    }
}