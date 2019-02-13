<nav id="sidebar">
    <div class="sidebar-header">
        <img src="<?= base_url('assets/img/icon.png') ?>" alt="" width="50"><span class="title"><?= APP_NAME ?></span>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-money-check"></i> Transaksi</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="transaksi/pemasukan">> Pemasukan</a>
                </li>
                <li>
                    <a href="transaksi/pengeluaran">> Pengeluaran</a>
                </li>
                <li>
                    <a href="transaksi/tagihan">> Tagihan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-balance-scale"></i> Laporan</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">> Tagihan</a>
                    <a href="#">> Pemakaian Uang</a>
                </li>
            </ul>
        </li>
    </ul>
    <p style="font-size:0.8em; padding:10px;">
        Copyright &copy; 2019 Naufal Rivaldi. All Rights Reserved.
    </p>
</nav>