<?php

class PinjamModel {

    private $table = 'tb_peminjaman';
    private $db;

    public function __construct()
    {
        $this->db= new Database;
    }

    public function getAllPinjam()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getPinjamById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahPinjam($data)
    {

        $tgl_pinjam  = $data['tgl_pinjam'];
        $tgl_kembali = date('Y-m-d H:i:s', strtotime($tgl_pinjam. ' +2 days'));

        $query = "INSERT INTO tb_peminjaman (nama_peminjam, jenis_barang, no_barang, tgl_pinjam, tgl_kembali) VALUES(:nama, :jenis, :nomor, :tgl_pinjam, :tgl_kembali)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nomor', $data['nomor']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', $tgl_kembali);   
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPinjam($data)
    {
    $query = "UPDATE tb_peminjaman SET nama_peminjam=:nama, jenis_barang=:jenis, no_barang=:nomor, tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali WHERE id=:id";
    $this->db->query($query);   
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('jenis', $data['jenis']);
    $this->db->bind('nomor', $data['nomor']);
    $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);  
    $this->db->bind('tgl_kembali', $data['tgl_kembali']);  
    $this->db->execute();

    return $this->db->rowCount();
    }


    public function deletePinjam($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
}


?>