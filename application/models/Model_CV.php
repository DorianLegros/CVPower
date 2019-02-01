<?php

class Model_CV extends CI_Model
{

    public function get($iduser)
    {
        return $this->db->select('*')->from('cvp_c_cv')->where('cvp_c_profile_id', $iduser);
    }

    public function add($name, $desc/*, $iduser*/)
    {

        $data = array(
            'name' => $name,
            'description' => $desc/*,
            'cvp_c_profile_id' => $iduser*/
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        $this->db->insert('cvp_c_cv', $data);
    }

    public function update($name, $desc)
    {

        $data = array(
            'name' => $name,
            'description' => $desc,
            'updated_at' => date('Y-m-d H:i:s')
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        $this->db->replace('cvp_c_cv', $data);
    }

    public function remove($id)
    {
        $data = array(
          'status' => 0
        );

        //	On place le sur le statut "0" (archivé) à l'id sélectionné
        $this->db->where('id', $id);
        $this->db->update('status', 0);
    }
}