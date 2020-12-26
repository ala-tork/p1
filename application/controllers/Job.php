<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('M_jobs');
	}

    public function index()
    {
        $this->load->view('dash/add_job');
    }
    public function list_job()
    {
        $this->load->view("dash/job_list");
       
    }

    public function add_job()
    {
        //c'est a dire que si on click sur le bouton add_job
        if($this->input->post("add_job"))
        {
            //elle permet de stocker les donnees de la casse nomee j_name qu'il est  poster par le formulaire 
            $j_name=$this->input->post('j_name');
            $data=array(
                'j_name' => $j_name
            );
            //cette phrase elle passe sur la fonction insert qu'il est creer dans le model M_jobs et passer avec les parametres $data
            $this->M_jobs->insert($data);

            
            redirect("job/list_job","refresh");

        }
    }
    public function update_job($j_id)
    {
        $this->load->view("dash/update_job",$j_id);
    }
    
    public function update_process_job($j_id)
    {
         //c'est a dire que si on click sur le bouton update_job
        if($this->input->post("update_job"))
        {
            $j_name=$this->input->post('j_name');
            $data=array(
                'j_name' => $j_name
            );
            //cette deux instruction dire que on fait l'edite dans le table jobe avec les nouveaux donnees $data
            //quand j_id egale a $j_id
            $this->db->where('j_id',$j_id);
            $this->db->update('jobs',$data);
            
            redirect("job/list_job","refresh");
        }
    }
   

    public function delete_job($j_id)
    {
        
          // DELETE FROM jobs WHERE j_id = $j_id
            $this->db->delete('jobs', array('j_id' => $j_id));
            redirect("job/list_job","refresh");

        
        
    }

}