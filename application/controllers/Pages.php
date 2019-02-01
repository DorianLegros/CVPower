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

        $this->form_validation->set_rules('name','Nom du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('description','Description du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        if($this->form_validation->run() == FALSE){

        }else {
            $name = $this->input->post('name');
            $desc = $this->input->post('description');
            //$iduser = methode de batou

            $this->Model_CV->add($name, $desc/*, $iduser*/);
            header("Location: step2-create");
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


        //Règles du formulaire à définir
        //$this->form_validation->set_rules('name','Nom du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        //$this->form_validation->set_rules('description','Description du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        /* possible controlleur pour le traitement du nombre d'entrée saisi */
        if($this->form_validation->run() == FALSE){

        }else {
            //Récupération des entrées du form
            //$name = $this->input->post('name');
            //$desc = $this->input->post('description');
            //$idcv = à faire avec le guide URI Routing

            //$this->Model_Experience->add($name, $desc/*, $idcv*/);
            header("Location: step3-create");
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


        //Règles du formulaire à définir
        //$this->form_validation->set_rules('name','Nom du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        //$this->form_validation->set_rules('description','Description du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        /* possible controlleur pour le traitement du nombre d'entrée saisi */
        if($this->form_validation->run() == FALSE){

        }else {
            //Récupération des entrées du form
            //$name = $this->input->post('name');
            //$desc = $this->input->post('description');
            //$idcv = à faire avec le guide URI Routing

            //$this->Model_Experience->add($name, $desc/*, $idcv*/);
            header("Location: step4-create");
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


        //Règles du formulaire à définir
        //$this->form_validation->set_rules('name','Nom du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        //$this->form_validation->set_rules('description','Description du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        /* possible controlleur pour le traitement du nombre d'entrée saisi */
        if($this->form_validation->run() == FALSE){

        }else {
            //Récupération des entrées du form
            //$name = $this->input->post('name');
            //$desc = $this->input->post('description');
            //$idcv = à faire avec le guide URI Routing

            //$this->Model_Experience->add($name, $desc/*, $idcv*/);
            header("Location: step5-create");
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


        //Règles du formulaire à définir
        //$this->form_validation->set_rules('name','Nom du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        //$this->form_validation->set_rules('description','Description du CV', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        /* possible controlleur pour le traitement du nombre d'entrée saisi */
        if($this->form_validation->run() == FALSE){

        }else {
            //Récupération des entrées du form
            //$name = $this->input->post('name');
            //$desc = $this->input->post('description');
            //$idcv = à faire avec le guide URI Routing

            //$this->Model_Experience->add($name, $desc/*, $idcv*/);
            header("Location: step6-create");
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