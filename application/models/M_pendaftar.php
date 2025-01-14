<?php

class M_pendaftar extends CI_Model{

  public function siswa_daftar_up($data_tambah)
  {
    $this->db->insert('tb_siswa', $data_tambah);
  }

  function ver_semua()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    // $this->db->join('tb_kompetensi_2', 'tb_pendaftar.id_kompetensi_2 = tb_kompetensi_2.id_kompetensi_2');
    // $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }
  
  Public function tampil_kompetensi(){
    $tampil = $this->db->get('tb_kompetensi_1')->result();
    return $tampil;
  }


  // awal data siswa
  public function siswa_tampil()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    // $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  
  // akhir data siswa

  // Awal ver
  public function ver_tjkt()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_pplg()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'PPLG');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_tm()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TM');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_to()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TO');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_akl()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'AKL');
    $query = $this->db->get()->result();
    return $query;
  }

  public function ver_mplb()
  {
     $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'MPLB');
    $query = $this->db->get()->result();
    return $query;
  }

  // akhir val

  function tampil_kompetensi_1(){
    $tampil = $this->db->get('tb_kompetensi_1')->result();
    return $tampil;
  }

  function tampil_kompetensi_2(){
    $tampil = $this->db->get('tb_kompetensi_2')->result();
    return $tampil;
  }

  function upload_pengajuan_up($data_tambah){
    $this->db->insert('tb_pendaftar', $data_tambah);
  }

  function komptensi()
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', 'TJKT');
    $query = $this->db->get()->result();
    return $query;
  }


  

}

 ?>
