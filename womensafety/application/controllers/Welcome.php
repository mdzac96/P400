<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/home');
		$this->load->view('inc/footer');
	}
	public function about()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/about');
		$this->load->view('inc/footer');
	}
	public function services()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/services');
		$this->load->view('inc/footer');
	}
	public function history()
	{
		$this->load->view('inc/header');
		$this->load->view('pages/history');
		$this->load->view('inc/footer');
	}
	public function signup()
	{

		$data['title']='Sign Up';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|regex_match[/^[0-9 ]+/]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address');
		$this->form_validation->set_rules('gender', 'Gender');
		$this->form_validation->set_rules('emergency_number_1', 'Emergency Number 1');
		$this->form_validation->set_rules('emergency_number_2', 'Emergency Number 2');
		$this->form_validation->set_rules('type', 'Type');
		$this->form_validation->set_rules('time', 'Time');





		if ($this->form_validation->run() == FALSE) {

			 $this->load->view('pages/signup',$data);

		} else {


			$idata['name']=$this->input->post('name');
			$idata['mobile']=$this->input->post('mobile');
			$idata['email']=$this->input->post('email');
			$idata['password']=$this->input->post('password');
			$idata['c_password']=$this->input->post('c_password');
			$idata['address']=$this->input->post('address');
			$idata['emergency_number_1']=$this->input->post('emergency_number_1');
			$idata['emergency_number_2']=$this->input->post('emergency_number_2');
			$idata['type']=$this->input->post('type');
			$idata['time']=$this->input->post('time');


			$config['upload_path'] = './images'; // Folder Name
			  $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
			  $config['max_size'] = 2000;
			  // $config['max_width'] = 1024;
			  // $config['max_height'] = 768;
			  $this->load->library('upload', $config);
			   if (!$this->upload->do_upload('user-image')) {
			     $this->session->set_flashdata('message', $this->upload->display_errors());
			    return;
			 } else {
			  $uploadedImgae = $this->upload->data();
			  $idata['filepath'] = $uploadedImgae['file_name'];
			 }

			 //$this->db->insert('user',$idata);

			 echo 'File Uploaded';



			
			

			$this->db->insert('user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}


	 
		 
	}

	public function login()
	{
		
	 	$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|min_length[5]|max_length[10]');
		 
 
 
		if ($this->form_validation->run() == FALSE) {

		$this->load->view('inc/header');
		 $this->load->view('pages/login');
		 $this->load->view('inc/footer');

		}

		else {


			$result=$this->db->where('email',$this->input->post('email'))->where('password',$this->input->post('password'))->get('user')->result_array();

			if($result){


				
				$sdata['email']=$result[0]['email'];
				$sdata['password']=$result[0]['password'];
				
				
				$this->session->set_userdata($sdata);

				if($result[0]['type']=='admin'){

						redirect('Admin');

				}else{

					redirect('User');
				}

			
			}else{


			$message='<div class="alert alert-danger">Wrong Username or Password</div>';

			$this->session->set_flashdata('message',$message);


					redirect('Login');
			}
		}
	}

}
