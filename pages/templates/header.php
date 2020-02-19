<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
            <img src="assets/images/logo.svg" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="assets/images/logo-mini.svg" alt="logo" /> </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="assets/img/<?= $datarow['foto_admin'] ?>" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <a class="example-image-link" href="assets/img/<?= $datarow['foto_admin'] ?>" data-lightbox="<?= $datarow['nama_admin'] ?>" data-title="<?= strip_tags($datarow['nama_admin']) ?>">
                            <img class="thumb-image col" src="assets/img/<?= $datarow['foto_admin'] ?>" alt="<?= $datarow['nama_admin'] ?>" />
                        </a>
                        <p class="mb-1 mt-3 font-weight-semibold"><?= $datarow['nama_admin'] ?></p>
                        <p class="font-weight-light text-muted mb-0"><?= $datarow['email_admin'] ?></p>
                    </div>
                    <button class="dropdown-item" data-toggle="modal" data-target="#profile">Edit Profile<i class="dropdown-item-icon ti-dashboard"></i></button>
                    <a href="index.php?logout" class="dropdown-item">Logout<i class="dropdown-item-icon ti-power-off"></i></a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>