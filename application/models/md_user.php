<?php

class md_user extends CI_Model{
    function __construct(){
		parent::__construct();
	}

    function get_user(){
        $this->db->select('*');
        $this->db->from('tb_user');
        $query = $this->db->get();
        return $query->result_array();
    }

    function insert_user($namadepan,$namabelakang,$namalengkap,$jeniskelamin,$alamat,$email,$telepon){
        $data = array(
            'nama_depan'    =>  $namadepan,
            'nama_belakang' =>  $namabelakang,
            'nama_lengkap'  =>  $namalengkap,
            'kelamin'       =>  $jeniskelamin,
            'alamat'        =>  $alamat,
            'email'         =>  $email,
            'phone'         =>  $telepon
        );

        return $this->db->insert('tb_user',$data);
    }

    function update_user($id,$namadepan,$namabelakang,$namalengkap,$jeniskelamin,$alamat,$email,$telepon){
        $query = "UPDATE tb_user SET nama_depan='".$namadepan."', nama_belakang='".$namabelakang."
                 ', nama_lengkap='".$namalengkap."', kelamin='".$jeniskelamin."', alamat='".$alamat."
                 ', email='".$email."', phone='".$telepon."' WHERE id='".$id."'";
        
        $this->db->query($query);
                
                 //  $data = array(
                //     'nama_depan'    =>  $namadepan,
                //     'nama_belakang' =>  $namabelakang,
                //     'nama_lengkap'  =>  $namalengkap,
                //     'kelamin'       =>  $jeniskelamin,
                //     'alamat'        =>  $alamat,
                //     'email'         =>  $email,
                //     'phone'         =>  $telepon
                // );
        
                // $this->db->update('tb_user',$data);
                // $this->db->where('id',$id);
                // return true;
    }

    function getuserbyid($id){
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function delete_user($id){
        $query = "DELETE FROM tb_user WHERE id='".$id."'";
        $this->db->query($query);
    }
}
?>