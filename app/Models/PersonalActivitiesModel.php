<?php namespace App\Models;
use CodeIgniter\Model;

class PersonalActivitiesModel extends Model
{
    protected $table = "personal_activities";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['user_id','interest','music','reads','movies','cooking','dress_style'];
    protected $skipValidation     = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $useSoftDeletes = false;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    

}