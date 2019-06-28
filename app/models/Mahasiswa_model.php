<?php

class Mahasiswa_model {
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function get_all_mahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->result_set();
	}

	public function get_mahasiswa_by_id($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambah_mahasiswa($data)
	{
		$query = "INSERT INTO {$this->table} VALUES ('', :nama, :nrp, :email, :jurusan)";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->row_count();
	}

	public function hapus_mahasiswa($id)
	{
		$query = "DELETE FROM mahasiswa WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->row_count();
	}

	public function ubah_mahasiswa($data)
	{
		$query = "UPDATE mahasiswa SET
				 	nama=:nama,
				 	nrp=:nrp,
				 	email=:email,
				 	jurusan=:jurusan
				  WHERE id=:id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->row_count();
	}

	public function cari_mahasiswa()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");

		return $this->db->result_set();
	}
}