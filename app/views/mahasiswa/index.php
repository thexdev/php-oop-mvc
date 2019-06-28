<div class="container mt-5">
	<div class="row">
		<div class="col-md-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-6">
			<button class="btn btn-primary my-3 btn-sm tombol-modal-tambah" type="button" data-toggle="modal" data-target="#modal">Tambah Mahasiswa</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-6">
			<form action="<?= BASEURL; ?>mahasiswa/cari" method="post">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Cari mahasiswa" name="keyword" id="keyword">
					<div class="input-group-append">
						<button class="btn btn-primary" type="sumbit" autocomplete="off" id="cari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
			<?php $no = 1; foreach ($data['mhs'] as $mhs) : ?>		
				<li class="list-group-item">
					<?= $mhs['nama']; ?>
					<a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin ?');"><span class="badge badge-danger float-right">hapus</span></a>
					<a href="<?= BASEURL; ?>mahasiswa/edit/<?= $mhs['id']; ?>" data-toggle="modal" data-target="#modal"><span class="badge badge-warning float-right mr-1 tampil-modal-edit" data-id="<?= $mhs['id']; ?>">edit</span></a>
					<a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>"><span class="badge badge-primary float-right mr-1">detail</span></a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
					<input type="hidden" name="id" id="id">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control">
					</div>

					<div class="form-group">
						<label for="nrp">NRP</label>
						<input type="text" name="nrp" id="nrp" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select id="jurusan" name="jurusan" class="form-control">
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Planologi">Teknik Planologi</option>
							<option value="Teknik Industri">Teknik Industri</option>
						</select>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
			</form>
		</div>
	</div>
</div>