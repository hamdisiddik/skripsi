<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?= $_SESSION['auth']['nama_admin'] ?></p>
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
                <span class="menu-title">Kelola User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#produk" aria-expanded="false" aria-controls="produk">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Kelola Produk</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="produk">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?produk">Daftar produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?furniture">Daftar Furniture</a>
                    </li>
                </ul>
            </div>
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
                        <a class="nav-link" href="">Transaksi Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Transaksi Verivikasi</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>