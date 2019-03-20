<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard');
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){

			$data['konten'] = 'Home';
			$data['jml_buku'] = $this->M_Dashboard->get_jml_buku();
			$data['jml_transaksi'] = $this->M_Dashboard->get_jml_transaksi();
			$data['jml_pengguna'] = $this->M_Dashboard->get_jml_pengguna();
			$this->load->view('template', $data);

		} else {
			redirect('admin/login');
		}
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */
?>