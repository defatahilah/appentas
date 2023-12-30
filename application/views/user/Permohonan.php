<div class="container-fluid">




    <!-- Main content -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Permohonan</li>
        </ol>
    </nav>
    <div class="card mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h3 class="card-title">Tabel Data Permohonan</h3>
        </div>

        <div class="card-body border-bottom-primary">
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center" width="50px">No</th>
                            <th class="text-center">Nama Pemohon</th>
                            <th class="text-center">Telepon/Whatsapp</th>
                            <th class="text-center">Surat Permohonan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($tpermohonan as $pmhn) {
                            $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo "$no" ?></td>
                                <td><?php echo $pmhn->nama ?></td>
                                <td><?php echo $pmhn->alamat ?></td>
                                <td><?php echo $pmhn->email ?></td>
                                <td><?php echo $pmhn->no_telp ?></td>
                                <td><?php echo $pmhn->permohonan ?></td>

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