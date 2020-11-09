<?php namespace App\Models;
use CodeIgniter\Model;
$db = \Config\Database::connect();
class AttributesModel extends Model
{
    protected $table = "attributes";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['parent_id','attribute_name'];
    protected $skipValidation     = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $useSoftDeletes = false;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $db;

    
    function getAllGroups()
    {
        $query = $this->db->query("SELECT * FROM attributes where parent_id='Null'");
        $results = $query->getResultArray();
        return $results;
    }
}

