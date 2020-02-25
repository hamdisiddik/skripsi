<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="index.php" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="assets/img/<?= $datarow['foto_admin'] ?>" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?= $datarow['nama_admin'] ?></p>
                    <p class="designation">Admin</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?kelolapelanggan">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Kelola Pelanggan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?produk">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Kelola Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#transaksi" aria-expanded="false" aria-controls="transaksi">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Transaksi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="transaksi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?transaksi_pending">Transaksi Pending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?transaksi_pembayaran">Transaksi Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?transaksi_verifikasi">Transaksi Verivikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?produk_diterima">Produk Diterima</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>