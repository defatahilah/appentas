<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Penyewaan Bulan <?php echo $bulanawal ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>/img/kalsel.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css"-->

</head>

<body>
    <table align="center">
        <tbody>
            <tr>
                <td rowspan="4"><img src="/BPSDMD/img/kalsel.png" width="100" height="130" style="margin-right: 15px;"></td>
                <td style="text-align: center; vertical-align:middle;" width="800px">
                    <h3>Badan Pengembangan Sumber Daya Manusia Daerah
                        <br>Provinsi Kalimantan Selatan</br>
                    </h3>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Jalan Panglima Batur Timur Nomor 1A, Banjarbaru Utara</td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Kota Banjarbaru</td>
            </tr>
            <tr>
                <td style="text-align: center; vertical-align:middle;">Kalimantan Selatan 70711</td>
            </tr>
    </table>
    </head>
    <hr class="line-title">
    <p align="center"><b>Rekap Penyewaan Gedung/Aula, Asrama
            <br>Kampus I dan II
            <br>BPSDMD Provinsi Kalimantan Selatan Tahun <?php echo $tahun ?>
            <br> Bulan : <?php echo $bulanawal ?></b></p>


    <table cellspacing="0" width="fixed-size px" border="1" cellspacing="0" cellpadding="3" align="center">
        <thead>
            <!--style="background-color:#1898E1;"-->
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Penyelenggara</th>
                <th class="text-center" width="150px">Nama Kegiatan</th>
                <th class="text-center" width="200px">Ruangan</th>

                <th class="text-center">Lama Sewa</th>
                <th class="text-center">Jumlah Peserta</th>
                <th class="text-center" width="120px">Tanggal Mulai</th>
                <th class="text-center" width="120px">Tanggal Berakhir</th>
                <th class="text-center" width="120px">Status</th>
                <th class="text-center" width="150px">Total Biaya</th>
            </tr>
        </thead>
        <div class="card-body">
            <?php
            $no = 0;
            foreach ($tpenyewaan as $row) :   $no++; ?>
                <tr>
                    <td class="text-center" scope="row"><?php echo "$no" ?></td>

                    <td><?php echo $row['penyelenggara'] ?></td>
                    <td><?php echo $row['nm_kegiatan'] ?></td>
                    <td><?php echo $row['nm_ruangan'] ?></td>

                    <td><?php echo $row['lm_sewa'] ?> Hari</td>
                    <td><?php echo $row['peserta'] ?> Org</td>
                    <td><?php echo date('d-m-Y', strtotime($row['tgl_mulai'])) ?></td>
                    <td><?php echo date('d-m-Y', strtotime($row['tgl_berakhir'])) ?></td>
                    <td><?php echo $row['konfirmasi'] ?></td>
                    <td>Rp <?php echo number_format($row['total_biaya'], 2, ",", ".") ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
    </table>

    <div class="element">

        <table border="0" align="right">
            <tbody>

                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>

                <tr>
                    <td>Banjarbaru, <?= date('d-m-Y') ?></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">Admin</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"> <?= $admin['admin'] ?> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="element">

        <table border="0" align="left">
            <tbody>

                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">Mengetahui</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">Kasubbag Umum dan Kepegawaian,</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center">SAIFULLAH,SE,.MM</td>
                </tr>
                <tr>
                    <td align="center">Penata (III/c)</td>
                </tr>
                <tr>
                    <td align="center">NIP : 19740708 199803 1 006</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>