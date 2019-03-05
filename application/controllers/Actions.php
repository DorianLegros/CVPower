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
        $this->load->helper('url');
    }

    public function suppressionCV($id){
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

    public function suppressionExperience($id, $state){
        $this->Model_Experience->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step2-create");
        }
    }

    public function suppressionEducation($id, $state){
        $this->Model_Education->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else
        header("Location: ../../../step3-create");
    }

    public function suppressionSkillP($id, $state){
        $this->Model_Skill_P->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionSkillS($id, $state){
        $this->Model_Skill_S->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionSkillO($id, $state){
        $this->Model_Skill_O->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step4-create");
        }
    }

    public function suppressionLanguage($id, $state){
        $this->Model_Language->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function suppressionHobby($id, $state){
        $this->Model_Hobby->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function suppressionAward($id, $state){
        $this->Model_Award->remove($id);
        if ($state == "final") {
            header("Location: ../../../finalisation-create");
        } else {
            header("Location: ../../../step5-create");
        }
    }

    public function validationFormulaire() {
        unset($_SESSION['id_CV']);
        header("Location: ../dashboard");
    }
}