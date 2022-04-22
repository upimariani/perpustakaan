<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Buku</li>
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
                <div class="col-md-6">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?= base_url('cKelolaDataMaster/update_buku/' . $buku->id_buku) ?>" method="POST" id="buku">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori</label>
                                    <select class="form-control" name="kategori">
                                        <option value="">---Pilih Kategori Buku---</option>
                                        <?php
                                        foreach ($kategori as $key => $value) {
                                        ?>
                                            <option value="<?= $value->id_kategori ?>" <?php if ($value->id_kategori == $buku->id_kategori) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $value->nama_kategori ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Judul</label>
                                    <input type="text" name="judul" value="<?= $buku->judul ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Judul Buku">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Pengarang</label>
                                    <input type="text" name="pengarang" value="<?= $buku->pengarang ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Pengarang Buku">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?= $buku->tahun ?>" id="exampleInputPassword1" placeholder="Masukkan Tahun Buku">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Penerbit</label>
                                    <input type="text" name="penerbit" class="form-control" value="<?= $buku->pengarang ?>" id="exampleInputPassword1" placeholder="Masukkan Penerbit Buku">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a class="btn btn-danger" href="<?= base_url('cKelolaDataMaster/buku') ?>">Kembali</a>
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
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->