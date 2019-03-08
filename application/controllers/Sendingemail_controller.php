<?php
class Sendingemail_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper(array('url'));
        $this->load->model('user_model');
    }
    public function index() {

        $data['title'] = "Réinitialisation du mot de passe";
        $this->load->view('templates/head', $data);
        $this->load->view('email/contact_email_form');
        $this->load->view('templates/foot', $data);
    }
    public function send_mail() {
        $from_email = "cvpower2019@gmail.com";
        $to_email = $this->input->post('email');
        $verif = $this->user_model->select_mail($to_email);


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

        if (!empty($to_email)) {
            $user_token = $this->user_model->get_token_from_user_mail($to_email);
            $user_id = $this->user_model->get_user_id_from_user_mail($to_email);


// Set to, from, message, etc.

        $this->email->from($from_email, 'CVPower');
        $this->email->to($to_email);
        $this->email->cc("cvpower2019@gmail.com");
        $this->email->subject('Réinitialisation mot de passe');
        $this->email->message("Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien http://localhost/cvpower/resetpassword/" . $user_token);
        //Send mail
        if($verif == true && $this->email->send())
            $this->session->set_flashdata("email_sent","Votre email a bien été envoyé.");
        else
            $this->session->set_flashdata("email_sent","Impossible d'envoyer un email");
        header('Location: ../home');

    }
    }

    public function send_mail_cv(){


    }
}
?>