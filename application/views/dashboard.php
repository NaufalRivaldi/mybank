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
            
            <h2>Rp. 0,-</h2>
            <p>Isi tabel pemakaian uang pertanggal.</p>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('_part/javascript.php') ?>
</body>

</html>