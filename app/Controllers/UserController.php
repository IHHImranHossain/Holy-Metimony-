<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PersonalRegistratioinModel;
use App\Models\PersonalActivitiesModel;
use App\Models\PatnerPreferanceModel;
use App\Models\AttributesModel;
use App\Models\ItemModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->helpers = array_merge($this->helpers, ['url','form']);
	}
	public function index($id = null)
	{
		$user = new LoginModel();

        $db = \Config\Database::connect();
		
		$session = session();
		$data['user_id'] = $session->get();
		$id = $data['user_id'];
		
        $builder = $db->table('user');
		$builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image

        ,partner_preferance.marital_status as p_marital_status,partner_preferance.children as p_children,partner_preferance.religion as p_religion
		,partner_preferance.complexion as p_complexion,partner_preferance.drink as p_drink,partner_preferance.smoke as p_smoke
		,partner_preferance.diet as p_diet,partner_preferance.education as p_education,partner_preferance.profession as p_profession
		,partner_preferance.mother_tongue as p_mother_tongue,partner_preferance.family_value as p_family_value');

		$builder->join('register', 'user.id = register.user_id');
		$builder->join('partner_preferance', 'user.id = partner_preferance.user_id');
		$builder->where('user.id', $id['id']);
        $query = $builder->get();
		$data['login_user_data'] = $query->getResultArray();



		$builder = $db->table('user');
		$builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
		
        ,register.community,register.location,register.marital_status,register.children
		,register.complexion,register.disabilities,register.education,register.drink,register.smoke
		,register.diet,register.mother_tongue,register.family_value,register.profession');

		$builder->join('register', 'user.id = register.user_id');
		$builder->join('partner_preferance', 'user.id = partner_preferance.user_id');
        $query = $builder->get();
		$data['alldata'] = $query->getResultArray();


		
		$data['recent_post'] = $user->get_recent_post();

		// dd($data['alldata']);
		// exit();
		
		
		
		$data['user_id'] = $session->get('id');
		$get_id = $session->get('id');
		
		$find = $user->where('id',$get_id)->first();

		$data['user_gender'] = $find['gender'];
		// dd($data);
		// exit();
		
		return view("user/user_home",$data);
	}
	public function profile()
	{
		return view('user/profile');
	}
	public function edit_user_information()
	{
		$user = new LoginModel();
		$data = [];
		$session = session();
		$id = $session->get('id');
		$data = $user->where('id',$id)->first();
	
		// dd($data);
		// exit();
		return view('user/edit_user_information',$data);
	}
	public function edit_registration_validation()
	{
		$user = new LoginModel();
		$userdata = [
			"first_name" => $this->request->getVar("first_name"),
			"last_name" => $this->request->getVar("last_name"),
            "phone_number" => $this->request->getVar("phone_number"),
			
		];

         $val =  $this->validate([
            'first_name' => 'trim|required|min_length[3]|max_length[20]',
            'last_name' => 'trim|required|min_length[3]|max_length[20]',
            'phone_number' => 'required|min_length[11]|max_length[25]',
		]);
		
		
		if($val)
        {	
			$session = session();
			$session->set($userdata);
			$id = $session->get('id');
			$find = $user->where('id',$id)->first();
			$ii = $find['id'];
			// dd($ii);
			// exit();
			$user->update($ii,$userdata);
			$session->setFlashdata('success', 'Successful Registration');
			return redirect()->to(base_url('profile', $id));
		}
        else
        {
			return view('user/edit_user_information');

        }
	}
	public function update_personal_information()
	{
		$session = session();
		$id = $session->get('id');
		$user = new PersonalRegistratioinModel();
		$data = $user->where('user_id',$id)->first();
		// dd($data);
		// exit();

		// for first Registration
		$items = new ItemModel();
		$data['profile'] = $items->getprofilecreated();
		$data['communitys'] = $items->getcommunity();
		$data['looking'] = $items->getlookingfor();
		$data['locations'] = $items->getlocation();

		// for Second  Registration
		$data['maritalstatus'] = $items->get_marital_status();
		$data['heights'] = $items->get_height();
		$data['hair_colors'] = $items->get_hair_color();
		$data['complexions'] = $items->get_complexion();
		$data['blood_group'] = $items->get_blood();
		$data['professions'] = $items->get_profession();
		$data['annual_incomes'] = $items->get_annual_income();
		$data['drinks'] = $items->get_drink();
		$data['childrens'] = $items->get_children();
		$data['body_types'] = $items->get_body_type();
		$data['eye_colors'] = $items->get_eye_color();
		$data['disabiliti'] = $items->get_disabilities();
		$data['educations'] = $items->get_education();
		$data['diets'] = $items->get_diet();
		$data['smokes'] = $items->get_smoke();

		// for Third Registration
		$data['mother_tongues'] = $items->get_mother_tongue();
		$data['family_values'] = $items->get_family_value();
		$data['fathers'] = $items->get_father();
		$data['no_of_brothers'] = $items->get_no_of_brother();
		$data['whom_brother_marrieded'] = $items->get_whom_brother_married();
		$data['districts'] = $items->get_district();
		$data['personal_values'] = $items->get_personal_value();
		$data['mothers'] = $items->get_mother();
		$data['no_of_sisters'] = $items->get_no_of_sister();
		$data['whom_sister_marrieded'] = $items->get_whom_sister_married();
	
		return view('user/update_peronal_information',$data);
	}
	public function update_personal_information_validation()
	{
		
		$userdata = [
			"profile_created" => $this->request->getVar("profile_created"),
			"community" => $this->request->getVar("community"),
            "dob" => $this->request->getVar("dob"),
            "self_number" => $this->request->getVar("self_number"),
			"convenient_time" => $this->request->getVar("convenient_time"),
			"relation_contact_person" => $this->request->getVar("relation_contact_person"),


			"looking_for" => $this->request->getVar("looking_for"),
			"location" => $this->request->getVar("location"),
            "guardian_number" => $this->request->getVar("guardian_number"),
            "emergency_number" => $this->request->getVar("emergency_number"),
			"contact_person_name" => $this->request->getVar("contact_person_name"),
			"permanent_address" => $this->request->getVar("permanent_address"),
			"present_address" => $this->request->getVar("present_address"),
		];

		$val =  $this->validate([
            'profile_created' => 'required',
            'community' => 'required',
            'dob' => 'required',
            'self_number' => 'required|min_length[11]|max_length[25]',
            'convenient_time' => 'required',
			'relation_contact_person' => 'required',

			'looking_for' => 'required',
            'location' => 'required',
            'guardian_number' => 'required|min_length[11]|max_length[25]',
            'emergency_number' => 'required|min_length[11]|max_length[25]',
            'contact_person_name' => 'required',
			'permanent_address' =>'required',
			'present_address' => 'required',
		]);
		
		
		if($val)
        {	
			$users = new PersonalRegistratioinModel();
			// $session = session();
			// $session->set($userdata);
			// $id = $session->get('id');
			// $find = $users->where('id',$id)->first();
			// $ii = $find['id'];
			// $id = $session->get('user');
			// $session->set('user',$id);
			// $userdata['user_id'] = $id;
			$id = $this->request->getVar('id');
			// $data = $users->get_user_id();
			// dd($id);
			// exit();
		 	$users->update($id,$userdata);
			
			
			return redirect()->to(base_url('profile',$id));
		}
        else
        {
			return view('user/update_peronal_information');

        }
	}

	public function update_second_personal_information_form()
	{
		
		$userdata = [
			"marital_status" => $this->request->getVar("marital_status"),
			"height" => $this->request->getVar("height"),
            "hair_color" => $this->request->getVar("hair_color"),
            "complexion" => $this->request->getVar("complexion"),
			"blood" => $this->request->getVar("blood"),
			"profession" => $this->request->getVar("profession"),
			"annual_income" => $this->request->getVar("annual_income"),
			"drink" => $this->request->getVar("drink"),


			"children" => $this->request->getVar("children"),
			"body_type" => $this->request->getVar("body_type"),
            "eye_color" => $this->request->getVar("eye_color"),
            "disabilities" => $this->request->getVar("disabilities"),
			"education" => $this->request->getVar("education"),
			"work_place" => $this->request->getVar("work_place"),
			"diet" => $this->request->getVar("diet"),
			"smoke" => $this->request->getVar("smoke"),
		];

		$val =  $this->validate([
            'marital_status' => 'required',
            'height' => 'required',
            'hair_color' => 'required',
            'complexion' => 'required',
            'blood' => 'required',
			'profession' => 'required',
			'annual_income' => 'required',
			'drink' => 'required',

			'children' => 'required',
            'body_type' => 'required',
            'eye_color' => 'required',
            'disabilities' => 'required',
            'education' => 'required',
			'work_place' =>'required',
			'diet' => 'required',
			'smoke' => 'required',
		]);
		
		
		if($val)
        {	
			$users = new PersonalRegistratioinModel();
			// $session = session();
			// $session->set($userdata);
			// $id = $session->get('id');
			// $find = $users->where('id',$id)->first();
			// $ii = $find['id'];
			// $id = $session->get('user');
			// $session->set('user',$id);
			// $userdata['user_id'] = $id;
			$id = $this->request->getVar('id');
			// $data = $users->get_user_id();
			// dd($id);
			// exit();
		 	$users->update($id,$userdata);
			
			
			return redirect()->to(base_url('profile',$id));
		}
        else
        {
			return view('user/update_peronal_information');

        }
	}

	public function update_third_personal_information_form()
	{
		
		$userdata = [
			"mother_tongue" => $this->request->getVar("mother_tongue"),
			"yourself" => $this->request->getVar("yourself"),
            "family_value" => $this->request->getVar("family_value"),
            "father" => $this->request->getVar("father"),
			"no_of_brother" => $this->request->getVar("no_of_brother"),
			"whom_brother_married" => $this->request->getVar("whom_brother_married"),
			"district" => $this->request->getVar("district"),
			"parmanent_resident" => $this->request->getVar("parmanent_resident"),


			"can_speak" => $this->request->getVar("can_speak"),
			"family_background" => $this->request->getVar("family_background"),
            "personal_value" => $this->request->getVar("personal_value"),
            "mother" => $this->request->getVar("mother"),
			"no_of_sister" => $this->request->getVar("no_of_sister"),
			"whom_sister_married" => $this->request->getVar("whom_sister_married"),
			"zip_code" => $this->request->getVar("zip_code"),
			"country_origin" => $this->request->getVar("country_origin"),
		];

		
		
		if($userdata)
        {	
			$users = new PersonalRegistratioinModel();
			// $session = session();
			// $session->set($userdata);
			// $id = $session->get('id');
			// $find = $users->where('id',$id)->first();
			// $ii = $find['id'];
			// $id = $session->get('user');
			// $session->set('user',$id);
			// $userdata['user_id'] = $id;
			$id = $this->request->getVar('id');
			// $data = $users->get_user_id();
			// dd($id);
			// exit();
		 	$users->update($id,$userdata);
			
			
			return redirect()->to(base_url('profile',$id));
		}
        else
        {
			return view('user/update_peronal_information');

        }
	}
	public function your_interest_form()
	{
		$session = session();
		$id = $session->get('id');
		$user = new PersonalActivitiesModel();
		$data = $user->where('user_id',$id)->first();
		// dd($data);
		// exit();
		return view('user/update_your_interest_form',$data);
	}
	public function update_your_interest_form()
	{
		$userdata = [
			"interest" => $this->request->getVar("interest"),
			"music" => $this->request->getVar("music"),
            "reads" => $this->request->getVar("reads"),
            "movies" => $this->request->getVar("movies"),
			"cooking" => $this->request->getVar("cooking"),
			"dress_style" => $this->request->getVar("dress_style"),
		];
		
         $val =  $this->validate([
            'interest' => 'required',
            'music' => 'required',
            'reads' => 'required',
            'movies' => 'required',
            'cooking' => 'required',
			'dress_style' => 'required',
		]);
		if($val)
        {	
			$users = new PersonalActivitiesModel();
			// $session = session();
			// $session->set($userdata);
			// $id = $session->get('id');
			// $find = $users->where('id',$id)->first();
			// $ii = $find['id'];
			// $id = $session->get('user');
			// $session->set('user',$id);
			// $userdata['user_id'] = $id;
			$id = $this->request->getVar('id');
			// $data = $users->get_user_id();
			// dd($id);
			// exit();
		 	$users->update($id,$userdata);
			
			
			return redirect()->to(base_url('profile',$id));
		}
        else
        {
			return view('user/update_your_interest_form');

        }
	}
	public function partner_preference_form()
	{
		$session = session();
		$id = $session->get('id');
		$user = new PatnerPreferanceModel();
		$data = $user->where('user_id',$id)->first();

		$items = new ItemModel();
		$data['age_ranges'] = $items->get_age_range();
		$data['marital_statuss'] = $items->get_maritalstatus();
		$data['religions'] = $items->get_religion();
		$data['complexions'] = $items->getcomplexion();
		$data['professions'] = $items->getprofession();
		$data['drinks'] = $items->getdrink();
		$data['mother_tongues'] = $items->getmother_tongue();
		$data['districts'] = $items->getdistrict();
		$data['height_ranges'] = $items->get_height_range();
		$data['childrens'] = $items->getchildren();
		$data['body_types'] = $items->getbody_type();
		$data['educations'] = $items->geteducation();
		$data['diets'] = $items->getdiet();
		$data['smokes'] = $items->getsmoke();
		$data['family_values'] = $items->getfamily_value();

		return view('user/update_partner_preference',$data);
	}
	public function update_partner_preference_form()
	{
		$userdata = [
			"age_range_from" => $this->request->getVar("age_range_from"),
			"age_range_to" => $this->request->getVar("age_range_to"),
            "marital_status" => $this->request->getVar("marital_status"),
            "religion" => $this->request->getVar("religion"),
			"complexion" => $this->request->getVar("complexion"),
			"profession" => $this->request->getVar("profession"),
			"drink" => $this->request->getVar("drink"),
			"residence" => $this->request->getVar("residence"),
			"district_residence" => $this->request->getVar("district_residence"),


			"height_range_from" => $this->request->getVar("height_range_from"),
			"height_range_to" => $this->request->getVar("height_range_to"),
			"children" => $this->request->getVar("children"),
			"body_type" => $this->request->getVar("body_type"),
			"education" => $this->request->getVar("education"),
			"diet" => $this->request->getVar("diet"),
			"smoke" => $this->request->getVar("smoke"),
			"family_value" => $this->request->getVar("family_value"),
			"country_of_origin" => $this->request->getVar("country_of_origin"),
			"mother_tongue" => $this->request->getVar("mother_tongue"),

		];
		
         $val =  $this->validate([
            'age_range_from' => 'required',
            'age_range_to' => 'required',
            'marital_status' => 'required',
            'religion' => 'required',
			'profession' => 'required',
			'mother_tongue' => 'required',
			



			'height_range_from' => 'required',
			'height_range_to' => 'required',
			'body_type' => 'required',
			'education' => 'required',
			'family_value' => 'required',
			'country_of_origin' => 'required',
		]);
		if($val)
        {	
			$users = new PatnerPreferanceModel();
			// $session = session();
			// $session->set($userdata);
			// $id = $session->get('id');
			// $find = $users->where('id',$id)->first();
			// $ii = $find['id'];
			// $id = $session->get('user');
			// $session->set('user',$id);
			// $userdata['user_id'] = $id;
			$id = $this->request->getVar('id');
			// $data = $users->get_user_id();
			// dd($id);
			// exit();
		 	$users->update($id,$userdata);
			
			
			return redirect()->to(base_url('profile',$id));
		}
        else
        {
			return view('user/update_your_interest_form');

        }
	}
	public function user_password()
	{
		return view('user/update_password');
	}
	public function update_user_password()
	{
		$session = session();
		$id = $session->get('id');
		$user = new LoginModel();
		$data = $user->where('id',$id)->first();
		$password =  $this->request->getVar("old_password");
		$id = $data['id'];
		// dd($id);
		// exit();

		if(password_verify($password, $data['password'])) 
		{
			$userdata = [
				"password" => $this->request->getVar("new_password"),
				"confirm_password" => $this->request->getVar("new_confirm_password"),
			];
			// dd($data['password']);
			// exit();
	
			 $val =  $this->validate([
				'new_password' => 'required|min_length[8]|max_length[20]',
				'new_confirm_password' => ["matches[new_password]"],
			]);

			if($val)
        	{	
				$user->update($id,$userdata);
				return redirect()->to(base_url('user', $id));
			}
			else
			{
				return view('user/update_password');

			}
		}
		else
		{
			$error = ['Your Entering Old Password is Wrong'];
			// dd($error);
			// exit();
			return view('user/update_password',$error);
		}

	}
	public function user_image()
	{
		$user = new LoginModel();
		$session = session();
		$id = $session->get('id');
		$data = $user->where('id',$id)->first();
		$id = $data['id'];
		return view('user/update_image',$data);
	}
	public function update_user_image()
	{
		helper('filesystem');
		$user = new LoginModel();
		 $userimage = $this->request->getFile("update_image");
		$filename = $userimage->getName();
		
		$userdata = [
			"upload_image" => $filename,
		];
		
         $val =  $this->validate([
			'upload_image' => 'uploaded[update_image]|max_size[update_image,2048]',
		]);
		
		if($val)
        {
			if($userimage->getSize() > 0)
			{
				if ($userimage->isValid() && ! $userimage->hasMoved())
				{
					$user = new LoginModel();
					$session = session();
					$id = $session->get('id');
					$data = $user->where('id',$id)->first();
					$image = $data['upload_image'];

					// dd($image);
					// exit();
					$id = $data['id'];
					$session->set($userdata);
					if($image)
					{
						unlink('public/assets/upload/'.$image);
					}
					
					$userimage = $this->request->getFile("update_image");
					$user->update($id,$userdata);
					$userimage->move('public/assets/upload', $userimage->getName());
					return redirect()->to(base_url('profile',$id));
				}
				else
				{
					echo "This File is Already Uploaded";
				}
			}
			else
			{
				echo " Insert A Valid Image";
			}
        }
        else
        {
			return view('user/update_image');

        }
	}
	public function your_cv_interest()
	{
		$session = session();
		$id = $session->get('id');
		$user = new PersonalActivitiesModel();
		$data = $user->where('user_id',$id)->first();
		// dd($data);
		// exit();
		// return view('user/your_cv',$data);
		return $data;
	}
	public function your_cv_partner_preference()
	{
		$session = session();
		$id = $session->get('id');
		$user = new PatnerPreferanceModel();
		$data = $user->where('user_id',$id)->first();

		$items = new ItemModel();
		$data['age_ranges'] = $items->get_age_range();
		$data['marital_statuss'] = $items->get_maritalstatus();
		$data['religions'] = $items->get_religion();
		$data['complexions'] = $items->getcomplexion();
		$data['professions'] = $items->getprofession();
		$data['drinks'] = $items->getdrink();
		$data['mother_tongues'] = $items->getmother_tongue();
		$data['districts'] = $items->getdistrict();
		$data['height_ranges'] = $items->get_height_range();
		$data['childrens'] = $items->getchildren();
		$data['body_types'] = $items->getbody_type();
		$data['educations'] = $items->geteducation();
		$data['diets'] = $items->getdiet();
		$data['smokes'] = $items->getsmoke();
		$data['family_values'] = $items->getfamily_value();

		return $data;
	}
	public function your_cv()
	{
		$user = new PersonalRegistratioinModel();
		$session = session();
		$id = $session->get('id');
		$data = $user->where('user_id',$id)->first();
		// dd($find);
		// exit();
		// for first Registration
		$items = new ItemModel();
		$data['profile'] = $items->getprofilecreated();
		$data['communitys'] = $items->getcommunity();
		$data['looking'] = $items->getlookingfor();
		$data['locations'] = $items->getlocation();

		// for Second  Registration
		$data['maritalstatus'] = $items->get_marital_status();
		$data['heights'] = $items->get_height();
		$data['hair_colors'] = $items->get_hair_color();
		$data['complexions'] = $items->get_complexion();
		$data['blood_group'] = $items->get_blood();
		$data['professions'] = $items->get_profession();
		$data['annual_incomes'] = $items->get_annual_income();
		$data['drinks'] = $items->get_drink();
		$data['childrens'] = $items->get_children();
		$data['body_types'] = $items->get_body_type();
		$data['eye_colors'] = $items->get_eye_color();
		$data['disabiliti'] = $items->get_disabilities();
		$data['educations'] = $items->get_education();
		$data['diets'] = $items->get_diet();
		$data['smokes'] = $items->get_smoke();

		// for Third Registration
		$data['mother_tongues'] = $items->get_mother_tongue();
		$data['family_values'] = $items->get_family_value();
		$data['fathers'] = $items->get_father();
		$data['no_of_brothers'] = $items->get_no_of_brother();
		$data['whom_brother_marrieded'] = $items->get_whom_brother_married();
		$data['districts'] = $items->get_district();
		$data['personal_values'] = $items->get_personal_value();
		$data['mothers'] = $items->get_mother();
		$data['no_of_sisters'] = $items->get_no_of_sister();
		$data['whom_sister_marrieded'] = $items->get_whom_sister_married();

		$data['activity'] = $this->your_cv_interest();

		$data['partner_preference'] = $this->your_cv_partner_preference();
		// dd($data['partner_preference']);
		// exit();

		return view('user/your_cv',$data);
	}
	
	public function user_profile_view($id)
	{

		
		$data['get_cv_data'] = $this->your_cv();
		
		$db = \Config\Database::connect();
		$user = new LoginModel();
        $session = session();
		$data['user_id'] = $session->get('id');
		$get_id = $data['user_id'];
		$find = $user->where('id',$get_id)->first();
		$data['user_gender'] = $find['gender'];

		$builder = $db->table('user');
		$builder->select('user.id,user.first_name,user.last_name,user.gender,user.upload_image
		,register.profile_created,register.user_id
		,register.looking_for,register.community,register.dob,register.location,register.self_number,register.guardian_number,register.emergency_number
		,register.convenient_time,register.contact_person_name,register.relation_contact_person,register.present_address,register.permanent_address,register.marital_status,register.children
		,register.height,register.body_type,register.hair_color,register.eye_color,register.complexion,register.disabilities,register.blood
		,register.education,register.profession,register.annual_income,register.work_place,register.diet,register.drink,register.smoke
		,register.mother_tongue,register.can_speak,register.yourself,register.family_background,register.family_value,register.personal_value,register.father
		,register.mother,register.no_of_brother,register.no_of_sister,register.whom_brother_married,register.whom_sister_married,register.district,register.zip_code
		,register.parmanent_resident,register.country_origin

		,personal_activities.interest,personal_activities.music,personal_activities.reads,personal_activities.movies,personal_activities.cooking,
		personal_activities.dress_style
		');


		$builder->join('register', 'user.id = register.user_id');
		$builder->join('personal_activities', 'user.id = personal_activities.user_id');
		$builder->where('user.id', $id);
        $query = $builder->get();
		$data['alldata'] = $query->getResultArray();

		return view('user/user_profile_view',$data);
	}
	public function sent_mail()
	{
		$userdata = [
			"name" => $this->request->getVar("name"),
			"email" => $this->request->getVar("email"),
            "message" => $this->request->getVar("message"),
			
		];
		$mail = $userdata['email'];
		$name = $userdata['name'];
		$massage = $userdata['message'];

		$email = \Config\Services::email();
		$email->setFrom($mail,$name);
		$email->setTo('imran.hridoy2050@gmail.com');
		$email->setSubject('Email Test');
		$msg = $email->setMessage($massage);

		$sent = $email->send();

		if (! $sent)
		{
			echo "Senting Failed";
			echo $email->printDebugger();
		}
		else
		{
			echo "Sent Successfully";
			return redirect()->to(base_url('/'));
		}
		

	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}

	//--------------------------------------------------------------------

}