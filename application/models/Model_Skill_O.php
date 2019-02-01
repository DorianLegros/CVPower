<?php
/**
 * Created by PhpStorm.
 * User: drath
 * Date: 01/02/2019
 * Time: 14:00
 */

class Model_Skill_O
{
    public function get($idcv)
    {
        return $this->db->select('*')->from('cvp_c_skill_o')->where('cvp_c_cv_id', $idcv);
    }

    public function add($name/*, $idcv*/)
    {

        $data = array(
            'name' => $name/*,
            'cvp_c_cv_id' => $idcv*/
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        $this->db->insert('cvp_c_skill_o', $data);
    }

    public function update($id, $name)
    {

        $data = array(
            'name' => $name,
            'updated_at' => date('Y-m-d H:i:s')
        );

        //	Une fois que tous les champs ont bien été définis, on "update" le tout
        $this->db->where('id', $id);
        $this->db->update('cvp_c_skill_o', $data);
    }

    public function remove($id)
    {
        $data = array(
            'status' => 0
        );

        //	On place sur le statut l'état "0" (archivé) à l'id sélectionné
        $this->db->where('id', $id);
        $this->db->update('cvp_c_skill_o', $data);
    }
}