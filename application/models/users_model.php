<?php 


class users_model extends basemodel {

	function get_role($sessID ){
		

		$query = "SELECT 

		role.user_role as username,
		privilege_role.uri as ngapain_aja,
		privilege_role.id as role_id

		FROM `role` 

		LEFT JOIN privilege_role on (role.id = privilege_role.role_id)

		where role.id = ?

		";
		return $this->db->query($query,array($sessID))->result_array();
	}

	function user_get_role($user_id){
		$sql = "SELECT 
		users.id as id,
		users.username as username ,
		role.user_role as role,
		privilege_role.uri as ngapain_aja
		FROM 
		`users` 

		LEFT JOIN users_role on (users.id = users_role.users_id)
		LEFT JOIN role on (users_role.role_id = role.id)
		LEFT JOIN privilege_role on (role.id = privilege_role.role_id)

		WHERE users.id = ?";

		return $this->db->query($sql,array($user_id))->result_array();
	}

	function privilege($user_id = null){
		$data = array(
			'role_id' => $user_id,
			'uri' => $_POST['uri'],
			);
		return $this->db->insert('privilege_role',$data);
	
	}

	function show_role(){
		$sql  = "SELECT * FROM role";
		return $this->db->query($sql)->result_array();
	}

	function change_role($user_id){
		$query = "SELECT users.id , users.username , users_role.role_id

		FROM
			users 

		LEFT JOIN 

			users_role on (users.id = users_role.users_id)
		where users.id = ?
		";

		return $this->db->query($query,array($user_id))->row_array();
	}
}