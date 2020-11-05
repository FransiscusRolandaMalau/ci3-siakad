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
		$query = $this->dosen_model->get_all();
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
			$data[$key][] = '<img src="'.base_url('resources/admin/images/upload/dosen').'/'.$value['photo'].'" width="50px">';
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
		$data['title'] = 'Tambah Data Dosen';
		$data['page_header'] = 'Tambah Data Dosen';

		$this->form_validation->set_rules('nidn', 'NIDN', 'trim|required|is_unique[dosen.nidn]');
		$this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[dosen.email]');
		$this->form_validation->set_rules('telp', 'No.Telepon', 'trim|required|numeric');

		if ($this->form_validation->run() == TRUE) 
		{
			$this->dosen_model->insert();
			$this->session->set_flashdata('flash', 'Data Dosen Berhasil Ditambahkan');
			return redirect(base_url('dosen'));
		} 
		else 
		{
			$data['content'] = $this->load->view('create', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		}
	}

	public function edit($id = null)
	{
		if ( ! isset($id)) redirect(base_url('dosen'));

		$dosen = $this->dosen_model;
		$data['title'] = 'Tambah Data Dosen';
		$data['page_header'] = 'Tambah Data Dosen';
		$data['dosen'] = $dosen->get_by_id($id);

		$this->form_validation->set_rules('nidn', 'NIDN', 'trim|required');
		$this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('telp', 'No.Telepon', 'trim|required|numeric');

		if ($this->form_validation->run() == TRUE) 
		{
			$dosen->update();
			$this->session->set_flashdata('flash', 'Data Dosen Berhasil Ditambahkan');
			return redirect(base_url('dosen'));
		} 
		else 
		{
			$data['content'] = $this->load->view('edit', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		}
	}

	public function destroy($id)
	{
		$dosen = $this->dosen_model;
		$data = $dosen->get_by_id($id);

		if ($data) 
		{
			$dosen->delete($id);
			$this->session->set_flashdata('flash', 'Data Dosen Berhasil Dihapus');
		} 
		else 
		{
			$this->session->set_flashdata('flash', 'Data Dosen Tidak Ditemukan');
		}

		return redirect(base_url('dosen'));
	}
}
