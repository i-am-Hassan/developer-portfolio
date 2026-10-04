<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Hassan Iftikhar's portfolio — Full-Stack Laravel Developer showcasing web applications, skills, projects and contact information.">

    <meta name="author" content="Hassan Iftikhar">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#071014">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Hassan Iftikhar | Full-Stack Laravel Developer">
    <meta property="og:description"
        content="Portfolio of Hassan Iftikhar, a Full-Stack Laravel Developer building practical web applications with Laravel, MySQL, JavaScript and Bootstrap.">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Hassan Iftikhar | Full-Stack Laravel Developer">
    <meta name="twitter:description"
        content="Portfolio of Hassan Iftikhar, a Full-Stack Laravel Developer building practical web applications.">

    <title>Hassan Iftikhar | Full-Stack Laravel Developer</title>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "Person",
        "name": "Hassan Iftikhar",
        "jobTitle": "Full-Stack Laravel Developer",
        "url": "{{ url()->current() }}",
        "email": "mailto:hassaniftikhar776@gmail.com",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Faisalabad",
            "addressCountry": "Pakistan"
        },
        "sameAs": [
            "https://github.com/i-am-Hassan",
            "https://www.linkedin.com/in/hassan-iftikhar-028885334"
        ]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">




</head>

<body>


    {{-- =========================================================
     NAVBAR
========================================================== --}}

    <header class="navbar" id="navbar">

        <div class="container nav-inner">

            <a href="#home" class="logo">

                <div class="logo-mark">
                    HI
                </div>

                <div class="logo-text">

                    <strong>Hassan Iftikhar</strong>

                    <span>Full-Stack Laravel Developer</span>

                </div>

            </a>

            <nav class="nav-links" aria-label="Primary navigation">

                <a href="#home" class="active">Home</a>

                <a href="#about">About</a>

                <a href="#skills">Skills</a>

                <a href="#projects">Projects</a>

                <a href="#journey">Experience</a>

                <a href="#contact">Contact</a>

            </nav>

            <div class="nav-actions">

                <button class="theme-button" id="themeButton" type="button" aria-label="Switch to light mode"
                    title="Switch to light mode">
                    <i class="fa-solid fa-moon"></i>
                </button>

                <a href="{{ asset('files/resume.pdf') }}" class="resume-btn" target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-download"></i>
                    Resume
                </a>

                <button class="menu-btn" id="menuBtn" type="button" aria-label="Open navigation menu"
                    aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>

            </div>

        </div>

    </header>


    <main>

        {{-- =====================================================
         HERO
    ====================================================== --}}

        <section class="hero" id="home">

            <div class="container hero-grid">

                <div class="reveal">

                    <div class="availability">

                        <span class="availability-dot"></span>

                        Available for opportunities

                    </div>

                    <h1 class="hero-title">

                        I build web products that solve

                        <span class="accent">
                            real problems.
                        </span>

                    </h1>

                    <p class="hero-subtitle">
                        Laravel / Full-Stack Developer
                    </p>

                    <p class="hero-description">

                        I build modern web applications with Laravel.

                    </p>

                    <div class="hero-buttons">

                        <a href="#projects" class="primary-btn">

                            View My Projects

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>

                        <a href="#contact" class="secondary-btn">

                            <i class="fa-regular fa-envelope"></i>

                            Contact Me

                        </a>

                    </div>

                    <div class="hero-meta">

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            Faisalabad, Pakistan
                        </span>

                        <span>
                            <i class="fa-regular fa-envelope"></i>
                            hassaniftikhar776@gmail.com
                        </span>

                    </div>

                </div>


                <div class="hero-visual reveal">

                    <div class="portrait-card">

                        <div class="portrait-placeholder">

                            <img src="{{ asset('images/avatar.svg') }}" alt="Professional developer avatar"
                                class="profile-avatar">

                        </div>

                    </div>

                    <div class="floating-card floating-top">

                        <span>Primary Stack</span>

                        <strong>Laravel</strong>

                    </div>

                    <div class="floating-card floating-bottom">

                        <span>Currently</span>

                        <strong>Building & Learning</strong>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
         ABOUT
    ====================================================== --}}

        <section class="section" id="about">

            <div class="container about-grid">

                <div class="reveal">

                    <div class="section-label">
                        About Me
                    </div>

                    <h2 class="section-title">

                        Passionate about building

                        <span class="about-highlight">
                            real solutions.
                        </span>

                    </h2>

                    <p class="about-text">

                        I'm a Full-Stack Developer focused on building practical
                        web applications. I enjoy turning ideas into functional
                        products and continuously improving my skills through
                        real projects.

                    </p>

                    <div class="tags">

                        <span class="tag">
                            <i class="fa-solid fa-puzzle-piece"></i>
                            Problem Solver
                        </span>

                        <span class="tag">
                            <i class="fa-solid fa-bolt"></i>
                            Fast Learner
                        </span>

                        <span class="tag">
                            <i class="fa-solid fa-users"></i>
                            Team Player
                        </span>

                    </div>

                </div>


                <div class="about-card reveal">

                    <div class="info-row">

                        <div class="info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div class="info-content">

                            <small>Location</small>

                            <strong>Pakistan</strong>

                        </div>

                    </div>


                    <div class="info-row">

                        <div class="info-icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>

                        <div class="info-content">

                            <small>Email</small>

                            <strong>hassaniftikhar776@gmail.com
                            </strong>

                        </div>

                    </div>


                    <div class="info-row">

                        <div class="info-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <div class="info-content">

                            <small>Primary Focus</small>

                            <strong>Laravel / Full-Stack</strong>

                        </div>

                    </div>


                    <div class="info-row">

                        <div class="info-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <div class="info-content">

                            <small>Currently Learning</small>

                            <strong>Advanced Laravel</strong>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
         SKILLS
    ====================================================== --}}

        <section class="section" id="skills">

            <div class="container">

                <div class="section-label reveal">
                    My Skills
                </div>

                <h2 class="section-title reveal">
                    Technologies I Work With
                </h2>

                <p class="section-description reveal">

                    Technologies I use to build modern web applications
                    and continuously expand my development skills.

                </p>


                <div class="skills-grid">

                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-laravel"></i>
                        </div>

                        <h3>Laravel</h3>

                        <p>Backend Framework</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-solid fa-database"></i>
                        </div>

                        <h3>MySQL</h3>

                        <p>Database</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-js"></i>
                        </div>

                        <h3>JavaScript</h3>

                        <p>Frontend Interactivity</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>

                        <h3>Bootstrap</h3>

                        <p>UI Framework</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-html5"></i>
                        </div>

                        <h3>HTML</h3>

                        <p>Markup</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>

                        <h3>CSS</h3>

                        <p>Styling</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-brands fa-git-alt"></i>
                        </div>

                        <h3>Git</h3>

                        <p>Version Control</p>

                    </div>


                    <div class="skill-card reveal">

                        <div class="skill-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>

                        <h3>REST APIs</h3>

                        <p>Web Services</p>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
         PROJECTS
    ====================================================== --}}

        <section class="section" id="projects">

            <div class="container">

                <div class="projects-head">

                    <div>

                        <div class="section-label reveal">
                            Featured Projects
                        </div>

                        <h2 class="section-title reveal">
                            My Recent Work
                        </h2>

                    </div>

                    <a href="#" class="view-link reveal">
                        View All Projects
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>


                <div class="projects-grid">


                    <article class="project-card reveal">

                        <div class="project-image">

                            <img src="{{ asset('images/projects/student-management-dashboard.png') }}"
                                alt="Student Management System dashboard" loading="lazy" decoding="async">

                        </div>

                        <div class="project-content">

                            <span class="project-type">
                                Full-Stack Web App
                            </span>

                            <h3 class="project-title">
                                Student Management System
                            </h3>

                            <p class="project-description">

                                A complete management system for students,
                                teachers, courses, batches, enrollments
                                and payments.

                            </p>

                            <div class="project-tech">

                                <span class="tech">Laravel</span>
                                <span class="tech">MySQL</span>
                                <span class="tech">Bootstrap</span>

                            </div>

                            <div class="project-links">

                                <a href="https://github.com/i-am-Hassan/StudentManagement-App" target="_blank"
                                    rel="noopener noreferrer">

                                    <i class="fa-brands fa-github"></i>
                                    View Code

                                </a>

                                <a href="https://hassanstudentms.free.nf" target="_blank" rel="noopener noreferrer">

                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>

                                </a>

                            </div>

                        </div>

                    </article>




                    <article class="project-card reveal">

                        <div class="project-image">

                            <img src="{{ asset('images/projects/taskflow-dashboard.png') }}" alt="TaskFlow dashboard"
                                loading="lazy" decoding="async">

                        </div>
                        <div class="project-content">

                            <span class="project-type">
                                Full-Stack Web App
                            </span>

                            <h3 class="project-title">
                                TaskFlow
                            </h3>

                            <p class="project-description">

                                A task management application with user
                                authentication, personal tasks, search and
                                filtering, status tracking and notifications.

                            </p>

                            <div class="project-tech">

                                <span class="tech">Laravel</span>
                                <span class="tech">MySQL</span>
                                <span class="tech">Bootstrap</span>
                                <span class="tech">JavaScript</span>

                            </div>

                            <div class="project-links">

                                <a href="https://github.com/i-am-Hassan/TaskManager" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fa-brands fa-github"></i>
                                    View Code
                                </a>

                                <a href="http://taskflowapp.infy.click" target="_blank" rel="noopener noreferrer">
                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                            </div>

                        </div>

                    </article>


                    <article class="project-card reveal">

                        <div class="project-image">

                            <i class="fa-solid fa-code"></i>

                        </div>

                        <div class="project-content">

                            <span class="project-type">
                                Web Development
                            </span>

                            <h3 class="project-title">
                                Project Three
                            </h3>

                            <p class="project-description">

                                Replace this with another project,
                                landing page or application you have built.

                            </p>

                            <div class="project-tech">

                                <span class="tech">HTML</span>
                                <span class="tech">CSS</span>
                                <span class="tech">JavaScript</span>

                            </div>

                            <div class="project-links">

                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                    View Code
                                </a>

                                <a href="#" target="_blank">
                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>


        {{-- =====================================================
         JOURNEY
    ====================================================== --}}

        <section class="section" id="journey">

            <div class="container journey-grid">

                <div>

                    <div class="section-label reveal">
                        My Journey
                    </div>

                    <h2 class="section-title reveal">
                        Experience & Learning
                    </h2>

                    <div class="timeline">


                        <div class="timeline-item reveal">

                            <div class="timeline-dot">
                                <i class="fa-solid fa-book"></i>
                            </div>

                            <div class="timeline-content">

                                <small>
                                    Education
                                </small>

                                <h3>
                                    Building My Foundation
                                </h3>

                                <p>

                                    Developed a strong foundation in
                                    programming, web development and
                                    computer science concepts.

                                </p>

                            </div>

                        </div>


                        <div class="timeline-item reveal">

                            <div class="timeline-dot">
                                <i class="fa-solid fa-code"></i>
                            </div>

                            <div class="timeline-content">

                                <small>
                                    Learning & Building
                                </small>

                                <h3>
                                    Laravel & Full-Stack Development
                                </h3>

                                <p>

                                    Started building complete applications
                                    using Laravel, MySQL, JavaScript
                                    and modern frontend tools.

                                </p>

                            </div>

                        </div>


                        <div class="timeline-item reveal">

                            <div class="timeline-dot">
                                <i class="fa-solid fa-rocket"></i>
                            </div>

                            <div class="timeline-content">

                                <small>
                                    Next Goal
                                </small>

                                <h3>
                                    Growing as a Developer
                                </h3>

                                <p>

                                    Looking to gain professional experience,
                                    contribute to real-world software projects
                                    and continue developing my skills.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <aside class="stats-card reveal">

                    <div class="stat">

                        <strong>2+</strong>

                        <span>
                            Major Projects
                        </span>

                    </div>

                    <div class="stat">

                        <strong>8+</strong>

                        <span>
                            Technologies
                        </span>

                    </div>

                    <div class="stat">

                        <strong>100%</strong>

                        <span>
                            Motivation to Learn
                        </span>

                    </div>

                </aside>

            </div>

        </section>


        {{-- =====================================================
         LET'S CONNECT
    ====================================================== --}}

        <section class="section" id="contact">

            <div class="container">

                <div class="contact-box reveal">

                    <div class="contact-grid">

                        <div>

                            <div class="section-label">
                                Let's Connect
                            </div>

                            <h2>
                                Let's build something meaningful.
                            </h2>

                            <p>

                                I'm always interested in connecting with
                                developers, companies and people working on
                                interesting ideas. I'm especially open to
                                internship and professional opportunities
                                where I can learn, contribute and grow.

                            </p>

                            <a href="mailto:hassaniftikhar776@gmail.com" class="primary-btn contact-button">

                                Get In Touch

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>


                        <div class="contact-details">

                            <div class="contact-item">

                                <i class="fa-regular fa-envelope"></i>

                                <a href="mailto:hassaniftikhar776@gmail.com">
                                    hassaniftikhar776@gmail.com
                                </a>

                            </div>

                            <div class="contact-item">

                                <i class="fa-solid fa-phone"></i>

                                <a href="tel:+923036371071">
                                    +92 3036371071
                                </a>

                            </div>


                            <div class="contact-item">

                                <i class="fa-brands fa-github"></i>

                                <a href="https://github.com/i-am-Hassan" target="_blank" rel="noopener noreferrer">
                                    github.com/i-am-Hassan
                                </a>

                            </div>

                            <div class="contact-item">

                                <i class="fa-brands fa-linkedin"></i>

                                <a href="https://www.linkedin.com/in/hassan-iftikhar-028885334" target="_blank"
                                    rel="noopener noreferrer">
                                    linkedin.com/in/hassan-iftikhar-028885334
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- =========================================================
     FOOTER
========================================================== --}}

    <footer class="footer">

        <div class="container footer-inner">

            <div class="footer-left">

                © {{ date('Y') }}

                <strong>Hassan Iftikhar</strong>.

                All rights reserved.

            </div>

            <div class="socials">


                <a href="https://github.com/i-am-Hassan" target="_blank" rel="noopener noreferrer"
                    aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://www.linkedin.com/in/hassan-iftikhar-028885334" target="_blank"
                    rel="noopener noreferrer" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=hassaniftikhar776@gmail.com" target="_blank"
                    rel="noopener noreferrer" aria-label="Email">
                    <i class="fa-regular fa-envelope"></i>
                </a>

            </div>


        </div>

    </footer>


    <script>
        /* =========================================================
                       THEME TOGGLE
                    ========================================================= */

        const themeButton = document.getElementById("themeButton");
        const themeIcon = themeButton.querySelector("i");

        function setTheme(theme) {

            const themeColorMeta = document.querySelector('meta[name="theme-color"]');

            if (theme === "light") {

                document.body.classList.add("light-theme");

                themeIcon.classList.remove("fa-moon");
                themeIcon.classList.add("fa-sun");

                themeButton.setAttribute("aria-label", "Switch to dark mode");
                themeButton.setAttribute("title", "Switch to dark mode");

                if (themeColorMeta) {
                    themeColorMeta.setAttribute("content", "#f5f8fa");
                }

            } else {

                document.body.classList.remove("light-theme");

                themeIcon.classList.remove("fa-sun");
                themeIcon.classList.add("fa-moon");

                themeButton.setAttribute("aria-label", "Switch to light mode");
                themeButton.setAttribute("title", "Switch to light mode");

                if (themeColorMeta) {
                    themeColorMeta.setAttribute("content", "#071014");
                }

            }
        }

        const savedTheme = localStorage.getItem("portfolio-theme");

        setTheme(savedTheme === "light" ? "light" : "dark");

        themeButton.addEventListener("click", function() {

            const isLight = document.body.classList.contains("light-theme");

            if (isLight) {
                setTheme("dark");
                localStorage.setItem("portfolio-theme", "dark");
            } else {
                setTheme("light");
                localStorage.setItem("portfolio-theme", "light");
            }

        });


        /* =========================================================
                                                           MOBILE MENU
                                                        ========================================================= */

        const navbar = document.getElementById("navbar");

        const menuBtn = document.getElementById("menuBtn");

        menuBtn.addEventListener("click", function() {

            navbar.classList.toggle("nav-mobile-open");

            const isOpen = navbar.classList.contains("nav-mobile-open");

            menuBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
            menuBtn.setAttribute("aria-label", isOpen ? "Close navigation menu" : "Open navigation menu");

            const icon = menuBtn.querySelector("i");

            if (navbar.classList.contains("nav-mobile-open")) {

                icon.classList.remove("fa-bars");

                icon.classList.add("fa-xmark");

            } else {

                icon.classList.remove("fa-xmark");

                icon.classList.add("fa-bars");

            }

        });


        /* =========================================================
           CLOSE MOBILE MENU
        ========================================================= */

        document.querySelectorAll(".nav-links a").forEach(function(link) {

            link.addEventListener("click", function() {

                navbar.classList.remove("nav-mobile-open");

                menuBtn.setAttribute("aria-expanded", "false");
                menuBtn.setAttribute("aria-label", "Open navigation menu");

                const icon = menuBtn.querySelector("i");

                icon.classList.remove("fa-xmark");

                icon.classList.add("fa-bars");

            });

        });


        /* =========================================================
           SCROLL REVEAL
        ========================================================= */

        const revealElements =
            document.querySelectorAll(".reveal");

        const observer = new IntersectionObserver(
            function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        observer.unobserve(entry.target);

                    }

                });

            }, {
                threshold: 0.12
            }
        );


        revealElements.forEach(function(element) {

            observer.observe(element);

        });


        /* =========================================================
           ACTIVE NAVIGATION
        ========================================================= */

        const sections =
            document.querySelectorAll("section[id]");

        const navLinks =
            document.querySelectorAll(".nav-links a");

        window.addEventListener("scroll", function() {

            let current = "";

            sections.forEach(function(section) {

                const sectionTop =
                    section.offsetTop - 150;

                if (window.scrollY >= sectionTop) {

                    current = section.getAttribute("id");

                }

            });


            navLinks.forEach(function(link) {

                link.classList.remove("active");

                if (
                    link.getAttribute("href") ===
                    "#" + current
                ) {

                    link.classList.add("active");

                }

            });

        });
    </script>


</body>

</html>
