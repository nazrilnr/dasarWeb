<?php
include('Model.php');

class KategoriModel extends Model {
    private $db;
    private $table = 'm_kategori';

    public function __construct() {
        include_once('../lib/Connection.php');
        $this->db = $db;
        $this->db->set_charset('utf8');
    }

    public function insertData($data) {
        // Prepare statement untuk query insert
        $query = $this->db->prepare("INSERT INTO {$this->table} (kategori_kode, kategori_nama) VALUES (?, ?)");

        // Binding parameter ke query, "ss" berarti dua string
        $query->bind_param('ss', $data['kategori_kode'], $data['kategori_nama']);

        // Eksekusi query untuk menyimpan ke database
        $query->execute();
    }

    public function getData() {
        // Query untuk mengambil data dari tabel
        return $this->db->query("SELECT * FROM {$this->table}");
    }

    public function getDataById($id) {
        // Query untuk mengambil data berdasarkan ID
        $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE kategori_id = ?");

        // Binding parameter ke query, "i" berarti integer (untuk mencegah SQL Injection)
        $query->bind_param('i', $id);

        // Eksekusi query
        $query->execute();

        // Ambil hasil query
        return $query->get_result()->fetch_assoc();
    }

    public function updateData($id, $data) {
        // Query untuk update data
        $query = $this->db->prepare("UPDATE {$this->table} SET kategori_kode = ?, kategori_nama = ? WHERE kategori_id = ?");

        // Binding parameter ke query
        $query->bind_param('ssi', $data['kategori_kode'], $data['kategori_nama'], $id);

        // Eksekusi query
        $query->execute();
    }

    public function deleteData($id) {
        // Query untuk delete data
        $query = $this->db->prepare("DELETE FROM {$this->table} WHERE kategori_id = ?");

        // Binding parameter ke query
        $query->bind_param('i', $id);

        // Eksekusi query
        $query->execute();
    }
}
