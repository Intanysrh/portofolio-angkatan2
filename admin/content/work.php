<?php
include 'config/koneksi.php';

if (isset($_POST['simpan'])) {
    $highlight = $_POST['highlight'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    // Save photo
    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $fileName = uniqid() . "_" . basename($photo);
    $filePath = "admin/uploads/" . $fileName;

$queryWork = mysqli_query($config, "SELECT * FROM work ORDER BY id DESC");
    if (mysqli_num_rows($queryWork) > 0) {
        $rowWork = mysqli_fetch_assoc($queryWork);
        $id = $rowWork['id'];
 if (!empty($photo)) {
            unlink("<admin>uploads/" . $rowWork['photo']);
            if (move_uploaded_file($tmp_name, $filePath)) {
                $update = mysqli_query($config, "UPDATE work SET highlight='$highlight', title='$title', description='$description', photo='$fileName' WHERE id='$id'");
            } else {
                echo "Gagal mengupload foto.";
            }
        } else {
            $update = mysqli_query($config, "UPDATE work SET highlight='$highlight', title='$title', description='$description' WHERE id='$id'");
        }
        header("Location:?page=manage-work&ubah=berhasil");
        exit; 
    } else {
        if (!empty($photo)) {
            if (move_uploaded_file($tmp_name, $filePath)) {
                $insertQ = mysqli_query($config, "INSERT INTO work (highlight, title, description, photo) VALUES ('$highlight', '$title', '$description', '$fileName')");
            } else {
                echo "Gagal mengupload foto.";
            }
        } else {
            $insertQ = mysqli_query($config, "INSERT INTO work (highlight, title, description) VALUES ('$highlight', '$title', '$description')");
        }
        header("Location:?page=manage-work&tambah=berhasil");
        exit; 
    }
}
$selectWork = mysqli_query($config, "SELECT * FROM work");
        
?>
<div class="container">
    <h2 class="mt-4">Manage Work</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="highlight" class="form-label">Highlight</label>
            <input type="text" class="form-control" name="highlight" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" required>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>

    <!-- <h2 class="mt-4">Portfolio Items</h2>
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($selectWork)): ?>
            <div class="col-md-6 portfolio-wrap">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="img" style="background-image: url('uploads/<?php echo $row['photo']; ?>');"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="text">
                            <div class="px-0 pt-5">
                                <div class="desc">
                                    <div class="top top-relative">
                                        <span class="subheading"><?php echo $row['highlight']; ?></span>
                                        <h2 class="mb-4"><a href="single.html"><?php echo $row['title']; ?></a></h2>
                                    </div>
                                    <div class="absolute relative">
                                        <p><?php echo $row['description']; ?></p>
                                        <p><a href="single.html" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div> -->
</div>
</body>
