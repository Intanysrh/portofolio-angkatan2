<?php
include 'admin/config/koneksi.php';
include 'evans/header.php';

if (isset($_POST['save'])) {
    $your_name = $_POST['your_name'];
    $your_email = $_POST['your_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // $created_at = $_POST['created_at'];
    // $updated_at = $_POST['updated_at'];
    $query = mysqli_query($config, "INSERT INTO contact (your_name, your_email, subject, message) VALUES ('$your_name', '$your_email', '$subject', '$message')");
}



?>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">Contact Us</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>Pegangsaan, Menteng, Jakarta Pusat</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">intan@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">yoursite.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container-fluid px-0">
            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-light p-5 contact-form" method="post">
                        <div class="form-group">
                            <label for="" class="form-label">Your Name</label>
                            <input name="your_name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Your Email</label>
                            <input name="your_email" type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Subject</label>
                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Message</label>
                            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="save" type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div>
            </div>
        </div>
    </section>

<?php include 'evans/footer.php'; ?>