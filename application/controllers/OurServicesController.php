<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurServicesController extends CI_Controller {

	private $table = 'our_services';
	private $table2 = 'our_services_sub';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TemplateAdmin', NULL, 'template');
	}

	public function index()
	{
		$data['title']              = 'Our Services';
		$data['content']            = 'our_services/index';
		$data['vitamin']            = 'our_services/index_vitamin';
		$exec                       = $this->mcore->get($this->table, '*', NULL, NULL, 'ASC');
		$data['title_our_services'] = $exec->row()->title;
		$data['sub']                = $this->mcore->get($this->table2, '*', NULL, 'id', 'DESC');
		$this->template->template($data);
	}

	public function store()
	{
		$title  = $this->input->post('title', TRUE);
		$detail = $this->input->post('detail', TRUE);

		if($_FILES['picture']['size'] > 0){
			$config['upload_path']      = 'assets/img/our_services/';
			$config['file_ext_tolower'] = TRUE;
			$config['allowed_types']    = ['jpg', 'png'];

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('picture')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}else{
				$object = [
					'id_our_services' => '1',
					'title'           => $title,
					'detail'          => $detail,
					'picture'         => $this->upload->data('file_name')
				];
				$exec   = $this->mcore->store($this->table2, $object);
			}
		}else{
			show_error("Proses Upload Gagal, silahkan coba kembali", 500, "Terjadi kesalahan");
			exit;
		}

		redirect('admin/our_services/index');
	}

	public function update()
	{
		$id   = $this->input->post('edit_id');
		$title   = $this->input->post('edit_title');
		// $detail = $this->nl2br2(trim($this->input->post('edit_detail')));
		$detail = trim($this->input->post('edit_detail'));

		if($_FILES['edit_picture']['size'] > 0){
			$config['upload_path']      = 'assets/img/our_services/';
			$config['file_ext_tolower'] = TRUE;
			$config['allowed_types']    = ['jpg', 'png'];

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('edit_picture')){
				$this->session->set_flashdata('error', $this->upload->display_errors());
			}else{
				$object = [
					'title'   => $title,
					'detail'  => $detail,
					'picture' => $this->upload->data('file_name')
				];
				$where  = ['id' => $id];
				$exec   = $this->mcore->update($this->table2, $object, $where);
			}
		}else{
			$object = [
				'title'  => $title,
				'detail' => $detail,
			];
			$where  = ['id' => $id];
			$exec   = $this->mcore->update($this->table2, $object, $where);
		}

		redirect('admin/our_services/index');
	}

	public function show()
	{
		$id   = $this->input->get('id');
		$exec = $this->mcore->get($this->table2, '*', ['id' => $id], 'id', 'DESC');

		$data['title']   = $exec->row()->title;
		$data['detail']  = $exec->row()->detail;
		$data['picture'] = $exec->row()->picture;

		echo json_encode($data);
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$exec = $this->mcore->delete($this->table2, ['id' => $id]);

		if($exec) {
			$code = 200;
		}else{
			$code = 500;
		}

		echo json_encode(compact('code'));
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

/* End of file OurServicesController.php */
/* Location: ./application/controllers/OurServicesController.php */