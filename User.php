<?php
class User extends CI_Model
{
	function insert($cname,$registration,$fname,$email,$password)
	{
		
		$chec_company_query = "SELECT	COUNT(*) FROM	company C WHERE	C.Name = '$cname'";
		$query=$this->db->query($chec_company_query);
		if($query->num_rows()>0)
		{
			$response =$query->row('COUNT(*)');
			
			if($response==0)
			{
					// code to add using store procedure 

					//echo $qry_stored = "SET @p0='a'; SET @p1='c'; SET @p2='v'; SET @p3='d'; SET @p4='f'; CALL `NewSignUp`(@p0, @p1, @p2, @p3, @p4, @p5, @p6, @p7, @p8); SELECT @p5 AS `pNewCompanyID`, @p6 AS `pNewEmployeeID`, @p7 AS `pNewEmploymentDetailID`, @p8 AS `pGUID`; ";
				//echo $qry_stored = "CALL NewSignUp('a', 'b', 'v', 'd', 'e',@pNewCompanyID,@pNewEmployeeID,@pNewEmploymentDetailID,@pGUID);  ";
			        $qry_NewSignUp = "CALL NewSignUp('$cname', '$registration', '$fname', '$email', '$password',@pNewCompanyID,@pNewEmployeeID,@pNewEmploymentDetailID,@pGUID);";
					$result_NewSignUp=$this->db->query($qry_NewSignUp); 

					
					$this->session->set_flashdata('status','User Registered Successfully');
 
			}
			else
			{
				 
					$this->session->set_flashdata('status','User Already registered');
				
			}
		}
		       $this->load->view('signup',@$data);
			  
	}

		 function user_check($email,$password)
	{
			// echo $email;
			// echo $password;
			// die;
			$qry_LoginChecks ="CALL LoginChecks('$email','$password',@pResult,@pEmployeeID,@pEmploymentDetailID,@pCompanyID);";
			
			
			$result_LoginChecks=$this->db->query($qry_LoginChecks);
			
			
			// add all @variable 
			$response  = $this->db->query("SELECT @pResult as pResult, @pEmployeeID as pEmployeeID, @pEmploymentDetailID as pEmploymentDetailID, @pCompanyID as pCompanyID;");

			
			foreach ($response->result() as $row)
			{
				// print_r($row);
				// die;
					
						$pResult =  $row->pResult; 
					   	$pEmploymentDetailID= $row->pEmploymentDetailID;
						$pEmployeeID=$row->pEmployeeID;
						$pCompanyID=$row->pCompanyID;

						if($pResult==1)
						{
						   $_SESSION['pEmploymentDetailID'] = $pEmploymentDetailID;
						   $_SESSION['pEmployeeID'] = $pEmployeeID;
						   $_SESSION['pCompanyID'] = $pCompanyID;
						   $_SESSION['logged_in'] = 1;

						   header('Location: '.$config['base_url'].'/home');
						   exit;
						}
						else
						 {
							
								$this->session->set_flashdata('status','Invalid User');
							
						 }
					         $this->load->view('login', @$message);
			}
			               
			
	}

	   function forgot_password($login_email)
	{
		// print_r($login_email);
		// die;
		//SET @p0='email@gmail.com'; CALL `ResetPasswordRequest`(@p0, @p1, @p2); SELECT @p1 AS `pResult`, @p2 AS `pGUID`; 
		//CALL LoginChecks('$email','$password',@pResult,@pEmployeeID,@pEmploymentDetailID,@pCompanyID);";
		  $qry_ResetPasswordRequest ="CALL ResetPasswordRequest('$login_email', @pResult, @pGUID);";
		//   $response_ResetPasswordRequest=$this->db->query($qry_ResetPasswordRequest);
		     $result_ResetPasswordRequest=$this->db->query($qry_ResetPasswordRequest);

		  $response_ResetPasswordRequest = $this->db->query("SELECT @pResult as pResult, @pGUID as pGUID;");
		 
		foreach ($response_ResetPasswordRequest->result() as $rows)
			{
					
						$pResult =  $rows->pResult; 
					   	$pGUID	 = $rows->pGUID;
						  

						if($pResult==1)
						{
						 
							$this->session->set_flashdata('status','1');
						   
						}
						else
						 {
							
								$this->session->set_flashdata('status','Please Enter Correct Mail');
							
						 }
			
						$this->load->view('forgotpassword');
			}
	}

	// for change password

	 function change_password($oldPassword,$newPassword,$cNewPassword,$pEmploymentDetailID)
	   { 
			//echo $oldPassword;
			//   echo $newPassword;
			//echo $pEmploymentDetailID;
			// die;
			//SP=SET @p0='1'; SET @p1='16bf141fcd7c4237b15a79b0c23d904d25b39328296c855751'; CALL `ChangePassword`(@p0, @p1, @p2); SELECT @p2 AS `pResult`; 
			$qry_ChangePassword ="CALL ChangePassword('$pEmploymentDetailID', '$oldPassword', @p2);";
			$result_qry_ChangePassword=$this->db->query($qry_ChangePassword);
			$response_ChangePassword = $this->db->query("SELECT @p2 AS pResult");
				foreach ($response_ChangePassword->result() as $rows)
					{
							// print_r($rows);
							// die;
								$pResult =  $rows->pResult;
								
								if($pResult==1)
								{
								
									$this->session->set_flashdata('status','Update Successful');
								
								}
								else
								{
									
										$this->session->set_flashdata('status','Reset Password Failed');
									
								}
					}

	     //$this->load->view('changepassword');
	  }

	 function email_verification()
		{
		$this->load->view('emailverification');
		}
	 
		function reset_password($newPassword,$cNewPassword,$pGUID)
		{
			
		  $qry_Retrieve_Reset_Password_Record= "SELECT ED.EmploymentDetailID FROM employmentdetail ED WHERE ED.GUID = '".$pGUID."' AND ED.ResetPasswordByDeadline > NOW(); ";
				 
			$query_retrive=$this->db->query($qry_Retrieve_Reset_Password_Record);
			$response =$query_retrive->row('EmploymentDetailID');
				
			
				 if($query_retrive->num_rows()==0)
				{
					
					
					if($response<=0)
					{
						header('Location: '.$config['base_url'].'/error');
						exit;
					}
				}
					   
				 else
				{	
					
						$qry_ChangePassword ="CALL ChangePassword('".$response."','".$cNewPassword."', @pResults);";
						$result_ChangePassword=$this->db->query($qry_ChangePassword);
						$response_ChangePassword = $this->db->query("SELECT @pResults AS pResult");
						if(!empty($response_ChangePassword))
					{
						
						foreach ($response_ChangePassword->result() as $rows)
						{
							
										 $pResult =  $rows->pResult;
										
									
									if($pResult==1)
									{
									
										$this->session->set_flashdata('status','Successful');
									
									}
									else
									{
										
											$this->session->set_flashdata('status','Failed');
										
									}
						}
					}
							
				}
			$this->load->view('resetpassword');	
		}
				
				
		//	$this->load->view('resetpassword');
			
		

		function profile()
		{
		 
			 $this->load->view('profile');
		}

		function home()
		{
			$this->load->view('home');
		}
		
		function employees($name,$pEmploymentDetailID,$pEmployeeID,$pCompanyID)
        {
				//SET @p0='12341'; SET @p1='156486'; SET @p2='abc'; SET @p3='21'; CALL `RetrieveCompanyEmployees`(@p0, @p1, @p2, @p3); 
					$qry_RetrieveCompanyEmployees="CALL RetrieveCompanyEmployees('$name','$pEmploymentDetailID','$pEmployeeID','$pCompanyID');";
					$result_RetrieveCompanyEmployees=$this->db->query($qry_RetrieveCompanyEmployees);
					// print_r($result_RetrieveCompanyEmployees);
				//$response_RetrieveCompanyEmployees = $this->db->query("SET @p0='$pCompanyID'; SET @p1='$pEmploymentDetailID'; SET @p2='$name'; SET @p3='$pEmploymentDetailID'");

        // $this->load->view('employees');
        }

		function error()
        {
        $this->load->view('error');
        }
		
		function pagenotfound()
		{
			$this->load->view('pagenotfound');
		}

		function employeedetails()
		{
			$this->load->view('employeedetails');
		} 

		function addnewemployee()
		{
			$this->load->view('addnewemployee');
		}

		function companyprofile()
		{
			$this->load->view('companyprofile');
		}

		function payroll()
		{
			$this->load->view('payroll');
		}

		function fwl()
		{

			$this->load->view('fwl');
		}
		
		function cpfdetails()
		{
			$this->load->view('cpfdetails');
		}

		function takehomepay()
		{
			$this->load->view('takehomepay');
		}

		function feedback($textarea,$textarea_1,$pEmploymentDetailID,$star)
		{
			// echo $textarea;
			// echo $textarea_1;
			// echo $pEmploymentDetailID;
			// die;
			if(empty($pEmploymentDetailID))
			{
				header('Location: '.$config['base_url'].'/error');
						exit;
			}
			else
			{
				$Add_New_Feedback_Record="INSERT INTO `userfeedback` (`FeedbackID`, `EmploymentDetailID`, `Ratings`, `Feedback`, `FeatureRequest`, `FeedbackDate`) VALUES ('', '$pEmploymentDetailID', '$star', '$textarea', '$textarea_1', NOW());";
				$Add_New_Feedback_Record_query=$this->db->query($Add_New_Feedback_Record);
			}


			//$this->load->view('feedback');
		}
		function monthlyaccounts()
		{
			$this->load->view('monthlyaccounts');

		}
}
?>
