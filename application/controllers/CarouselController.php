<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarouselController extends CI_Controller {

	private $table = 'carousel';

	public function __construct()
	{
		parent::__construct();
		$this->load->library('TemplateAdmin', NULL, 'template');
		$this->load->model('M_carousel_less', 'mless');
	}

	public function index()
	{
		$data['title']   = 'Carousel';
		$data['content'] = 'carousel/index';
		$data['vitamin'] = 'carousel/index_vitamin';

		$this->template->template($data);
	}

	public function store()
	{
		$data['title']   = 'Carousel';
		$data['content'] = 'carousel/index';
		$data['vitamin'] = 'carousel/index_vitamin';

		$config['upload_path']      = 'assets/img/carousel/';
		$config['file_ext_tolower'] = TRUE;
		$config['allowed_types']    = ['jpg', 'png'];

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('path')){
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$this->template->template($data);
		}else{
			$sequence = $this->input->post('sequence');

			$exec = $this->mcore->get($this->table, '*', NULL, 'sequence', 'ASC');

			if(in_array($sequence, ['first', 'last']) == TRUE){
				if($sequence == 'first'){
					foreach ($exec->result_array() as $key) {
						if($key['sequence'] > 0){
							$where = ['id' => $key['id']];
							$object = [
								'path'     => $key['path'],
								'sequence' => $key['sequence'] + 1,
							];

						}

						$this->mcore->update($this->table, $object, $where);
					}

					$object = [
						'id'       => null,
						'path'     => $this->upload->data('file_name'),
						'sequence' => 1
					];
					$this->mcore->store($this->table, $object);
				}else{
					$total = $exec->num_rows();
					$object = [
						'id'       => null,
						'path'     => $this->upload->data('file_name'),
						'sequence' => $total + 1
					];
					$this->mcore->store($this->table, $object);
				}
			}else{

				foreach ($exec->result_array() as $key) {
					if($key['sequence'] > $sequence){
						$where = ['id' => $key['id']];
						$object = [
							'path'     => $key['path'],
							'sequence' => $key['sequence'] + 1,
						];

					}else{
						$where = ['id' => $key['id']];
						$object = [
							'path'     => $key['path'],
							'sequence' => $key['sequence'],
						];
					}

					$this->mcore->update($this->table, $object, $where);
				}

				$object = [
					'id'       => null,
					'path'     => $this->upload->data('file_name'),
					'sequence' => $sequence + 1
				];
				$this->mcore->store($this->table, $object);
			}

			$exec2 = $this->mcore->get($this->table, '*', null, 'sequence', 'ASC');

			$no = 1;
			foreach ($exec2->result() as $key) {
				$id       = $key->id;
				$sequence = $no;

				$object = ['sequence' => $sequence];
				$where = ['id' => $id];
				$this->mcore->update($this->table, $object, $where);

				$no++;
			}

			$this->session->set_flashdata('success', $this->upload->data());
			redirect('admin/carousel/index', 'refresh');
		}
	}

	public function datatables()
	{
		$list = $this->mless->get_datatables();
		$min = 1;
		$max = $list->num_rows();
		$data = array();
		$no   = $_POST['start'];
		foreach ($list->result() as $field) {
			$no++;
			$row             = array();
			$row['sequence'] = $field->sequence;
			$row['id']       = $field->id;
			$row['path']     = $field->path;
			if($field->sequence == $min){
				$btn = '<button type="button" class="btn btn-primary btn-xs down" onclick="downOrder('.$field->id.')"><i class="fa fa-caret-down"></i></button>';
			}elseif($field->sequence == $max){
				$btn = '<button type="button" class="btn btn-primary btn-xs up" onclick="upOrder('.$field->id.')"><i class="fa fa-caret-up"></i></button>';
			}else{
				$btn = '<button type="button" class="btn btn-primary btn-xs up" onclick="upOrder('.$field->id.')"><i class="fa fa-caret-up"></i></button><button type="button" class="btn btn-primary btn-xs down" onclick="downOrder('.$field->id.')"><i class="fa fa-caret-down"></i></button>';
			}

			$row['btn'] = $btn;
			$data[]          = $row;
		}

		$output = array(
			"draw"            => $_POST['draw'],
			"recordsTotal"    => $this->mless->count_all(),
			"recordsFiltered" => $this->mless->count_filtered(),
			"data"            => $data
		);

		echo json_encode($output);
	}

	public function list_sequence()
	{
		$exec  = $this->mcore->get($this->table, 'sequence', NULL, 'sequence', 'ASC');
		$total = $exec->num_rows();
		$sequence = [];
		foreach ($exec->result() as $key) {
			if($key->sequence != $total){
				$sequence[] = [
					'sequence' => $key->sequence,
					'text'     => 'Insert after slide '.$key->sequence,
				];
			}
		}
		$data['sequence'] = $sequence;
		$html = $this->load->view('admin/carousel/rend_list_sequence', $data, TRUE);

		echo json_encode($html);
	}

	public function up()
	{
		$id = $this->input->get('id');

		$exec  = $this->mcore->get($this->table, '*', ['id' => $id], 'sequence', 'ASC');
		$cur_seq = $exec->row()->sequence;
		$target_seq = $exec->row()->sequence - 1;

		$exec2  = $this->mcore->get($this->table, '*', ['sequence' => $target_seq], 'sequence', 'ASC');
		$id_target = $exec2->row()->id;

		$object = ['sequence' => $target_seq];
		$where = ['id' => $id];
		$this->mcore->update($this->table, $object, $where);

		$object = ['sequence' => $cur_seq];
		$where = ['id' => $id_target];
		$this->mcore->update($this->table, $object, $where);
	}

	public function down()
	{
		$id = $this->input->get('id');

		$exec  = $this->mcore->get($this->table, '*', ['id' => $id], 'sequence', 'ASC');
		$cur_seq = $exec->row()->sequence;
		$target_seq = $exec->row()->sequence + 1;

		$exec2  = $this->mcore->get($this->table, '*', ['sequence' => $target_seq], 'sequence', 'ASC');
		$id_target = $exec2->row()->id;

		$object = ['sequence' => $target_seq];
		$where = ['id' => $id];
		$this->mcore->update($this->table, $object, $where);

		$object = ['sequence' => $cur_seq];
		$where = ['id' => $id_target];
		$this->mcore->update($this->table, $object, $where);
	}

	public function destroy()
	{
		$id = $this->input->post('id');

		$where  = ['id' => $id];
		$exec   = $this->mcore->delete($this->table, $where);

		$exec2 = $this->mcore->get($this->table, '*', null, 'sequence', 'ASC');

		$no = 1;
		foreach ($exec2->result() as $key) {
			$id       = $key->id;
			$sequence = $no;

			$object = ['sequence' => $sequence];
			$where = ['id' => $id];
			$this->mcore->update($this->table, $object, $where);

			$no++;
		}

		if($exec){
			$ret = ['code' => 200];
		}else{
			$ret = ['code' => 500];
		}

		echo json_encode($ret);
	}

}

/* End of file CarouselController.php */
/* Location: ./application/controllers/CarouselController.php */