$(document).ready(function () {
    $('instansi').prop('disabled', true);

});

$(function () {

    $(document.body).on('change', "#nm_ruangan", function (e) {
        var nm_ruangan = $('#nm_ruangan').val();
        if (nm_ruangan == "") {
            $('#harga').val("0");
            $('#potongan').val("0");
            $('#instansi').prop('disabled', true);
            $('#instansi').prop('checked', false);

        }
        else if (nm_ruangan == "Karikatur Kartun") {
            $('#hargapesanancheckout').val("80000");
            $('#hargacommercialcheckout').val("0");
            $('#hargabackgroundcheckout').val("0");
            $('#hargamentahancheckout').val("0");
            $('#commercialusecheckout').prop('disabled', false);
            $('#backgroundcheckout').prop('disabled', false);
            $('#sourcefilecheckout').prop('disabled', false);
            $('#commercialusecheckout').prop('checked', false);
            $('#backgroundcheckout').prop('checked', false);
            $('#sourcefilecheckout').prop('checked', false);
        }
        else if (pesanan == "Logo Desain") {
            $('#hargapesanancheckout').val("300000");
            $('#hargacommercialcheckout').val("0");
            $('#hargabackgroundcheckout').val("0");
            $('#hargamentahancheckout').val("0");
            $('#commercialusecheckout').prop('disabled', false);
            $('#backgroundcheckout').prop('disabled', true);
            $('#sourcefilecheckout').prop('disabled', false);
            $('#commercialusecheckout').prop('checked', true);
            $('#backgroundcheckout').prop('checked', false);
            $('#sourcefilecheckout').prop('checked', true);
        }
        else if (pesanan == "Desain Karakter Maskot") {
            $('#hargapesanancheckout').val("250000");
            $('#hargacommercialcheckout').val("0");
            $('#hargabackgroundcheckout').val("0");
            $('#hargamentahancheckout').val("0");
            $('#commercialusecheckout').prop('disabled', false);
            $('#backgroundcheckout').prop('disabled', true);
            $('#sourcefilecheckout').prop('disabled', false);
            $('#commercialusecheckout').prop('checked', true);
            $('#backgroundcheckout').prop('checked', false);
            $('#sourcefilecheckout').prop('checked', true);
        }
        else if (pesanan == "Ilustrasi Flat") {
            $('#hargapesanancheckout').val("100000");
            $('#hargacommercialcheckout').val("0");
            $('#hargabackgroundcheckout').val("0");
            $('#hargamentahancheckout').val("0");
            $('#commercialusecheckout').prop('disabled', false);
            $('#backgroundcheckout').prop('disabled', true);
            $('#sourcefilecheckout').prop('disabled', false);
            $('#commercialusecheckout').prop('checked', false);
            $('#backgroundcheckout').prop('checked', false);
            $('#sourcefilecheckout').prop('checked', false);
        }
        else if (pesanan == "Avatar Kartun") {
            $('#hargapesanancheckout').val("50000");
            $('#hargacommercialcheckout').val("0");
            $('#hargabackgroundcheckout').val("0");
            $('#hargamentahancheckout').val("0");
            $('#commercialusecheckout').prop('disabled', false);
            $('#backgroundcheckout').prop('disabled', false);
            $('#sourcefilecheckout').prop('disabled', false);
            $('#commercialusecheckout').prop('checked', false);
            $('#backgroundcheckout').prop('checked', false);
            $('#sourcefilecheckout').prop('checked', false);
        }
    });


    $("#commercialusecheckout").click(function () {
        if ($("#commercialusecheckout").is(':checked')) {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercialcheckout').val("80000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercialcheckout').val("100000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercialcheckout').val("50000");
            }
        }
        else {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercialcheckout').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercialcheckout').val("0");
            }
        }
    });


    $("#sourcefilecheckout").click(function () {
        if ($("#sourcefilecheckout").is(':checked')) {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahancheckout').val("30000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahancheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahancheckout').val("100000");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahancheckout').val("50000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahancheckout').val("30000");
            }
        }
        else {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahancheckout').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahancheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahancheckout').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahancheckout').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahancheckout').val("0");
            }
        }
    });

    $("#backgroundcheckout").click(function () {
        if ($("#backgroundcheckout").is(':checked')) {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackgroundcheckout').val("20000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackgroundcheckout').val("20000");
            }
        }
        else {
            var pesanan = $('#pesanancheckout').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackgroundcheckout').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackgroundcheckout').val("0");
            }
        }
    });

    $(document.body).on('change', function (e) {
        var hargapesanan = $("#hargapesanancheckout").val();
        var hargacommercial = $("#hargacommercialcheckout").val();
        var hargabackground = $("#hargabackgroundcheckout").val();
        var hargamentahan = $("#hargamentahancheckout").val();
        var quantity = $("#quantitycheckout").val();
        var total = parseInt(hargapesanan) * parseInt(quantity) + parseInt(hargacommercial) + parseInt(hargabackground) + parseInt(hargamentahan);
        $("#totalcheckout").val(total);
        $("#totaltulisancheckout").text("Rp. " + total);
    });






    $('.tombolketeranganpesanan').on('click', function () {
        const keterangan = $(this).data('keterangan');
        $('#keteranganpesanantampil').text(keterangan);

    });

    $('.tomboleditprofile').on('click', function () {
        const id = $(this).data('id');
        const namaadmin = $(this).data('nama');
        const username = $(this).data('username');
        const password = $(this).data('password');
        const level = $(this).data('level');
        $('#ideditprofiladmin').val(id);
        $('#namaeditprofiladmin').val(namaadmin);
        $('#usernameeditprofiladmin').val(username);
        $('#leveleditprofiladmin').val(level);

    });


    $('.tomboleditpesanan').on('click', function () {
        const invoice = $(this).data('invoice');
        const tanggalbayar = $(this).data('tanggalbayar');
        const nama = $(this).data('nama');
        const email = $(this).data('email');
        const wa = $(this).data('wa');
        const pesanan = $(this).data('pesanan');
        const hargapesanan = $(this).data('hargapesanan');
        const quantity = $(this).data('quantity');
        const commercialuse = $(this).data('commercialuse');
        const hargacommercialuse = $(this).data('hargacommercialuse');
        const background = $(this).data('background');
        const hargabackground = $(this).data('hargabackground');
        const sourcefile = $(this).data('sourcefile');
        const hargamentahan = $(this).data('hargamentahan');
        const berkas = $(this).data('berkas');
        const keterangan = $(this).data('keterangan');
        const total = $(this).data('total');
        const jumlahbayar = $(this).data('total');
        const metodepembayaran = $(this).data('metodepembayaran');
        const buktibayar = $(this).data('buktibayar');
        const statuspembayaran = $(this).data('statuspembayaran');
        const statuspengerjaan = $(this).data('statuspengerjaan');
        $('#invoicepesananedit').val(invoice);
        $('#tanggalpesananedit').val(tanggalbayar);
        $('#namapesananedit').val(nama);
        $('#emailpesananedit').val(email);
        $('#wapesananedit').val(wa);
        $('#pesananpesananedit').val(pesanan);
        $('#hargapesananpesananedit').val(hargapesanan);
        $('#quantitypesananedit').val(quantity);
        $('#berkaspesananedit').val(berkas);
        $('#keteranganpesananedit').val(keterangan);
        $('#jumlahpesananedit').val(jumlahbayar);
        $('#hargacommercialpesananedit').val(hargacommercialuse);
        $('#hargabackgroundpesananedit').val(hargabackground);
        $('#hargamentahanpesananedit').val(hargamentahan);

        if (commercialuse == 1) {
            $('#commercialpesananedit').prop('checked', true);
        } else {
            $('#commercialpesananedit').prop('checked', false);
        };
        if (background == 1) {
            $('#backgroundpesananedit').prop('checked', true);
        } else {
            $('#backgroundpesananedit').prop('checked', false);
        };
        if (sourcefile == 1) {
            $('#mentahanpesananedit').prop('checked', true);
        } else {
            $('#mentahanpesananedit').prop('checked', false);
        };
        $('#metodepembayaranpesananedit').val(metodepembayaran);
        $('#totalpesananedit').val(total);
        $('#buktipesananedit').val(buktibayar);
        $('#statuspembayaranpesananedit').val(statuspembayaran);
        $('#statuspengerjaanpesananedit').val(statuspengerjaan);
    });


    // $(document.body).on('change', "#pesananpesananedit", function (e) {
    //     var pesanan = $('#pesananpesananedit').val();
    //     if (pesanan == "") {
    //         $('#hargapesananpesananedit').val("0");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', true);
    //         $('#backgroundpesananedit').prop('disabled', true);
    //         $('#mentahanpesananedit').prop('disabled', true);
    //         $('#commercialpesananedit').prop('checked', false);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', false);
    //     }
    //     else if (pesanan == "Karikatur Kartun") {
    //         $('#hargapesananpesananedit').val("80000");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', false);
    //         $('#backgroundpesananedit').prop('disabled', false);
    //         $('#mentahanpesananedit').prop('disabled', false);
    //         $('#commercialpesananedit').prop('checked', false);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', false);
    //     }
    //     else if (pesanan == "Logo Desain") {
    //         $('#hargapesananpesananedit').val("300000");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', false);
    //         $('#backgroundpesananedit').prop('disabled', true);
    //         $('#mentahanpesananedit').prop('disabled', false);
    //         $('#commercialpesananedit').prop('checked', true);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', true);
    //     }
    //     else if (pesanan == "Desain Karakter Maskot") {
    //         $('#hargapesananpesananedit').val("250000");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', false);
    //         $('#backgroundpesananedit').prop('disabled', true);
    //         $('#mentahanpesananedit').prop('disabled', false);
    //         $('#commercialpesananedit').prop('checked', true);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', true);
    //     }
    //     else if (pesanan == "Ilustrasi Flat") {
    //         $('#hargapesananpesananedit').val("100000");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', false);
    //         $('#backgroundpesananedit').prop('disabled', true);
    //         $('#mentahanpesananedit').prop('disabled', false);
    //         $('#commercialpesananedit').prop('checked', false);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', false);
    //     }
    //     else if (pesanan == "Avatar Kartun") {
    //         $('#hargapesananpesananedit').val("50000");
    //         $('#hargacommercialpesananedit').val("0");
    //         $('#hargabackgroundpesananedit').val("0");
    //         $('#hargamentahanpesananedit').val("0");
    //         $('#commercialpesananedit').prop('disabled', false);
    //         $('#backgroundpesananedit').prop('disabled', false);
    //         $('#mentahanpesananedit').prop('disabled', false);
    //         $('#commercialpesananedit').prop('checked', false);
    //         $('#backgroundpesananedit').prop('checked', false);
    //         $('#mentahanpesananedit').prop('checked', false);
    //     }
    // });

    // $("#commercialpesananedit").click(function () {
    //     if ($("#commercialpesananedit").is(':checked')) {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargacommercialpesananedit').val("80000");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargacommercialpesananedit').val("100000");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargacommercialpesananedit').val("50000");
    //         }
    //     }
    //     else {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargacommercialpesananedit').val("0");
    //         }
    //     }
    // });

    // $("#mentahanpesananedit").click(function () {
    //     if ($("#mentahanpesananedit").is(':checked')) {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargamentahanpesananedit').val("30000");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargamentahanpesananedit').val("100000");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargamentahanpesananedit').val("50000");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargamentahanpesananedit').val("30000");
    //         }
    //     }
    //     else {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargamentahanpesananedit').val("0");
    //         }
    //     }
    // });

    // $("#backgroundpesananedit").click(function () {
    //     if ($("#backgroundpesananedit").is(':checked')) {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargabackgroundpesananedit').val("20000");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargabackgroundpesananedit').val("20000");
    //         }
    //     }
    //     else {
    //         var pesanan = $('#pesananpesananedit').val();
    //         if (pesanan == "Karikatur Kartun") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Logo Desain") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Desain Karakter Maskot") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Ilustrasi Flat") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //         else if (pesanan == "Avatar Kartun") {
    //             $('#hargabackgroundpesananedit').val("0");
    //         }
    //     }
    // });

    // $(document.body).on('change', function (e) {
    //     var hargapesanan = $("#hargapesananpesananedit").val();
    //     var hargacommercial = $("#hargacommercialpesananedit").val();
    //     var hargabackground = $("#hargabackgroundpesananedit").val();
    //     var hargamentahan = $("#hargamentahanpesananedit").val();
    //     var quantity = $("#quantitypesananedit").val();
    //     var total = parseInt(hargapesanan) * parseInt(quantity) + parseInt(hargacommercial) + parseInt(hargabackground) + parseInt(hargamentahan);
    //     $("#totalpesananedit").val(total);
    // });




    // ==========================batas halaman pesanan=====================================


    $('.tomboleditpembayaran').on('click', function () {
        const invoice = $(this).data('invoice');
        const tanggalbayar = $(this).data('tanggalbayar');
        const nama = $(this).data('nama');
        const email = $(this).data('email');
        const wa = $(this).data('wa');
        const pesanan = $(this).data('pesanan');
        const hargapesanan = $(this).data('hargapesanan');
        const quantity = $(this).data('quantity');
        const commercialuse = $(this).data('commercialuse');
        const background = $(this).data('background');
        const sourcefile = $(this).data('sourcefile');
        const berkas = $(this).data('berkas');
        const keterangan = $(this).data('keterangan');
        const total = $(this).data('total');
        const jumlahbayar = $(this).data('total');
        const metodepembayaran = $(this).data('metodepembayaran');
        const buktibayar = $(this).data('buktibayar');
        const statuspembayaran = $(this).data('statuspembayaran');
        const statuspengerjaan = $(this).data('statuspengerjaan');
        $('#invoicepembayaranedit').val(invoice);
        $('#tanggalpembayaranedit').val(tanggalbayar);
        $('#namapembayaranedit').val(nama);
        $('#emailpembayaranedit').val(email);
        $('#wapembayaranedit').val(wa);
        $('#pesananpembayaranedit').val(pesanan);
        $('#hargapesananpembayaranedit').val(hargapesanan);
        $('#quantitypembayaranedit').val(quantity);
        $('#berkaspembayaranedit').val(berkas);
        $('#keteranganpembayaranedit').val(keterangan);
        $('#jumlahpembayaranedit').val(jumlahbayar);
        if (commercialuse == 1) {
            $('#commercialpembayaranedit').prop('checked', true);
        } else {
            $('#commercialpembayaranedit').prop('checked', false);
        };
        if (background == 1) {
            $('#backgroundpembayaranedit').prop('checked', true);
        } else {
            $('#backgroundpembayaranedit').prop('checked', false);
        };
        if (sourcefile == 1) {
            $('#mentahanpembayaranedit').prop('checked', true);
        } else {
            $('#mentahanpembayaranedit').prop('checked', false);
        };
        $('#pembayaranpembayaranedit').val(metodepembayaran);
        $('#totalpembayaranedit').val(total);
        $('#buktipembayaranedit').val(buktibayar);
        $('#statuspembayaran').val(statuspembayaran);
        $('#statuspengerjaanpembayaranedit').val(statuspengerjaan);
    });





    $('.tomboldetailcheckout').on('click', function () {
        const invoice = $(this).data('invoice');
        const tanggalcheckout = $(this).data('tanggalcheckout');
        const nama = $(this).data('nama');
        const email = $(this).data('email');
        const wa = $(this).data('wa');
        const pesanan = $(this).data('pesanan');
        const hargapesanan = $(this).data('hargapesanan');
        const quantity = $(this).data('quantity');
        const commercialuse = $(this).data('commercialuse');
        const hargacommercial = $(this).data('hargacommercial');
        const background = $(this).data('background');
        const hargabackground = $(this).data('hargabackground');
        const sourcefile = $(this).data('sourcefile');
        const hargamentahan = $(this).data('hargamentahan');
        const berkas = $(this).data('berkas');
        const keterangan = $(this).data('keterangan');
        const metodepembayaran = $(this).data('metodepembayaran');
        const total = $(this).data('total');
        $('#namacheckout').text(nama);
        $('#invoicecheckout').text("Invoice #" + invoice);
        $('#totalcheckout').text("Rp. " + total);
        $('#totalseluruh').text("Rp. " + total);
        $('#totalbiaya').text("Rp. " + hargapesanan);
        $('#tanggalcheckout').text(tanggalcheckout);
        $('#pesanancheckout').text(pesanan);
        $('#quantitycheckout').text(quantity);
        $('#metodepembayaran').text(metodepembayaran);
        $('#email').text(email);
        $('#whatsapp').text(wa);
        if (commercialuse == 1) {
            $('#commercial').text("Ya");
            $('#hargacommercial').text("Rp. " + hargacommercial);
        } else {
            $('#commercial').text("Tidak");
            $('#hargacommercial').text("Rp. " + 0);
        };

        if (background == 1) {
            $('#background').text("Ya");
            $('#hargabackground').text("Rp. " + hargabackground);
        } else {
            $('#background').text("Tidak");
            $('#hargabackground').text("Rp. " + 0);
        };

        if (sourcefile == 1) {
            $('#sourcefile').text("Ya");
            $('#hargamentahan').text("Rp. " + hargamentahan);
        } else {
            $('#sourcefile').text("Tidak");
            $('#hargamentahan').text("Rp. " + 0);
        };



    });


    $('.tomboleditcheckout').on('click', function () {
        const invoice = $(this).data('invoiceedit');
        const tanggalcheckout = $(this).data('tanggalcheckoutedit');
        const nama = $(this).data('namaedit');
        const email = $(this).data('emailedit');
        const wa = $(this).data('waedit');
        const pesanan = $(this).data('pesananedit');
        const hargapesanan = $(this).data('hargapesananedit');
        const quantity = $(this).data('quantityedit');
        const commercialuse = $(this).data('commercialuseedit');
        const hargacommercial = $(this).data('hargacommercialedit');
        const background = $(this).data('backgroundedit');
        const hargabackground = $(this).data('hargabackgroundedit');
        const sourcefile = $(this).data('sourcefileedit');
        const hargamentahan = $(this).data('hargamentahanedit');
        const berkas = $(this).data('berkasedit');
        const keterangan = $(this).data('keteranganedit');
        const metodepembayaran = $(this).data('metodepembayaranedit');
        const total = $(this).data('totaledit');
        $('#invoicecheckoutedit').val(invoice);
        $('#tanggalcheckoutedit').val(tanggalcheckout);
        $('#namacheckoutedit').val(nama);
        $('#emailcheckoutedit').val(email);
        $('#wacheckoutedit').val(wa);
        $('#pesanancheckoutedit').val(pesanan);
        $('#quantitycheckoutedit').val(quantity);
        $('#hargapesanancheckoutedit').val(hargapesanan);
        $('#hargacommercialcheckoutedit').val(hargacommercial);
        $('#hargabackgroundcheckoutedit').val(hargabackground);
        $('#hargamentahancheckoutedit').val(hargamentahan);
        $('#berkascheckoutedit').val(berkas);
        $('#keterangancheckoutedit').val(keterangan);
        if (commercialuse == 1) {
            $('#commercialcheckoutedit').prop('checked', true);
        } else {
            $('#commercialcheckoutedit').prop('checked', false);
        };
        if (background == 1) {
            $('#backgroundcheckoutedit').prop('checked', true);
        } else {
            $('#backgroundcheckoutedit').prop('checked', false);
        };
        if (sourcefile == 1) {
            $('#mentahancheckoutedit').prop('checked', true);
        } else {
            $('#mentahancheckoutedit').prop('checked', false);
        };
        $('#pembayarancheckoutedit').val(metodepembayaran);
        $('#totalcheckoutedit').val(total);
    });


    $(document.body).on('change', "#pesanancheckoutedit", function (e) {
        var pesanan = $('#pesanancheckoutedit').val();
        if (pesanan == "") {
            $('#hargapesanancheckoutedit').val("0");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', true);
            $('#backgroundcheckoutedit').prop('disabled', true);
            $('#mentahancheckoutedit').prop('disabled', true);
            $('#commercialcheckoutedit').prop('checked', false);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', false);
        }
        else if (pesanan == "Karikatur Kartun") {
            $('#hargapesanancheckoutedit').val("80000");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', false);
            $('#backgroundcheckoutedit').prop('disabled', false);
            $('#mentahancheckoutedit').prop('disabled', false);
            $('#commercialcheckoutedit').prop('checked', false);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', false);
        }
        else if (pesanan == "Logo Desain") {
            $('#hargapesanancheckoutedit').val("300000");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', false);
            $('#backgroundcheckoutedit').prop('disabled', true);
            $('#mentahancheckoutedit').prop('disabled', false);
            $('#commercialcheckoutedit').prop('checked', true);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', true);
        }
        else if (pesanan == "Desain Karakter Maskot") {
            $('#hargapesanancheckoutedit').val("250000");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', false);
            $('#backgroundcheckoutedit').prop('disabled', true);
            $('#mentahancheckoutedit').prop('disabled', false);
            $('#commercialcheckoutedit').prop('checked', true);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', true);
        }
        else if (pesanan == "Ilustrasi Flat") {
            $('#hargapesanancheckoutedit').val("100000");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', false);
            $('#backgroundcheckoutedit').prop('disabled', true);
            $('#mentahancheckoutedit').prop('disabled', false);
            $('#commercialcheckoutedit').prop('checked', false);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', false);
        }
        else if (pesanan == "Avatar Kartun") {
            $('#hargapesanancheckoutedit').val("50000");
            $('#hargacommercialcheckoutedit').val("0");
            $('#hargabackgroundcheckoutedit').val("0");
            $('#hargamentahancheckoutedit').val("0");
            $('#commercialcheckoutedit').prop('disabled', false);
            $('#backgroundcheckoutedit').prop('disabled', false);
            $('#mentahancheckoutedit').prop('disabled', false);
            $('#commercialcheckoutedit').prop('checked', false);
            $('#backgroundcheckoutedit').prop('checked', false);
            $('#mentahancheckoutedit').prop('checked', false);
        }
    });

    $("#commercialcheckoutedit").click(function () {
        if ($("#commercialcheckoutedit").is(':checked')) {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercialcheckoutedit').val("80000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercialcheckoutedit').val("100000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercialcheckoutedit').val("50000");
            }
        }
        else {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercialcheckoutedit').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercialcheckoutedit').val("0");
            }
        }
    });

    $("#mentahancheckoutedit").click(function () {
        if ($("#mentahancheckoutedit").is(':checked')) {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahancheckoutedit').val("30000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahancheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahancheckoutedit').val("100000");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahancheckoutedit').val("50000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahancheckoutedit').val("30000");
            }
        }
        else {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahancheckoutedit').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahancheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahancheckoutedit').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahancheckoutedit').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahancheckoutedit').val("0");
            }
        }
    });

    $("#backgroundcheckoutedit").click(function () {
        if ($("#backgroundcheckoutedit").is(':checked')) {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackgroundcheckoutedit').val("20000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackgroundcheckoutedit').val("20000");
            }
        }
        else {
            var pesanan = $('#pesanancheckoutedit').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackgroundcheckoutedit').val("0");
            }
        }
    });

    $(document.body).on('change', function (e) {
        var hargapesanan = $("#hargapesanancheckoutedit").val();
        var hargacommercial = $("#hargacommercialcheckoutedit").val();
        var hargabackground = $("#hargabackgroundcheckoutedit").val();
        var hargamentahan = $("#hargamentahancheckoutedit").val();
        var quantity = $("#quantitycheckoutedit").val();
        var total = parseInt(hargapesanan) * parseInt(quantity) + parseInt(hargacommercial) + parseInt(hargabackground) + parseInt(hargamentahan);
        $("#totalcheckoutedit").val(total);
    });

});
