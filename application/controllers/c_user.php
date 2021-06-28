<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('md_user');
	}

	public function index()
	{
        $data['user'] = $this->md_user->get_user();
		$this->load->view('v_body', $data);
	}

    public function add_user()
    {
        $this->load->view('v_add');
    }

    public function edit_user($id)
    {
        $data['user'] = $this->md_user->getuserbyid($id);
        $this->load->view('v_edit',$data);
    }

    public function update_user()
    {
        $id             = $this->input->post('id');
        $namadepan      = $this->input->post('firstname');
        $namabelakang   = $this->input->post('lastname');
        $namalengkap    = $this->input->post('fullname');
        $jeniskelamin   = $this->input->post('jeniskelamin');
        $alamat         = $this->input->post('alamat');
        $email          = $this->input->post('email');
        $telepon        = $this->input->post('phone');

        $this->db->trans_start();
		$id = $this->md_user->update_user($id,$namadepan,$namabelakang,$namalengkap,$jeniskelamin,$alamat,$email,$telepon);
		$this->db->trans_complete();
        
        redirect(base_url());
    }

    public function delete_user($id)
    {
        $this->db->trans_start();
		$id = $this->md_user->delete_user($id);
		$this->db->trans_complete();
        
        redirect(base_url());
    }

    public function save_user()
    {
        $namadepan      = $this->input->post('firstname');
        $namabelakang   = $this->input->post('lastname');
        $namalengkap    = $this->input->post('fullname');
        $jeniskelamin   = $this->input->post('jeniskelamin');
        $alamat         = $this->input->post('alamat');
        $email          = $this->input->post('email');
        $telepon        = $this->input->post('phone');

        $this->db->trans_start();
		$id = $this->md_user->insert_user($namadepan,$namabelakang,$namalengkap,$jeniskelamin,$alamat,$email,$telepon);
		$this->db->trans_complete();
        
        if (!$id){
            echo "ERROR";
        }else{
                echo "<script type='text/javascript'>alert('Data berhasil disimpan!');</script>";   
                redirect(base_url());
        }
    }
}
