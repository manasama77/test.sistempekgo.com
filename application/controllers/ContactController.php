<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

	private $table = 'contact';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TemplateAdmin', NULL, 'template');
	}

	public function index()
	{
		$data['title']   = 'Contact';
		$data['content'] = 'contact/index';
		$data['vitamin'] = 'contact/index_vitamin';
		$exec            = $this->mcore->get($this->table, '*', NULL, NULL, 'ASC');

		$data['alamat_formal']      = $exec->row()->alamat_formal;
		$data['alamat_operasional'] = $exec->row()->alamat_operasional;

		$this->template->template($data);
	}

	public function update()
	{
		$alamat_formal      = $this->input->post('alamat_formal');
		$alamat_operasional = $this->input->post('alamat_operasional');

		$object = [
			'alamat_formal'      => $alamat_formal,
			'alamat_operasional' => $alamat_operasional,
		];
		$where  = ['id' => 1];
		$exec   = $this->mcore->update($this->table, $object, $where);

		redirect('admin/contact/index');
	}

	public function nl2br2($string) {
		$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $string);
		return $string;
	}

	public function br2nl($string)
	{
		return preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
	}

}

/* End of file ContactController.php */
/* Location: ./application/controllers/ContactController.php */