<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Peminjaman</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Peminjaman</li>
					</ol>
				</div>
			</div>
			<?php
			if ($this->session->userdata('error')) {
			?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h5><i class="icon fas fa-info"></i> Alert!</h5>
					<?= $this->session->userdata('error') ?>
				</div>
			<?php
			}
			?>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<!-- jquery validation -->
					<div class="card card-primary">
						<div class="card-header">
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('cPeminjaman/add') ?>" method="POST">
							<input type="hidden" name="nama" class="nama">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputPassword1">Judul Buku</label>
									<select name="buku" id="buku" class="form-control select2" style="width: 100%;">
										<option value="">---Pilih Judul Buku---</option>
										<?php
										foreach ($buku as $key => $value) {
										?>
											<option data-nama="<?= $value->judul ?>" data-sisa="<?= $value->sisa_buku ?>" value="<?= $value->id_buku ?>" <?php if (set_value('buku') == $value->id_buku) {
																																								echo 'selected';
																																							} ?>><?= $value->judul ?> | <?= $value->nama_kategori ?></option>
										<?php
										}
										?>
									</select>
									<?= form_error('buku', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jumlah Buku yang Tersedia</label>
									<input name="jml_tersedia" type="text" class="jml_buku form-control" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Jumlah Buku yang Dipinjam</label>
									<input name="jml_pinjam" value="<?= set_value('jml_pinjam') ?>" type="number" class="form-control">
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-warning">Tambah</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!-- left column -->
				<div class="col-md-6">
					<!-- jquery validation -->
					<div class="card card-primary">
						<div class="card-header">
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form role="form" action="<?= base_url('cPeminjaman/create') ?>" method="POST">
							<?php
							$id_pinjam = 'P' . date('Ymd') . random_string('alnum', 5);
							?>
							<input type="hidden" name="id_pinjam" value="<?= $id_pinjam ?>">
							<div class="card-body">
								<div class="form-group">
									<label>Nama Anggota</label>
									<select name="anggota" class="form-control select2" style="width: 100%;">
										<option value="">---Pilih Nama Anggota---</option>
										<?php
										foreach ($anggota as $key => $value) {
										?>
											<option value="<?= $value->id_anggota ?>" <?php if (set_value('anggota') == $value->id_anggota) {
																							echo 'selected';
																						} ?>><?= $value->nama_anggota ?></option>
										<?php
										}
										?>
									</select>
									<?= form_error('anggota', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Tanggal Peminjaman</label>
									<input name="tgl_pinjam" type="text" value="<?= date('Y-m-d') ?>" name="password" class="form-control" readonly>
								</div>
								<?php
								$tgl1    = date('Y-m-d'); // menentukan tanggal awal
								$tgl2    = date('Y-m-d', strtotime('+7 days', strtotime($tgl1)));
								?>
								<div class="form-group">
									<label for="exampleInputPassword1">Batas Peminjaman</label>
									<div class="input-group date" id="reservationdate" data-target-input="nearest">
										<input name="bts" value="<?= $tgl2 ?>" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
										<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
										</div>
									</div>
									<?= form_error('bts', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Simpan Pinjam</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">

				</div>
				<!--/.col (right) -->
			</div>
			<div class="row">
				<div class="col-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Peminjaman Buku</h3><br>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Nama Buku</th>
										<th class="text-center">Jumlah Pinjam</th>
										<th class="text-center">Hapus</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($this->cart->contents() as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value['name'] ?></td>
											<td><?= $value['qty'] ?></td>
											<td><a href="<?= base_url('cPeminjaman/delete_cart/' . $value['rowid']) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-trash"></i> Delete
												</a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">Nama Buku</th>
										<th class="text-center">Jumlah Pinjam</th>
										<th class="text-center">Hapus</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->