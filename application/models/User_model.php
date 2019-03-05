<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class User_model extends CI_Model {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
		
	}
	
	/**
	 * create_user function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $email
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
    public function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

	public function create_user($user_mail, $user_password) {
		
		$data = array(
			'mail'   => $user_mail,
			'pwd'   => $this->hash_password($user_password),
			'created_at' => date('Y-m-j H:i:s'),
            'token' => $this->generateRandomString(),
        );
		
		return $this->db->insert('cvp_c_profile', $data);
		
	}
	
	/**
	 * resolve_user_login function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @param mixed $password
	 * @return bool true on success, false on failure
	 */
	public function resolve_user_login($user_mail, $user_password) {
		
		$this->db->select('pwd');
		$this->db->from('cvp_c_profile');
		$this->db->where('mail', $user_mail);
		$hash = $this->db->get()->row('pwd');
		
		return $this->verify_password_hash($user_password, $hash);
		
	}
	
	/**
	 * get_user_id_from_username function.
	 * 
	 * @access public
	 * @param mixed $username
	 * @return int the user id
	 */
	public function get_user_id_from_user_mail($to_email) {
		
		$this->db->select('id');
		$this->db->from('cvp_c_profile');
		$this->db->where('mail', $to_email);

		return $this->db->get()->row('id');
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
	public function get_user($user_id) {
		
		$this->db->from('cvp_c_profile');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}
	
	/**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_password($user_password) {
		
		return password_hash($user_password, PASSWORD_BCRYPT);
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_password_hash($user_password, $hash) {
		
		return password_verify($user_password, $hash);
		
	}

	public function get_token_from_user_mail($to_email){

        $this->db->select('token');
        $this->db->from('cvp_c_profile');
        $this->db->where('mail', $to_email);

        return $this->db->get()->row('token');

    }

    public function modify_password_from_token($token, $newpassword){


        $this->db->set(array('pwd'=>$this->hash_password($newpassword), 'token' => $this->generateRandomString()));
        $this->db->where('token', $token);
        $this->db->update('cvp_c_profile');

        return true;

    }

    public function check_mail(){
	    $this->db->select('');
    }



	
}
