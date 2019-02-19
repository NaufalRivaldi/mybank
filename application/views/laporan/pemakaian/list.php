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
            <h2><i class="fas fa-money-check-alt"></i> Laporan Pemakaian Uang</h2>
            
            <!-- table -->
            <?php for($i=0; $i<count($tgl); $i++){ ?>
                <?php
                    $no = 1;
                    $total = 0;
                    $data = $this->db
                                ->where('tgl_transaksi', $tgl[$i])
                                ->where('id_user', $this->session->userdata('id'))->get('tb_transaksi')->result();
                ?>
                <div class="card">
                    <h5 class="card-header">Tanggal : <?= date('d-m-Y', strtotime($tgl[$i])) ?></h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $data): ?>
                                    <?php $total += $data->nominal; ?>
                                    <tr class="<?= ($data->jenis == 'pengeluaran')? 'table-danger' : '' ?>">
                                        <td><?= $no++; ?></td>
                                        <td>Rp. <?= number_format($data->nominal) ?></td>
                                        <td><?= $data->keterangan ?></td>
                                        <td>
                                            <a href=""><i class="fas fa-trash" style="color:red"></i></a> | 
                                            <a href=""><i class="fas fa-cog"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="3" align="right">Total :</td>
                                        <td>Rp. <?= number_format($total) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
            <?php } ?>
        </div>
    </div>

    <!-- modal -->
    <?php $this->load->view('_part/modal.php') ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('_part/javascript.php') ?>
</body>

</html>