<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComponentController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TemplateAdmin', NULL, 'template');
		$this->load->model('M_account_less', 'mless');
	}

	public function index()
	{
		$data['title']   = 'List Akun';
		$data['content'] = 'account/index';
		$data['vitamin'] = 'account/index_vitamin';
		$this->template->template($data);
	}

	public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('verify_password', 'Verify Password', 'required|trim|matches[password]', array('matches' => '{field} tidak sama dengan field Password'));

		$this->form_validation->set_error_delimiters('<span class="help-block text-red">', '</span>');

		if ($this->form_validation->run() === FALSE) {
			$data['title']   = 'Tambah Akun';
			$data['content'] = 'account/form';
			$data['vitamin'] = 'account/form_vitamin';
			$this->template->template($data);
		}else{
			$cur_date = new DateTime('now');
			$username = $this->input->post('username');
			$password = sha1($this->input->post('password').UYAH);

			$object = [
				'username'   => $username,
				'password'   => $password,
				'created_at' => $cur_date->format('Y-m-d H:i:s'),
				'updated_at' => $cur_date->format('Y-m-d H:i:s'),
				'deleted_at' => NULL
			];
			$exec = $this->mcore->store('admins', $object);

			if($exec === TRUE){
				$this->session->set_flashdata('success', TRUE);
				redirect(site_url().'admin/account/create','refresh');
			}else{
				$this->session->set_flashdata('error', TRUE);
				redirect(site_url().'admin/account/create','refresh');
			}
		}

	}

}

/* End of file ComponentController.php */
/* Location: ./application/controllers/ComponentController.php */