<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Intan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <style>
        /* Reset and base styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            scroll-behavior: smooth;
            transition: background-color 0.3s, color 0.3s;
        }
        a {
            color: #ff6f61;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #ff8a80;
        }
        header {
            background: #fff;
            padding: 20px 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }
        header h1 {
            font-size: 1.8rem;
            color: #ff6f61;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li {
            font-weight: 600;
        }
        nav ul li a {
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        nav ul li a:hover {
            background-color: #ff6f61;
            color: #fff;
        }
        .toggle-theme {
            cursor: pointer;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            background-color: #ff6f61;
            color: #fff;
            font-weight: bold;
        }
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(to bottom right, #e0c3fc, #8ec5fc);
            color: #fff;
            position: relative;
            padding: 0 2rem;
        }
        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-primary {
            background: #ff6f61;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: #ff8a80;
        }
        /* Section styles */
        section {
            padding: 80px 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
            color: #ff6f61;
        }
        /* About Me */
        #about {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        #about img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        /* Portfolio */
        #portfolio {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .portfolio-category {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .portfolio-item {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
            transition: transform 0.3s;
        }
        .portfolio-item:hover {
            transform: translateY(-5px);
        }
        /* Blog */
        #blog {
            text-align: center;
        }
        .blog-post {
            margin: 20px 0;
        }
        /* Contact */
        #contact {
            text-align: center;
        }
        #contact form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        #contact input, #contact textarea {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        #contact button {
            background: #ff6f61;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        #contact button:hover {
            background: #ff8a80;
        }
        /* Dark Mode */
        body.dark {
            background-color: #1a1a2e;
            color: #eaeaea;
        }
        body.dark header {
            background: #1a1a2e;
            color: #eaeaea;
        }
        body.dark .hero {
            background: linear-gradient(to bottom right, #1a1a2e, #16213e);
        }
        body.dark nav ul li a {
            color: #eaeaea;
        }
        body.dark .portfolio-item {
            background: #222;
            color: #eaeaea;
        }
        body.dark #contact input, body.dark #contact textarea {
            background: #333;
            color: #eaeaea;
            border: 1px solid #555;
        }
        /* Responsive */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Intan's Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Mini Essay & Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <button class="toggle-theme" onclick="toggleTheme()">🌙</button>
    </header>
&nbsp;
&nbsp;

    <section class="hero">
        <div>
            <h2>Selamat Datang di Portofolio Saya!</h2>
            <p>Marketing Enthusiast | Community Builder | Storyteller</p>
            <button class="btn-primary" onclick="document.getElementById('portfolio').scrollIntoView({behavior:'smooth'})">Lihat Portofolio</button>
        </div>
    </section>
&nbsp;
&nbsp;

    <section id="about">
        <h2>Tentang Saya</h2>
        <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=200&q=80" alt="Intan's Photo">
        <p>Saya adalah seorang marketing enthusiast yang berfokus pada pembangunan komunitas dan storytelling. Dengan latar belakang di bidang pemasaran, saya bersemangat untuk menciptakan dampak positif melalui proyek-proyek yang saya kerjakan.</p>
    </section>
&nbsp;
&nbsp;

    <section id="portfolio">
        <h2>Portofolio</h2>
        <div class="portfolio-category">
            <div class="portfolio-item">
                <h3>Event & Campaign</h3>
                <p>Pengalaman dalam merencanakan dan melaksanakan acara yang berdampak.</p>
            </div>
            <div class="portfolio-item">
                <h3>Digital Marketing</h3>
                <p>Strategi pemasaran digital yang efektif untuk meningkatkan brand awareness.</p>
            </div>
            <div class="portfolio-item">
                <h3>Data & Research</h3>
                <p>Analisis data untuk mendukung keputusan pemasaran yang lebih baik.</p>
            </div>
        </div>
    </section>
&nbsp;
&nbsp;

    <section id="blog">
        <h2>Mini Essay & Blog</h2>
        <div class="blog-post">
            <h3>Isu Perempuan dalam Pemasaran</h3>
            <p>Meneliti bagaimana perempuan berperan dalam industri pemasaran dan dampaknya.</p>
        </div>
        <div class="blog-post">
            <h3>AI dan Masa Depan Pemasaran</h3>
            <p>Bagaimana kecerdasan buatan mengubah cara kita berinteraksi dengan konsumen.</p>
        </div>
        <div class="blog-post">
            <h3>Ekonomi Kreatif di Era Digital</h3>
            <p>Peluang dan tantangan dalam ekonomi kreatif di dunia digital saat ini.</p>
        </div>
    </section>
&nbsp;
&nbsp;

    <section id="contact">
        <h2>Hubungi Saya</h2>
        <form>
            <input type="text" placeholder="Nama" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pesan" required></textarea>
            <button type="submit">Kirim</button>
        </form>
    </section>
&nbsp;
&nbsp;

    <footer>
        <p>&copy; 2024 Portofolio Intan. Semua hak dilindungi.</p>
    </footer>
&nbsp;
&nbsp;

    <script>
        function toggleTheme() {
            document.body.classList.toggle('dark');
        }
    </script>
</body>
</html>