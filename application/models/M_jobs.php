<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_jobs extends CI_Model {

    public function insert($data)
    {
        // INSERT INTO jobs (j_id) value ($j_id);
        $this->db->insert('jobs',$data);
    }

}
?>