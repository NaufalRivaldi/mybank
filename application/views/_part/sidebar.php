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
                    <a href="#">> Pemasukan</a>
                </li>
                <li>
                    <a href="#">> Pengeluaran</a>
                </li>
                <li>
                    <a href="#">> Tagihan</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fab fa-readme"></i> Laporan</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>
</nav>