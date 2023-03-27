
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
				$url=base_url().'login/';
				redirect($url);
		}
		$this->load->model('m_history');
	}
	
	public function index(){
		$cek_user_level = $this->session->userdata('akses');
		$cek_user_nisn = $this->session->userdata('ses_id');
		
		if($cek_user_level == 'siswa'){
			//id diambil dari URL SEGMENT 3
			$data['satu'] = $this->m_history->datasiswa($cek_user_nisn)->row_array();
			$data['databayar'] = $this->m_history->databayar($cek_user_nisn);
			$this->load->view('v_history',$data);
		}
		else{
			redirect('notfound');
		}
	}
}
