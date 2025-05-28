<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gen Z Portfolio - Economics Grad & Writer</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');
    /* Reset and base */
    * {
      box-sizing: border-box;
      margin: 0; 
      padding: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background: #1a1a2e;
      color: #eaeaea;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }
    a {
      color: #ff5c57;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    a:hover {
      color: #ff8a80;
    }
    img {
      max-width: 100%;
      border-radius: 12px;
      display: block;
    }
    /* Header */
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background: rgba(26,26,46,0.95);
      backdrop-filter: saturate(180%) blur(10px);
      z-index: 1000;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 3vw;
      box-shadow: 0 2px 10px rgba(255,92,87,0.3);
      transition: background 0.3s;
    }
    header .logo {
      font-weight: 700;
      font-size: 1.6rem;
      letter-spacing: 0.1em;
      color: #ff5c57;
      user-select: none;
      cursor: default;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 24px;
    }
    nav ul li {
      font-weight: 600;
      font-size: 1rem;
    }
    nav ul li a {
      padding: 6px 12px;
      border-radius: 6px;
      display: inline-block;
    }
    nav ul li a:hover,
    nav ul li a.active {
      background-color: #ff5c57;
      color: #1a1a2e;
      font-weight: 700;
    }
    /* Hero with parallax background */
    .hero {
      position: relative;
      height: 90vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      overflow: hidden;
      user-select: none;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: -30%;
      left: 0; right: 0; bottom: 0;
      background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1471&q=80');
      background-attachment: fixed;
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
      filter: brightness(0.45);
      z-index: -1;
      transform: translateZ(0);
    }
    .hero-content {
      max-width: 900px;
      padding: 0 2rem;
      animation: fadeUp 1.2s ease forwards;
      opacity: 0;
      transform: translateY(40px);
    }
    @keyframes fadeUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 0.6rem;
      text-shadow: 2px 2px 8px #ff5c57aa;
    }
    .hero-content p {
      font-size: 1.3rem;
      margin-bottom: 2rem;
      font-weight: 400;
      color: #ffcbc1;
      text-shadow: 1px 1px 6px #0005;
    }
    .btn-primary {
      font-weight: 700;
      font-size: 1.2rem;
      padding: 14px 36px;
      border: none;
      border-radius: 40px;
      background: #ff5c57;
      color: #1a1a2e;
      cursor: pointer;
      box-shadow: 0 6px 15px #ff5c5780;
      transition: background 0.3s;
    }
    .btn-primary:hover, .btn-primary:focus {
      background: #ff8a80;
      box-shadow: 0 8px 20px #ff8a8080;
      outline: none;
    }
&nbsp;
&nbsp;

    /* Section base */
    section {
      padding: 7rem 2.5rem 6rem;
      max-width: 1000px;
      margin: 0 auto;
    }
    section h2 {
      font-size: 2.6rem;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #ff5c57;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
    }
    section p.lead {
      text-align: center;
      font-size: 1.1rem;
      color: #ccc;
      max-width: 700px;
      margin: 0 auto 3rem auto;
    }
&nbsp;
&nbsp;

    /* About */
    #about {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      align-items: center;
      justify-content: center;
      color: #eee;
      user-select: text;
    }
    #about img {
      width: 280px;
      height: 280px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 0 30px #ff5c5770;
      transition: transform 0.3s ease;
      cursor: default;
    }
    #about img:hover,
    #about img:focus {
      transform: scale(1.05);
      box-shadow: 0 0 40px #ff5c57cc;
      outline: none;
    }
    #about .text {
      max-width: 520px;
      font-size: 1.1rem;
      line-height: 1.6;
      color: #ddd;
    }
&nbsp;
&nbsp;

    /* Portfolio */
    #portfolio {
      background: linear-gradient(120deg, #1a1a2e, #16213e);
      border-radius: 16px;
      box-shadow: 0 20px 40px #ff5c5740 inset;
    }
    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit,minmax(260px,1fr));
      gap: 1.5rem;
    }
    .portfolio-item {
      background: #222244cc;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 15px #ff5c5720;
      color: #eee;
      cursor: pointer;
      position: relative;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
    }
    .portfolio-item:hover,
    .portfolio-item:focus-within {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px #ff5c5780;
      outline: none;
    }
    .portfolio-item img {
      object-fit: cover;
      width: 100%;
      aspect-ratio: 4 / 3;
    }
    .portfolio-details {
      padding: 1rem 1.2rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .portfolio-title {
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 0.4rem;
      color: #ff8a80;
    }
    .portfolio-desc {
      font-size: 0.9rem;
      color: #ccc;
      flex-grow: 1;
    }
&nbsp;
&nbsp;

    /* Blog teaser */
    #blog {
      text-align: center;
      background: #111229;
      border-radius: 16px;
      box-shadow: 0 0 20px #ff5c5740 inset;
      color: #eee;
    }
    #blog a.btn-secondary {
      display: inline-block;
      margin-top: 1rem;
      background: transparent;
      border: 2px solid #ff5c57;
      color: #ff5c57;
      padding: 12px 34px;
      border-radius: 40px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s, color 0.3s;
      text-decoration: none;
    }
    #blog a.btn-secondary:hover,
    #blog a.btn-secondary:focus {
      background: #ff5c57;
      color: #1a1a2e;
      outline: none;
    }
&nbsp;
&nbsp;

    /* Contact */
    #contact {
      background: #111229;
      border-radius: 16px;
      box-shadow: 0 0 20px #ff5c5740 inset;
      padding-bottom: 4rem;
    }
    #contact form {
      max-width: 500px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    #contact label {
      font-size: 1rem;
      color: #ff8a80;
      font-weight: 600;
      margin-bottom: 0.25rem;
      user-select: none;
    }
    #contact input,
    #contact textarea {
      padding: 0.8rem 1rem;
      border-radius: 10px;
      border: 2px solid #444466;
      background: #222244cc;
      color: #eee;
      font-size: 1rem;
      font-family: 'Poppins', sans-serif;
      resize: vertical;
      transition: border-color 0.3s ease;
    }
    #contact input:focus,
    #contact textarea:focus {
      border-color: #ff5c57;
      outline: none;
      background: #2f2f5c;
    }
    #contact button {
      background: #ff5c57;
      border: none;
      color: #1a1a2e;
      font-weight: 700;
      font-size: 1.2rem;
      padding: 12px 0;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 0 6px 15px #ff5c5780;
      transition: background-color 0.3s ease;
    }
    #contact button:hover,
    #contact button:focus {
      background: #ff8a80;
      box-shadow: 0 8px 20px #ff8a8080;
      outline: none;
    }
&nbsp;
&nbsp;

    /* Footer */
    footer {
      text-align: center;
      padding: 1rem;
      font-size: 0.9rem;
      color: #777;
      user-select: none;
      margin-top: 2rem;
    }
&nbsp;
&nbsp;

    /* Responsive */
    @media (max-width: 768px) {
      header {
        padding: 1rem 2vw;
      }
      nav ul {
        gap: 14px;
      }
      .hero-content h1 {
        font-size: 2.2rem;
      }
      .hero-content p {
        font-size: 1rem;
      }
      #about {
        flex-direction: column;
      }
      #about img {
        width: 180px;
        height: 180px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo" aria-label="Website Logo">ECON WRITER</div>
    <nav>
      <ul>
        <li><a href="#about" class="nav-link active">About</a></li>
        <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
        <li><a href="#blog" class="nav-link">Blog</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
  </header>
&nbsp;
&nbsp;

  <section class="hero" aria-label="Hero Section">
    <div class="hero-content" tabindex="0">
      <h1>Hi, I'm a Writer & Future Web Dev</h1>
      <p>I write on pop culture, social issues, economy & politics — exploring ideas & crafting stories with a digital twist.</p>
      <button class="btn-primary" aria-label="View Portfolio" onclick="document.getElementById('portfolio').scrollIntoView({behavior:'smooth'})">View Portfolio</button>
    </div>
  </section>
&nbsp;
&nbsp;

  <section id="about" aria-label="About Me Section">
    <h2>About Me</h2>
    <div>
      <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=300&q=80" alt="Picture of Portfolio Owner" tabindex="0" />
      <div class="text" tabindex="0">
        <p>Graduated in Economics, I weave words about pop culture, social dynamics, economy, and politics. Currently diving into web programming to blend creativity with technology for inspiring digital storytelling.</p>
      </div>
    </div>
  </section>
&nbsp;
&nbsp;

  <section id="portfolio" aria-label="Portfolio Section">
    <h2>Portfolio</h2>
    <div class="portfolio-grid" role="list">
      <article class="portfolio-item" tabindex="0" role="listitem" aria-label="Pop Culture Articles">
        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=600&q=80" alt="Pop Culture" />
        <div class="portfolio-details">
          <h3 class="portfolio-title">Pop Culture Articles</h3>
          <p class="portfolio-desc">Opinion pieces and explorations on latest trends and cultural phenomena.</p>
        </div>
      </article>
      <article class="portfolio-item" tabindex="0" role="listitem" aria-label="Social Issues Essays">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Social Issues" />
        <div class="portfolio-details">
          <h3 class="portfolio-title">Social Issues Essays</h3>
          <p class="portfolio-desc">Thought-provoking writings analyzing societal challenges and changes.</p>
        </div>
      </article>
      <article class="portfolio-item" tabindex="0" role="listitem" aria-label="Economic Analysis">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Economic Analysis" />
        <div class="portfolio-details">
          <h3 class="portfolio-title">Economic Analysis</h3>
          <p class="portfolio-desc">Deep dives into economic trends, policies, and their impacts.</p>
        </div>
      </article>
      <article class="portfolio-item" tabindex="0" role="listitem" aria-label="Web Projects">
        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80" alt="Web Projects" />
        <div class="portfolio-details">
          <h3 class="portfolio-title">Web Projects</h3>
          <p class="portfolio-desc">My journey into web programming — demos and personal projects.</p>
        </div>
      </article>
    </div>
  </section>
&nbsp;
&nbsp;

  <section id="blog" aria-label="Blog Section">
    <h2>Latest Blog Posts</h2>
    <p class="lead">Check out my recent writings covering topics close to my heart and mind.</p>
    <a href="#" class="btn-secondary" aria-label="Go to blog">Read My Blog</a>
  </section>
&nbsp;
&nbsp;

  <section id="contact" aria-label="Contact Section">
    <h2>Contact Me</h2>
    <form aria-label="Contact form">
      <label for="name">Name</label>
      <input id="name" type="text" placeholder="Your name" required />
&nbsp;
&nbsp;

      <label for="email">Email</label>
      <input id="email" type="email" placeholder="your.email@example.com" required />
&nbsp;
&nbsp;

      <label for="message">Message</label>
      <textarea id="message" rows="4" placeholder="Write your message here..." required></textarea>
&nbsp;
&nbsp;

      <button type="submit">Send</button>
    </form>
  </section>
&nbsp;
&nbsp;

  <footer>
    <p>&copy; 2024 Gen Z Portfolio. Made with ♥ for the digital natives.</p>
  </footer>
&nbsp;
&nbsp;

  <script>
    // Highlight nav on scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav ul li a');
&nbsp;
&nbsp;

    function changeActiveLink() {
      let index = sections.length;
&nbsp;
&nbsp;

      while(--index && window.scrollY + 150 < sections[index].offsetTop) {}
&nbsp;
&nbsp;

      navLinks.forEach((link) => link.classList.remove('active'));
      navLinks[index].classList.add('active');
    }
    changeActiveLink();
    window.addEventListener('scroll', changeActiveLink);
&nbsp;
&nbsp;

    // Basic form submission handler (no backend)
    const form = document.querySelector('#contact form');
    form.addEventListener('submit', e => {
      e.preventDefault();
      alert('Thank you for reaching out! This is a demo contact form.');
      form.reset();
    });
  </script>
</body>
</html>
&nbsp;
&nbsp;
