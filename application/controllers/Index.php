<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('user/v_index');
	}

	public function tentang(){
		$this->load->view('user/v_tentang');
	}
	public function suku_cadang($id){
		$this->db->where('id_kategori',$id);
		$data['sukuCadang'] = $this->db->get('suku_cadang')->result(); //mengambil data dari database
		$this->load->view('user/v_suku_cadang', $data);
	}

	public function galleri($id){
		$this->db->where('id_kategori',$id);
		$data['galeri'] = $this->db->get('galeri')->result(); //mengambil data dari database
		$this->load->view('user/v_galeri', $data);
	}

	public function tipstrik(){
		$this->load->view('user/v_tipstrik');
	}

}