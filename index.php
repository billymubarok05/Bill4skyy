<?php

declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| BILL4SKYY PORTFOLIO
|--------------------------------------------------------------------------
*/

$socials = [
    [
        'icon'  => 'fa-instagram',
        'url'   => 'https://instagram.com/bill4skyy',
        'label' => 'Instagram'
    ],
    [
        'icon'  => 'fa-spotify',
        'url'   => 'https://open.spotify.com/',
        'label' => 'Spotify'
    ],
    [
        'icon'  => 'fa-github',
        'url'   => 'https://github.com/billymubarok05s',
        'label' => 'GitHub'
    ],
    [
        'icon'  => 'fa-linkedin-in',
        'url'   => '#',
        'label' => 'LinkedIn'
    ],
    [
        'icon'  => 'fa-threads',
        'url'   => '#',
        'label' => 'Threads'
    ],
];

$infos = [
    [
        'label' => 'Nama',
        'value' => 'bill4skyy'
    ],
    [
        'label' => 'Lokasi',
        'value' => 'Yogyakarta, INA'
    ],
    [
        'label' => 'Role',
        'value' => 'Web Dev Lead'
    ],
    [
        'label' => 'Status',
        'value' => 'Open Commission'
    ],
];

$skills = [
    [
        'icon' => 'fa-code',
        'title' => 'Frontend Development',
        'color' => 'neon-blue',
        'skills' => [
            'HTML5',
            'CSS3',
            'JavaScript',
            'React.js',
            'Tailwind CSS',
            'Bootstrap'
        ]
    ],
    [
        'icon' => 'fa-server',
        'title' => 'Backend Development',
        'color' => 'accent-primary',
        'skills' => [
            'PHP',
            'Laravel',
            'Node.js',
            'MySQL',
            'REST API',
            'Git'
        ]
    ],
    [
        'icon' => 'fa-palette',
        'title' => 'UI/UX Design',
        'color' => 'neon-pink',
        'skills' => [
            'Figma',
            'Adobe XD',
            'Photoshop',
            'Illustrator',
            'Wireframing',
            'Prototyping'
        ]
    ],
    [
        'icon' => 'fa-font',
        'title' => 'Typography & Branding',
        'color' => 'neon-purple',
        'skills' => [
            'Type Design',
            'Logo Design',
            'Brand Identity',
            'Visual System',
            'Print Design',
            'Packaging'
        ]
    ],
    [
        'icon' => 'fa-mobile-screen',
        'title' => 'Digital Experience',
        'color' => 'green-400',
        'skills' => [
            'Responsive Design',
            'PWA',
            'Performance Optimization',
            'Accessibility',
            'SEO',
            'UX Research'
        ]
    ],
];

$projects = [
    [
        'title' => 'Makmur Jaya Website',
        'category' => 'web-dev',
        'desc' => 'Full-stack web development untuk platform bisnis digital.',
        'tags' => ['PHP', 'Laravel', 'Tailwind'],
        'image' => 'assets/img/project-makmur-jaya.jpg'
    ],
    [
        'title' => 'The Brinn Experience',
        'category' => 'uiux',
        'desc' => 'Digital experience design untuk brand lifestyle.',
        'tags' => ['Figma', 'UI/UX', 'Branding'],
        'image' => 'assets/img/project-the-brinn.jpg'
    ],
    [
        'title' => 'B.A.Z.E Home',
        'category' => 'branding',
        'desc' => 'Brand identity & digital presence untuk home decor.',
        'tags' => ['Branding', 'Logo', 'Visual'],
        'image' => 'assets/img/project-baze.jpg'
    ],
    [
        'title' => 'THEBPLN Typography',
        'category' => 'typography',
        'desc' => 'Custom typeface & lettering artwork.',
        'tags' => ['Typography', 'Lettering', 'Art'],
        'image' => 'assets/img/project-thebpln.jpg'
    ],
    [
        'title' => 'Brillian Laundry',
        'category' => 'web-dev',
        'desc' => 'Sistem manajemen laundry berbasis web.',
        'tags' => ['Laravel', 'PHP', 'MySQL'],
        'image' => 'assets/img/project-laundry.jpg'
    ],
    [
        'title' => 'Digital Invitation',
        'category' => 'uiux',
        'desc' => 'Website undangan digital dengan pengalaman interaktif.',
        'tags' => ['UI/UX', 'Web', 'Design'],
        'image' => 'assets/img/project-invitation.jpg'
    ],
];

$experiences = [
    [
        'role' => 'Web Dev Lead',
        'company' => '@makmurjaya.ig',
        'period' => '2024 - Present',
        'desc' => 'Memimpin tim pengembangan web, merancang arsitektur aplikasi, dan mengimplementasikan solusi digital untuk meningkatkan bisnis.',
        'side' => 'left'
    ],
    [
        'role' => 'Digital Experience Manager',
        'company' => '@the.brinn & @b.a.z.e.home',
        'period' => '2023 - Present',
        'desc' => 'Mengelola seluruh aspek digital experience termasuk UI/UX, branding, dan content strategy untuk dua brand.',
        'side' => 'right'
    ],
    [
        'role' => 'Freelance UI/UX Designer',
        'company' => 'Open Commission',
        'period' => '2022 - Present',
        'desc' => 'Menerima berbagai commission project untuk desain UI/UX, typography, dan branding dari klien domestik maupun internasional.',
        'side' => 'left'
    ],
    [
        'role' => 'Software Engineer',
        'company' => 'Self-employed',
        'period' => '2021 - Present',
        'desc' => 'Mengembangkan berbagai aplikasi web full-stack menggunakan PHP, Laravel, React, dan teknologi modern lainnya.',
        'side' => 'right'
    ],
];

$stats = [
    [
        'number' => '50+',
        'label' => 'Projects Completed',
        'icon' => 'fa-folder-open'
    ],
    [
        'number' => '30+',
        'label' => 'Happy Clients',
        'icon' => 'fa-users'
    ],
    [
        'number' => '3+',
        'label' => 'Years Experience',
        'icon' => 'fa-clock'
    ],
    [
        'number' => '8.3K',
        'label' => 'Followers',
        'icon' => 'fa-heart'
    ],
];

$contacts = [
    [
        'icon' => 'fa-envelope',
        'label' => 'Email',
        'value' => 'hello@bill4skyy.com',
        'link' => 'mailto:hello@bill4skyy.com'
    ],
    [
        'icon' => 'fa-instagram',
        'label' => 'Instagram',
        'value' => '@bill4skyy',
        'link' => 'https://instagram.com/bill4skyy'
    ],
    [
        'icon' => 'fa-location-dot',
        'label' => 'Location',
        'value' => 'Yogyakarta, Indonesia',
        'link' => '#'
    ],
];

?>
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Bill4skyy - Software Engineer, Web Developer, UI/UX Designer and Creative Designer."
    >

    <meta
        name="theme-color"
        content="#09090f"
    >

    <title>Bill4skyy — Software Engineer & Creative Designer</title>

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="style.css"
    >

</head>

<body>

<!-- =========================================================
     PRELOADER
========================================================= -->

<div id="preloader">

    <div class="loader-wrapper">

        <div class="loader-logo">
            BILL4SKYY
        </div>

        <div class="loader-line">
            <span></span>
        </div>

        <div class="loader-text">
            INITIALIZING EXPERIENCE...
        </div>

    </div>

</div>


<!-- =========================================================
     CURSOR
========================================================= -->

<div class="cursor-dot"></div>
<div class="cursor-ring"></div>


<!-- =========================================================
     BACKGROUND EFFECT
========================================================= -->

<div class="noise"></div>

<div class="bg-grid"></div>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<header class="navbar">

    <div class="container nav-container">

        <a
            href="#home"
            class="logo-link"
        >

            <img
                src="assets/img/logo-bill4skyy.png"
                alt="Bill4skyy"
                class="navbar-logo"
            >

        </a>


        <nav class="nav-menu">

            <a href="#home">Home</a>

            <a href="#about">About</a>

            <a href="#skills">Skills</a>

            <a href="#projects">Projects</a>

            <a href="#experience">Experience</a>

            <a href="#contact">Contact</a>

        </nav>


        <a
            href="#contact"
            class="commission-btn"
        >

            <span class="status-dot"></span>

            Open Commission

        </a>


        <button
            class="mobile-menu-btn"
            id="mobileMenuBtn"
            type="button"
        >

            <span></span>
            <span></span>
            <span></span>

        </button>

    </div>

</header>


<!-- =========================================================
     MOBILE MENU
========================================================= -->

<div
    class="mobile-menu"
    id="mobileMenu"
>

    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#skills">Skills</a>
    <a href="#projects">Projects</a>
    <a href="#experience">Experience</a>
    <a href="#contact">Contact</a>

</div>


<main>


<!-- =========================================================
     HERO
========================================================= -->

<section
    id="home"
    class="hero"
>

    <!-- VIDEO BACKGROUND -->

    <div class="hero-video-background">

        <video
            class="hero-background-video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
            poster="assets/img/about-bill4skyy.jpg"
        >

            <source
                src="assets/img/video/hero-background.mp4"
                type="video/mp4"
            >

        </video>

    </div>


    <!-- VIDEO OVERLAY -->

    <div class="hero-video-overlay"></div>


    <div class="hero-container container">

        <div class="hero-content">

            <div class="hero-kicker reveal">

                SOFTWARE ENGINEER
                <span>•</span>
                CREATIVE DESIGNER

            </div>


            <h1 class="hero-title reveal">

                I'm

                <span class="gradient-text">
                    bill4skyy
                </span>

            </h1>


            <p class="hero-description reveal">

                Saya membangun pengalaman digital melalui
                software engineering, web development, UI/UX,
                typography, dan branding.

            </p>


            <div class="hero-buttons reveal">

                <a
                    href="#projects"
                    class="btn btn-primary"
                >

                    Lihat Portfolio

                    <i class="fa-solid fa-arrow-down"></i>

                </a>


                <a
                    href="#contact"
                    class="btn btn-outline"
                >

                    Hubungi Saya

                </a>

            </div>

        </div>


        <!-- HERO VISUAL -->

        <div class="hero-visual reveal">

            <div class="hero-circle">

                <div class="circle-glow"></div>

                <div class="circle-border"></div>


                <div class="hero-photo-wrapper">

                    <img
                        src="assets/img/hero-dj-bill4skyy.png"
                        alt="Bill4skyy"
                        class="hero-photo"
                    >

                </div>

            </div>


            <div class="floating-card card-projects">

                <strong>50+</strong>

                <span>Projects</span>

            </div>


            <div class="floating-card card-experience">

                <strong>3+</strong>

                <span>Years Experience</span>

            </div>


            <div class="floating-orbit orbit-1"></div>

            <div class="floating-orbit orbit-2"></div>

        </div>

    </div>


    <!-- SCROLL -->

    <a
        href="#about"
        class="scroll-indicator"
    >

        <span>SCROLL</span>

        <div class="mouse">

            <div class="mouse-wheel"></div>

        </div>

    </a>

</section>


<!-- =========================================================
     ABOUT
========================================================= -->

<section
    id="about"
    class="section about-section"
>

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                TENTANG SAYA
            </div>

            <h2>
                Who is
                <span class="gradient-text">
                    bill4skyy?
                </span>
            </h2>

        </div>


        <div class="about-grid">

            <div class="about-image-wrapper reveal">

                <div class="about-image-frame">

                    <img
                        src="assets/img/about-bill4skyy.jpg"
                        alt="Bill4skyy"
                        class="about-image"
                    >

                    <div class="image-gradient"></div>

                </div>

                <div class="image-decoration"></div>

            </div>


            <div class="about-content reveal">

                <h3>
                    Software Engineer & Creative Designer
                </h3>


                <p>

                    Saya adalah seorang Software Engineer yang juga
                    memiliki passion di bidang UI/UX Design. Saat ini
                    berperan sebagai <strong>Web Dev Lead</strong>
                    di <strong>@makmurjaya.ig</strong> dan mengelola
                    digital experience di
                    <strong>@the.brinn</strong> &
                    <strong>@b.a.z.e.home</strong>.

                </p>


                <p>

                    Dengan keahlian di bidang Typography, branding,
                    dan pengembangan web, saya membantu bisnis dan
                    individu untuk membangun kehadiran digital yang
                    profesional dan berkesan.

                </p>


                <div class="info-grid">

                    <?php foreach ($infos as $info): ?>

                        <div class="info-item">

                            <span>
                                <?= htmlspecialchars($info['label']) ?>
                            </span>

                            <strong>
                                <?= htmlspecialchars($info['value']) ?>
                            </strong>

                        </div>

                    <?php endforeach; ?>

                </div>


                <a
                    href="#"
                    class="download-cv"
                >

                    Download CV

                    <i class="fa-solid fa-arrow-down"></i>

                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SKILLS
========================================================= -->

<section
    id="skills"
    class="section skills-section"
>

    <div class="container">

        <div class="section-heading center">

            <div class="section-label">
                KEAHLIAN
            </div>

            <h2>

                Skills &

                <span class="gradient-text">
                    Technologies
                </span>

            </h2>

        </div>


        <div class="skills-grid">

            <?php foreach ($skills as $skill): ?>

                <div class="skill-card reveal">

                    <div class="skill-icon <?= htmlspecialchars($skill['color']) ?>">

                        <i class="fa-solid <?= htmlspecialchars($skill['icon']) ?>"></i>

                    </div>


                    <h3>
                        <?= htmlspecialchars($skill['title']) ?>
                    </h3>


                    <div class="skill-list">

                        <?php foreach ($skill['skills'] as $item): ?>

                            <span>
                                <?= htmlspecialchars($item) ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     PROJECTS
========================================================= -->

<section
    id="projects"
    class="section projects-section"
>

    <div class="container">

        <div class="section-heading">

            <div class="section-label">
                KARYA
            </div>

            <h2>

                Selected
                <span class="gradient-text">
                    Projects
                </span>

            </h2>

            <p class="section-description">

                Beberapa project yang pernah saya kerjakan
                dalam bidang development, design, branding,
                dan digital experience.

            </p>

        </div>


        <div class="project-filters">

            <button
                class="filter-btn active"
                data-filter="all"
            >
                All
            </button>

            <button
                class="filter-btn"
                data-filter="web-dev"
            >
                Web Development
            </button>

            <button
                class="filter-btn"
                data-filter="uiux"
            >
                UI/UX
            </button>

            <button
                class="filter-btn"
                data-filter="branding"
            >
                Branding
            </button>

            <button
                class="filter-btn"
                data-filter="typography"
            >
                Typography
            </button>

        </div>


        <div class="projects-grid">

            <?php foreach ($projects as $project): ?>

                <article
                    class="project-card reveal"
                    data-category="<?= htmlspecialchars($project['category']) ?>"
                >

                    <div class="project-image">

                        <img
                            src="<?= htmlspecialchars($project['image']) ?>"
                            alt="<?= htmlspecialchars($project['title']) ?>"
                            loading="lazy"
                            onerror="this.style.display='none'; this.parentElement.classList.add('image-fallback');"
                        >

                        <div class="project-overlay">

                            <span class="project-category">
                                <?= htmlspecialchars(strtoupper($project['category'])) ?>
                            </span>

                            <a
                                href="#"
                                class="project-link"
                            >

                                <i class="fa-solid fa-arrow-up-right-from-square"></i>

                            </a>

                        </div>

                    </div>


                    <div class="project-content">

                        <h3>
                            <?= htmlspecialchars($project['title']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($project['desc']) ?>
                        </p>


                        <div class="project-tags">

                            <?php foreach ($project['tags'] as $tag): ?>

                                <span>
                                    <?= htmlspecialchars($tag) ?>
                                </span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     EXPERIENCE
========================================================= -->

<section
    id="experience"
    class="section experience-section"
>

    <div class="container">

        <div class="section-heading center">

            <div class="section-label">
                PENGALAMAN
            </div>

            <h2>

                Work
                <span class="gradient-text">
                    Experience
                </span>

            </h2>

        </div>


        <div class="timeline">

            <div class="timeline-line"></div>


            <?php foreach ($experiences as $index => $experience): ?>

                <div
                    class="experience-item <?= $experience['side'] ?> reveal"
                >

                    <div class="experience-dot">
                        <span></span>
                    </div>


                    <div class="experience-card">

                        <div class="experience-period">

                            <?= htmlspecialchars($experience['period']) ?>

                        </div>


                        <h3>

                            <?= htmlspecialchars($experience['role']) ?>

                        </h3>


                        <div class="experience-company">

                            <?= htmlspecialchars($experience['company']) ?>

                        </div>


                        <p>

                            <?= htmlspecialchars($experience['desc']) ?>

                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     STATS
========================================================= -->

<section class="stats-section">

    <div class="container">

        <div class="stats-grid">

            <?php foreach ($stats as $stat): ?>

                <div class="stat-card reveal">

                    <div class="stat-icon">

                        <i class="fa-solid <?= htmlspecialchars($stat['icon']) ?>"></i>

                    </div>


                    <div class="stat-number">

                        <?= htmlspecialchars($stat['number']) ?>

                    </div>


                    <div class="stat-label">

                        <?= htmlspecialchars($stat['label']) ?>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT
========================================================= -->

<section
    id="contact"
    class="section contact-section"
>

    <div class="container">

        <div class="section-heading center">

            <div class="section-label">
                KONTAK
            </div>

            <h2>

                Let's
                <span class="gradient-text">
                    Connect
                </span>

            </h2>


            <p>

                Ada project yang ingin diwujudkan?
                Atau sekadar ingin ngobrol?
                Jangan ragu untuk menghubungi saya!

            </p>

        </div>


        <div class="contact-grid">


            <!-- CONTACT INFO -->

            <div class="contact-info reveal">

                <?php foreach ($contacts as $contact): ?>

                    <a
                        href="<?= htmlspecialchars($contact['link']) ?>"
                        class="contact-item"
                    >

                        <div class="contact-icon">

                            <i class="fa-solid <?= htmlspecialchars($contact['icon']) ?>"></i>

                        </div>


                        <div>

                            <span>
                                <?= htmlspecialchars($contact['label']) ?>
                            </span>

                            <strong>
                                <?= htmlspecialchars($contact['value']) ?>
                            </strong>

                        </div>

                    </a>

                <?php endforeach; ?>


                <div class="social-links">

                    <?php foreach ($socials as $social): ?>

                        <a
                            href="<?= htmlspecialchars($social['url']) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="<?= htmlspecialchars($social['label']) ?>"
                        >

                            <i class="fa-brands <?= htmlspecialchars($social['icon']) ?>"></i>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- CONTACT FORM -->

            <div class="contact-form-wrapper reveal">

                <form
                    id="contactForm"
                    class="contact-form"
                >

                    <div class="form-row">

                        <div class="form-group">

                            <label for="name">
                                NAMA
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Nama lengkap Anda"
                                required
                            >

                        </div>


                        <div class="form-group">

                            <label for="email">
                                EMAIL
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="email@example.com"
                                required
                            >

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="subject">
                            SUBJECT
                        </label>

                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Project yang ingin didiskusikan"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="message">
                            PESAN
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Ceritakan tentang project Anda..."
                            required
                        ></textarea>

                    </div>


                    <button
                        type="submit"
                        class="btn btn-primary submit-btn"
                    >

                        Kirim Pesan

                        <i class="fa-solid fa-paper-plane"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="footer">

    <div class="container footer-container">

        <div class="footer-brand">

            <img
                src="assets/img/logo-bill4skyy.png"
                alt="Bill4skyy"
            >

            <p>
                Software Engineer & Creative Designer.
            </p>

        </div>


        <div class="footer-copy">

            © <?= date('Y') ?> Bill4skyy.
            All rights reserved.

        </div>


        <a
            href="#home"
            class="back-top"
        >

            <i class="fa-solid fa-arrow-up"></i>

        </a>

    </div>

</footer>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

/* =========================================================
   PRELOADER
========================================================= */

window.addEventListener('load', function () {

    const preloader = document.getElementById('preloader');

    setTimeout(function () {

        preloader.classList.add('loaded');

    }, 500);

});


/* =========================================================
   MOBILE MENU
========================================================= */

const mobileMenuBtn =
    document.getElementById('mobileMenuBtn');

const mobileMenu =
    document.getElementById('mobileMenu');

if (mobileMenuBtn && mobileMenu) {

    mobileMenuBtn.addEventListener('click', function () {

        this.classList.toggle('active');

        mobileMenu.classList.toggle('active');

    });


    mobileMenu
        .querySelectorAll('a')
        .forEach(function (link) {

            link.addEventListener('click', function () {

                mobileMenuBtn.classList.remove('active');

                mobileMenu.classList.remove('active');

            });

        });

}


/* =========================================================
   NAVBAR SCROLL
========================================================= */

const navbar =
    document.querySelector('.navbar');

window.addEventListener('scroll', function () {

    if (window.scrollY > 50) {

        navbar.classList.add('scrolled');

    } else {

        navbar.classList.remove('scrolled');

    }

});


/* =========================================================
   PROJECT FILTER
========================================================= */

const filterButtons =
    document.querySelectorAll('.filter-btn');

const projectCards =
    document.querySelectorAll('.project-card');

filterButtons.forEach(function (button) {

    button.addEventListener('click', function () {

        filterButtons.forEach(function (btn) {

            btn.classList.remove('active');

        });

        this.classList.add('active');

        const filter =
            this.dataset.filter;

        projectCards.forEach(function (card) {

            const category =
                card.dataset.category;

            if (
                filter === 'all' ||
                category === filter
            ) {

                card.style.display = '';

                setTimeout(function () {

                    card.classList.remove('hidden');

                }, 20);

            } else {

                card.classList.add('hidden');

                setTimeout(function () {

                    card.style.display = 'none';

                }, 300);

            }

        });

    });

});


/* =========================================================
   SCROLL REVEAL
========================================================= */

const revealElements =
    document.querySelectorAll('.reveal');

const revealObserver =
    new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add('revealed');

                    revealObserver.unobserve(
                        entry.target
                    );

                }

            });

        },
        {
            threshold: 0.1
        }
    );


revealElements.forEach(function (element) {

    revealObserver.observe(element);

});


/* =========================================================
   SMOOTH SCROLL
========================================================= */

document
    .querySelectorAll('a[href^="#"]')
    .forEach(function (anchor) {

        anchor.addEventListener(
            'click',
            function (event) {

                const targetId =
                    this.getAttribute('href');

                if (
                    targetId &&
                    targetId !== '#'
                ) {

                    const target =
                        document.querySelector(targetId);

                    if (target) {

                        event.preventDefault();

                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                    }

                }

            }
        );

    });


/* =========================================================
   CONTACT FORM
========================================================= */

const contactForm =
    document.getElementById('contactForm');

if (contactForm) {

    contactForm.addEventListener(
        'submit',
        function (event) {

            event.preventDefault();

            const name =
                document.getElementById('name').value;

            const email =
                document.getElementById('email').value;

            const subject =
                document.getElementById('subject').value;

            const message =
                document.getElementById('message').value;


            const body =
                encodeURIComponent(
                    "Nama: " + name +
                    "\nEmail: " + email +
                    "\n\n" +
                    message
                );


            const mailto =
                "mailto:hello@bill4skyy.com" +
                "?subject=" +
                encodeURIComponent(subject) +
                "&body=" +
                body;


            window.location.href = mailto;

        }
    );

}


/* =========================================================
   CUSTOM CURSOR
========================================================= */

const cursorDot =
    document.querySelector('.cursor-dot');

const cursorRing =
    document.querySelector('.cursor-ring');


if (
    cursorDot &&
    cursorRing &&
    window.matchMedia('(pointer:fine)').matches
) {

    document.addEventListener(
        'mousemove',
        function (event) {

            cursorDot.style.left =
                event.clientX + 'px';

            cursorDot.style.top =
                event.clientY + 'px';


            cursorRing.style.left =
                event.clientX + 'px';

            cursorRing.style.top =
                event.clientY + 'px';

        }
    );


    document
        .querySelectorAll('a, button, input, textarea')
        .forEach(function (element) {

            element.addEventListener(
                'mouseenter',
                function () {

                    cursorRing.classList.add('hover');

                }
            );


            element.addEventListener(
                'mouseleave',
                function () {

                    cursorRing.classList.remove('hover');

                }
            );

        });

}


/* =========================================================
   VIDEO FALLBACK
========================================================= */

const heroVideo =
    document.querySelector('.hero-background-video');

if (heroVideo) {

    heroVideo.play().catch(function () {

        console.log(
            'Autoplay video membutuhkan muted/playsinline.'
        );

    });

}


/* =========================================================
   PARALLAX HERO
========================================================= */

window.addEventListener(
    'scroll',
    function () {

        const heroVisual =
            document.querySelector('.hero-visual');

        if (
            heroVisual &&
            window.scrollY < window.innerHeight
        ) {

            heroVisual.style.transform =
                `translateY(${window.scrollY * 0.08}px)`;

        }

    }
);

</script>

</body>

</html>