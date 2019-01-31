<?php

class Pages extends CI_Controller
{

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
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model('Model_CV');

        $this->form_validation->set_rules('lastname','Nom', 'required');
        $this->form_validation->set_rules('name','Prenom', 'required');
        $this->form_validation->set_rules('phone','Tel', 'required');
        if($this->form_validation->run() == FALSE){

        }else {
            $lastname = $this->input->post('lastname');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');

            if($this->Model_CV->ajouter_name($lastname, $name, $phone)){
                $this->load->view('templates/head', $data);
                $this->load->view('templates/navbar_dashboard');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer_dashboard');
                $this->load->view('templates/foot', $data);
            }


        }

//        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
//            show_404();
//        }
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

        $data['title'] = "Création - Étape 2";

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