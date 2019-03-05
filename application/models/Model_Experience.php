<?php

class Model_Experience
{
    public function get($idcv)
    {
        return $this->db->select('*')->from('cvp_c_experience')->where('cvp_c_cv_id', $idcv);
    }

    public function add($job, $company, $yearbegin, $yearend, $desc/*, $idcv*/)
    {

        $data = array(
            'name_job' => $job,
            'company' => $company,
            'beginning' => $yearbegin,
            'ending' => $yearend,
            'description' => $desc/*,
            'cvp_c_cv_id' => $idcv*/
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
            'status' => 0
        );

        //	On place sur le statut l'état "0" (archivé) à l'id sélectionné
        $this->db->where('id', $id);
        $this->db->update('cvp_c_experience', $data);
    }
}