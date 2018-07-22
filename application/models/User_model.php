<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function register($enc_password){
       // Array data user
       $data = array(
           'nama' => $this->input->post('nama'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password,
           'kodepos' => $this->input->post('kodepos')
       );

       // Insert user
       return $this->db->insert('users', $data);
   }

    public function login($username, $password){
       // Validasi
       $this->db->where('username', $username);
       $this->db->where('password', $password);

       $result = $this->db->get('users');

       if($result->num_rows() == 1){
           return $result->result_array()[0];
       } else {
           return false;
       }
   }

   public function get()
   {
        return $this->db->get('users');
   }

   public function getByid($id){
      $this->db->where('user_id', $id);
      return $this->db->get('users');
   }

   public function edit($object,$id)
   {
      $this->db->where('user_id', $id);
      return $this->db->update('users',$object);  
   }

   public function delete($id){
      $this->db->where('user_id', $id);
      return $this->db->delete('users');  
   }

}