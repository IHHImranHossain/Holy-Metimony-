<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PersonalRegistratioinModel;
use App\Models\PersonalActivitiesModel;
use App\Models\AttributesModel;
use App\Models\ItemModel;
use App\Models\PatnerPreferanceModel;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class LoginController extends BaseController
{
	public function __construct()
    {
        $this->helpers = array_merge($this->helpers, ['url','form']);
	}

	public function index()
	{
		$data = [
			'title'=> 'BDShaadi.com',
		];
		
		$items = new ItemModel();

        $data['looking'] = $items->getlookingfor();
        $data['communitys'] = $items->getcommunity();
        $data['maritalstatus'] = $items->get_marital_status();
        $data['districts'] = $items->get_district();
        $data['professions'] = $items->get_profession();
        $data['locations'] = $items->getlocation();
		return view('home/index',$data);
	}

	public function user_login()
	{
		return view('home/login');
	}

	public function login()
	{
		$title = [
			'title'=> 'BDShaadi.com',
		];
		
		$model = new LoginModel();
		$result = $model->where('email',$this->request->getVar('email'))->first();
		// $password = $_POST['password'];
		// $password = $result['password'];
		$password =  $this->request->getVar("password");
		if ($result == true) 
		{
			if ($result['type'] == 'User') 
			{
			
				if(password_verify($password, $result['password'])) 
				{
					$session = \Config\Services::session();
					$session = session();
					$newdata = [
						'id' => $result['id'],
						'first_name'  => $result['first_name'],
						'last_name'     => $result['last_name'],
						'upload_image'     => $result['upload_image'],
						'email'  =>	$result['email'],
						'phone_number'  =>	$result['phone_number'],
					];
					$session->set($newdata);
					
					$data = [
						'title'=> 'User Page',
					];
					require('UserController.php');
					$data['kk'] = new UserController();
					$data['kk']->index();
					
					return view('user/user_home',$data);
				}
				else
				{
					
					echo "Email or Password is wrong!";
					return view('home/login',$title);
				}
		
			}
			else
			{
				echo "Email or Password is wrong!";
				return view('home/index',$title);
			}
		}
	}

	public function registration()
	{
		$title = [
			'title'=> 'Registration',
		];
		$session = session();
		return view('loginView/registration',$title);
    }
    
    public function registration_validation()
    {
        helper(['form','url']);
		$validation =  \Config\Services::validation();
		$user = new LoginModel();
		

		$userimage = $this->request->getFile("upload_image");
		// foreach ($userimage as $userimage)
		// {
		 	$filename = $userimage->getName();
		// }
		// $userimage->getName();

		
		
		
		// dd($filename);
		// exit();

		$userdata = [
			"first_name" => $this->request->getVar("first_name"),
			"last_name" => $this->request->getVar("last_name"),
			"email" => $this->request->getVar("email"),
			"gender" => $this->request->getVar("gender"),
            "phone_number" => $this->request->getVar("phone_number"),
			"password" => $this->request->getVar("password"),
			"password_confirm" => $this->request->getVar("password_confirm"),
			"upload_image" => $filename,
			"type" => 'User',
			
		];

         $val =  $this->validate([
            'first_name' => 'trim|required|min_length[3]|max_length[20]',
            'last_name' => 'trim|required|min_length[3]|max_length[20]',
			'email' => 'required|min_length[3]|max_length[50]|valid_email|is_unique[user.email]',
			'gender' => 'required',
            'phone_number' => 'required|min_length[11]|max_length[25]',
            'password' => 'required|min_length[8]|max_length[20]',
			'password_confirm' => ["matches[password]"],
			'upload_image' => 'uploaded[upload_image]|max_size[upload_image,2048]',
		]);
		
		
		if($val)
        {
			if($userimage->getSize() > 0)
			{
				if ($userimage->isValid() && ! $userimage->hasMoved())
				{
					$userimage->move('public/assets/upload', $userimage->getName());	
					$user->insert($userdata);
					 $id  = $user->getInsertID();
					// $session = \Config\Services::session();
					$session = session();
					$session->set('user',$id);
					$session->setFlashdata('success', 'Successful Registration');
					return redirect()->to(base_url('firstregistration', $id));
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
			return view('loginView/registration');

        }

	}

	public function firstregistration()
	{
		$items = new ItemModel();
		$data['profile'] = $items->getprofilecreated();
		$data['community'] = $items->getcommunity();
		$data['looking'] = $items->getlookingfor();
		$data['location'] = $items->getlocation();
		return view('loginView/first_registration',$data);
	}

	public function first_registration_Validation()
	{
		helper(['form','url']);
		$validation =  \Config\Services::validation();
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
			$user = new LoginModel();
			$session = session();
			$id = $session->get('user');
			$session->set('user',$id);
			$userdata['user_id'] = $id;
			// echo json_encode($userdata);
			// exit();
			$users = new PersonalRegistratioinModel();
			$users->insert($userdata);
			$session->setFlashdata('success', 'Successful Registration');
            return redirect()->to(base_url('secondregistration'));
        }
        else
        {
			return view('loginView/first_registration');

        }

	
	}
	
	public function secondregistration()
	{
		$items = new ItemModel();
		$data['marital_status'] = $items->get_marital_status();
		$data['height'] = $items->get_height();
		$data['hair_color'] = $items->get_hair_color();
		$data['complexion'] = $items->get_complexion();
		$data['blood'] = $items->get_blood();
		$data['profession'] = $items->get_profession();
		$data['annual_income'] = $items->get_annual_income();
		$data['drink'] = $items->get_drink();
		$data['children'] = $items->get_children();
		$data['body_type'] = $items->get_body_type();
		$data['eye_color'] = $items->get_eye_color();
		$data['disabilities'] = $items->get_disabilities();
		$data['education'] = $items->get_education();
		$data['diet'] = $items->get_diet();
		$data['smoke'] = $items->get_smoke();
		return view('loginView/second_registration',$data);
	}

	public function second_registration_Validation()
	{
		helper(['form','url']);
		$validation =  \Config\Services::validation();
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
		// echo json_encode($userdata);
		// exit();
		if($val)
        {
			$session = session();
			$id = $session->get('user');
			$user_id = $id;
			$users = new PersonalRegistratioinModel();
			$find = $users->where('user_id',$id)->first();
			$ii = $find['id'];
			
			// echo json_encode($find);
			// exit();

			if($find == Null)
			{
				echo "Register First";
				
			}
			else
			{
				$users = new \App\Models\PersonalRegistratioinModel();
				$ii = $users->update($ii,$userdata);
				// echo json_encode($userdata);
				// exit();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to(base_url('thirdregistration'));
			}
			
        }
        else
        {
			return view('loginView/second_registration');

        }
	}

	public function thirdregistration()
	{
		$items = new ItemModel();
		$data['mother_tongue'] = $items->get_mother_tongue();
		$data['family_value'] = $items->get_family_value();
		$data['father'] = $items->get_father();
		$data['no_of_brother'] = $items->get_no_of_brother();
		$data['whom_brother_married'] = $items->get_whom_brother_married();
		$data['district'] = $items->get_district();
		$data['personal_value'] = $items->get_personal_value();
		$data['mother'] = $items->get_mother();
		$data['no_of_sister'] = $items->get_no_of_sister();
		$data['whom_sister_married'] = $items->get_whom_sister_married();
		return view('loginView/third_registration',$data);
	}

	public function third_registration_Validation()
	{
		helper(['form','url']);
		$validation =  \Config\Services::validation();
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
		
         $val =  $this->validate([
            'mother_tongue' => 'required',
            'yourself' => 'required',
            'family_value' => 'required',
            'father' => 'required',
            'no_of_brother' => 'required',
			'whom_brother_married' => 'required',
			'district' => 'required',
			'parmanent_resident' => 'required',

			'can_speak' => 'required',
            'family_background' => 'required',
            'personal_value' => 'required',
            'mother' => 'required',
            'no_of_sister' => 'required',
			'whom_sister_married' =>'required',
			'zip_code' => 'required',
			'country_origin' => 'required',
		]);
		// echo json_encode($userdata);
		// exit();
		if($val)
        {
			$session = session();
			$id = $session->get('user');
			$user_id = $id;
			$users = new PersonalRegistratioinModel();
			$find = $users->where('user_id',$id)->first();
			$ii = $find['id'];
			
			// echo json_encode($id);
			// exit();

			if($find == Null)
			{
				echo "Register First";
				
			}
			else
			{
				$users = new \App\Models\PersonalRegistratioinModel();
				$ii = $users->update($ii,$userdata);
				// echo json_encode($userdata);
				// exit();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to(base_url('fourthregistration'));
			}
			
        }
        else
        {
			return view('loginView/third_registration');

		}

	}

	public function fourthregistration()
	{
		return view('loginView/fourth_registration');
	}

	public function fourth_registration_Validation()
	{
		helper(['form','url']);
		$validation =  \Config\Services::validation();
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
		// echo json_encode($userdata);
		// exit();
		if($val)
        {
			$user = new PersonalActivitiesModel();
			$session = session();
			$id = $session->get('user');
			$session->set('user',$id);
			$userdata['user_id'] = $id;
			// echo json_encode($userdata);
			// exit();
			$users = new PersonalActivitiesModel();
			$users->insert($userdata);
			$session->setFlashdata('success', 'Successful Registration');
			return redirect()->to(base_url('fivethregistration'));
		}
        else
        {
			return view('loginView/fourth_registration');

		}

	}

	public function fivethregistration()
	{
		$items = new ItemModel();
		$data['age_range'] = $items->get_age_range();
		$data['marital_status'] = $items->get_maritalstatus();
		$data['religion'] = $items->get_religion();
		$data['complexion'] = $items->getcomplexion();
		$data['profession'] = $items->getprofession();
		$data['drink'] = $items->getdrink();
		$data['mother_tongue'] = $items->getmother_tongue();
		$data['district'] = $items->getdistrict();
		$data['height_range'] = $items->get_height_range();
		$data['children'] = $items->getchildren();
		$data['body_type'] = $items->getbody_type();
		$data['education'] = $items->geteducation();
		$data['diet'] = $items->getdiet();
		$data['smoke'] = $items->getsmoke();
		$data['family_value'] = $items->getfamily_value();
		return view('loginView/fiveth_registration',$data);
	}

	public function fiveth_registration_Validation()
	{
		helper(['form','url']);
		$validation =  \Config\Services::validation();
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
		// echo json_encode($userdata);
		// exit();
		if($val)
        {
			$user = new PatnerPreferanceModel();
			$session = session();
			$id = $session->get('user');
			$session->set('user',$id);
			$userdata['user_id'] = $id;
			// echo json_encode($userdata);
			// exit();
			$users = new PatnerPreferanceModel();
			$users->insert($userdata);
			$session->setFlashdata('success', 'Successful Registration');
			return redirect()->to(base_url('/'));
			// echo "Registration Done";
			
		}
        else
        {
			return view('loginView/fiveth_registration');

		}

	}

	

	//--------------------------------------------------------------------

}