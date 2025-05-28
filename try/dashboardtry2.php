<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Intan - Portofolio Backend</title>
&nbsp;
&nbsp;

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
&nbsp;
&nbsp;

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
&nbsp;
&nbsp;

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet" />
&nbsp;
&nbsp;

    <style>
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f5ff;
      }
      /* Sidebar */
      #sidebarMenu {
        min-height: 100vh;
        background: #d8c7f9; /* pastel lilac */
      }
      nav .nav-link.active {
        background-color: #a796d9 !important;
        color: white !important;
        font-weight: 700;
      }
      header {
        background: #d8c7f9;
        color: #4a3f6a;
        font-weight: 700;
      }
      .section-title {
        color: #6a4c93;
        font-weight: 700;
        margin-bottom: 1rem;
      }
    </style>
</head>
<body>
&nbsp;
&nbsp;

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse py-4">
      <div class="position-sticky">
        <h3 class="px-3 mb-4">Intan Dashboard</h3>
        <ul class="nav flex-column px-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#dashboard-section">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio-section">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#blog-section">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#messages-section">Pesan</a>
          </li>
        </ul>
        <div class="px-3 mt-4">
          <button class="btn btn-danger w-100" id="btnLogout">Logout</button>
        </div>
      </div>
    </nav>
&nbsp;
&nbsp;

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
      <header id="dashboard-section" class="d-flex justify-content-between align-items-center pb-2 mb-4 border-bottom">
        <h1 class="h2">Dashboard Utama</h1>
        <div id="currentDate" aria-live="polite" class="text-muted"></div>
      </header>
&nbsp;
&nbsp;

      <!-- Summary cards -->
      <section class="mb-5">
        <h2 class="section-title">Ringkasan</h2>
        <div class="row g-3 text-center">
          <div class="col-md-2 col-6">
            <div class="card shadow-sm p-3 bg-white rounded">
              <h5>Event & Campaign</h5>
              <p class="display-6 fw-bold mb-0">12</p>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="card shadow-sm p-3 bg-white rounded">
              <h5>Digital Marketing</h5>
              <p class="display-6 fw-bold mb-0">8</p>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="card shadow-sm p-3 bg-white rounded">
              <h5>Data & Research</h5>
              <p class="display-6 fw-bold mb-0">15</p>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="card shadow-sm p-3 bg-white rounded">
              <h5>Blog Posts</h5>
              <p class="display-6 fw-bold mb-0">10</p>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="card shadow-sm p-3 bg-white rounded">
              <h5>Messages</h5>
              <p class="display-6 fw-bold mb-0">4</p>
            </div>
          </div>
        </div>
      </section>
&nbsp;
&nbsp;

      <!-- Portfolio Table -->
      <section id="portfolio-section" class="mb-5">
        <h2 class="section-title">Manajemen Portofolio</h2>
        <table id="tablePortfolio" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Status</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Acara Charity 2023</td>
              <td>Event & Campaign</td>
              <td>Selesai</td>
              <td>15 Feb 2023</td>
              <td><button class="btn btn-sm btn-primary edit-portfolio">Edit</button></td>
            </tr>
            <tr>
              <td>Kampanye Digital 'Go Green'</td>
              <td>Digital Marketing</td>
              <td>Berjalan</td>
              <td>10 Mar 2024</td>
              <td><button class="btn btn-sm btn-primary edit-portfolio">Edit</button></td>
            </tr>
            <tr>
              <td>Riset Tren Konsumen</td>
              <td>Data & Research</td>
              <td>Dalam Review</td>
              <td>28 Jan 2024</td>
              <td><button class="btn btn-sm btn-primary edit-portfolio">Edit</button></td>
            </tr>
          </tbody>
        </table>
      </section>
&nbsp;
&nbsp;

      <!-- Blog Table -->
      <section id="blog-section" class="mb-5">
        <h2 class="section-title">Manajemen Blog</h2>
        <button id="btnNewPost" class="btn btn-success mb-3">Buat Tulisan Baru</button>
        <table id="tableBlog" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Tanggal Terbit</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Isu Perempuan dalam Pemasaran</td>
              <td>Perempuan</td>
              <td>10 Mar 2024</td>
              <td>Dipublikasikan</td>
              <td><button class="btn btn-sm btn-primary edit-blog">Edit</button></td>
            </tr>
            <tr>
              <td>AI dan Masa Depan Pemasaran</td>
              <td>AI</td>
              <td>1 Feb 2024</td>
              <td>Dipublikasikan</td>
              <td><button class="btn btn-sm btn-primary edit-blog">Edit</button></td>
            </tr>
          </tbody>
        </table>
      </section>
&nbsp;
&nbsp;

      <!-- Messages Table -->
      <section id="messages-section" class="mb-5">
        <h2 class="section-title">Pesan Masuk</h2>
        <table id="tableMessages" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Pesan</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Rina</td>
              <td>rina@example.com</td>
              <td>Apakah tersedia jasa konsultasi marketing?</td>
              <td>5 Apr 2024</td>
            </tr>
            <tr>
              <td>David</td>
              <td>david@example.com</td>
              <td>Saya tertarik dengan penelitian data Anda.</td>
              <td>2 Apr 2024</td>
            </tr>
            <tr>
              <td>Nina</td>
              <td>nina@example.com</td>
              <td>Terima kasih atas tulisannya yang inspiratif.</td>
              <td>1 Apr 2024</td>
            </tr>
          </tbody>
        </table>
      </section>
&nbsp;
&nbsp;

      <!-- Modal for New/Edit Blog Post -->
      <div class="modal fade" id="editorModal" tabindex="-1" aria-labelledby="editorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <form id="blogForm">
              <div class="modal-header">
                <h5 class="modal-title" id="editorModalLabel">Buat / Edit Postingan Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="postTitle" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="postTitle" required />
                </div>
                <div class="mb-3">
                  <label for="postCategory" class="form-label">Kategori</label>
                  <select id="postCategory" class="form-select" required>
                    <option value="">Pilih kategori</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="AI">AI</option>
                    <option value="Ekonomi">Ekonomi</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="postContent" class="form-label">Isi</label>
                  <textarea id="postContent"></textarea>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="publishCheck" />
                  <label class="form-check-label" for="publishCheck">Publikasikan sekarang</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              </div>
            </form>
          </div>
        </div>
      </div>
&nbsp;
&nbsp;

    </main>
  </div>
</div>
&nbsp;
&nbsp;

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
&nbsp;
&nbsp;

<!-- Bootstrap Bundle JS (Popper + Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
&nbsp;
&nbsp;

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
&nbsp;
&nbsp;

<!-- Summernote JS -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
&nbsp;
&nbsp;

<script>
  $(document).ready(function() {
    // Initialize DataTables
    $('#tablePortfolio').DataTable({
      paging: true,
      searching: true,
      info: false,
      lengthChange: false
    });
    $('#tableBlog').DataTable({
      paging: true,
      searching: true,
      info: false,
      lengthChange: false
    });
    $('#tableMessages').DataTable({
      paging: true,
      searching: false,
      info: false,
      lengthChange: false
    });
&nbsp;
&nbsp;

    // Initialize Summernote
    $('#postContent').summernote({
      placeholder: 'Tulis konten blog Anda di sini...',
      tabsize: 2,
      height: 200
    });
&nbsp;
&nbsp;

    // Navigation smooth scrolling & active link toggle
    const sidebarLinks = document.querySelectorAll('#sidebarMenu .nav-link');
    sidebarLinks.forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        sidebarLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
        const targetID = link.getAttribute('href').substring(1);
        document.getElementById(targetID).scrollIntoView({behavior: 'smooth'});
      });
    });
&nbsp;
&nbsp;

    // Show current date
    const currentDateElem = document.getElementById('currentDate');
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    currentDateElem.textContent = new Date().toLocaleDateString('id-ID', options);
&nbsp;
&nbsp;

    // Logout button demo functionality
    $('#btnLogout').click(function() {
      alert('Logout sukses (demo)');
    });
&nbsp;
&nbsp;

    // Modal control for creating new blog post
    $('#btnNewPost').click(function() {
      $('#blogForm')[0].reset();
      $('#postContent').summernote('reset');
      $('#publishCheck').prop('checked', false);
      $('#editorModalLabel').text('Buat Postingan Blog Baru');
      const editorModal = new bootstrap.Modal(document.getElementById('editorModal'));
      editorModal.show();
    });
&nbsp;
&nbsp;

    // Edit blog post (dummy)
    $('.edit-blog').click(function() {
      $('#editorModalLabel').text('Edit Postingan Blog');
      // Example demo data fill (could be dynamic)
      $('#postTitle').val('Sample Edited Title');
      $('#postCategory').val('AI');
      $('#postContent').summernote('code', '<p>Isi konten yang di-edit...</p>');
      $('#publishCheck').prop('checked', true);
      const editorModal = new bootstrap.Modal(document.getElementById('editorModal'));
      editorModal.show();
    });
&nbsp;
&nbsp;

    // Handle blog form submit (demo)
    $('#blogForm').submit(function(e) {
      e.preventDefault();
      alert('Postingan blog disimpan (demo).');
      const editorModalEl = document.getElementById('editorModal');
      const modalInstance = bootstrap.Modal.getInstance(editorModalEl);
      modalInstance.hide();
    });
  });
</script>
&nbsp;
&nbsp;

</body>
</html>
&nbsp;
&nbsp;
