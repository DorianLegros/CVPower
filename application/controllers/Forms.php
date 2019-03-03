<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/02/2019
 * Time: 10:10
 */

class Forms extends CI_Controller
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

    public function traitementStart(){
        $this->form_validation->set_rules('name','Nom', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('description','Description', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        if($this->form_validation->run() == FALSE){
            $data['title'] = "Création - Étape 1";
            $this->load->view('templates/head', $data);
            $this->load->view('templates/navbar_index');
            $this->load->view('pages/dashboard_cv_start');
            $this->load->view('templates/footer_index');
            $this->load->view('templates/foot');
        }else {
            $name = $this->input->post('name');
            $desc = $this->input->post('description');
            $iduser = $_SESSION['id'];

            $this->Model_CV->add($name, $desc, $iduser);

            header("Location: ../step2-create");
        }
    }

    public function traitementExperience(){

        $this->form_validation->set_rules('job','Métier', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('company','Entreprise', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('desc','Description', 'required|min_length[5]|max_length[255]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));
        $this->form_validation->set_rules('yearbegin','Date de début', 'required', array('required' => 'Veuillez remplir ce champ'));
        $this->form_validation->set_rules('yearend','Date de fin', 'required', array('required' => 'Veuillez remplir ce champ'));
        if($this->form_validation->run() == FALSE){

        }else {
            //Récupération des entrées du form
            $job = $this->input->post('job');
            $company = $this->input->post('company');
            $yearbegin = $this->input->post('yearbegin');
            $yearend = $this->input->post('yearend');
            $desc = $this->input->post('desc');
            $idcv = $_SESSION['id_CV'];

            $this->Model_Experience->add($job, $company, $yearbegin, $yearend, $desc, $idcv);
            header("Location: ../step2-create");
        }
        $data['title'] = "Création - Étape 2";
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_experience');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementEducation(){
        $this->form_validation->set_rules('diploma','Nom de la formation', 'required|min_length[3]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('school','École', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('yearbegin','Date de début', 'required', array('required' => 'Veuillez remplir ce champ'));
        $this->form_validation->set_rules('yearend','Date de fin', 'required', array('required' => 'Veuillez remplir ce champ'));

        if($this->form_validation->run() == FALSE){

        }else {
            $diploma = $this->input->post('diploma');
            $school = $this->input->post('school');
            $yearbegin = $this->input->post('yearbegin');
            $yearend = $this->input->post('yearend');
            $idcv = $_SESSION['id_CV'];

            $this->Model_Education->add($school, $diploma, $yearbegin, $yearend, $idcv);
            header("Location: ../step3-create");
        }
        $data['title'] = "Création - Étape 3";
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_education');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementSkillP(){
        $this->form_validation->set_rules('name1','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name1');
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_P->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }

    public function traitementSkillS(){
        $this->form_validation->set_rules('name2','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name2');
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_S->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }

    public function traitementSkillO(){
        $this->form_validation->set_rules('name3','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name3');
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_O->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot', $data);
    }

    public function traitementLanguage(){
        $this->form_validation->set_rules('name','Langue', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            //$name = $this->input->post('name');
            $level = array();
            foreach ($this->input->post('level') as $value){
                $level[] = $value;
            }
            echo $level;

        }
    }

    public function traitementHobby(){
        $this->form_validation->set_rules('name','Hobby', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            //$name = $this->input->post('name');

            //$this->Model_Hobby->add($name/*, $idcv*/);
        }
    }

    public function traitementAward(){
        $this->form_validation->set_rules('name','Récompense', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            //$name = $this->input->post('name');

            //$this->Model_Award->add($name/*, $idcv*/);
        }
    }
}