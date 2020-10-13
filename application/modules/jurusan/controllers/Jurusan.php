<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jurusan_model');
	}

	public function index()
	{
		$data['title'] = 'Data Jurusan';
		$data['page_header'] = 'Data Jurusan';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main-datatables', $data);
	}

	public function list_data()
	{
		$query = $this->jurusan_model->getAll();
		$inc = 1;
		$data = array();
		foreach ($query as $key => $value) {
			$data[$key][] = $inc++;
			$data[$key][] = $value['kode_jurusan'];
			$data[$key][] = $value['nama_jurusan'];
			$data[$key][] = '<a href="'. base_url("/jurusan/edit").'/'.$value['id_jurusan'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							 <a href="'. base_url("/jurusan/destroy").'/'.$value['id_jurusan'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
		}
		$result = array(
			'data' => $data
		);
		echo json_encode($result);
	}

	public function create()
	{
		$data['title'] = 'Tambah Data Jurusan';
		$data['page_header'] = 'Tambah Data Jurusan';
		
		$this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'trim|required|is_unique[jurusan.kode_jurusan]');
		$this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['content'] = $this->load->view('create', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		} else {
			$this->jurusan_model->insert();
			$this->session->set_flashdata('flash', 'Jurusan Berhasil Ditambahkan');
			return redirect(base_url().'jurusan');
		}
	}

	public function edit($id_jurusan)
	{
		$data['jurusan'] = $this->jurusan_model->getById($id_jurusan);
		$data['title'] = 'Edit Data Jurusan';
		$data['page_header'] = 'Edit Data Jurusan';
		
		$this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'trim|required');
		$this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['content'] = $this->load->view('edit', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		} else {
			$this->jurusan_model->update($id_jurusan);
			$this->session->set_flashdata('flash', 'Jurusan Berhasil Diperbarui');
			return redirect(base_url().'jurusan');
		}
	}

	public function destroy($id)
	{
		$data = $this->jurusan_model->getById($id);

		if ($data) {
			$this->jurusan_model->delete($id);
			$this->session->set_flashdata('flash', 'Jurusan Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('flash', 'Jurusan Tidak Ditemukan');
		}
		
		return redirect(base_url().'jurusan');
	}
}
