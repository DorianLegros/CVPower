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
        $this->load->model('User_model');
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
            $name = $this->security->xss_clean($name);
            $desc = $this->input->post('description');
            $desc = $this->security->xss_clean($desc);
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
            $job = $this->security->xss_clean($job);
            $company = $this->input->post('company');
            $company = $this->security->xss_clean($company);
            $yearbegin = $this->input->post('yearbegin');
            $yearend = $this->input->post('yearend');
            $desc = $this->input->post('desc');
            $desc = $this->security->xss_clean($desc);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Experience->add($job, $company, $yearbegin, $yearend, $desc, $idcv);
            header("Location: ../step2-create");
        }
        $data['title'] = "Création - Étape 2";
        $data['liste'] = $this->Model_Experience->get($_SESSION['id_CV']);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_experience');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementEducation(){
        $this->form_validation->set_rules('level','Sélectionner le niveau de la formation', 'required', array('required' => 'Veuillez remplir ce champ'));
        $this->form_validation->set_rules('diploma','Nom de la formation', 'required|min_length[3]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Nom trop court', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('school','École', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('yearbegin','Date de début', 'required', array('required' => 'Veuillez remplir ce champ'));
        $this->form_validation->set_rules('yearend','Date de fin', 'required', array('required' => 'Veuillez remplir ce champ'));
        $this->form_validation->set_rules('desc','Description', 'required|min_length[5]|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Description trop courte', 'max_length' => 'Description trop longue'));


        if($this->form_validation->run() == FALSE){

        }else {
            $level = $this->input->post('level');
            $diploma = $this->input->post('diploma');
            $diploma = $this->security->xss_clean($diploma);
            $school = $this->input->post('school');
            $school = $this->security->xss_clean($school);
            $yearbegin = $this->input->post('yearbegin');
            $yearend = $this->input->post('yearend');
            $desc = $this->input->post('desc');
            $desc = $this->security->xss_clean($desc);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Education->add($level, $school, $diploma, $yearbegin, $yearend, $desc, $idcv);
            header("Location: ../step3-create");
        }
        $data['title'] = "Création - Étape 3";
        $data['liste'] = $this->Model_Education->get($_SESSION['id_CV']);
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
            $name = $this->security->xss_clean($name);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_P->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $data['liste1'] = $this->Model_Skill_P->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Skill_S->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Skill_O->get($_SESSION['id_CV']);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementSkillS(){
        $this->form_validation->set_rules('name2','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name2');
            $name = $this->security->xss_clean($name);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_S->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $data['liste1'] = $this->Model_Skill_P->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Skill_S->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Skill_O->get($_SESSION['id_CV']);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementSkillO(){
        $this->form_validation->set_rules('name3','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name3');
            $name = $this->security->xss_clean($name);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Skill_O->add($name, $idcv);
            header("Location: ../step4-create");
        }
        $data['title'] = "Création - Étape 4";
        $data['liste1'] = $this->Model_Skill_P->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Skill_S->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Skill_O->get($_SESSION['id_CV']);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_skill');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementLanguage(){
        $this->form_validation->set_rules('name1','Langue', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('level[]', 'Niveau', 'required', array('required' => 'Veuillez remplir ce champ'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name1');
            $name = $this->security->xss_clean($name);
            $level = $this->input->post('level');
            if (isset($level['write'])) {
                $write = 1;
            } else {
                $write = 0;
            }
            $read = $this->input->post('read');
            if (isset($level['read'])) {
                $read = 1;
            } else {
                $read = 0;
            }
            $speak = $this->input->post('speak');
            if (isset($level['speak'])) {
                $speak = 1;
            } else {
                $speak = 0;
            }
            $idcv = $_SESSION['id_CV'];

            $this->Model_Language->add($name, $write, $read, $speak, $idcv);
            header("Location: ../step5-create");

        }
        $data['title'] = "Création - Étape 5";
        $data['liste1'] = $this->Model_Language->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Hobby->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Award->get($_SESSION['id_CV']);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_others');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementHobby(){
        $this->form_validation->set_rules('name2','Hobby', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name2');
            $name = $this->security->xss_clean($name);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Hobby->add($name, $idcv);
            header("Location: ../step5-create");
        }
        $data['title'] = "Création - Étape 5";
        $data['liste1'] = $this->Model_Language->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Hobby->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Award->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_others');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementAward(){
        $this->form_validation->set_rules('name3','Récompense', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('desc','Description', 'required|max_length[255]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Description trop longue'));
        $this->form_validation->set_rules('year','Description', 'required', array('required' => 'Veuillez remplir ce champ'));
        if($this->form_validation->run() == FALSE){

        }
        else {
            $name = $this->input->post('name3');
            $name = $this->security->xss_clean($name);
            $year = $this->input->post('year');
            $desc = $this->input->post('desc');
            $desc = $this->security->xss_clean($desc);
            $idcv = $_SESSION['id_CV'];

            $this->Model_Award->add($name, $desc, $year, $idcv);
            header("Location: ../step5-create");
        }
        $data['title'] = "Création - Étape 5";
        $data['liste1'] = $this->Model_Language->get($_SESSION['id_CV']);
        $data['liste2'] = $this->Model_Hobby->get($_SESSION['id_CV']);
        $data['liste3'] = $this->Model_Award->get($_SESSION['id_CV']);

        $this->load->view('templates/head', $data);
        $this->load->view('templates/navbar_dashboard');
        $this->load->view('pages/dashboard_cv_others');
        $this->load->view('templates/footer_dashboard');
        $this->load->view('templates/foot');
    }

    public function traitementProfile(){
        $this->form_validation->set_rules('lastname','Nom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('name','Prénom', 'required|max_length[45]', array('required' => 'Veuillez remplir ce champ', 'max_length' => 'Nom trop long'));
        $this->form_validation->set_rules('phone','Téléphone', 'required|min_length[10]|max_length[10]', array('required' => 'Veuillez remplir ce champ', 'min_length' => 'Numéro de téléphone non valide', 'max_length' => 'Numéro de téléphone non valide'));
        if($this->form_validation->run() == FALSE){
            $data['title'] = "Profil utilisateur";
            $data['liste'] = $this->User_model->get($_SESSION['id']);

            $this->load->view('templates/head', $data);
            $this->load->view('templates/navbar_dashboard');
            $this->load->view('pages/dashboard_user_profile');
            $this->load->view('templates/footer_dashboard');
            $this->load->view('templates/foot');
        }
        else {
            $name = $this->input->post('name');
            $lastname = $this->input->post('lastname');
            $phone = $this->input->post('phone');
            $driving = $this->input->post('driving');
            $iduser = $_SESSION['id'];

            $this->User_model->modifProfil($iduser, $name, $lastname, $phone, $driving);
            header('Location: ../dashboard');
        }
    }
}