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
		$this->load->view('template-admin/main', $data);
	}

	public function list_data()
	{
		$query = $this->Jurusan_model->get_all_jurusan();
		$inc = 1;
		$data = array();
		foreach ($query as $key => $value) {
			$data[$key][] = $inc;
			$data[$key][] = $value['kode_jurusan'];
			$data[$key][] = $value['nama_jurusan'];
			$data[$key][] = '<a href="'. base_url("/jurusan/edit").'/'.$value['id_jurusan'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							 <a href="'. base_url("/jurusan/delete").'/'.$value['id_jurusan'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
			$inc++;
		}
		$result = array(
			'data' => $data
		);
		echo json_encode($result);
	}

	public function create()
	{

	}

	public function edit()
	{

	}

	public function destroy()
	{
		
	}
}
