<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PersonalRegistratioinModel;
use App\Models\PersonalActivitiesModel;
use App\Models\PatnerPreferanceModel;
use App\Models\AttributesModel;
use App\Models\ItemModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class SearchController extends BaseController
{
    public function __construct()
    {
        $this->helpers = array_merge($this->helpers, ['url','form']);
    }
    public function quick_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['age_ranges'] = $items->get_age_range();
        $data['locations'] = $items->getlocation();
        return view('user/search/quick_search',$data);
    }
    public function quick_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.community,register.dob,register.location,register.marital_status
        ,register.height,register.profession,register.mother_tongue
        ,partner_preferance.age_range_from, partner_preferance.age_range_to,');
        $builder->join('register', 'user.id = register.user_id');
        $builder->join('partner_preferance', 'user.id = partner_preferance.user_id');
        $query = $builder->get();
        $data['quick_search_data'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
			"age_range_from" => $this->request->getVar("age_range_from"),
            "age_range_to" => $this->request->getVar("age_range_to"),
            "community" => $this->request->getVar("community"),
            "marital_status" => $this->request->getVar("marital_status"),
            "location" => $this->request->getVar("location"),
			
        ];
        return view('user/search/quick_search_fetch',$data);
    }
    public function profession_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['professions'] = $items->get_profession();
        return view('user/search/profession_search',$data);
    }
    public function profession_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for, register.community,register.dob,register.location,register.marital_status
        ,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['profession_search_data'] = $query->getResultArray();

        // dd($results['quick_search_data']);
        // exit();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "community" => $this->request->getVar("community"),
            "profession" => $this->request->getVar("profession"),
			
        ];
        return view('user/search/profession_search_fetch',$data);
    }
    public function marital_status_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['maritalstatus'] = $items->get_marital_status();
        return view('user/search/marital_status_search',$data);
    }
    public function marital_status_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.community,register.dob,register.location,register.marital_status
        ,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['marital_status_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "marital_status" => $this->request->getVar("marital_status"),
			
        ];
        return view('user/search/marital_status_search_fetch',$data);
    }
    public function education_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['educations'] = $items->get_education();
        return view('user/search/education_search',$data);
    }
    public function education_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.education,register.community,register.dob,register.location
        ,register.marital_status,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['education_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "education" => $this->request->getVar("education"),
			
        ];
        return view('user/search/education_search_fetch',$data);
    }
    public function major_active_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['disabiliti'] = $items->get_disabilities();
        return view('user/search/major_active_search',$data);
    }
    public function major_active_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.disabilities,register.community,register.dob,register.location
        ,register.marital_status,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['major_active_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "disabilities" => $this->request->getVar("disabilities"),
			
        ];
        return view('user/search/major_active_search_fetch',$data);
    }
    public function community_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['communitys'] = $items->getcommunity();
        return view('user/search/community_search',$data);
    }
    public function community_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.community,register.dob,register.location,register.marital_status
        ,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['community_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "community" => $this->request->getVar("community"),
			
        ];
        return view('user/search/community_search_fetch',$data);
    }
    public function district_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['districts'] = $items->get_district();
        return view('user/search/district_search',$data);
    }
    public function district_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['locations'] = $items->getlocation();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.district,register.community,register.dob,register.location
        ,register.marital_status,register.height,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['district_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "district" => $this->request->getVar("district"),
			
        ];
        return view('user/search/district_search_fetch',$data);
    }
    public function view_all_search()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['locations'] = $items->getlocation();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.community,register.dob,register.location,register.marital_status,register.height
        ,register.profession,register.mother_tongue');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['alldata'] = $query->getResultArray();

        $session = session();
		$data['user_id'] = $session->get('id');
        $get_id = $session->get('id');
        
        return view('user/search/view_all_search',$data);
    }
    public function advance_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['childrens'] = $items->get_children();
        $data['mother_tongues'] = $items->get_mother_tongue();
        $data['family_values'] = $items->get_family_value();
        $data['districts'] = $items->get_district();
        $data['educations'] = $items->get_education();
        $data['professions'] = $items->get_profession();
        $data['locations'] = $items->getlocation();
        return view('user/search/advance_search',$data);
    }
    public function advance_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['locations'] = $items->getlocation();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image,register.looking_for,register.community,
        register.marital_status,register.children,register.mother_tongue,register.family_value,register.district,register.education
        ,register.community,register.dob,register.location,register.height,register.profession');
        $builder->join('register', 'user.id = register.user_id');
        $query = $builder->get();
        $data['advance_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "community" => $this->request->getVar("community"),
            "marital_status" => $this->request->getVar("marital_status"),
            "children" => $this->request->getVar("children"),
            "mother_tongue" => $this->request->getVar("mother_tongue"),
            "family_value" => $this->request->getVar("family_value"),
            "district" => $this->request->getVar("district"),
            "education" => $this->request->getVar("education"),
            "profession" => $this->request->getVar("profession"),
            "location" => $this->request->getVar("location"),
			
        ];
        return view('user/search/advance_search_fetch',$data);
    }
    public function smart_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['complexions'] = $items->get_complexion();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['childrens'] = $items->get_children();
        $data['mother_tongues'] = $items->get_mother_tongue();
        $data['family_values'] = $items->get_family_value();
        $data['districts'] = $items->get_district();
        $data['professions'] = $items->get_profession();
        $data['locations'] = $items->getlocation();
        return view('user/search/smart_search',$data);
    }
    public function smart_search_fetch()
    {
        $items = new ItemModel();
        $data['communitys'] = $items->getcommunity();
        $data['locations'] = $items->getlocation();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['heights'] = $items->get_height();
        $data['professions'] = $items->get_profession();
        $data['mother_tongues'] = $items->get_mother_tongue();

        $db = \Config\Database::connect();
        
        $session = session();
        $data['user_id'] = $session->get('id');

        
        $builder = $db->table('user');
        $builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
        ,register.looking_for,register.complexion,register.community,register.marital_status,register.children
        ,register.mother_tongue,register.family_value,register.district,register.profession,register.location
        ,register.dob,register.height');
        $builder->join('register', 'user.id = register.user_id');
        $builder->join('partner_preferance', 'user.id = partner_preferance.user_id');
        $query = $builder->get();
        $data['advance_search'] = $query->getResultArray();

        $data['user_data'] = [
			"looking_for" => $this->request->getVar("looking_for"),
            "complexion" => $this->request->getVar("complexion"),
            "marital_status" => $this->request->getVar("marital_status"),
            "children" => $this->request->getVar("children"),
            "mother_tongue" => $this->request->getVar("mother_tongue"),
            "family_value" => $this->request->getVar("family_value"),
            "district" => $this->request->getVar("district"),
            "profession" => $this->request->getVar("profession"),
            "location" => $this->request->getVar("location"),
			
        ];
        return view('user/search/smart_search_fetch',$data);
    }
    public function home_search()
    {
        $items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['districts'] = $items->get_district();
        $data['professions'] = $items->get_profession();
        $data['locations'] = $items->getlocation();
        return view('home/index',$data);
    }
}