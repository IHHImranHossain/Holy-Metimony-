<?php namespace App\Models;
use CodeIgniter\Model;

class PersonalRegistratioinModel extends Model
{
    protected $table = "register";
    protected $primaryKey = 'id';
    protected $DBGroup = "default";
    protected $allowedFields = ['user_id','profile_created','looking_for','community','dob','location','self_number',
                                'guardian_number','emergency_number','convenient_time','contact_person_name',
                                'relation_contact_person','present_address','permanent_address','marital_status',
                                'children','height','body_type','hair_color','eye_color','complexion','disabilities',
                                'blood','education','profession','annual_income','work_place','diet','drink','smoke',
                                'mother_tongue','can_speak','yourself','family_background','family_value','personal_value',
                                'father','mother','no_of_brother','no_of_sister','whom_brother_married','whom_sister_married',
                                'district','zip_code','parmanent_resident','city_residence','state_residence','country_origin'];
    protected $skipValidation     = false;
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $useSoftDeletes = false;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}