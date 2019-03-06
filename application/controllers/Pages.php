<?php

class Pages extends CI_Controller
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
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library(array('session'));
        $this->load->library('javascript');
        $this->load->library('javascript/jquery');
        $this->load->helper('security');
        $this->load->helper('url');

    }


    public function viewHome($page = "home")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "Accueil";

        $this->load->view('pages/'.$page, $data);
    }


    public function viewDashboard($page = "dashboard")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }

        $data['title'] = "Tableau de bord";
        $data['liste'] = $this->User_model->get($_SESSION['id']);
        $data['liste2'] = $this->Model_CV->get($_SESSION['id']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }

    public function viewUserProfile($page = "dashboard_user_profile"){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }

        $data['title'] = "Profil utilisateur";
        $data['liste'] = $this->User_model->get($_SESSION['id']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }


    public function viewCvStart($page = "dashboard_cv_start")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }


        $data['title'] = "Création - Étape 1";

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);

    }


    public function viewCvExperience($page = "dashboard_cv_experience")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }

        $iduser = $_SESSION['id'];
        $idcv = $this->Model_CV->getIdCv($iduser);

        $_SESSION['id_CV']    = (int)$idcv[0]['id'];     // /!\ à détruire à la fin du formulaire

        $data['title'] = "Création - Étape 2";
        $data['liste'] = $this->Model_Experience->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);

    }


    public function viewCvEducation($page = "dashboard_cv_education")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }


        $data['title'] = "Création - Étape 3";
        $data['liste'] = $this->Model_Education->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }


    public function viewCvSkill($page = "dashboard_cv_skill")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }


        $data['title'] = "Création - Étape 4";
        $data['liste1'] = $this->Model_Skill_P->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Skill_S->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Skill_O->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }


    public function viewCvOther($page = "dashboard_cv_others")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }


        $data['title'] = "Création - Étape 5";
        $data['liste1'] = $this->Model_Language->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Hobby->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Award->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }


    public function viewCvPreview($page = "dashboard_cv_preview")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }

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
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/foot', $data);
    }


    public function viewCvView($idcv)
    {
        if(!file_exists(APPPATH.'views/pages/dashboard_view.php')) {
            show_404();
        }

        if(!isset($_SESSION['id']) && !isset($_SESSION['mail'])) {
            show_error("Vous ne disposez pas des droits pour accéder à cette page", 403, "Erreur");
        }

        $data['title'] = "Votre CV";

        $data['liste_user'] = $this->User_model->get($_SESSION['id']);
        $data['liste_cv'] = $this->Model_CV->getCv($idcv);
        $data['liste_exp'] = $this->Model_Experience->get($idcv);
        $data['liste_edu'] = $this->Model_Education->get($idcv);
        $data['liste_sklp'] = $this->Model_Skill_P->get($idcv);
        $data['liste_skls'] = $this->Model_Skill_S->get($idcv);
        $data['liste_sklo'] = $this->Model_Skill_O->get($idcv);
        $data['liste_lang'] = $this->Model_Language->get($idcv);
        $data['liste_hobby'] = $this->Model_Hobby->get($idcv);
        $data['liste_award'] = $this->Model_Award->get($idcv);

        $this->load->view('pages/dashboard_view', $data);

    }

    public function viewRegisterSuccess($page = "login_success") {
        if(!file_exists(APPPATH.'views/user/register/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "Inscription réussie";

        $this->load->view('templates/head', $data);
        $this->load->view('user/register'.$page, $data);
        $this->load->view('templates/foot', $data);
    }
}