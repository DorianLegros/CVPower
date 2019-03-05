<?php

class Model_Experience extends CI_Model
{
    public function construct(){
        parent::construct();
    }

    public function get($idcv)
    {
        $this->db->select('*')->from('cvp_c_experience')->where('cvp_c_cv_id', $idcv)->where('status', TRUE);
        return $this->db->get()->result_array();
    }

    public function add($job, $company, $yearbegin, $yearend, $desc, $idcv)
    {

        $data = array(
            'name_job' => $job,
            'compagny' => $company,
            'beginning' => $yearbegin,
            'ending' => $yearend,
            'description' => $desc,
            'cvp_c_cv_id' => $idcv
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        $this->db->insert('cvp_c_experience', $data);
    }

    public function update($id, $job, $company, $yearbegin, $yearend, $desc)
    {

        $data = array(
            'name_job' => $job,
            'company' => $company,
            'beginning' => $yearbegin,
            'ending' => $yearend,
            'description' => $desc,
            'updated_at' => date('Y-m-d H:i:s')
        );

        //	Une fois que tous les champs ont bien été définis, on "update" le tout
        $this->db->where('id', $id);
        $this->db->update('cvp_c_experience', $data);
    }

    public function remove($id)
    {
        $data = array(
            'status' => 0,
            'updated_at' => date('Y-m-d H:i:s')
        );

        //	On place sur le statut l'état "0" (archivé) à l'id sélectionné
        $this->db->where('id', $id);
        $this->db->update('cvp_c_experience', $data);
    }

    public function removeCV($idcv)
    {
        $data = array(
            'status' => 0,
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->select('*')->from('cvp_c_experience')->where('cvp_c_cv_id', $idcv)->where('status', TRUE);
        $result = $this->db->get()->result_array();

        if (!empty($result)) {
            //	On place sur le statut l'état "0" (archivé) à l'id sélectionné
            $this->db->where('cvp_c_cv_id', $idcv);
            $this->db->update('cvp_c_experience', $data);
        }
    }
}