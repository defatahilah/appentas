 <!-- Begin Page Content -->
 <div class="container-fluid">
     <!-- Page Heading -->
     <div class="card-body">
         <div class="row">

             <div class="col-lg-6">
                 <?= $this->session->flashdata('pesan'); ?>
             </div>
         </div>
         <h1 class="h3 mb-4 text-gray-800">Profil Admin</h1>
         <div class="card border-left-danger mb-3" style="max-width: 540px;">
             <div class="row no-gutter ml-2 my-1">
                 <div class="col-md-4">
                     <img class="card-img" src="<?= base_url('assets/img/profile/') . $admin['foto']; ?>">
                 </div>
                 <div class="col-md-8">
                     <div class="card-body">
                         <h5 class="card-title"><?= $admin['admin']; ?></h5>
                         <p class="card-text">Admin BPSDMD Provinsi Kalimantan Selatan</p>

                     </div>
                 </div>
             </div>
         </div>
     </div>

 </div>
 </div>
 <!-- End of Main Content -->