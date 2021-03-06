<nav id="sidebar">
    <div class="sidebar-header">
        <img src="<?= base_url('assets/img/icon.png') ?>" alt="" width="50"><span class="title"><?= APP_NAME ?></span>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?= site_url('home/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-money-check"></i> Transaksi</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="<?= site_url('transaksi/pemasukan') ?>">> Pemasukan</a>
                </li>
                <li>
                    <a href="<?= site_url('transaksi/pengeluaran') ?>">> Pengeluaran</a>
                </li>
                <li>
                    <a href="<?= site_url('transaksi/tagihan') ?>">> Tagihan</a>
                </li>
                <li>
                    <a href="<?= site_url('transaksi/pindah') ?>">> Pindah Uang</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-balance-scale"></i> Laporan</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">> Tagihan</a>
                    <a href="<?= site_url('laporan/pemakaian') ?>">> Keuangan</a>
                </li>
            </ul>
        </li>
    </ul>
    <p style="font-size:0.8em; padding:10px;">
        Copyright &copy; 2019 Naufal Rivaldi. All Rights Reserved.
    </p>
</nav>