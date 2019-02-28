<?php

class Model_Award extends CI_Model
{
    public function construct(){
        parent::construct();
    }

    public function get($idcv)
    {
        return $this->db->select('*')->from('cvp_c_award')->where('cvp_c_cv_id', $idcv)->get();
    }

    public function getAll()
    {
        return $this->db->select('*')->from('cvp_c_cv')->get();
    }

    public function add($name, $desc, $year/*, $idcv*/)
    {

        $data = array(
            'name' => $name,
            'description' => $desc,
            'year' => $year/*,
            'cvp_c_cv_id' => $idcv*/
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        $this->db->insert('cvp_c_award', $data);
    }

    public function update($id, $name, $desc, $year)
    {

        $data = array(
            'name' => $name,
            'description' => $desc,
            'year' => $year,
            'updated_at' => date('Y-m-d H:i:s')
        );

        //	Une fois que tous les champs ont bien été définis, on "update" le tout
        $this->db->where('id', $id);
        $this->db->update('cvp_c_award', $data);
    }

    public function remove($id)
    {
        $data = array(
            'status' => 0
        );

        //	On place sur le statut l'état "0" (archivé) à l'id sélectionné
        $this->db->where('id', $id);
        $this->db->update('cvp_c_award', $data);
    }
}