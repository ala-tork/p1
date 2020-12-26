<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class employee extends CI_Controller 
{
    public function add_empoyee()
    {
        
    $this->load->view('dash/add_employee');

    }
    public function fn_add_empoyee()
    {
        if($this->input->post("add_job"))
        {
            $e_name=$this->input->post("e_name");
            $e_phone=$this->input->post("e_phone");
            $e_email=$this->input->post("e_email");
            $e_job=$this->input->post("e_job");
            $data=array(
                'e_name'=>$e_name,
                'e_phone'=>$e_phone,
                'e_email'=>$e_email,
                'e_job'=>$e_job
            );
            $this->db->insert('employees',$data);
            redirect('employee/liste_employees',"refresh");
        }
       
        
    }
    public function liste_employees()
    {
        $this->load->view("dash/liste_employees");
        

    }
    public function details()
    {
        $this->load->view("dash/details");
    }

    public function edit($e_id)
    {
        
        $this->load->view("dash/edit",$e_id);

    }

    public function edit_process_empoyee($e_id)
    {
        if($this->input->post("edit_employee"))
        {
            $e_name=$this->input->post("e_name");
            $e_phone=$this->input->post("e_phone");
            $e_email=$this->input->post("e_email");
            $e_job=$this->input->post("e_job");
            $data=array(
                'e_name'=>$e_name,
                'e_phone'=>$e_phone,
                'e_email'=>$e_email,
                'e_job'=>$e_job
                    );
                    $this->db->where('e_id', $e_id);
                    $this->db->update('employees', $data);
                    redirect("employee/liste_employees");
        }
    }

    public function delete($e_id)
    {
        $this->db->delete('employees', array('e_id' => $e_id));
        redirect("employee/liste_employees");
    }
}