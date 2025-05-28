<?php
include 'admin/config/koneksi.php';
include 'evans/header.php';

// query profiles
$queryProfile = mysqli_query($config, "SELECT * FROM profiles ORDER BY id DESC");
$rowProfile = mysqli_fetch_assoc($queryProfile);
?>

 <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-3 bread">About Us</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<section class="ftco-section ftco-intro">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-4 d-flex">
                <div class="img">
                    <?php if (isset($rowProfile['photo']) && !empty($rowProfile['photo'])): ?>
                        <img src="admin/uploads/<?php echo ($rowProfile['photo']); ?>" alt="Profile Photo" class="img-fluid">
                    <?php else: ?>
                        <p>Tidak ada foto yang tersedia.</p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-8 py-md-5 pt-4 p-md-5">
                <h1><?php echo isset($rowProfile['profile_name']) ? $rowProfile['profile_name'] : '' ?></h1>
                <h2><?php echo isset($rowProfile['profesion']) ? $rowProfile['profesion'] : '' ?></h2>
                <p><?php echo isset($rowProfile['description']) ? $rowProfile['description'] : '' ?></p>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row no-gutters d-flex">
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
                <div class="icon"><span class="flaticon-layers"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Web Design</h3>
                    <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active d-block">
                <div class="icon"><span class="flaticon-web-programming"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Web Development</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
                <div class="icon"><span class="flaticon-idea"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Graphic Design</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active-2 d-block">
                <div class="icon"><span class="flaticon-contract"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Writing</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="testimony-section">
    <div class="container">
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-5 d-flex">
                <div class="testimony-img" style="background-image: url(images/bg_2.jpg);"></div>
            </div>
            <div class="col-md-7 py-5 pl-md-5">
                <div class="heading-section heading-section-white pt-4 ftco-animate">
                    <h2 class="mb-0">Customer Says</h2>
                </div>
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jeff Nucci</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jeff Nucci</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jeff Nucci</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jeff Nucci</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap pb-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                            <div class="d-flex">
                                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="pos ml-3">
                                    <p class="name">Jeff Nucci</p>
                                    <span class="position">Businessman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-intro bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h2 class="mb-0 font-primary">We've done work of <span class="number" data-number="300">0</span> Portfolio</h2>
            </div>
        </div>
    </div>
</section>

<?php include 'evans/footer.php'; ?>