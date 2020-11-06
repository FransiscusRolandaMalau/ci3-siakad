<?php defined('BASEPATH') or exit('No direct script access allowed');

class KRS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('krs_model');
    }

    public function index()
    {
        $data['title'] = 'Form Masuk KRS';
        $data['page_header'] = 'Form Masuk Kartu Rencana Studi';
        $data['content'] = $this->load->view('index', $data, true);
        $this->load->view('template-admin/main-form', $data);
    }

    public function list_data()
    {
        $query = $this->krs_model->get_all();
        $no = 1;
        $data = array();
        foreach ($query as $key => $value) :
            $data[$key][] = $no++;
        $data[$key][] = $value['tahun_akademik'];
        $data[$key][] = $value['semester'];
        $data[$key][] = ($value['status'] == 1) ? '<span class="label label-primary label-pill label-inline font-weight-bolder">Aktif</span>' : '<span class="label label-danger label-pill label-inline font-weight-bolder">Non Aktif</span>';
        $data[$key][] = '<a href="'. base_url("/tahun_akademik/edit/").$value['id_tahun_akademik'].'" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="la la-edit"></i></a>
							<a href="'. base_url("/tahun_akademik/destroy/").$value['id_tahun_akademik'].'" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="javasciprt: return confirm(\'Are You Sure ?\')"><i class="la la-trash"></i></a>';
        endforeach;
        $result = array(
            'data' => $data
        );
        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function create()
    {
        $data['title'] = 'Tambah Tahun Akademik';
        $data['page_header'] = 'Tambah Tahun Akademik';
        $data['tahun_akademik'] = $this->krs_model->get_all();

        $this->form_validation->set_rules('tahun_akademik', 'Tahun Akademik', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $this->krs_model->insert();
            $this->session->set_flashdata('flash', 'Tahun Akademik Berhasil Ditambahkan');
            return redirect(base_url('tahun_akademik'));
        } else {
            $data['content'] = $this->load->view('create', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }

    public function edit($id = null)
    {
        if (! isset($id)) {
            redirect(base_url('tahun_akademik'));
        }

        $tahun_akademik = $this->krs_model;
        $data['title'] = 'Edit Tahun Akademik';
        $data['page_header'] = 'Edit Tahun Akademik';
        $data['tahun_akademik'] = $tahun_akademik->get_by_id($id);

        $this->form_validation->set_rules('tahun_akademik', 'Tahun Akademik', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $tahun_akademik->update();
            $this->session->set_flashdata('flash', 'Tahun Akademik Berhasil Diperbarui');
            return redirect(base_url('tahun_akademik'));
        } else {
            $data['content'] = $this->load->view('edit', $data, true);
            $this->load->view('template-admin/main-form', $data);
        }
    }

    public function destroy($id = null)
    {
        $tahun_akademik = $this->krs_model;
        $data = $tahun_akademik->get_by_id($id);

        if ($data) {
            $tahun_akademik->delete($id);
            $this->session->set_flashdata('flash', 'Tahun Akademik Berhasil Dihapus');
        } else {
            $this->session->set_flashdata('flash', 'Tahun Akademik Tidak Ditemukan');
		}
		
		return redirect(base_url('tahun_akademik'));
    }
}
