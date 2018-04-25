<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category extends CI_controller{
        public function __construct()
    {
        parent::__construct();

        // Load custom helper applications/helpers/MY_helper.php
       // $this->load->helper('MY');

        // Load semua model yang kita pakai
        $this->load->model('blog_model');
        $this->load->model('category_model');
    }

    public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';
        $this->load->helper('form');
        $this->load->library('form_validation');
        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada bosque.'
            )
        );
         if($this->form_validation->run() === FALSE){
           
            $this->load->view('cat_create', $data);
        
        } 
        else {
            $this->category_model->create_category();
            redirect('category');
        }
    }
}