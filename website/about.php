<?php
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Sabin Nayaju</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="about-container">
        <div class="about-content">
            <h1 class="section-main-title animate__animated animate__fadeIn">About Me</h1>
            <div class="profile-section">
                <div class="profile-image-wrapper" data-aos="fade-right">
                    <img src="images/profile.jpg" alt="Sabin Nayaju" class="profile-image">
                    <div class="profile-overlay"></div>
                </div>
                <div class="bio" data-aos="fade-left">
                    <h2 class="name-title">Sabin Nayaju</h2>
                    <p class="role-title">Full Stack Developer & UI/UX Designer</p>
                    <p class="bio-description">
                        <span class="highlight">Passionate developer</span> based in the beautiful landscapes of Nepal, 
                        crafting digital experiences that merge functionality with aesthetics. 
                        My journey in tech has been driven by an unwavering commitment to creating 
                        <span class="emphasis">intuitive and impactful</span> digital solutions that make a difference.
                    </p>
                </div>
            </div>
            
            <div class="skills-section" data-aos="fade-up">
                <h3 class="section-title">Skills & Expertise</h3>
                <div class="skills-grid">
                    <div class="skill-card">
                        <i class="fas fa-code skill-icon"></i>
                        <h4 class="skill-title">Frontend Development</h4>
                        <p class="skill-description">HTML, CSS, JavaScript</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-server skill-icon"></i>
                        <h4 class="skill-title">Backend Development</h4>
                        <p class="skill-description">PHP, Node.js</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-paint-brush skill-icon"></i>
                        <h4 class="skill-title">UI/UX Design</h4>
                        <p class="skill-description">User-Centered Design</p>
                    </div>
                    <div class="skill-card">
                        <i class="fas fa-database skill-icon"></i>
                        <h4 class="skill-title">Database Management</h4>
                        <p class="skill-description">SQL & NoSQL</p>
                    </div>
                </div>
            </div>

            <div class="contact-section" data-aos="fade-up">
                <h3 class="section-title">Let's Connect</h3>
                <div class="contact-card">
                    <p class="email-text">
                        <i class="fas fa-envelope contact-icon"></i>
                        <a href="mailto:contact@sabinnayaju.com.np">contact@sabinnayaju.com.np</a>
                    </p>
                    <div class="social-links">
                        <a href="https://github.com/sabinxtha1" target="_blank" class="social-btn github">
                            <i class="fab fa-github"></i>
                            <span>GitHub</span>
                        </a>
                        <a href="https://linkedin.com/in/sabinnayaju" target="_blank" class="social-btn linkedin">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-kit-code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 100,
            once: true,
            easing: 'ease-out'
        });
    </script>
</body>
</html>
<?php
include("footer.html");
?>