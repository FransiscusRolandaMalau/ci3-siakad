<?php defined('BASEPATH') or exit('No direct script access allowed');

class MataKuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['matakuliah_model', 'prodi/prodi_model']);
    }

    public function index()
    {
        $data['title'] = 'Mata Kuliah';
        $data['page_header'] = 'Mata Kuliah';
        $data['content'] = $this->load->view('index', $data, true);
        $this->load->view('template-admin/main-datatables', $data);
    }

    public function list_data()
    {
        $query = $this->matakuliah_model->get_all();
        $no = 1;
        $data = array();
        foreach ($query as $key => $value) :
            $data[$key][] = $no++;
        $data[$key][] = $value['kode_matakuliah'];
        $data[$key][] = $value['nama_matakuliah'];
        $data[$key][] = $value['sks'];
        $data[$key][] = $value['semester'];
        $data[$key][] = $value['nama_prodi'];
        $data[$key][] = '<a href="'. base_url("/matakuliah/edit/").$value['id_matakuliah'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
						<a href="'. base_url("/matakuliah/destroy/").$value['id_matakuliah'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
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
        $data['program_studi'] = $this->prodi_model->get_all();

        $this->form_validation->set_rules('kode_matakuliah', 'Kode Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->matakuliah_model->insert();
            $this->session->set_flashdata('flash', 'Mata Kuliah Berhasi Ditambahkan');
            return redirect(base_url('matakuliah'));
        } else {
            $data['content'] = $this->load->view('create', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }

    public function edit($id = null)
    {
        if (! isset($id)) {
            redirect(base_url('matakuliah'));
        }

        $matakuliah = $this->matakuliah_model;
        $data['title'] = 'Edit Mata Kuliah';
        $data['page_header'] = 'Edit Mata Kuliah';
        $data['matakuliah'] = $matakuliah->get_by_id($id);
        $data['program_studi'] = $this->prodi_model->get_all();

        $this->form_validation->set_rules('kode_matakuliah', 'Kode Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('sks', 'SKS', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'trim|required');

        if ($this->form_validation->run() == true) {
            $matakuliah->update();
            $this->session->set_flashdata('flash', 'Mata Kuliah Berhasil Diperbarui');
            return redirect(base_url('matakuliah'));
        } else {
            $data['content'] = $this->load->view('edit', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }

    public function destroy($id = null)
    {
        $matakuliah = $this->matakuliah_model;
        $data = $matakuliah->get_by_id($id);

        if ($data) {
            $matakuliah->delete($id);
            $this->session->set_flashdata('flash', 'Mata Kuliah Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Mata Kuliah Tidak Ditemukan');
        }

        return redirect(base_url('matakuliah'));
    }
}
