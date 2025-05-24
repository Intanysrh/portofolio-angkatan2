<?php
session_start();
ob_start();
$_name = isset($_SESSION['NAME']) ? $_SESSION['NAME'] : '';
// if(isset($_SESSION['NAME'])){$_name = $_SESSIOM['name']};

if (!$_name) {
    header("location:index.php?access=failed");
}

include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Portofolio Intan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <?php include 'inc/header.php'; ?>
    </div>
    <div class="content mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <?php echo isset($_GET['page']) ? str_replace("-", " ", ucfirst($_GET['page'])) : 'Home' ?>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_GET['page'])) {
                                if (file_exists("content/" . $_GET['page'] . ".php")) {
                                    include("content/" . $_GET['page'] . ".php");
                                } else {
                                    include "content/notfound.php";
                                }
                            } else {
                                include "content/home.php";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $_SESSION['level']; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>