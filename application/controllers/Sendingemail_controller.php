<?php
class Sendingemail_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('user_model');
    }
    public function index() {
        $this->load->helper('form');
        $this->load->view('email/contact_email_form');
    }
    public function send_mail() {
        $from_email = "cvpower2019@gmail.com";
        $to_email = $this->input->post('email');


        //Load email library

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'cvpower2019@gmail.com',
            'smtp_pass' => 'CVPOWER2019!',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        if (!empty($to_email) ) {
            $user_token = $this->user_model->get_token_from_user_mail($to_email);
            $user_id = $this->user_model->get_user_id_from_user_mail($to_email);
        }

// Set to, from, message, etc.

        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->cc("cvpower2019@gmail.com");
        $this->email->subject('Réinitialisation mot de passe');
        $this->email->message("Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien http://localhost/CVPower/resetpassword/" . $user_token);
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('email/contact_email_form');
    }
}
?>