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
        $this->load->library('form_validation');
        $this->load->library(array('session'));
        $this->load->helper('url');
    }


    public function viewHome($page = "home")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "Accueil";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_index');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_index');
        $this->load->view('templates/foot');
    }


    public function viewDashboard($page = "dashboard")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "Tableau de bord";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }


    public function viewCvStart($page = "dashboard_cv_start")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }


        $data['title'] = "Création - Étape 1";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);

    }


    public function viewCvExperience($page = "dashboard_cv_experience")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        $iduser = $_SESSION['id'];
        $idcv = $this->Model_CV->getIdCv($iduser);

        $_SESSION['id_CV']    = (int)$idcv[0]['id'];     // /!\ à détruire à la fin du formulaire

        $data['title'] = "Création - Étape 2";
        $data['liste'] = $this->Model_Experience->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);

    }


    public function viewCvEducation($page = "dashboard_cv_education")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }


        $data['title'] = "Création - Étape 3";
        $data['liste'] = $this->Model_Education->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }


    public function viewCvSkill($page = "dashboard_cv_skill")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }


        $data['title'] = "Création - Étape 4";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }


    public function viewCvOther($page = "dashboard_cv_others")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }


        $data['title'] = "Création - Étape 5";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }


    public function viewCvPreview($page = "dashboard_cv_preview")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }


        /* Traitement du choix de la couleur */


        $data['title'] = "Création - Finalisation";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }


    public function viewCvView($page = "dashboard_view")
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "Nom du CV dans la BDD";

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }
}