<!-- <?php include 'admin-layouts/header.php'; ?> -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Data Siswa Baru</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jurusan</a></li>
                                <li class="breadcrumb-item active">TKJ</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        <div class="card-header">
                            <h4 class="card-title">Semua Jurusan</h4>
                        </div>
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>ASAL SEKOLAH</th>
                                        <th><center>AKSI</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($tampil as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row->nisn_siswa ?></td>
                                        <td><?= $row->nama_siswa ?></td>
                                        <td><?= $row->asal_sekolah ?></td>
                                        <td><center>
                                            <a href="#" class="btn btn-warning waves-effect waves-light btn-sm"><i class="dripicons-warning" title="Reset"
                                            onclick="return confirm('Anda yakin Reset data siswa yang menghapus sebagian data siswa <?= $row->nama_siswa ?> ?')"></i></a>
                                            <a href="<?= site_url('index.php/Admin/raport_hapus/'. $row->id_siswa) ?>" class="btn btn-danger waves-effect waves-light btn-sm"
                                            onclick="return confirm('Anda yakin menghapus data siswa <?= $row->nama_siswa ?> ?')"><i class="dripicons-cross" title="Hapus"></i></a>
                                            <a href="<?= site_url('index.php/Admin/raport_edit/'. $row->id_siswa) ?>" class="btn btn-primary waves-effect waves-light btn-sm" title="Edit"><i class="dripicons-pencil"></i></a>
                                            <a href="<?= site_url('index.php/Admin/raport_detail/'. $row->id_siswa) ?>" class="btn btn-info btn-sm waves-effect waves-light" title="Lihat"><i class="dripicons-preview"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
