<?php defined('BASEPATH') OR exit('No direct script access allowed');

class API_restfull extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("Model_CV");
        $this->load->model("Model_Profile");
        $this->load->model('Model_Experience');
        $this->load->model('Model_Education');
        $this->load->model('Model_Skill_P');
        $this->load->model('Model_Skill_S');
        $this->load->model('Model_Skill_O');
        $this->load->model('Model_Language');
        $this->load->model('Model_Hobby');
        $this->load->model('Model_Award');
        $this->load->library(array('session'));
    }

  /*/  public function get()
    {
      $iduser = $_SESSION["id"];

        $data = $this->Model_CV->get($iduser);


        if ($data->num_rows() > 0) {

            foreach ($data->result() as $key => $row) {
                $result[$key] = array($row);

                $dataPro = $this->Model_profile->getAll();
                $result[$key]['pro'] = $dataPro->result_array();

                $dataExp = $this->Model_Experience->get($row->id);
                $result[$key]['exp'] = $dataExp->result_array();

                $dataEdu = $this->Model_Education->get($row->id);
                $result[$key]['edu'] = $dataEdu->result_array();

                $dataSkp = $this->Model_Skill_P->get($row->id);
                $result[$key]['skp'] = $dataSkp->result_array();

                $dataSks = $this->Model_Skill_S->get($row->id);
                $result[$key]['sks'] = $dataSks->result_array();

                $dataSko = $this->Model_Skill_O->get($row->id);
                $result[$key]['sko'] = $dataSko->result_array();

                $dataLan = $this->Model_Language->get($row->id);
                $result[$key]['lan'] = $dataLan->result_array();

                $dataHob = $this->Model_Hobby->get($row->id);
                $result[$key]['hob'] = $dataHob->result_array();

                $dataAwa = $this->Model_Award->get($row->id);
                $result[$key]['awa'] = $dataAwa->result_array();
            }
            echo json_encode($result);
        } else {
           /* header("HTTP/1.0 204 No Content");
            echo json_encode("204: no products in the database");*/
    //    }
  //  }



    public function getAll()
    {

        $data = $this->Model_CV->getAll();
        if ($data->num_rows() > 0) {

            foreach ($data->result() as $key => $row) {
                $result[$key] = array($row);

                $dataExp = $this->Model_Experience->get($row->id);
                $result[$key]['exp'] = $dataExp->result_array();

                $dataEdu = $this->Model_Education->get($row->id);
                $result[$key]['edu'] = $dataEdu->result_array();

                $dataSkp = $this->Model_Skill_P->get($row->id);
                $result[$key]['skp'] = $dataSkp->result_array();

                $dataSks = $this->Model_Skill_S->get($row->id);
                $result[$key]['sks'] = $dataSks->result_array();

                $dataSko = $this->Model_Skill_O->get($row->id);
                $result[$key]['sko'] = $dataSko->result_array();

                $dataLan = $this->Model_Language->get($row->id);
                $result[$key]['lan'] = $dataLan->result_array();

                $dataHob = $this->Model_Hobby->get($row->id);
                $result[$key]['hob'] = $dataHob->result_array();

                $dataAwa = $this->Model_Award->get($row->id);
                $result[$key]['awa'] = $dataAwa->result_array();
            }
            echo json_encode($result);
        } else {
            /* header("HTTP/1.0 204 No Content");
             echo json_encode("204: no products in the database");*/
        }
    }


    public function listCV()
    {

        $data = $this->Model_Profile->getAll();

        echo json_encode($data);

    }


    public function pdf($id)
    {
        $data = $this->Model_CV->getById($id);
        if ($data->num_rows() > 0) {

            foreach ($data->result() as $key => $row) {
                $result[$key] = array($row);

                $dataPro = $this->Model_Profile->get($row->cvp_c_profile_id);
                $result[$key]['pro'] = $dataPro->result_array();

                $dataExp = $this->Model_Experience->get($row->id);
                $result[$key]['exp'] = $dataExp->result_array();

                $dataEdu = $this->Model_Education->get($row->id);
                $result[$key]['edu'] = $dataEdu->result_array();

                $dataSkp = $this->Model_Skill_P->get($row->id);
                $result[$key]['skp'] = $dataSkp->result_array();

                $dataSks = $this->Model_Skill_S->get($row->id);
                $result[$key]['sks'] = $dataSks->result_array();

                $dataSko = $this->Model_Skill_O->get($row->id);
                $result[$key]['sko'] = $dataSko->result_array();

                $dataLan = $this->Model_Language->get($row->id);
                $result[$key]['lan'] = $dataLan->result_array();

                $dataHob = $this->Model_Hobby->get($row->id);
                $result[$key]['hob'] = $dataHob->result_array();

                $dataAwa = $this->Model_Award->get($row->id);
                $result[$key]['awa'] = $dataAwa->result_array();
            }
            $this->load->view('pages/cv_pdf', array("res" =>$result));
        } else {
            /* header("HTTP/1.0 204 No Content");
             echo json_encode("204: no products in the database");*/
        }
    }
}