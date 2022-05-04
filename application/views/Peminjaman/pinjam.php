<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Peminjaman Buku Perpustakaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
            <?php
            if ($this->session->userdata('success')) {
            ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    <?= $this->session->userdata('success') ?>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Peminjaman Buku</h3><br>
                            <a href="<?= base_url('cPeminjaman/create') ?>" class="btn btn-warning">Create Peminjaman</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Anggota</th>
                                        <th class="text-center">Buku</th>
                                        <th class="text-center">Tanggal Pinjam</th>
                                        <th class="text-center">Batas Peminjaman</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pinjam as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td>Nama : <?= $value->nama_anggota ?><br>
                                                Kelas : <?= $value->kelas ?></td>
                                            <td><?= $value->judul ?><br>
                                                Kategori : <?= $value->nama_kategori ?></td>
                                            <td><?= $value->tgl_pinjam ?></td>
                                            <td><?= $value->bts_pinjam ?></td>
                                            <td class="text-center">
                                                <a href="<?= base_url('cPeminjaman/edit/' . $value->id_pinjam) ?>" class="btn btn-app btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="<?= base_url('cPeminjaman/delete/' . $value->id_pinjam . '/' . $value->id_buku) ?>" class="btn btn-app btn-sm">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                                <button data-toggle="modal" data-target="#modal-default" href="<?= base_url('cPeminjaman/delete/' . $value->id_pinjam . '/' . $value->id_buku) ?>" class="btn btn-app btn-sm">
                                                    <i class="fas fa-info"></i> Detail
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Anggota</th>
                                        <th class="text-center">Buku</th>
                                        <th class="text-center">Tanggal Pinjam</th>
                                        <th class="text-center">Batas Peminjaman</th>
                                        <th class="text-center">Action</th>
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Peminjaman</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->