<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('m_crud');
    }

    public function index()
    {
        if ($this->session->userdata('status') == 'login') {
            redirect('home/tampil');
        }
        $this->load->view('home/login');
    }

    public function loginAction()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = [
            'username'  => $username,
        ];

        $cekQuery = $this->m_crud->loginQuery($where)->row();

        // print_r($cekQuery);
        // return 0;

        if ($cekQuery) {

            $data = $cekQuery;

            $truePass       = password_verify($password, $data->password);
            $roleAccess     = $data->role;

            if ($truePass) {

                $sess_data['id']        = $data->id;
                $sess_data['username']  = $data->username;
                $sess_data['email']     = $data->email;
                $sess_data['role']      = $data->role;
                $sess_data['status']    = "login";

                $this->session->set_userdata($sess_data);

                if ($roleAccess == 1002) {
                    // echo "user biasa";
                    redirect('home/tampil');
                    return 0;
                } else if ($roleAccess == 1001) {
                    // echo "admin";
                    redirect('home/tampil');
                    return 0;
                }
            } else {
                $this->session->set_flashdata("danger", "Password yang anda Masukkan Salah, Coba kembali.");
                redirect('home');
                return 0;
            }
            //return article
        } else {
            $this->session->set_flashdata("danger", "Akun Tidak ada, Silakan Buat Akun Terlebih Dahulu.");
            redirect('home');
            return 0;
        }
    }

    public function register()
    {
        $this->load->view('home/register');
    }

    public function registerProcess()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Username wajib diisi'));
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', array('required' => 'Email wajib diisi', 'valid_email' => 'Email Tidak benar'));
        $this->form_validation->set_rules('password', 'Password', 'required|trim', array('required' => 'Password wajib diisi'));

        if ($this->form_validation->run() != false) {

            $username   = $this->input->post('username');
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            $password   = password_hash($password, PASSWORD_DEFAULT);

            $data = [
                'username'  => $username,
                'email'     => $email,
                'password'  => $password,
                'role'      => 1002, // 1002 => user biasa, 1001 => admin
            ];

            $this->m_crud->insertUser('tbl_users', $data);
            $this->session->set_flashdata("success", "Pendaftar Telah Berhasil");
            redirect('home');
        } else {
            $this->register();
        }
    }

    public function article()
    {
        if ($this->session->userdata("status") == "login") {

            $data['dataArticle'] = $this->m_crud->getArticle()->result();

            $this->load->view('home/tampil', $data);
        } else {
            redirect('home', 'refresh');
        }
    }

    public function tambahArticle()
    {
        if ($this->session->userdata("status") == "login") {
            $this->load->view('home/tambah', array('error' => ' '));
        } else {
            redirect('home', 'refresh');
        }
    }

    public function tambahArticles()
    {
        $this->form_validation->set_rules('title', 'Title', 'required', array('required' => 'Judul wajib diisi'));
        $this->form_validation->set_rules('article', 'Article', 'required', array('required' => 'Artikel Wajib di Isi'));

        if ($this->form_validation->run() != false) {

            $config['upload_path']            =    './upload   /';
            $config['allowed_types']        =    'gif|png|jpg';
            $config['max_size']                =    10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $title      = $this->input->post('title');
            $article    = $this->input->post('article');

            if (!$this->upload->do_upload('cover_img')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('home/tambah', $error);
                return 0;
                $this->session->set_flashdata('error_upload_Images', 'gagal upload Images');
            } else {

                $data = array('upload_data' => $this->upload->data());
                $name = $data['upload_data'];

                $data = array(
                    'user_id'   => $this->session->userdata('id'),
                    'title'     => $title,
                    'article'   => $article,
                    'cover_img' => $name['file_name'],
                );

                $this->m_crud->uploadArticle('tbl_article', $data);
                $this->session->set_flashdata('success', 'Artikel Berhasil ditambahkan');
                redirect('home/tampil', 'refresh');
                return 0;
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }

    public function deleteArticle($id)
    {
        $where = ['id' => $id];
        $this->m_crud->deleteArticle($where, "tbl_article");
        $this->session->set_flashdata('success', 'Berhasil Menghapus Artikel');

        redirect('home/tampil');
        return 0;
    }

    public function update($id)
    {
        $where = ['id' => $id];
        $data['article'] = $this->m_crud->getUpdate("tbl_article", $where)->result();
        $this->load->view('home/ubah', $data);
    }

    public function updates()
    {
        $this->form_validation->set_rules('title', 'Title', 'required', array('required' => 'Judul wajib diisi'));
        $this->form_validation->set_rules('article', 'Article', 'required', array('required' => 'Artikel Wajib di Isi'));

        if ($this->form_validation->run() != false) {

            $config['upload_path']            =    './upload   /';
            $config['allowed_types']        =    'gif|png|jpg';
            $config['max_size']                =    10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $title      = $this->input->post('title');
            $article    = $this->input->post('article');
            $id         = $this->input->post('id');

            $where = ['id' => $id];

            if (!$this->upload->do_upload('cover_img')) {

                $data = array(
                    'title'     => $title,
                    'article'   => $article,
                );

                $this->m_crud->updateArticle('tbl_article', $data, $where);
                $this->session->set_flashdata('success', 'Berhasil Memperbaharui Artikel');
                redirect('home/tampil', 'refresh');

                // $error = array('error' => $this->upload->display_errors());
                // $this->load->view('home/article', $error);
                // return 0;
            } else {

                $data = array('upload_data' => $this->upload->data());
                $name = $data['upload_data'];

                $data = array(
                    'title'     => $title,
                    'article'   => $article,
                    'cover_img' => $name['file_name'],
                );

                $this->m_crud->updateArticle('tbl_article', $data, $where);
                $this->session->set_flashdata('success', 'Berhasil Memperbaharui Artikel');
                redirect('home/tampil', 'refresh');
                return 0;
            }
        }
    }
}
