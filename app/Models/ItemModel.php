<?php namespace App\Models;
use CodeIgniter\Model;
$db = \Config\Database::connect();
class ItemModel extends Model
{
    protected $table = "items";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['attribute_id','items_name'];
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
        $query = $this->db->query("SELECT * FROM attributes where parent_id != 'Null'");
        $results = $query->getResultArray();
        return $results;
    }

    // Start First Registration Function
    function getprofilecreated()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 49 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getcommunity()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 52 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getlookingfor()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 50 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getlocation()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 53 ");
        $results = $query->getResultArray();
        return $results;
    }
    // End First Registration Function


    // Start Second Registration Function
    function get_marital_status()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 60 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_height()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 62 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_hair_color()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 64 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_complexion()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 66 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_blood()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 68 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_profession()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 70 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_annual_income()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 71 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_drink()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 73 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_children()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 61 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_body_type()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 63 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_eye_color()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 65 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_disabilities()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 67 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_education()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 69 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_diet()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 72 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_smoke()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 74 ");
        $results = $query->getResultArray();
        return $results;
    }
    // End Second Registration Function


    // Start Third Registration Function
    function get_mother_tongue()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 75 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_family_value()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 76 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_father()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 78 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_no_of_brother()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 88 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_whom_brother_married()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 90 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_district()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 92 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_personal_value()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 77 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_mother()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 79 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_no_of_sister()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 89 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_whom_sister_married()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 91 ");
        $results = $query->getResultArray();
        return $results;
    }
    // End Third Registration Function


    // Start Fifth Registration Function
    function get_age_range()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 96 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_maritalstatus()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 60 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_religion()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 52 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getcomplexion()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 66 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getprofession()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 70 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getdrink()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 73 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getmother_tongue()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 75 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getdistrict()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 92 ");
        $results = $query->getResultArray();
        return $results;
    }
    function get_height_range()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 62 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getchildren()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 61 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getbody_type()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 63 ");
        $results = $query->getResultArray();
        return $results;
    }
    function geteducation()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 69 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getdiet()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 72 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getsmoke()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 74 ");
        $results = $query->getResultArray();
        return $results;
    }
    function getfamily_value()
    {
        $query = $this->db->query("SELECT * FROM items where attribute_id = 76 ");
        $results = $query->getResultArray();
        return $results;
    }
    // End Fifth Registration Function
}

