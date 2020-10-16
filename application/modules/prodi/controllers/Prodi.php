<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('prodi_model');
	}

	public function index()
	{
		$data['title'] = 'Program Studi';
		$data['page_header'] = 'Program Studi';
		$data['content'] = $this->load->view('index', $data, TRUE);
		$this->load->view('template-admin/main-datatables', $data);
	}

	public function list_data()
	{
		$query = $this->prodi_model->getAll();
		$no = 1;
		$data = array();
		foreach ($query as $key => $value) :
			$data[$key][] = $no++;
			$data[$key][] = $value['kode_prodi'];
			$data[$key][] = $value['nama_prodi'];
			$data[$key][] = '<a href="'. base_url("/prodi/edit").'/'.$value['id_prodi'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							<a href="'. base_url("/prodi/destroy").'/'.$value['id_prodi'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
		endforeach;
		$result = array(
			'data' => $data
		);
		echo json_encode($result, JSON_PRETTY_PRINT);
	}

	public function create()
	{
		$data['title'] = 'Tambah Program Studi';
		$data['page_header'] = 'Tambah Program Studi';

		$this->form_validation->set_rules('kode_prodi', 'Kode Prodi', 'trim|required|is_unique[prodi.kode_prodi]');
		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['content'] = $this->load->view('create', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		} else {
			$this->prodi_model->insert();
			$this->session->set_flashdata('flash', 'Prodi Berhasil Ditambahkan');
			return redirect(base_url().'prodi');
		}
	}

	public function edit($id_prodi)
	{
		$data['prodi'] = $this->prodi_model->getById($id_prodi);
		$data['title'] = 'Edit Prodi';
		$data['page_header'] = 'Edit Prodi';

		$this->form_validation->set_rules('kode_prodi', 'Kode Prodi', 'trim|required');
		$this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');

		if ($this->form_validation->run() === FALSE) {
			$data['content'] = $this->load->view('edit', $data, TRUE);
			$this->load->view('template-admin/main-form', $data);
		} else {
			$this->prodi_model->update($id_prodi);
			$this->session->set_flashdata('flash', 'Prodi Berhasil Diperbarui');
			return redirect(base_url().'prodi');
		}

	}

	public function destroy($id)
	{
		$data = $this->prodi_model->getById($id);

		if ($data) {
			$this->prodi_model->delete($id);
			$this->session->set_flashdata('flash', 'Prodi Berhasil Dihapus');
		} else {
			$this->session->set_flashdata('flash', 'Prodi Tidak Ditemukan');
		}

		return redirect(base_url().'prodi');
	}
}
