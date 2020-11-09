<?php namespace App\Controllers;

use App\Models\AdminLoginModel;
use App\Models\AttributesModel;
use App\Models\ItemModel;


class AdminController extends BaseController
{
    public function index()
	{
		return view('admin/adminlohin');
    }

    public function adminlogin()
	{
		$model = new AdminLoginModel();
		$result = $model->where('email',$this->request->getVar('email'))->first();
		$password =  $this->request->getVar("password");
		
		

		if ($result == true) 
		{
			if ($result['type'] == 'Admin') 
			{
			
				// if(password_verify($password, $result['password'])) 
				// {
				// 	$session = \Config\Services::session();
				// 	$session = session();
				// 	$session->set('admin',$result['user_name']);
				// 	// var_dump($session);
				// 	// exit();
					
					return view('admin/dashboard');
				// }
				// else
				// {
				// 	echo "Email or Password is wrong!";
				// 	return view('admin/adminlohin');
				// }
			}
			else
				{
					echo "Email or Password is wrong!";
					return view('admin/adminlohin');
				}
		
		}
    }
    
    public function dashboard()
	{
		return view('admin/dashboard');
	}
	
	public function addattributes()
	{
		$attributes = new AttributesModel();
		$data['groups'] = $attributes->getAllGroups();
		$data['find'] = $attributes->findAll();

        return view('admin/addattributes',$data);
	}
	public function addattributeinsert()
	{
        helper(['form','url']);
		$validation =  \Config\Services::validation();
		$userdata = [
			"parent_id" => $this->request->getVar("parent_id"),
			"attribute_name" => $this->request->getVar("attribute_name"),
		];
		
		if($userdata)
        {
			$users = new AttributesModel();
			$session = session();
			$id = $session->get('id');
			$session->set('attributes',$id);

			// echo json_encode($userdata);
			// exit();
			$users->insert($userdata);
			$session->setFlashdata('success', 'Successful Registration');
            return redirect()->to(base_url('addattributes'));
        }
        else
        {
			return view('admin/addattributes');

		}
	}

	public function attributedelete($id)
	{
		$userModel = new \App\Models\AttributesModel();
		$session = session();
		// dd($id);
		// exit();
        $userModel->delete($id);
        return redirect()->to(base_url('addattributes'));
	}

	public function additems()
	{
		$items = new ItemModel();
		$data['groups'] = $items->getAllGroups();
		// dd($data);
		// exit();
		$data['find'] = $items->findAll();
        return view('admin/additems',$data);
	}

	public function iteminsert()
	{
        helper(['form','url']);
		$validation =  \Config\Services::validation();
		$userdata = [
			"attribute_id" => $this->request->getVar("attribute_id"),
			"items_name" => $this->request->getVar("items_name"),
		];
		
		if($userdata)
        {
			$users = new ItemModel();
			$session = session();
			$users->insert($userdata);
			$session->setFlashdata('success', "Successful Inserted");
            return redirect()->to(base_url('additems'));
        }
        else
        {
			return view('admin/additems');

		}
	}

	public function itemdelete($id)
	{
		$userModel = new \App\Models\ItemModel();
		$session = session();
        $userModel->delete($id);
        return redirect()->to(base_url('additems'));
	}
	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}

	//--------------------------------------------------------------------

}