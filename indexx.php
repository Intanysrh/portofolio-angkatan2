<?php
session_start();
ob_start();
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
include 'admin/config/koneksi.php';
include 'evans/header.php'; 
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
&nbsp;
&nbsp;

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
&nbsp;
&nbsp;

<section id="home-section" class="hero">
    <h1 class="vr text-center">INTAN!!!!</h1>
    <div class="js-fullheight home-wrap d-flex">
        <div class="half order-md-last"></div>
        <div class="half">
            <div class="home-slider owl-carousel">
                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                            <div class="one-third img js-fullheight" style="background-image:url(admin/grey.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container-fluid p-0">
                        <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                            <div class="one-third img js-fullheight" style="background-image:url(admin/lili.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
&nbsp;
&nbsp;

<section class="ftco-section ftco-intro">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-8 py-md-5 pt-4 p-md-5">
                <img src="" alt="Intan's Photo">
                <h2>Web <span>Designer</span>, hobbyist writer, and the CEO &amp; Founder of <span>Evans</span></h2>
                <p>the biggest ENTP energy</p>
                <p><a href="about.php" class="btn btn-primary">Get To Know Me</a></p>
            </div>
        </div>
    </div>
</section>
&nbsp;
&nbsp;

<section class="ftco-section ftco-portfolio">
    <div class="container-fluid">
        <div class="row justify-content-center pb-3">
            <div class="col-md-12 mb-5 heading-section text-center ftco-animate">
                <h2 class="mb-5">Latest &amp; <span>Greatest</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img js-fullheight" style="background-image: url(images/work-1.jpg);"></div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Web Design {12/06/2019}</span>
                                        <h2 class="mb-4"><a href="work.html">Midway</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
&nbsp;
&nbsp;

    <!-- Additional portfolio entries can be added here following the same structure -->
&nbsp;
&nbsp;

</section>
&nbsp;
&nbsp;

<div class="container">
    <section class="highlight-section" aria-label="Portofolio tulisan highlight">
        <h2 class="highlight-title">Portofolio Tulisan Saya</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="#" class="highlight-card" aria-label="Tulisan Pop Culture: Tren terbaru dalam pop culture dan dampaknya.">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Ilustrasi Pop Culture" class="highlight-image" />
                    <div class="highlight-content">
                        <span class="highlight-category">Pop Culture</span>
                        <h3 class="highlight-headline">Tren Terbaru dalam Pop Culture dan Dampaknya</h3>
                        <time class="highlight-meta" datetime="2023-08-21">21 Agustus 2023</time>
                    </div>
                </a>
            </div>
            <!-- Additional highlight items can be added here -->
        </div>
    </section>
</div>
&nbsp;
&nbsp;

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
&nbsp;
&nbsp;

        $('#table').DataTable();
    });
</script>
&nbsp;
&nbsp;

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
&nbsp;
&nbsp;

<?php include 'evans/footer.php'; ?>
</body>
</html>

