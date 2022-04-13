<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){ 
	parent::__construct();
	}
public function master_template($main_content,$query = null){
$this->load->view('includes/header');
$this->load->view($main_content,$query);
$this->load->view('includes/footer');
}

// public function index()
// {
// $this->load->view('login');
// }

// public function forgot_password()
// {
// $this->load->view('forgotpassword');
// }
// public function emailverification()
// {
// $this->load->view('emailverification');
// }
// public function resetpassword()
// {
// $this->load->view('resetpassword');
// }
// public function profile()
// {
	// $data['main_content'] = 'profile';
	// $this->master_template($data['main_content']);
// }
/*public function signup_()
{
$this->load->view('signup');
}
*/
// public function changepassword()
// {
// $data['main_content'] = 'changepassword';
// $this->master_template($data['main_content']);
// }
// public function home()
// {
// $data['main_content'] = 'home';
// $this->master_template($data['main_content']);
// }

// public function employees()
// {
// $data['main_content'] = 'employees';
// $this->master_template($data['main_content']);
// }

// public function error()
// {
// $data['main_content'] = 'error';
// $this->master_template($data['main_content']);
// }

// public function pagenotfound()
// {
// $data['main_content'] = 'pagenotfound';
// $this->master_template($data['main_content']);
// }

// public function employeedetails()
// {
// $data['main_content'] = 'employeedetails';
// $this->master_template($data['main_content']);
// }

// public function addnewemployee()
// {
// $data['main_content'] = 'addnewemployee';
// $this->master_template($data['main_content']);
// }
// public function companyprofile()
// {
// $data['main_content'] = 'companyprofile';
// $this->master_template($data['main_content']);
// }
/*****************  Company Profile  ************************/
// public function bulkuploademployees()
// {
// $data['main_content'] = 'bulkuploademployees';
// $this->master_template($data['main_content']);
// }
/*****************  Payroll  ************************/
// public function payroll()
// {
// $data['main_content'] = 'payroll';
// $this->master_template($data['main_content']);
// }
/*****************  FWL  ************************/
// public function fwl()
// {
// $data['main_content'] = 'fwl';
// $this->master_template($data['main_content']);
// }
// public function cpfdetails()
// {
// $data['main_content'] = 'cpfdetails';
// $this->master_template($data['main_content']);
// }
/*****************  takehomepay  ************************/
// public function takehomepay()
// {
// $data['main_content'] = 'takehomepay';
// $this->master_template($data['main_content']);
// }
/*****************  takehomepay  ************************/
// public function feedback()
// {
// $data['main_content'] = 'feedback';
// $this->master_template($data['main_content']);
// }
/*****************  monthlyaccounts  ************************/
// public function monthlyaccounts()
// {
// $data['main_content'] = 'monthlyaccounts';
// $this->master_template($data['main_content']);
// }


}