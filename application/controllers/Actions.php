<?php

class Actions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_CV');
        $this->load->model('Model_Experience');
        $this->load->model('Model_Education');
        $this->load->model('Model_Skill_P');
        $this->load->model('Model_Skill_S');
        $this->load->model('Model_Skill_O');
        $this->load->model('Model_Language');
        $this->load->model('Model_Hobby');
        $this->load->model('Model_Award');
        $this->load->library(array('session'));
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function suppressionCV($id)
    {
        $this->Model_CV->remove($id);
        $this->Model_Award->removeCV($id);
        $this->Model_Education->removeCV($id);
        $this->Model_Experience->removeCV($id);
        $this->Model_Hobby->removeCV($id);
        $this->Model_Language->removeCV($id);
        $this->Model_Skill_O->removeCV($id);
        $this->Model_Skill_P->removeCV($id);
        $this->Model_Skill_S->removeCV($id);
        header("Location: ../../../dashboard");
    }

    public function suppressionExperience($id, $state)
    {
        $this->Model_Experience->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step2-create");
        }
    }

    public function suppressionEducation($id, $state)
    {
        $this->Model_Education->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else
            header("Location: ../../../step3-create");
    }

    public function suppressionSkillP($id, $state)
    {
        $this->Model_Skill_P->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionSkillS($id, $state)
    {
        $this->Model_Skill_S->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionSkillO($id, $state)
    {
        $this->Model_Skill_O->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionLanguage($id, $state)
    {
        $this->Model_Language->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function suppressionHobby($id, $state)
    {
        $this->Model_Hobby->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function suppressionAward($id, $state)
    {
        $this->Model_Award->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function validationFormulaire()
    {

        $this->form_validation->set_rules('color', 'Couleur', 'required|min_length[5]|max_length[11]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Couleur non valide', 'max_length' => 'Couleur non valide'));
        if ($this->form_validation->run() == FALSE) {
            $data['liste_exp'] = $this->Model_Experience->get($_SESSION['id_CV']);
            $data['liste_edu'] = $this->Model_Education->get($_SESSION['id_CV']);
            $data['liste_sklp'] = $this->Model_Skill_P->get($_SESSION['id_CV']);
            $data['liste_skls'] = $this->Model_Skill_S->get($_SESSION['id_CV']);
            $data['liste_sklo'] = $this->Model_Skill_O->get($_SESSION['id_CV']);
            $data['liste_lang'] = $this->Model_Language->get($_SESSION['id_CV']);
            $data['liste_hobby'] = $this->Model_Hobby->get($_SESSION['id_CV']);
            $data['liste_award'] = $this->Model_Award->get($_SESSION['id_CV']);

            $data['title'] = "Création - Finalisation";

            $this->load->view('templates/head', $data);
            $this->load->view('templates/navbar_dashboard');
            $this->load->view('pages/dashboard_cv_preview', $data);
            $this->load->view('templates/footer_dashboard');
            $this->load->view('templates/foot', $data);
        } else {

            $color = $this->input->post('color');
            $color = $this->security->xss_clean($color);
            $this->Model_CV->changeColor($_SESSION['id_CV'], $color);

            $from_email = "cvpower2019@gmail.com";


            //Load email library

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'cvpower2019@gmail.com',
                'smtp_pass' => 'CVPOWER2019!',
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from($from_email, 'Identification');
            $this->email->to($_SESSION['mail']);
            $this->email->cc("cvpower2019@gmail.com");
            $this->email->subject('Création cv');
            $this->email->message("Votre CV a bien été envoyé");
            //Send mail
            if ($this->email->send())
                $this->session->set_flashdata("email_sent", "Votre email a bien été envoyé");
            else
                $this->session->set_flashdata("email_sent", "Impossible d'envoyer un email");

            unset($_SESSION['id_CV']);

            header("Location: ../dashboard");
        }

    }
}