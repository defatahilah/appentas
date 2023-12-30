<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Panduan Pemesanan</h1>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Panduan</li>
        </ol>
    </nav>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= 'C_User/Permohonan/tambah_permohonan'; ?>">1. Silahkan Masuk Ke Halaman "Ajukan Permohonan"</a></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/permohonan.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Pertama silahkan masuk ke Halaman Ajukan Permohonan. Akan muncul tampilan seperti gambar di atas. Selanjutnya isi data permohonan seperti nama, email dan nomor telepon/whatsapp. Kemudian upload surat permohonan anda dengan format doc,docx,atau pdf.
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">2. Permohonan Berhasil Dikirim</a></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/berhasilmohon.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Jika permohonan berhasil dikirim maka akan muncul halaman pemberitahuan bahwa data permohonan anda sudah tersimpan.Selanjutnya menunggu verifikasi dari admin,Jika diterima/ditolak maka admin akan mengirim surat balasan via Whatsapp. Dan id konfirmasi khusus yang permohonannya diterima.
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">3. Konfirmasi Penyewaan</a></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/konfirmasisewa.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Masukkan id konfirmasi penyewaan anda yang telah diberikan oleh admin,jika id nya sesuai maka anda akan di arahkan ke halaman selanjunnya
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">4. Silahkan Masuk Ke Halaman Pemesanan</a></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/formpesanbaru.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Setelah memasukkan id konfirmasi tadi. Akan muncul tampilan seperti gambar di atas. Selanjutnya isi data pesanan anda. Kemudian pilih pesanan anda.
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">5. Detail Pesanan</a></h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/detail.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                <div class="col-sm-6 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/detail2.jpg" class="img-fluid b-block" alt="img">
                </div>
                Terdapat beberapa ruangan yang disediakan di Aplikasi, yaitu : Gedung/Aula (Kampus I/Kampus II), Asrama (Kampus I/Kampus II), dan Guest House (Kampus II).

                Setiap ruangan memiliki harganya berbeda sesuai PER-GUB Kalimantan Selatan tahun 2020. Harga yang ditampilkan adalah harga swasta,namun jika dari pihak instansi yang ingin menyewa, ada potongan harga khusus instansi sesuai PER-GUB Kalimantan Selatan tahun 2020. Anda dapat melihat total pesanan anda pada bagian Total sehingga anda bisa tau berapa estimasi biaya pesanan anda sebelum melakukan checkout.
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">6. Checkout</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-7 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/checkout.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Setelah menekan tombol Pesan, anda akan diarahkan ke halaman Checkout, Disini berisikan detail data data dari pesananmu, seperti Nomor Invoice, tanggal checkout, total biaya, rincian harga dan lain lain. Kami sangat sarankan anda untuk screenshot halaman ini, atau tekan "Ctrl + P" pada keyboard komputer anda untuk melakukan konfirmasi pembayaran nantinya
                .
                Pada bagian bawah juga terdapat nomor rekening, silahkan transfer ke nomor rekening yang sudah disediakan.
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">7. Konfirmasi Pembayaran</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-9 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/konfirmasi.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Setelah melakukan pembayaran silahkan masuk ke Halaman Pembayaran. Silahkan isi nomor invoice mu, ingat cukup nomor saja tidak perlu #. Misalkan nomor invoicemu #1 cukup isi 1, kemudian tekan tombol Cek Invoice
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">8. Detail Pembayaran</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/detailbayaredited.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                <div class="col-sm-6 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/detailbayar2.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Jika invoice anda benar maka anda akan diarahkan ke halaman ini. Data dihalaman ini berisikan data pesanan anda sesuai dengan nomor invoice.kemudian silahkan cek apakah pesanan anda sudah benar lalu upload bukti pembayaran. Jika telah selesai silahkan klik tombol Konfirmasi Pembayaran
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">9. Pembayaran Berhasil</h6>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-sm-8 text-center">
                    <img src="<?= base_url('assets/'); ?>/img/berhasil.jpg" class="img-fluid b-block mb-2" alt="img">
                </div>
                Jika konfirmasi pembayaran berhasil maka akan muncul halaman pemberitahuan ini. Data pembayaran anda sudah tersimpan selanjutnya menunggu admin melakukan verifikasi. verifikasi ini biasanya memerlukan waktu kurang dari 1 jam, namun jika dalam waktu beberapa jam belum diverifikasi silahkan hubungi admin melalui WhatsApp dengan menekan tombol whatsapp. Jika pembayaran anda sudah diverifikasi admin, pesanan anda akan muncul di halaman Admin -> Jadwal Penyewaan
            </div>
        </div>
    </div>

</div>