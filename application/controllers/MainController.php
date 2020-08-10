<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
		$data['carousel']          = $this->mcore->get('carousel', '*', NULL, 'sequence', 'ASC');
		$data['about_us']          = $this->mcore->get('about_us', '*', NULL, NULL, 'ASC');
		$data['why_us']            = $this->mcore->get('why_us', '*', NULL, NULL, 'ASC');
		$data['our_service_title'] = $this->mcore->get('our_services', 'title', ['id' => '1'], NULL, 'ASC')->row()->title;
		$data['our_services_sub']  = $this->mcore->get('our_services_sub', '*', ['id_our_services' => '1'], NULL, 'ASC');
		$data['contact']           = $this->mcore->get('contact', '*', NULL, NULL, 'ASC');

		$this->load->view('index', $data);
	}

}

/* End of file MainController.php */
/* Location: ./application/controllers/MainController.php */