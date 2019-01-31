<?php
/**
 * Created by PhpStorm.
 * User: jonre
 * Date: 28/01/2019
 * Time: 10:50
 */

class Model_CV extends CI_Model
{

    public function ajouter_name($name, $desc/*, $iduser*/)
    {

        $data = array(
            'name' => $name,
            'description' => $desc/*,
            'cvp_c_profile_id' => $iduser*/
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert('cvp_c_cv', $data);
    }
}