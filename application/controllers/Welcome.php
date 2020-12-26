<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	//cette fonction elle permete de activier le modele (Users) au niveau de controler
	public function __construct() {
		parent::__construct();
		$this->load->model('Users');
	}

	public function index()
	{ 
		//$this->load->helper('form');
		$this->load->view('const/header');
		$this->load->view('home');
		$this->load->view('const/footer.php');
	}
	
	public function register()
	{
		$this->load->view('const/header');
		$this->load->view('register');
		$this->load->view('const/footer');
	}

	
	public function register_process()
	{
		//c'est a dir si l'utilisateur click sur le bouton nomer regirer
		if ($this->input->post("register"))
		{
			//lire les donnees qu'ils sont poster par le formulaire
			$u_email=$this->input->post("u_email");
			$u_name=$this->input->post("u_name");
			$u_pass=$this->input->post("u_pass");
			//mettre tous les donees dans un array
			$data=array( 
				'u_email' =>$u_email,
				'u_name' => $u_name,
				'u_pass' => $u_pass
			);
			//inserer les donnees au base de donnee 
			$this->Users->insert($data);
			//rederecter l'utilisateur vers la fonction index qu'il ete existe dans le controleur "Welcom"
			redirect('Welcome/index','refresh');
		}
		else
		{
			redirect('Welcome/register','refresh');
		}
	}

	public function login_process()
	{
		if ($this->input->post("u_login"))
		{
			$u_name=$this->input->post("u_name");
			$u_pass=$this->input->post("u_pass");
			
			$data=array( 
				'u_name' => $u_name,
				'u_pass' => $u_pass
			);
			//cette fonction elle permet de prend les donner apartire de bd quont on trouve le nom 
			//et egale a le nome ecriver au formulaire
			$users= $this->db->get_where('users',array('u_name' => $data['u_name'] ));
			//on utilise result() pour prend la resultat de recherche
			foreach($users->result() as $user)
			{
				// le $user->u_name c'est a dire on prend le variable appele u_name (c'est le meme nome de variable dans bd)
				//qui exixte dans le srdclass $user
				if(($user->u_name == $data['u_name'])  &&   ($user->u_pass ==$data['u_pass']))
				{ 
					//echo "<script> alert ('succes') </script>";

					//creer une session appele u_name et stocker le u_name dans elle 
					$_SESSION['u_name']=$data['u_name'];
					redirect("employee/liste_employees");
					//redirect('Welcome/index','refresh');
				}
				else{echo "<script> alert ('user name or password are rong')</script>";
					redirect('Welcome/index','refresh');
				}
			}
		}
		else
		{
			redirect('home','refresh');
		}
	}
	public function logout()
	{	
		//videer le session
		session_unset();
		//deterouit le session
		session_destroy();
		redirect('Welcome/index','refresh');
	}
}
