<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['mahasiswa_model', 'prodi/prodi_model']);
    }

    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['page_header'] = 'Mahasiswa';
        $data['content'] = $this->load->view('index', $data, true);
        $this->load->view('template-admin/main-datatables', $data);
    }

    public function list_data()
    {
        $query = $this->mahasiswa_model->get_all();
        $no = 1;
        $data = array();
        foreach ($query as $key => $value) :
            $data[$key][] = $no++;
        $data[$key][] = $value['nim'];
        $data[$key][] = $value['nama_lengkap'];
        $data[$key][] = $value['email'];
        $data[$key][] = $value['nama_prodi'];
        $data[$key][] = '<a href="'. base_url("/mahasiswa/show/").$value['id'].'" class="btn btn-sm btn-clean btn-icon" title="Show"><i class="la la-eye"></i></a>
						<a href="'. base_url("/mahasiswa/edit/").$value['id'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
						<a href="'. base_url("/mahasiswa/destroy/").$value['id'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
        endforeach;
        $result = array(
            'data' => $data
        );
        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function create()
    {
        $data['title'] = 'Tambah Mahasiswa';
        $data['page_header'] = 'Tambah Mahasiswa';
        $data['program_studi'] = $this->prodi_model->get_all();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('telepon', 'No.Telepon', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('nama_prodi', 'Prodi', 'trim|required');
        $this->form_validation->set_rules('status_mahasiswa', 'Status Mahasiswa', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->mahasiswa_model->insert();
            $this->session->set_flashdata('flash', 'Mahasiswa Berhasi Ditambahkan');
            return redirect(base_url('mahasiswa'));
        } else {
            $data['content'] = $this->load->view('create', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }
    
    public function show($id = null)
    {
        if (! isset($id)) {
            redirect(base_url('mahasiswa'));
        }

        $mahasiswa = $this->mahasiswa_model;
        $data['title'] = 'Detail Mahasiswa';
        $data['page_header'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $mahasiswa->get_by_id($id);
        $data['program_studi'] = $this->prodi_model->get_all();
        $data['content'] = $this->load->view('show', $data, true);
        $this->load->view('template-admin/main-form', $data);
    }

    public function edit($id = null)
    {
        if (! isset($id)) {
            redirect(base_url('mahasiswa'));
        }

        $mahasiswa = $this->mahasiswa_model;
        $data['title'] = 'Edit Mahasiswa';
        $data['page_header'] = 'Edit Mahasiswa';
        $data['mahasiswa'] = $mahasiswa->get_by_id($id);
        $data['program_studi'] = $this->prodi_model->get_all();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('telepon', 'No.Telepon', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('nama_prodi', 'Prodi', 'trim|required');
        $this->form_validation->set_rules('status_mahasiswa', 'Status Mahasiswa', 'trim|required');

        if ($this->form_validation->run() == true) {
            $mahasiswa->update();
            $this->session->set_flashdata('flash', 'Mahasiswa Berhasil Diperbarui');
            return redirect(base_url('mahasiswa'));
        } else {
            $data['content'] = $this->load->view('edit', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }

    public function destroy($id = null)
    {
        $mahasiswa = $this->mahasiswa_model;
        $data = $mahasiswa->get_by_id($id);

        if ($data) {
            $mahasiswa->delete($id);
            $this->session->set_flashdata('flash', 'Mahasiswa Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Mahasiswa Tidak Ditemukan');
        }

        return redirect(base_url('mahasiswa'));
    }
}
