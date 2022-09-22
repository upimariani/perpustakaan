<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Laporan Pengembalian</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Informasi Laporan Pengembalian</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-4">
					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title">Laporan Pengembalian Perhari</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?php
							echo form_open('cLaporanPengembalian/lap_harian') ?>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Tanggal</label>
										<select name="tanggal" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 31; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Bulan</label>
										<select name="bulan" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 12; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-warning btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>


				<div class="col-md-4">
					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title">Laporan Pengembalian Perbulan</h3>
						</div>
						<div class="card-body">
							<?php
							echo form_open('cLaporanPengembalian/lap_bulanan') ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Bulan</label>
										<select name="bulan" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 12; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-warning btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>


				<div class="col-md-4">
					<div class="card card-warning">
						<div class="card-header">
							<h3 class="card-title">Laporan Pengembalian Pertahun</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<?php
							echo form_open('cLaporanPengembalian/lap_tahunan') ?>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-warning btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>

				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">

				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
