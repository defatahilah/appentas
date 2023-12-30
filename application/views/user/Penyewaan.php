<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Jadwal Penyewaan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-danger">
            <h3 class="card-title">Jadwal Penyewaan</h3>
        </div>
        <div class="card-body border-bottom-danger">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" width="50px">No</th>

                            <th class="text-center">Nama Kegiatan</th>
                            <th class="text-center">Ruangan</th>
                            <th class="text-center">Tanggal Mulai</th>
                            <th class="text-center">Tanggal Berakhir</th>
                            <th class="text-center">Penyelenggara</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 0;
                        foreach ($tpenyewaan as $row) {
                            $no++; ?>

                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td><?php echo $row->nm_kegiatan ?></td>

                                <td><?php echo $row->nm_ruangan ?></td>
                                <td><?php echo date('d-m-Y', strtotime($row->tgl_mulai)) ?></td>
                                <td><?php echo date('d-m-Y', strtotime($row->tgl_berakhir)) ?></td>
                                <td><?php echo $row->penyelenggara ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>