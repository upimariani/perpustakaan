<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Informasi Pengembalian Buku Perpustakaan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Pengembalian</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Pengembalian Buku Perpustakaan</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">NIS</th>
										<th class="text-center">Anggota</th>
										<th class="text-center">Tanggal Pinjam</th>
										<th class="text-center">Tanggal Kembali</th>
										<th class="text-center">Detail</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($kembali as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nis ?></td>
											<td>nama : <?= $value->nama_anggota ?><br>
												Kelas : <?= $value->kelas ?></td>
											<td><?= $value->tgl_pinjam ?><br>
												Batas Peminjaman : <span class="badge badge-danger"> <?= $value->bts_pinjam ?></span></td>
											<td><?= $value->tgl_kembali ?><br>
												<?php if ($value->denda != 0) {
												?>
													Denda : <strong>Rp. <?= number_format($value->denda, 0) ?></strong>
												<?php

												} ?>
											</td>
											<td><a href="<?= base_url('cPeminjaman/detail_peminjaman/' . $value->id_pinjam) ?>" class="btn btn-app btn-sm">
													<i class="fas fa-info"></i> Detail
												</a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th class="text-center">No.</th>
										<th class="text-center">NIS</th>
										<th class="text-center">Anggota</th>
										<th class="text-center">Tanggal Pinjam</th>
										<th class="text-center">Tanggal Kembali</th>
										<th class="text-center">Detail</th>

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
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>