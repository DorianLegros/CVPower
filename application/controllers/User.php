<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User class.
 * 
 * @extends CI_Controller
 */
class User extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
		
	}
	
	
	public function index() {
		

		
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */
	public function register() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('mail', 'mail', 'trim|required|valid_email|is_unique[cvp_c_profile.mail]');
		$this->form_validation->set_rules('pwd', 'pwd', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'password_confirm', 'trim|required|min_length[6]|matches[pwd]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/register/register', $data);
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form

			$user_mail    = $this->input->post('mail');
			$user_password = $this->input->post('pwd');
			
			if ($this->user_model->create_user($user_mail, $user_password)) {
				
				// user creation ok
				$this->load->view('header');
				$this->load->view('user/register/register_success', $data);
				$this->load->view('footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/register/register', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
		
	/**
	 * login function.
     * 
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('mail', 'mail', 'required');
		$this->form_validation->set_rules('pwd', 'pwd', 'required');
		
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('header');
			$this->load->view('user/login/login');
			$this->load->view('footer');
			
		} else {
			
			// set variables from the form
			$user_mail = $this->input->post('mail');
			$user_password = $this->input->post('pwd');
			
			if ($this->user_model->resolve_user_login($user_mail, $user_password)) {
				
				$user_id = $this->user_model->get_user_id_from_user_mail($user_mail);
				$user    = $this->user_model->get_user($user_id);

                // user login ok
                $this->load->view('header');
                $this->load->view('user/login/login_success', $data);
                $this->load->view('footer');
				
				// set session user datas
				$_SESSION['id']      = (int)$user->id;
				$_SESSION['mail']     = (string)$user->mail;
				$_SESSION['logged_in']    = (bool)true;
//				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
//				$_SESSION['is_admin']     = (bool)$user->is_admin;
				


				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('header');
				$this->load->view('user/login/login', $data);
				$this->load->view('footer');
				
			}
			
		}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['mail']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			// user logout ok
			$this->load->view('header');
			$this->load->view('user/logout/logout_success', $data);
			$this->load->view('footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}

	public function resetpassword($token) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pwd1', 'pwd1', 'required');
        $this->form_validation->set_rules('pwd2', 'pwd2', 'required');
        if($this->form_validation->run() == FALSE){
            $this->load->view('header');
            $this->load->view('user/resetpassword/resetpassword');
            $this->load->view('footer');

        }else{
            $pwd1 = $this->input->post('pwd1');
            $pwd2 = $this->input->post('pwd2');

            if ($pwd1 == $pwd2){
                $newpassword = $pwd1;
                $this->user_model->modify_password_from_token($token, $newpassword);
            }
            echo "Votre mot de passe a bien été modifié, merci de vous connecter à nouveau";
            echo '<a href="' .base_url('user/login') .'">Connection</a>';
        }




        /*
        */

    }


	
}
