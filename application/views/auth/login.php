<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-6 ">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body bg-gray-500 border-bottom-danger p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-2">
                            <right>
                                <img src="<?= base_url(); ?>assets/img/LOGO.png" height="11%" width="15%">
                            </right>
                        </div>
                        <div class="p-5">
                            <center>
                                <img src="<?= base_url(); ?>assets/img/kalsel.png" height="20%" width="20%">
                            </center>

                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Badan Pengembangan Sumber Daya Manusia Daerah</b>
                                    <br><b>Provinsi Kalimantan Selatan</b>
                                </h1>
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?php if ($this->session->flashdata('error')) {
                                //echo $this->session->flashdata('error'); 
                            ?>
                                <div class="alert alert-danger"> <?= $this->session->flashdata('error') ?> </div>
                                <?php //echo form_open('/Dashboard');
                                ?>
                            <?php } ?>
                            <form class="user" method="post" action="<?= base_url('Login'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Name" name="username" placeholder="Nama" autofocus value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="Password" name="password" placeholder="Password" autocomplete="off">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <center>
                                    <button type='submit' class="btn btn-dark btn-user btn-block">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Login
                                    </button>
                                </center>
                                <style>
                                    .btn {
                                        margin: 0;
                                        padding: 0;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        background: #4e73df;

                                    }


                                    button {
                                        position: relative;
                                        display: inline-block;
                                        padding: 15px 30px;
                                        color: #4e73df;
                                        text-transform: uppercase;
                                        letter-spacing: 4px;
                                        text-decoration: none;
                                        font-size: 24px;
                                        overflow: hidden;
                                        transition: 0.2s;
                                    }



                                    button:hover {
                                        color: #255784;
                                        background: #4e73df;
                                        box-shadow: 0 0 10px #4e73df, 0 0 40px #4e73df, 0 0 80px #4e73df;
                                        transition-delay: 1s;
                                    }


                                    button span {
                                        position: absolute;
                                        display: block;
                                    }




                                    button span:nth-child(1) {
                                        top: 0;
                                        left: -100%;
                                        width: 100%;
                                        height: 2px;
                                        background: linear-gradient(90deg, transparent, #4e73df);
                                    }



                                    button:hover span:nth-child(1) {
                                        left: 100%;
                                        transition: 1s;
                                    }


                                    button span:nth-child(3) {
                                        bottom: 0;
                                        right: -100%;
                                        width: 100%;
                                        height: 2px;
                                        background: linear-gradient(270deg, transparent, #4e73df);
                                    }

                                    button:hover span:nth-child(3) {
                                        right: 100%;
                                        transition: 1s;
                                        transition-delay: 0.5s;
                                    }



                                    button span:nth-child(2) {
                                        top: -100%;
                                        right: 0;
                                        width: 2px;
                                        height: 100%;
                                        background: linear-gradient(180deg, transparent, #4e73df);
                                    }

                                    button:hover span:nth-child(2) {
                                        top: 100%;
                                        transition: 1s;
                                        transition-delay: 0.25s;
                                    }



                                    button span:nth-child(4) {
                                        bottom: -100%;
                                        left: 0;
                                        width: 2px;
                                        height: 100%;
                                        background: linear-gradient(360deg, transparent, #4e73df);
                                    }

                                    button:hover span:nth-child(4) {
                                        bottom: 100%;
                                        transition: 1s;
                                        transition-delay: 0.75s;
                                    }
                                </style>
                            </form>
                            <?php echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>