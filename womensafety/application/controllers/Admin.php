<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 

	public function index()
	{
		$this->load->view('admin/inc/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/inc/footer');
	}

		public function add_user()
	{

		$data['title']='Add User';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('gender', 'Gender','required');
		$this->form_validation->set_rules('emergency_number_1', 'Emergency Number 1','required');
		$this->form_validation->set_rules('emergency_number_2', 'Emergency Number 2','required');
		$this->form_validation->set_rules('type', 'Type','required');
		$this->form_validation->set_rules('time', 'Time','required');
		


 
		if ($this->form_validation->run() == FALSE) {

		$data['places']=$this->db->get('user')->result_array();

		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-user',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


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
			 }else {
			  $uploadedImgae = $this->upload->data();
			  $idata['filepath'] = $uploadedImgae['file_name'];
			 }

			 $this->db->insert('user',$idata);

			 echo 'File Uploaded';

			$this->db->insert('user',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function edit_user($id)

	{

		$data['title']='Edit User';


		
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('c_password', 'Confirm', 'required|matches[password]');
		$this->form_validation->set_rules('address', 'Address','required');
		$this->form_validation->set_rules('gender', 'Gender','required');
		$this->form_validation->set_rules('emergency_number_1', 'Emergency Number 1','required');
		$this->form_validation->set_rules('emergency_number_2', 'Emergency Number 2','required');
		$this->form_validation->set_rules('type', 'Type ','required');
		$this->form_validation->set_rules('time', 'Time ','required');
		

		if ($this->form_validation->run() == FALSE) {
			
			
		$data['user']=$this->db->where('u_id',$id)->get('user')->result_array();


		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-user',$data);
		$this->load->view('admin/inc/footer');


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


			$this->db->where('u_id',$id)->update('user',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}	 
	}



	public function view_user()
	{

		$data['title']='View User';

		$data['user']=$this->db->get('user')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-user',$data);
		$this->load->view('admin/inc/footer');

	}

	public function add_police()
	{

		$data['title']='Add Police';


		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('area', 'Area', 'required');
		
		if ($this->form_validation->run() == FALSE) {

		$data['police']=$this->db->get('police')->result_array();

		
		$this->load->view('admin/inc/header');
		$this->load->view('admin/add-police',$data);
		$this->load->view('admin/inc/footer');

		}

		else {


			$idata['name']=$this->input->post('name');
			$idata['mobile']=$this->input->post('mobile');
			$idata['area']=$this->input->post('area');
			


			$this->db->insert('police',$idata);

			$message='<div class="alert alert-success">Data Successfully Inserted</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	public function edit_police($id)

	{

		$data['title']='Edit Police';


		
		$this->form_validation->set_rules('name', 'Name', 'required|regex_match[/^[a-zA-Z ]*$/]');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|is_numeric|exact_length[11]');
		$this->form_validation->set_rules('area', 'area', 'required');
		

		if ($this->form_validation->run() == FALSE) {
			
			
		$data['police']=$this->db->where('p_id',$id)->get('police')->result_array();


		$this->load->view('admin/inc/header');
		$this->load->view('admin/edit-police',$data);
		$this->load->view('admin/inc/footer');


		} else {


			$idata['name']=$this->input->post('name');
			$idata['mobile']=$this->input->post('mobile');
			$idata['area']=$this->input->post('area');
			


			$this->db->where('p_id',$id)->update('police',$idata);

			$message='<div class="alert alert-success">Data Successfully Updated</div>';

			$this->session->set_flashdata('message',$message);

			redirect($_SERVER['HTTP_REFERER']);
		}	 
	}

	public function view_police()
	{

		$data['title']='View Police';

		$data['police']=$this->db->get('police')->result_array();

		$this->load->view('admin/inc/header');
		$this->load->view('admin/view-police',$data);
		$this->load->view('admin/inc/footer');

	}




}
