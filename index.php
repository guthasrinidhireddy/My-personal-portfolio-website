<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

  <header>
    <div class="container">
      <h1 class="logo">Srinidhi Gutha</h1>
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#experience-certifications">Experience & Certifications</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero" id="home">
    <div class="hero-content">
      <h2>Hi, I'm Srinidhi 👋</h2>
      <p>B.Tech CSE student | Exploring development & security</p>
      <p>📄 Checkout my Resume. 
      <a href="SRINIDHI REDDY RESUME.pdf" target="_blank">Click here</a></p>
      <a href="#about" class="btn">Know More About Me</a>
    </div>
  </section>
  <section id="about">
  <div class="about-container">
    <div class="about-left">
      <h2>About Me</h2>
      <p>I'm Srinidhi, a Computer Science student with a keen interest in cybersecurity, web development, and building efficient solutions.</p>
      <p>I enjoy solving real-world problems through technology and love exploring creative ideas that make a meaningful impact.</p>
    </div>
    <div class="about-right">
      <img src="srinidhireddy.jpg" alt="Srinidhi Gutha" class="about-img">
    </div>
  </div>
</section>
<section id="projects">
  <h2 class="projects-heading">Projects</h2>
  <div class="project-container">
    <div class="project-card">
      <h3>Personal Portfolio Website</h3>
      <p>A modern responsive portfolio built with HTML, CSS, and JavaScript showcasing my profile and work.</p>
    </div>

    <div class="project-card">
      <h3>Event Safety AI – Drishti</h3>
      <p>A hackathon project using AI for real-time event surveillance, people tracking, and emergency response.</p>
    </div>

    <div class="project-card">
      <h3>Secure Code Review</h3>
      <p>Performed static analysis on Python scripts to identify and fix security flaws as part of an internship task.</p>
    </div>
  </div>
</section>
<section id="experience-certifications">
  <h2><i class="fas fa-briefcase"></i> Experience & Certifications</h2>
  <div class="exp-cert-container">
    
    <!-- Experience -->
    <div class="experience">
      <h3><i class="fas fa-laptop-code"></i> Internships / Experience</h3>
      <ul>
        <li>
          <strong>Cybersecurity Intern</strong> – CodeAlpha (July 2025)<br>
          <span>Reviewed Python code for security flaws and documented issues.</span>
        </li>
        <li>
          <strong>Web Dev Intern</strong> – XYZ Web Agency (Jan 2025)<br>
          <span>Created responsive websites using React.js and Node.js.</span>
        </li>
      </ul>
    </div>

    <!-- Certifications -->
    <div class="certifications">
      <h3><i class="fas fa-certificate"></i> Certifications</h3>
      <ul>
        <li>
          <strong>Google Cybersecurity Certificate</strong><br>
          <span>Completed 6 modules including risk management and network security.</span>
        </li>
        <li>
          <strong>Simplilearn: Cloud Security</strong><br>
          <span>Hands-on AWS security, IAM, and compliance modules.</span>
        </li>
      </ul>
    </div>
  </div>
</section>
<section id="skills" class="skills-section">
  <h2 class="skills-heading">Skills</h2>
  <div class="project-container">
    <div class="project-card">HTML</div>
    <div class="project-card">CSS</div>
    <div class="project-card">MySQL</div>
    <div class="project-card">Python</div>
    <div class="project-card">C Programming</div>
    <div class="project-card">Cybersecurity</div>
    <div class="project-card">Linux Commands</div>
  </div>
</section>
<section id="contact">
  <h2><i class="fas fa-envelope"></i> Contact Me</h2>
  <div class="contact-container">
    <div class="contact-info">
      <p><i class="fas fa-user"></i> Srinidhi Reddy</p>
      <p><i class="fas fa-envelope-open-text"></i>guthasrinidhi990@gmail.com</p>
      <p><i class="fas fa-phone"></i> +91 9059011701</p>
      <p><i class="fas fa-map-marker-alt"></i> Nalgonda, India</p>
    </div>
    <form class="contact-form">
      <input type="text" placeholder="Your Name" required />
      <input type="email" placeholder="Your Email" required />
      <textarea placeholder="Your Message" rows="5" required></textarea>
      <button type="submit"><i class="fas fa-paper-plane"></i> Send</button>
    </form>
  </div>
</section>







</body>
</html>