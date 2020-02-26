<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-xl-12">
            <div class="section_title text-center">
                <h3>DAFAR PRODUK BARU KAMI</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $query = mysqli_query($koneksi, "SELECT * FROM `tbl_produk` ORDER BY id_produk DESC LIMIT 3") ?>
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <a class="example-image-link" href="admin/assets/img/<?= $row['foto_produk'] ?>" data-lightbox="<?= $row['nama_produk'] ?>" data-title="<?= strip_tags($row['deskripsi_produk']) ?>"><img style="width: 286px; height: 282px" src="admin/assets/img/<?= $row['foto_produk'] ?>" alt="<?= $row['nama_produk'] ?>" /></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nama_produk'] ?></h5>
                        <p class="card-text">
                            <strong>Deskripsi Produk</strong>
                            <?= $row['deskripsi_produk'] ?>
                        </p>
                        <p>Harga: <strong>Rp. <?= number_format($row['harga_produk']) ?></strong></p>
                        <a href="index.php?pesan-produk&id=<?= $row['id_produk'] ?>&harga=<?= $row['harga_produk'] ?>" class="btn btn-primary">Pesan</a>
                        <a href="index.php?detail-produk&id=<?= $row['id_produk'] ?>" class="btn btn-info">Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- instagram_area end  -->

<!-- works_area-start  -->
<div class="container mt-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title mb-70 text-center">
                <h3>Pekerjaan Kita</h3>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-80">
        <div class="col-lg-7 col-md-6">
            <div class="thumb">
                <img src="assets/img/works/1.png" alt="">
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="work_info pl-68">
                <h3>Ruang Tamu Balok Putih</h3>
                <p>Balok bangunan merupakan struktur melintang yang menopang beban horizontal. Balok dalam bangunan sangat penting untuk menjaga stabilitas terhadap gaya kesamping,Balok sederhana bertumpu pada kolom diujung-ujungnya, dengan satu ujung bebas berotasi dan tidak memiliki momen tahan. Seperti struktur statis lainnya, nilai dari semua reaksi,pergeseran dan momen untuk balok sederhana adalah tidak tergantung bentuk penampang dan materialnya ukuran ruang tamu ini 3meter x 3meter 3x3</p>
                <a href="project_details.html" class="boxed-btn3-line">Details</a>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-80">
        <div class="col-lg-5 col-md-6">
            <div class="work_info">
                <h3>Art Gallery Design</h3>
                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                <a href="project_details.html" class="boxed-btn3-line">Details</a>
            </div>
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="thumb">
                <img src="assets/img/works/2.png" alt="">
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-80">
        <div class="col-lg-7 col-md-6">
            <div class="thumb">
                <img src="assets/img/works/3.png" alt="">
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="work_info pl-68">
                <h3>Art Gallery Design</h3>
                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                <a href="project_details.html" class="boxed-btn3-line">Details</a>
            </div>
        </div>
    </div>
    <div class="row align-items-center mb-80">
        <div class="col-lg-5 col-md-6">
            <div class="work_info">
                <h3>Office Space</h3>
                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet </p>
                <a href="project_details.html" class="boxed-btn3-line">Details</a>
            </div>
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="thumb">
                <img src="assets/img/works/4.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!--/ works_area-end  -->

<!-- creative_mind_area start  -->
<div class="creative_mind_area">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-xl-6 col-md-12 col-lg-6">
                <div class="creativ_thumb">
                    <img src="assets/img/creative_mind/1.png" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-md-12 col-lg-5">
                <div class="creative_info">
                    <div class="section_title">
                        <h3>Professional and <br>
                            creative mind</h3>
                        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, <br> nec sagittis sem nibh id elit duis sed odio sit amet.</p>
                    </div>
                    <div class="progressBars">
                        <div class="single_bar">
                            <h4>Architecture</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>60%</span></div>
                            </div>
                        </div>
                        <div class="single_bar">
                            <h4>3D Design</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>65%</span></div>
                            </div>
                        </div>
                        <div class="single_bar">
                            <h4>Interior</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>80%</span></div>
                            </div>
                        </div>
                    </div>

                    <a href="about.html" class="boxed-btn3-line">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- creative_mind_area end  -->