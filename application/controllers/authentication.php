<?php

class authentication extends CI_Controller{

	public function login(){

		echo "login page";

	}

	public function register(){

		//add user in database

		$data = array(

			'full_name' =>$_POST['fullname'],
			'email_address' =>$_POST['email'],
			'user_name' =>$_POST['username'],
			'password' =>$_POST['username'],
			'last_login_date_time' => date_time_set()
			
			);

		$this->db->insert('users', $data);

		$this->
	}
}