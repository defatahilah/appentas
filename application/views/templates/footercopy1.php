<!-- Footer -->
<footer class="sticky-footer bg-light">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2022 - <?= date('Y'); ?> <a href="https://instagram.com/defatahilah">ADE FATAHILAH 310117023168</a>. All rights reserved.</a></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.js"></script>
<!--script-- src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></!--script-->
<!-- Page level plugins -->
<script type="text/javascript" charset="utf8" src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
<!--script src="<?= base_url('assets/'); ?>vendor/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js"></!script-->
<script src="<?= base_url('assets/'); ?>vendor/datatables-fixedcolumns/js/fixedColumns.bootstrap4.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js"></script>


<!-- Page level custom scripts -->
<!--script-- src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></!script-->
<script src="<?= base_url('assets/'); ?>js/datatablesku.js"></script>
<script src="<?= base_url('assets/'); ?>js/detail.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    function bandingkantanggal(event) {
        let today = new Date();
        let chosendate = new Date(event.target.value);
        if (chosendate < today) {
            alert('Tanggal tersebut tidak bisa dipilih')
            let day = ('0' + today.getDate()).slice(-2);
            console.log(day)
            let month = ('0' + (today.getMonth() + 1)).slice(-2);
            console.log(month)
            let result = today.getFullYear() + '-' + (month) + '-' + (day);
            $('#tgl_mulai').val(result);
            return;
        }
    }

    function bandingkantanggal2(event) {
        let today = new Date();
        let chosendate = new Date(event.target.value);
        if (chosendate < today) {
            alert('Tanggal tersebut tidak bisa dipilih')
            let day = ('0' + today.getDate()).slice(-2);
            console.log(day)
            let month = ('0' + (today.getMonth() + 1)).slice(-2);
            console.log(month)
            let result = today.getFullYear() + '-' + (month) + '-' + (day);
            $('#tgl_berakhir').val(result);
            return;
        }
    }

    function cektanggal(event) {

        if (event.target.id === 'nm_ruangan') {

            /*if (!$('#tgl_mulai').val() || !$('#tgl_berakhir').val()) {

                return*/

            $.ajax({
                url: '<?= base_url('C_User/Penyewaan/cektanggal') ?>',
                method: "POST",
                data: {
                    tgl_mulai: $('#tgl_mulai').val(),
                    tgl_berakhir: $('#tgl_berakhir').val(),
                    id_ruangan: event.target.value,

                },

                success: function(data) {
                    //console.log(data)
                    var ruangan = $('#nm_ruangan').val();

                    if (ruangan === '11') {
                        ruangan = 'Gedung/Aula (Kampus I)'
                    } else if (ruangan === '12') {
                        ruangan = 'Asrama (Kampus I)'
                    } else if (ruangan === '21') {
                        ruangan = 'Gedung/Aula (Kampus II)'
                    } else if (ruangan === '22') {
                        ruangan = 'Asrama (Kampus II)'
                    } else {
                        ruangan = 'Guest House'
                    }
                    //console.log(ruangan)
                    if (data > 0) {
                        alert(`Maaf, ${ruangan} sudah dipesan,silahkan cari ruangan yang tersedia`)
                        $('#tombolpesan').attr('disabled', true)
                    } else {
                        $('#tombolpesan').attr('disabled', false)
                    }

                }
            })

        } else if (event.target.id == 'tgl_mulai') {

            $.ajax({
                url: '<?= base_url('C_User/Penyewaan/cektanggalruangan') ?>',
                method: "POST",
                data: {


                    id_ruangan: $('#nm_ruangan').val(),
                    tanggal: event.target.value

                },

                success: function(data) {
                    console.log(data)
                    if (data > 0) {
                        alert(`Maaf, tanggal ${event.target.value} sudah dipesan,silahkan cari tanggal yang lain`)
                        $('#tombolpesan').attr('disabled', true)
                    } else {
                        $('#tombolpesan').attr('disabled', false)
                    }

                }
            })
        } else {
            $.ajax({
                url: '<?= base_url('C_User/Penyewaan/cektanggalruangan') ?>',
                method: "POST",
                data: {


                    id_ruangan: $('#nm_ruangan').val(),
                    tanggal: event.target.value

                },

                success: function(data) {
                    console.log(data)
                    if (data > 0) {
                        alert(`maaf, tanggal ${event.target.value} sudah dipesan,silahkan cari tanggal yang lain`)
                        $('#tombolpesan').attr('disabled', true)
                    } else {
                        $('#tombolpesan').attr('disabled', false)
                    }

                }
            })

        }


    }
    /** Hitung lama Sewa Dari Rentang Tanggal */
    const diffDates = (startingDate, endingDate) => {
        if (startingDate === '' || endingDate === '') return

        var startDate = new Date(new Date(startingDate).toISOString().substr(0, 10));

        var endDate = new Date(endingDate);
        if (startDate > endDate) {
            var swap = startDate;
            startDate = endDate;
            endDate = swap;
        }
        var startYear = startDate.getFullYear();
        var february = (startYear % 4 === 0 && startYear % 100 !== 0) || startYear % 400 === 0 ? 29 : 28;
        var daysInMonth = [31, february, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        var yearDiff = endDate.getFullYear() - startYear;
        var monthDiff = endDate.getMonth() - startDate.getMonth();
        if (monthDiff < 0) {
            yearDiff--;
            monthDiff += 12;
        }
        var dayDiff = endDate.getDate() - startDate.getDate() + 1;
        if (dayDiff < 0) {
            if (monthDiff > 0) {
                monthDiff--;
            } else {
                yearDiff--;
                monthDiff = 11;
            }
            dayDiff += daysInMonth[startDate.getMonth()];
        }

        let result;

        if (yearDiff < 1 && monthDiff < 1) {
            //result = `${dayDiff === 0 ? 1:dayDiff} hari`;
            result = `${dayDiff} hari`;
        } else if (yearDiff < 1) {
            result = `${monthDiff} bulan ${dayDiff} hari`;
        } else {
            result = `${yearDiff} tahun ${monthDiff} bulan ${dayDiff} hari`;
        }
        $('#lm_sewa').val(result)

        var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
        const format = total_harga.toString().split('').reverse().join('');
        const convert = format.match(/\d{1,3}/g);
        const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
        $('#total_biaya').val(total_harga);
        $('#total_bayar').html(rupiah);
        return result;
    }


    function ubahharga(event) {

        $.ajax({
            url: '<?= base_url('C_User/Penyewaan/ruangan') ?>',
            method: "POST",
            data: {
                'id_ruangan[]': [event.target.value]
            },

            dataType: 'json',
            success: function(data) {
                console.log(data)

                var totalHarga = 0;
                for (var i = 0; i < data.length; i++) {
                    totalHarga += parseInt(data[i].harga);
                    $('#harga').val(totalHarga);

                }


                $('#jmlh_r').val(data[0].jmlh_r);
                $('#kapasitas').val(data[0].kapasitas);
                if ($('#instansi').is(':checked')) {
                    $('#potongan').val(data[0].potongan);
                }
                $('#quantity').on('keyup', function() {
                    var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
                    const format = total_harga.toString().split('').reverse().join('');
                    const convert = format.match(/\d{1,3}/g);
                    const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                    $('#total_biaya').val(total_harga);
                    $('#total_bayar').html(rupiah);
                })
                var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
                const format = total_harga.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                $('#total_biaya').val(total_harga);
                $('#total_bayar').html(rupiah);
            }

        });
    }

    function ubahpotongan(event) {
        var nm_ruangan = $('#nm_ruangan').val();
        //console.log(id_ruangan)
        var total_harga;
        if ($('#instansi').is(':checked')) {
            $.ajax({
                url: '<?= base_url('C_User/Penyewaan/ruangan') ?>',
                method: "POST",
                data: 'id_ruangan=' + nm_ruangan,

                dataType: 'json',
                success: function(data) {
                    //console.log(data)
                    $('#potongan').val(data[0].potongan);
                    total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
                    const format = total_harga.toString().split('').reverse().join('');
                    const convert = format.match(/\d{1,3}/g);
                    const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                    $('#total_biaya').val(total_harga);
                    $('#total_bayar').html(rupiah);
                }

            });
        } else {
            $('#potongan').val(0);
            total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * parseInt($('#lm_sewa').val());
            const format = total_harga.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
            $('#total_biaya').val(total_harga);
            $('#total_bayar').html(rupiah);
        }


    }

    function maxjmlh(event) {
        var jumlah_r = parseInt($('#jmlh_r').val());
        if (parseInt($('#quantity').val()) > jumlah_r) {
            $.ajax({
                url: '<?= base_url('C_User/Penyewaan/ruangan') ?>',
                method: "POST",
                data: 'id_ruangan=' + jumlah_r,

                dataType: 'json',
                success: function(data) {
                    alert('Inputan melebihi batas jumlah ruangan');
                    $('#quantity').val(jumlah_r);
                    var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * event.target.value * parseInt($('#lm_sewa').val());
                    const format = total_harga.toString().split('').reverse().join('');
                    const convert = format.match(/\d{1,3}/g);
                    const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
                    $('#total_biaya').val(total_harga);
                    $('#total_bayar').html(rupiah);
                }
            });
        } else {
            $('#quantity').val();
        }


    }


    function maximum(event) {
        var kapasitas = ($('#kapasitas').val());
        if (parseInt($('#peserta').val()) > kapasitas) {
            alert('Inputan melebihi batas kapasitas');
            $('#peserta').val(kapasitas);
        } else {
            $('#peserta').val();
        }

    }



    /**function ubahtotal(event) {

        var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * event.target.value * parseInt($('#lm_sewa').val());
        $('#total_biaya').val(total_harga);
        $('#total_bayar').html('Rp ' + total_harga);
    }
*/
    function ubahjumlah(event) {
        $('#quantity').on('keyup', function() {
            var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * event.target.value * parseInt($('#lm_sewa').val());
            const format = total_harga.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
            $('#total_biaya').val(total_harga);
            $('#total_bayar').html(rupiah);

        });
    }

    function ubahlama(event) {
        $('#quantity').on('keyup', function() {
            var total_harga = (parseInt($('#harga').val()) - parseInt($('#potongan').val())) * parseInt($('#quantity').val()) * event.target.value;
            const format = total_harga.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = 'Rp ' + convert.join('.').split('').reverse().join('')
            $('#total_biaya').val(total_harga);
            $('#total_bayar').html(rupiah);
        });
    }



    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });

    $('.carousel slide').carousel()


    // $(document).ready(function() {
    //     $('.js-example-basic-multiple').select2()
    //     $('#harga').val(data[0].harga);

    // });
</script>

</body>




</html>