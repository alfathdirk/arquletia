<?php 

/**
* 
*/

class users extends basecontroller {
	
	var $user_id ;
	
	function __construct(){
		parent::__construct();
		$this->user_id = $this->session->all_userdata('username');

	}


	function user_main(){
		$CI =&get_instance();
		$user_id = $this->user_id['username'];

		$this->_var['username'] = $user_id;

		$this->_var['xx'] = $this->db->query("Select id,username from users")->result_array();


		
	}
	
	function change_password($user_id = ''){
		$user_id = $this->user_id['username'];

		$user = $this->_get_user($user_id);
		if($_POST){

			if(md5($_POST['password']) !== @$user['password']){
				echo "Password Tidak sesuai";
			} else {
				if($_POST['new_password'] && $_POST['re_password']){
					if($_POST['new_password'] == $_POST['re_password']){

						$data = array(
							'password' => md5($_POST['re_password'])
							);

						$this->db->where('username', $user_id);
						$this->db->update('users', $data); 
						echo "<alert>Password has been change !!</alert>";

					} else {
						echo "<alert>Password No Match</alert>";
					}
				} else {
					echo "<alert>New Password Must Be Same !</alert>";
				}
			}
		}
	}

	function logout(){
		$user_sess = $this->user_id;
		$data = array(
			'username' => $user_sess['username'],
			'usr_id' => $user_sess['usr_id'],
			'session_id' => $user_sess['session_id']
			);
		// xlog($data,1);exit;
		$this->session->unset_userdata($data);
		redirect('/');
	}

	function _save($id = null){
		$this->_view = $this->_name . '/' . 'add_edit';
		$this->_var['id'] = $id;
		$query = $this->_model('users')->show_role();

		// $genders = $this->db->query("SELECT * FROM sysparam WHERE `group` = 'gender'")->result_array();
		$genders = $this->_sysparam('gender')->result_array();

		
		$this->_var['options'] = array(
			'-- Please Select --'
			);
		foreach ($genders as $gender) {
			$this->_var['gender'][$gender['key_value']] = $gender['key_name'];
		}
		// xlog($query,1);exit;
		foreach ($query as $val) {
			$this->_var['options'][$val['id']] = $val['user_role'];
		}
		$sql = "SELECT * FROM users";
		$queryUser = $this->db->query($sql)->result_array();
		

		foreach ($queryUser as $z) {
			$email[] = $z['email'];
			$username[] = $z['username'];
		}

		$sys = $this->db->query("SELECT * FROM sysparam");
		if($id == null){

			if($_POST){
				if($_POST['password'] !== $_POST['retype_password']){
					echo "password tidak sama";
				// redirect('user/users');	

				} else {
					if (in_array($_POST['username'], $username) || in_array($_POST['email'],$email)){
						echo "<alert>Username or Email Deprecated =))</alert>";
					} else {

						$dataUser = array(
							'username' => $_POST['username'],
							'password' => md5($_POST['retype_password']),
							'email' => $_POST['email'],
							'first_name' => $_POST['first_name'],
							'last_name' => $_POST['last_name'],
							'gender' => $_POST['gender'],
							'address' => $_POST['address'],
							'username' => $_POST['username'],
							);
						$this->db->insert('users',$dataUser);

						$dataRole = array(
							'users_id' => $this->db->insert_id(),
							'role_id' => $_POST['role'] 
							);

						$this->db->insert('users_role',$dataRole);

						redirect('users/listing');
					}


				}
			}
		} else {
			if($id !== null){
				
				$sql .= " WHERE id = ?";
				$data = $this->db->query($sql,array($id))->row_array();
				$this->_var['data'] = $data;

				$this->_var['role'] = $this->_model('users')->change_role($id);
				// xlog($this->_var['role'],1);exit;
				if($_POST){

					$data = array(
						'username' => $_POST['username'],
						'email' => $_POST['email'],
						'first_name' =>$_POST['first_name'],
						'last_name' => $_POST['last_name'],
						'gender' => $_POST['gender'],
						'address' => $_POST['address'],
						);

					$this->db->where('id', $id);
					$this->db->update('users', $data);

					$role = array(
						'role_id' => $_POST['role']
						); 
					if(!isset($this->_var['role']['role_id'])){
						echo "gada fath";exit;
						$dta = array(
							'users_id' => $id,
							'role_id' => $_POST['role'] 
							);

						$this->db->insert('users_role',$dta);
					} else {
						$this->db->where('users_id' ,$id);
						$this->db->update('users_role', $role);
					}

				}

			}
		} 
	}

	function delete($id){
		$this->db->delete('users_role', array('users_id' => $id)); 
		parent::delete($id);
		// xlog($this->db->last_query(),1);exit;
	}

	function _grid(){
		$data = array('id','username');
		return parent::_grid($data);
	}

	// function listing($page = 1){
	// 	$pages = ($page < 2) ? $page = 0 : ($page -1 ) * 10;
	// 	$query = $this->db->query("select * from users LIMIT ?,10",array($pages))->result_array();
	// 	$this->_var['data'] = $query;

	// 	$Row = "SELECT count(id) as count from province";

	// 	$this->_var['countRow'] = $this->db->query($Row)->row_array();

	// 	$this->_var['curPage'] = $page;
	// 	$perPage = ceil($this->_var['countRow']['count'] / 10);

	// 	$this->_var['pages'] = $perPage;
	// 	$this->_var['linkPage'] = site_url('user/listing');

	// }

}