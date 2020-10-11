<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jurusan_model');
	}

	public function index()
	{
		$data['title'] = 'Jurusan';
		$data['page_header'] = 'Jurusan';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main-datatables', $data);
	}

	public function list_data()
	{
		$query = $this->Jurusan_model->getAll();
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
		$data['title'] = 'Jurusan';
		$data['page_header'] = 'Jurusan';
		$data['content'] = $this->load->view('create', $data, TRUE);
		$this->load->view('template-admin/main-form', $data);
	}

	public function store()
	{
		$jurusan = $this->Jurusan_model;
		$validation = $this->form_validation;
		$validation->set_rules($jurusan->rules());

		if ($validation->run()) {
			$jurusan->save();
			$this->session->set_flashdata('flash', 'Jurusan Berhasil Ditambahkan.');
			return redirect(base_url().'jurusan');
		}
	}

	public function edit()
	{

	}

	public function destroy($id_jurusan = NULL)
	{
		if (!isset($id_jurusan)) show_404();

		if ($this->Jurusan_model->delete($id_jurusan)) {
			$this->session->set_flashdata('flash', 'Jurusan Deleted Successfully');
			return redirect(base_url().'jurusan');
		}
	}
}
