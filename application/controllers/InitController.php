<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InitController extends CI_Controller {

	public function index()
	{
		$now      = new DateTime();
		$password = sha1('admin'.UYAH);

		# INIT ROLE
		##################################################################
		$data_admin[0] = [
			'username'   => 'admin',
			'password'   => $password,
			'created_at' => $now->format('Y-m-d H:i:s'),
			'updated_at' => $now->format('Y-m-d H:i:s'),
			'deleted_at' => NULL
		];

		$exec = $this->mcore->store_batch('admins', $data_admin);
		##################################################################
	}

}

/* End of file InitController.php */
/* Location: ./application/controllers/InitController.php */