<?php
/**
 * Created by PhpStorm.
 * User: jonre
 * Date: 28/01/2019
 * Time: 10:50
 */

class Model_CV extends CI_Model
{
    protected $table = 'cvp_c_profile';

    public function ajouter_name($lastname, $name, $phone_number)
    {
        /*//	Ces données seront automatiquement échappées
        $this->db->set('lastname',  $lastname);
        $this->db->set('name',   $name);
        $this->db->set('phone_number', $phone_number);

        //	Ces données ne seront pas échappées
        $this->db->set('updated_at', 'NOW()', false); */

        $data = array(
            'lastname' => $lastname,
            'name' => $name,
            'phone_number' => $phone_number,
            'updated_at' => date('Y-m-j H:i:s')
        );

        //	Une fois que tous les champs ont bien été définis, on "insert" le tout
        return $this->db->insert('cvp_c_profile', $data);
    }
}