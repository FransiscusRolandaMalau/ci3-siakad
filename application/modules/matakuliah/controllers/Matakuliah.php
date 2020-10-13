<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('matakuliah_model');
	}

	public function index()
	{
		$data['title'] = 'Mata Kuliah';
		$data['page_header'] = 'Mata Kuliah';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main-datatables', $data);
	}

	public function list_data()
	{
		$query = $this->matakuliah_model->getAll();
		$no = 1;
		$data = array();
		foreach ($query as $key => $value) :
			$data[$key][] = $no++;
			$data[$key][] = $value['kode_matakuliah'];
			$data[$key][] = $value['nama_matakuliah'];
			$data[$key][] = $value['nama_prodi'];
			$data[$key][] = '<a href="'. base_url("/kode_matakuliah/edit").'/'.$value['kode_matakuliah'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							<a href="'. base_url("/kode_matakuliah/destroy").'/'.$value['kode_matakuliah'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
		endforeach;
		$result = array(
			'data' => $data
		);
		echo json_encode($result, JSON_PRETTY_PRINT);							

	}

	public function create()
	{
		$data['title'] = 'Tambah Mata Kuliah';
		$data['page_header'] = 'Tambah Mata Kuliah';

	}

	public function edit($id)
	{

	}

	public function destroy($id)
	{
		
	}
}
