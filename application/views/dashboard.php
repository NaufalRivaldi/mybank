<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_part/head.php') ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php $this->load->view('_part/sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- navbar -->
            <?php $this->load->view('_part/navbar.php') ?>
            
            <h1>Total uang bersih :</h1>
            <h2>Rp. 0,-</h2>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header"><i class="fas fa-dollar-sign"></i> Uang Bulanan</div>
                        <div class="card-body">
                            <h5 class="card-title">Rp. 0,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header"><i class="fas fa-dollar-sign"></i> Tabungan</div>
                        <div class="card-body">
                            <h5 class="card-title">Rp. 0,-</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-header"><i class="fas fa-money-bill-alt"></i> Tagihan</div>
                        <div class="card-body">
                            <h5 class="card-title">Rp. 0,-</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('_part/javascript.php') ?>
</body>

</html>