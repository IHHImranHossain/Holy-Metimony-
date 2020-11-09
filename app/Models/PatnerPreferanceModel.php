<?php namespace App\Models;
use CodeIgniter\Model;

class PatnerPreferanceModel extends Model
{
    protected $table = "partner_preferance";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['user_id','age_range_from','age_range_to','height_range_from','height_range_to','marital_status','children','religion','complexion',
                                'body_type','drink','smoke','diet','education','profession','residence','family_value','mother_tongue',
                                'country_of_origin','district_residence'];
    protected $skipValidation     = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $useSoftDeletes = false;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    

}