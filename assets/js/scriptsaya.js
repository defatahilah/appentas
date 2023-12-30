$(document).ready(function () {
    $('#instansi').prop('disabled', true);
});



$(function () {


    // =====================================================================



    $(document.body).on('change', "#truangan", function (e) {
        var truangan = $('#ruangan').val();
        if (truangan == "") {
            $('#harga').val("0");
            $('#potongan').val("0");
            $('#instansi').prop('disabled', true);
            $('#instansi').prop('checked', false);

        }
        else if (truangan == "Gedung/Aula (Datuk Panglima Batur)") {
            $('#harga').val(harga);
            $('#hargacommercial').val("0");
            $('#hargabackground').val("0");
            $('#hargamentahan').val("0");
            $('#commercialuse').prop('disabled', false);
            $('#background').prop('disabled', false);
            $('#sourcefile').prop('disabled', false);
            $('#commercialuse').prop('checked', false);
            $('#background').prop('checked', false);
            $('#sourcefile').prop('checked', false);
        }
        else if (pesanan == "Logo Desain") {
            $('#hargapesanan').val("300000");
            $('#hargacommercial').val("0");
            $('#hargabackground').val("0");
            $('#hargamentahan').val("0");
            $('#commercialuse').prop('disabled', false);
            $('#background').prop('disabled', true);
            $('#sourcefile').prop('disabled', false);
            $('#commercialuse').prop('checked', true);
            $('#background').prop('checked', false);
            $('#sourcefile').prop('checked', true);
        }
        else if (pesanan == "Desain Karakter Maskot") {
            $('#hargapesanan').val("250000");
            $('#hargacommercial').val("0");
            $('#hargabackground').val("0");
            $('#hargamentahan').val("0");
            $('#commercialuse').prop('disabled', false);
            $('#background').prop('disabled', true);
            $('#sourcefile').prop('disabled', false);
            $('#commercialuse').prop('checked', true);
            $('#background').prop('checked', false);
            $('#sourcefile').prop('checked', true);
        }
        else if (pesanan == "Ilustrasi Flat") {
            $('#hargapesanan').val("100000");
            $('#hargacommercial').val("0");
            $('#hargabackground').val("0");
            $('#hargamentahan').val("0");
            $('#commercialuse').prop('disabled', false);
            $('#background').prop('disabled', true);
            $('#sourcefile').prop('disabled', false);
            $('#commercialuse').prop('checked', false);
            $('#background').prop('checked', false);
            $('#sourcefile').prop('checked', false);
        }
        else if (pesanan == "Avatar Kartun") {
            $('#hargapesanan').val("50000");
            $('#hargacommercial').val("0");
            $('#hargabackground').val("0");
            $('#hargamentahan').val("0");
            $('#commercialuse').prop('disabled', false);
            $('#background').prop('disabled', false);
            $('#sourcefile').prop('disabled', false);
            $('#commercialuse').prop('checked', false);
            $('#background').prop('checked', false);
            $('#sourcefile').prop('checked', false);
        }
    });

    $("#commercialuse").click(function () {
        if ($("#commercialuse").is(':checked')) {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercial').val("80000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercial').val("100000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercial').val("50000");
            }
        }
        else {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargacommercial').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargacommercial').val("0");
            }
        }
    });


    $("#sourcefile").click(function () {
        if ($("#sourcefile").is(':checked')) {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahan').val("30000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahan').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahan').val("100000");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahan').val("50000");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahan').val("30000");
            }
        }
        else {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargamentahan').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargamentahan').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargamentahan').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargamentahan').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargamentahan').val("0");
            }
        }
    });

    $("#background").click(function () {
        if ($("#background").is(':checked')) {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackground').val("20000");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackground').val("20000");
            }
        }
        else {
            var pesanan = $('#pesanan').val();
            if (pesanan == "Karikatur Kartun") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Logo Desain") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Desain Karakter Maskot") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Ilustrasi Flat") {
                $('#hargabackground').val("0");
            }
            else if (pesanan == "Avatar Kartun") {
                $('#hargabackground').val("0");
            }
        }
    });

    $(document.body).on('change', function (e) {
        var harga = $("#harga").val();
        var potongan = $("#potongan").val();
        var quantity_r = $("#quantity_r").val();
        var total_biaya = parseInt((harga) - parseInt(potongan)) * parseInt(quantity_r);
        $("#total_biaya").val(total_biaya);
        $("#total_biaya").text("Rp. " + total_biaya);
    });




});