<?php

class Mahasiswa extends Controller {
	public function index()
	{
		$data['title'] = 'Daftar Siswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->get_all_mahasiswa();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Siswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->get_mahasiswa_by_id($id);

		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if ($this->model('Mahasiswa_model')->tambah_mahasiswa($_POST) > 0) {
			Flasher::set_flash('berhasil', 'ditambahkan', 'success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		} else {
			Flasher::set_flash('gagal', 'ditambahkan', 'danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		}
	}

	public function hapus($id)
	{
		if ($this->model('Mahasiswa_model')->hapus_mahasiswa($id) > 0) {
			Flasher::set_flash('berhasil', 'dihapus', 'success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		} else {
			Flasher::set_flash('gagal', 'dihapus', 'danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		}
	}

	public function getubah()
	{
		echo json_encode($this->model('Mahasiswa_model')->get_mahasiswa_by_id($_POST['id']));
	}

	public function ubah()
	{
		if ($this->model('Mahasiswa_model')->ubah_mahasiswa($_POST) > 0) {
			Flasher::set_flash('berhasil', 'diubah', 'success');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		} else {
			Flasher::set_flash('gagal', 'diubah', 'danger');
			header('Location:' . BASEURL . 'mahasiswa');
			exit();
		}
	}

	public function cari()
	{
		$data['title'] = 'Daftar Siswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->cari_mahasiswa();

		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}
}