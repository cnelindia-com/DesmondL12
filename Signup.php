<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
	public function __construct(){ 
	parent::__construct();
	$this->load->model('user');
	$this->load->database();
	//
	}
public function master_template($main_content,$query = null){
$this->load->view('includes/header');
$this->load->view($main_content,$query);
$this->load->view('includes/footer');


}


public function signup()
{
			$session = $_SESSION['logged_in'];
			
			if ($session == 1)
			{
        		$data['main_content'] = 'employees';
        		$this->master_template($data['main_content']);
			}
			else
			{
				header('Location: '.$config['base_url'].'/login');
						   exit;
			}

			if(isset($_REQUEST['register']))
			{	
			
				$cname=$_REQUEST['cname'];
				$registration=$_REQUEST['registration'];
				$fname=$_REQUEST['fname'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				

				$this->user->insert($cname,$registration,$fname,$email,$password);
				$this->load->view('signup');

			}
			else
			{
				$this->load->view('signup');
			}
}

}
?>