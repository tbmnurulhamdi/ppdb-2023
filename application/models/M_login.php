<?php

class M_login extends CI_Model{

  //tampil buku
  function login_siswa($nisn_siswa, $password){
    $login = $this->db->query("SELECT * from tb_siswa where nisn_siswa='$nisn_siswa' AND password=md5('$password') ");
    return $login;
  }

  function login_bismen($nisn_siswa, $password){
    $login = $this->db->query("SELECT * from tb_siswa_bismen where nisn_siswa='$nisn_siswa' AND password=md5('$password') ");
    return $login;
  }

  function admin_login($username, $password){
    $login = $this->db->query("SELECT * from tb_user where username='$username' AND password=md5('$password') ");
    return $login;
  }


}

 ?>
