<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('users',$data);
    }
}
?>