<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index()
	{
		$data['title'] = 'Data Dosen';
		$data['page_header'] = 'Data Dosen';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main-datatables', $data);
	}

	public function list_data()
	{
		$query = $this->dosen_model->getAll();
		$no = 1;
		$data = array();
		foreach ($query as $key => $value) :
			$data[$key][] = $no++;
			$data[$key][] = $value['nidn'];
			$data[$key][] = $value['nama_dosen'];
			$data[$key][] = $value['alamat'];
			$data[$key][] = $value['jenis_kelamin'];
			$data[$key][] = $value['email'];
			$data[$key][] = $value['telp'];
			$data[$key][] = $value['photo'];
			$data[$key][] = '<a href="'. base_url("/dosen/edit").'/'.$value['id_dosen'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							<a href="'. base_url("/dosen/destroy").'/'.$value['id_dosen'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
		endforeach;
		$result = array(
			'data' => $data
		);
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function create()
	{

	}

	public function edit($id)
	{

	}

	public function destroy($id)
	{
		
	}
}
