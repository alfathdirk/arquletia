<?php 

class login extends BaseController {

	function __construct(){
		parent::__construct();
	}

	function index(){

		$curr = $_SERVER['QUERY_STRING'];;
		$continue_url = explode('=',$curr);
		if($_POST){
			$get_user = $this->_get_user($_POST['username']);
			if($_POST['username'] == @$get_user['username'] && md5($_POST['password']) == @$get_user['password']){
				$session = array(
					'username' => $_POST['username'],
					'usr_id' => $get_user['id'],
					'email' => $get_user['email'],
					'login' => 1,
					);
				$this->session->set_userdata($session);
				if($continue_url[1] !== site_url('users/user_main')) {
					$a = redirect($continue_url[1]);
				} else {
					$a = redirect('users/user_main');
				}
				return $a;
			} else {
				$this->_var['notice'] = '<div class="alert alert-error container"><a class="close" data-dismiss="alert">×</a><center>Please check your Password Or Username</center> </div>';
			}
		}
	}

	function register(){

		$sql = "SELECT username,email FROM users";
		$query = $this->db->query($sql)->result_array();


		foreach ($query as $key ) {
			$arrayKeys[] = $key['username'] ;
			$arrayEmail[] = $key['email'] ;
		}
		// xlog($arrayEmail,1);

		if($_POST){
			if(!in_array($_POST['username'],$arrayKeys)){
				if($_POST['password'] == $_POST['repassword']){
					if(!in_array($_POST['email'],$arrayEmail)){
						$data = array(
							'username' =>$_POST['username'],
							'password' =>md5($_POST['password']),
							'email' => $_POST['email'],
							'first_name' => $_POST['first_name'],
							'last_name' => $_POST['last_name'],
							'gender' => $_POST['gender'],
							'address' => $_POST['address']
							);
						$this->db->insert('users', $data);
						redirect('login');

					} else {
						echo "Duplicate Email";
					}
				} else {
					echo "password tidak match bro";
				}
			} else {
				echo "Username Has Been Taken";
				exit;
			}

		}

	}


	function forgot_password($useremail = null){

		$this->load->library('email');

		if($_POST){
			$useremail = $_POST['email'];
			$sql = "SELECT * FROM users where `email` = ?";
			$detectUser = $this->db->query($sql,array($useremail))->row_array();  

			if($_POST['email'] == @$detectUser['email']){
				$array = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";

				$split = str_split($array);

				for ($i=0; $i < 8; $i++) { 
					$rand = array_rand($split);
					$arrand[] = $split[$rand];
				}


				$z = implode($arrand);

				$data = array(
					'password' => md5($z)
					);

				$this->db->where('email', $useremail);
				$this->db->update('users', $data); 

				// $em = $this->email; 
				// xlog($z,1);exit;
				$this->email->from('alfathdirk@gmail.com', 'Arquletia');
				$this->email->to($_POST['email']); 
				// $this->email->cc('another@another-example.com'); 
				// $this->email->bcc('them@their-example.com'); 

				$this->email->subject('Forgot Password');
				$this->email->message($z);	

				$this->email->send();

				// ini di send ke email
				// echo $z;

				// sleep(2);
				// redirect('login');
				// exit;
			}  

		}
	}

}