$('.tomboldetailruangan').on('click', function () {
    const id_ruangan = $(this).data('id_ruangan');
    const nm_ruangan = $(this).data('nm_ruangan');

    var harga = $(this).data('harga');
    const format = harga.toString().split('').reverse().join('');
    const convert = format.match(/\d{1,3}/g);
    const rupiahharga = 'Rp ' + convert.join('.').split('').reverse().join('');

    var potongan = $(this).data('harga') - $(this).data('potongan');
    const formatted = potongan.toString().split('').reverse().join('');
    const konversi = formatted.match(/\d{1,3}/g);
    const rupiahpotongan = 'Rp ' + konversi.join('.').split('').reverse().join('');

    const jmlh_r = $(this).data('jmlh_r');
    const kapasitas = $(this).data('kapasitas');
    const luas = $(this).data('luas');
    //var gambar = $(this).data('gambar');

    $('#id_ruangandetail').text("Id #" + id_ruangan);
    $('#nm_ruangandetail').text(nm_ruangan);
    $('#hargadetail').html(rupiahharga);
    $('#potongandetail').html(rupiahpotongan + ' (harga swasta - potongan)');
    $('#jmlh_rdetail').text(jmlh_r + " Ruangan ");
    $('#kapasitasdetail').text(kapasitas + " Orang");
    $('#luasdetail').html(luas + " m<sup>2</sup> / Ruangan");
    //$('#id_gambar').text(id_gambar);
    //$('#gambardetail').attr("src", "assets/img/ruangan/" + gambar)
    // $.ajax({
    //     type: 'GET',
    //     url: `${window.location.origin}/bpsdmd/C_User/Ruangan/tampil_gambar`,
    //     data: `id_ruangan=${id_ruangan}`,
    //     success: function (data) {
    //         //console.log(data)
    //         $('#gambarcarousel').html(data)
    //     }
    // })
});

$('.tomboleditruangan').on('click', function () {
    const id_ruangan = $(this).data('id_ruangan');
    const nm_ruangan = $(this).data('nm_ruangan');

    const harga = $(this).data('harga')


    const potongan = $(this).data('potongan');


    const jmlh_r = $(this).data('jmlh_r');
    const kapasitas = $(this).data('kapasitas');

    $('#id_ruanganedit').val(id_ruangan);
    $('#nm_ruanganedit').val(nm_ruangan);
    $('#hargaedit').val(harga);
    $('#potonganedit').val(potongan);
    $('#jmlh_redit').val(jmlh_r);
    $('#kapasitasedit').val(kapasitas);

});

$('.tomboleditpermohonan').on('click', function () {
    const id_permohonan = $(this).data('id_permohonan');
    const nama = $(this).data('nama');
    const alamat = $(this).data('alamat')
    const email = $(this).data('email');
    const no_telp = $(this).data('no_telp');


    $('#id_permohonanedit').val(id_permohonan);
    $('#namaedit').val(nama);
    $('#alamatedit').val(alamat);
    $('#emailedit').val(email);
    $('#no_telpedit').val(no_telp);
});

$('.tomboleditpenyewaan').on('click', function () {
    const id_sewa = $(this).data('id_sewa');
    const id_permohonan = $(this).data('id_permohonan');
    const nama = $(this).data('nama');
    const alamat = $(this).data('alamat')
    const email = $(this).data('email');
    const no_telp = $(this).data('no_telp');
    const nm_kegiatan = $(this).data('nm_kegiatan');
    const id_ruangan = $(this).data('id_ruangan');
    const harga = $(this).data('harga');
    const nm_ruangan = $(this).data('nm_ruangan');
    const potongan = $(this).data('potongan');
    const quantity_r = $(this).data('quantity_r');
    const lm_sewa = $(this).data('lm_sewa');
    const peserta = $(this).data('peserta');
    const tgl_mulai = $(this).data('tgl_mulai');
    const tgl_berakhir = $(this).data('tgl_berakhir');
    const penyelenggara = $(this).data('penyelenggara');
    const konfirmasi = $(this).data('konfirmasi');
    const total_biaya = $(this).data('total_biaya');
    const total_bayar = $(this).data('total_bayar');


    $('#id_sewaedit').val(id_sewa);
    $('#id_mohonedit').val(id_permohonan);
    $('#namasewaedit').val(nama);
    $('#alamatsewaedit').val(alamat);
    $('#emailsewaedit').val(email);
    $('#no_telpsewaedit').val(no_telp);
    $('#nm_kegiatanedit').val(nm_kegiatan);
    // $('#id_ruangedit').val(id_ruangan);
    // $('#nm_ruangedit').val(nm_ruangan);

    $('#hargaedit').val(harga);
    $('#quantity_redit').val(quantity_r);
    $('#lm_sewaedit').val(lm_sewa);
    $('#pesertaedit').val(peserta);
    $('#tgl_mulaiedit').val(tgl_mulai);
    $('#tgl_berakhiredit').val(tgl_berakhir);
    $('#penyelenggaraedit').val(penyelenggara);
    $('#konfirmasiedit').val(konfirmasi);
    $('#total_biayaedit').val(total_biaya);
    $('#total_bayaredit').val(total_bayar);

    if ($('#instansiedit').is(':checked')) {
        $('#potongedit').val(potongan);

    } else {
        $('#potongedit').val(0);
    }
    // $('#id_ruangedit').val(id_ruangan); // Ini adalah input biasa
    // $('#nm_ruangedit').val(nm_ruangan); // Ini adalah input biasa

    // Harus diganti menjadi:
    $('#id_ruangedit').val(id_ruangan); // Ini adalah input biasa
    $('#nm_ruangedit option[value="' + id_ruangan + '"]').prop('selected', true); // Menandai opsi yang sesuai
});

