<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhyUsController extends CI_Controller {

	private $table = 'why_us';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TemplateAdmin', NULL, 'template');
	}

	public function index()
	{
		$data['title']   = 'Why Us';
		$data['content'] = 'why_us/index';
		$data['vitamin'] = 'why_us/index_vitamin';
		$exec            = $this->mcore->get($this->table, '*', NULL, NULL, 'ASC');

		$data['title_data']   = $exec->row()->title;
		$data['content_data'] = $this->br2nl($exec->row()->content);
		$data['photo_data']   = $exec->row()->photo;

		$this->template->template($data);
	}

	public function update()
	{
		$title   = $this->input->post('title');
		$content = $this->nl2br2(trim($this->input->post('content')));

		if($_FILES['foto']['size'] > 0){
			$config['upload_path']      = 'assets/img/why_us/';
			$config['file_ext_tolower'] = TRUE;
			$config['allowed_types']    = ['jpg', 'png'];

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}else{
				$object = [
					'title'   => $title,
					'content' => $content,
					'photo'   => $this->upload->data('file_name')
				];
				$where  = ['id' => 1];
				$exec   = $this->mcore->update($this->table, $object, $where);
			}
		}else{
			$object = [
				'title'   => $title,
				'content' => $content,
			];
			$where  = ['id' => 1];
			$exec   = $this->mcore->update($this->table, $object, $where);
		}

		$config['upload_path']      = 'assets/img/why_us/';
		$config['file_ext_tolower'] = TRUE;
		$config['allowed_types']    = ['jpg', 'png'];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('photo')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
		}else{
			$object = [
				'title'   => $title,
				'content' => $content,
				'photo'   => $this->upload->data('file_name')
			];
			$where  = ['id' => 1];
			$exec   = $this->mcore->update($this->table, $object, $where);
		}

		redirect('admin/why_us/index');
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

/* End of file WhyUsController.php */
/* Location: ./application/controllers/WhyUsController.php */