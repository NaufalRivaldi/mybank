<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_part/head.php') ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php $this->load->view('_part/sidebar.php') ?>

        <div id="content">
            <!-- navbar -->
            <?php $this->load->view('_part/navbar.php') ?>

            <div class="card">
                <h2 class="card-header"><i class="fas fa-hand-holding-usd"></i> Tambah Pemasukan</h2>
                <div class="card-body">
                    <form action="<?= site_url('transaksi/pemasukan') ?>" method="POST">
                        <!-- hidden -->
                        <input type="hidden" name="id_user" class="form-control" id="id_user" value="<?= $this->session->userdata('id') ?>">
                        <!-- hidden -->

                        <div class="form-group row">
                            <label for="nominal" class="col-sm-2 col-form-label">Nominal (Rp.)</label>
                            <div class="col-sm-10">
                                <input type="number" name="nominal" class="form-control" id="nominal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" name="tgl_transaksi" class="form-control col-sm-6" id="date" value="<?= $date ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="keterangan" class="form-control" id="keterangan" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="submit" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input type="submit" name="btn" value="Simpan Uang" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <?php $this->load->view('_part/modal.php') ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('_part/javascript.php') ?>
</body>

</html>