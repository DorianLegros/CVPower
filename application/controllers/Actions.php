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
        $this->load->helper('url');
    }

    public function suppressionCV($id){
        $this->Model_CV->remove($id);
        //à changer vers le bon chemin header("Location: ../../../step1-create");
    }

    public function suppressionExperience($id){
        $this->Model_Experience->remove($id);
        header("Location: ../../../step2-create");
    }

    public function suppressionEducation($id){
        $this->Model_Education->remove($id);
        header("Location: ../../../step3-create");
    }

    public function suppressionSkillP($id){
        $this->Model_Skill_P->remove($id);
        header("Location: ../../../step4-create");
    }

    public function suppressionSkillS($id){
        $this->Model_Skill_S->remove($id);
        header("Location: ../../../step4-create");
    }

    public function suppressionSkillO($id){
        $this->Model_Skill_O->remove($id);
        header("Location: ../../../step4-create");
    }

    public function suppressionLanguage($id){
        $this->Model_Language->remove($id);
        header("Location: ../../../step5-create");
    }

    public function suppressionHobby($id){
        $this->Model_Hobby->remove($id);
        header("Location: ../../../step5-create");
    }

    public function suppressionAward($id){
        $this->Model_Award->remove($id);
        header("Location: ../../../step5-create");
    }
}