<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><a href="<?= base_url('Laporan'); ?>" class="badge badge-pill badge-primary shadow-sm"><i class="fas fa-arrow-left fa-fw"></i> </a> Cetak Laporan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('Admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('Laporan') ?>">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cetak Laporan</li>
        </ol>
    </nav>
    <div class="col-lg-5">
        <?= form_error('judul', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="row">

        <div class="col-lg-6" id="pertanggal">
            <div class="card border-left-primary shadow ">
                <div class="card-header"><b>Form</b> Filter</div>
                <div class="card-body text-dark">
                    <form method="post">

                        <div class="row">
                            <div class="col">
                                <p>Pilih Tahun</p>
                                <div class="form-group">
                                    <select id="tahun1" name="tahun1" class="form-control">
                                        <?php foreach ($tahun as $thn) : ?>
                                            <option value="<?= $thn->tahun; ?>"><?= $thn->tahun; ?></option>
                                        <?php endforeach ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <p>Pilih Bulan</p>
                                <div class="form-group">
                                    <select id="bulanawal" name="bulanawal" class="form-control" required>
                                        <option selected value="">Pilih</option>
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                </div>
                <hr>
                <button type="submit" formaction="<?= base_url('C_Admin/Penyewaan/filter') ?>" class="btn btn-success ml-3 mr-3 mb-3"><i class="fas fa-print fa-fw" value="excel"></i> Excel</button>
                <button type="submit" formaction="<?= base_url('C_Admin/Penyewaan/filterpdf') ?>" class="btn btn-danger ml-3 mr-3 mb-3"><i class="fas fa-print fa-fw" value="pdf"></i> PDF/Print</button>
            </div>
        </div>

        <div class="col-lg-6" id="seluruhnya">
            <div class="card border-left-danger shadow h-100 mb-3">
                <div class="card-header"><b>Cetak</b> Seluruhnya</div>
                <div class="card-body text-dark">

                    <p>Cetak Seluruh Data Penyewaan</p>


                </div>
                <hr>
                <a href="<?= base_url('C_Admin/Penyewaan/cetakpenyewaan'); ?>" class="btn btn-success ml-3 mr-3 mb-3"><i class="fas fa-print fa-fw"></i> Excel</a>
                <a href="<?= base_url('C_Admin/Penyewaan/cetakpenyewaanpdf'); ?>" class="btn btn-danger ml-3 mr-3 mb-3"><i class="fas fa-print fa-fw"></i> PDF/Print</a>
            </div>
        </div>
    </div>


</div>



</div>