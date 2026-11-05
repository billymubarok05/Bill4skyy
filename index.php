<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bill4skyy — Software Engineer & Creative Designer</title>

    <meta
        name="description"
        content="Portfolio Bill4skyy — Software Engineer, Web Developer, UI/UX Designer, Typography & Branding."
    >

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <style>

        /* =========================================================
           RESET
        ========================================================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background:
                radial-gradient(
                    circle at 50% 10%,
                    rgba(89, 70, 255, .08),
                    transparent 30%
                ),
                #08080d;

            color: #fff;

            font-family: "Inter", sans-serif;

            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        button,
        input,
        textarea {
            font-family: inherit;
        }

        ::selection {
            background: #6366f1;
            color: #fff;
        }

        /* =========================================================
           VARIABLES
        ========================================================= */

        :root {
            --bg: #08080d;
            --bg-2: #0c0c14;
            --card: rgba(17, 17, 28, .68);
            --border: rgba(255,255,255,.09);

            --purple: #7c3aed;
            --violet: #8b5cf6;
            --blue: #3b82f6;
            --cyan: #06b6d4;

            --text: #ffffff;
            --muted: #9ca3af;

            --gradient:
                linear-gradient(
                    90deg,
                    #8b5cf6 0%,
                    #3b82f6 55%,
                    #06b6d4 100%
                );

            --container: 1180px;
        }

        /* =========================================================
           SCROLLBAR
        ========================================================= */

        ::-webkit-scrollbar {
            width: 7px;
        }

        ::-webkit-scrollbar-track {
            background: #07070b;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(#7c3aed, #06b6d4);
            border-radius: 20px;
        }

        /* =========================================================
           BACKGROUND EFFECT
        ========================================================= */

        .bg-grid {
            position: fixed;
            inset: 0;

            pointer-events: none;

            opacity: .16;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.025) 1px,
                    transparent 1px
                );

            background-size: 60px 60px;

            mask-image: linear-gradient(
                to bottom,
                black,
                transparent 80%
            );

            z-index: -3;
        }

        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            opacity: .12;
            z-index: -2;
        }

        .orb-1 {
            width: 400px;
            height: 400px;
            background: #6d28d9;
            top: 0;
            left: -200px;
        }

        .orb-2 {
            width: 350px;
            height: 350px;
            background: #2563eb;
            right: -180px;
            top: 700px;
        }

        /* =========================================================
           CONTAINER
        ========================================================= */

        .container {
            width: min(100% - 40px, var(--container));
            margin: auto;
        }

        section {
            position: relative;
            padding: 120px 0;
        }

        /* =========================================================
           HEADER
        ========================================================= */

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;

            background:
                rgba(8,8,13,.72);

            backdrop-filter: blur(20px);

            border-bottom:
                1px solid rgba(255,255,255,.06);
        }

        .navbar {
            width: min(100% - 40px, 1180px);
            height: 88px;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            width: 145px;
            max-height: 55px;
            object-fit: contain;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 34px;
        }

        .nav-links a {
            color: #a8a8b4;
            font-size: 14px;
            font-weight: 500;
            transition: .3s;
        }

        .nav-links a:hover {
            color: #fff;
        }

        .nav-cta {
            padding: 12px 22px;

            border: 1px solid rgba(124,58,237,.45);

            border-radius: 999px;

            background:
                rgba(124,58,237,.07);

            transition: .3s;
        }

        .nav-cta:hover {
            background: rgba(124,58,237,.18);
            box-shadow:
                0 0 30px rgba(124,58,237,.18);
        }

        .status-dot {
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #22c55e;
            margin-right: 7px;
            box-shadow: 0 0 12px rgba(34,197,94,.8);
        }

        .menu-btn {
            display: none;
            color: #fff;
            background: none;
            border: 0;
            font-size: 22px;
        }

        /* =========================================================
           HERO
        ========================================================= */

        .hero {
            min-height: 100vh;

            display: flex;
            align-items: center;

            padding-top: 120px;

            overflow: hidden;
        }

        .hero-wrapper {
            width: min(100% - 40px, var(--container));
            margin: auto;

            display: grid;
            grid-template-columns: 1.05fr .95fr;

            align-items: center;

            gap: 50px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .eyebrow {
            color: #8b7cf6;

            letter-spacing: 5px;

            text-transform: uppercase;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 25px;
        }

        .hero h1 {
            font-family: "Space Grotesk", sans-serif;

            font-size:
                clamp(50px, 8vw, 100px);

            line-height: .9;

            letter-spacing: -5px;

            margin-bottom: 28px;
        }

        .gradient-text {
            background: var(--gradient);

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .hero-description {
            max-width: 650px;

            color: #a5a5b1;

            line-height: 1.8;

            font-size: 16px;

            margin-bottom: 35px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 15px 27px;

            border-radius: 999px;

            font-size: 14px;

            font-weight: 700;

            transition: .3s;

            cursor: pointer;
        }

        .btn-primary {
            background:
                linear-gradient(
                    100deg,
                    #6d4aff,
                    #4f8cff
                );

            box-shadow:
                0 0 30px rgba(99,102,241,.22);
        }

        .btn-primary:hover {
            transform: translateY(-3px);

            box-shadow:
                0 0 40px rgba(99,102,241,.38);
        }

        .btn-outline {
            border:
                1px solid rgba(255,255,255,.18);

            background:
                rgba(255,255,255,.015);

            color: #fff;
        }

        .btn-outline:hover {
            border-color: rgba(124,58,237,.7);

            background:
                rgba(124,58,237,.08);

            transform: translateY(-3px);
        }

        /* =========================================================
           HERO VISUAL
        ========================================================= */

        .hero-visual {
            position: relative;

            display: flex;

            justify-content: center;

            align-items: center;
        }

        .hero-circle {
            position: relative;

            width: min(430px, 75vw);
            aspect-ratio: 1;

            border-radius: 50%;

            padding: 8px;

            background:
                conic-gradient(
                    from 0deg,
                    #7c3aed,
                    #3b82f6,
                    #06b6d4,
                    #7c3aed
                );

            animation:
                rotateGlow 12s linear infinite;
        }

        @keyframes rotateGlow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .hero-circle-inner {
            width: 100%;
            height: 100%;

            border-radius: 50%;

            overflow: hidden;

            background: #0a0a10;

            position: relative;
        }

        .hero-circle-inner img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            animation:
                imageCounterRotate 12s linear infinite;
        }

        @keyframes imageCounterRotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(-360deg);
            }
        }

        .hero-circle::before {
            content: "";

            position: absolute;

            inset: -40px;

            border-radius: 50%;

            background:
                linear-gradient(
                    90deg,
                    rgba(124,58,237,.25),
                    rgba(6,182,212,.2)
                );

            filter: blur(50px);

            z-index: -1;
        }

        .floating-stat {
            position: absolute;

            padding: 15px 20px;

            border:
                1px solid rgba(255,255,255,.09);

            border-radius: 15px;

            background:
                rgba(13,13,22,.82);

            backdrop-filter: blur(20px);

            box-shadow:
                0 20px 60px rgba(0,0,0,.3);
        }

        .floating-stat strong {
            display: block;

            font-family: "Space Grotesk", sans-serif;

            font-size: 25px;

            background: var(--gradient);

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;
        }

        .floating-stat span {
            color: #858592;

            font-size: 11px;
        }

        .stat-project {
            left: -20px;
            bottom: 15%;
        }

        .stat-year {
            right: -20px;
            top: 15%;
        }

        /* =========================================================
           SCROLL
        ========================================================= */

        .scroll-indicator {
            position: absolute;

            bottom: 35px;

            left: 50%;

            transform: translateX(-50%);

            text-align: center;

            color: #6f6f7c;

            font-size: 10px;

            letter-spacing: 3px;
        }

        .mouse {
            width: 22px;
            height: 34px;

            border:
                1px solid rgba(255,255,255,.4);

            border-radius: 20px;

            margin: 10px auto 0;

            position: relative;
        }

        .mouse::before {
            content: "";

            position: absolute;

            width: 3px;
            height: 7px;

            border-radius: 10px;

            background: #fff;

            left: 50%;
            top: 7px;

            transform: translateX(-50%);

            animation: scrollMouse 1.7s infinite;
        }

        @keyframes scrollMouse {
            0% {
                opacity: 0;
                transform: translate(-50%, 0);
            }

            30% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: translate(-50%, 10px);
            }
        }

        /* =========================================================
           SECTION HEADER
        ========================================================= */

        .section-header {
            text-align: center;

            margin-bottom: 65px;
        }

        .section-label {
            color: #7c6cf4;

            letter-spacing: 5px;

            font-size: 12px;

            font-weight: 700;

            margin-bottom: 17px;
        }

        .section-title {
            font-family: "Space Grotesk", sans-serif;

            font-size:
                clamp(38px, 6vw, 65px);

            letter-spacing: -3px;

            line-height: 1;
        }

        /* =========================================================
           ABOUT
        ========================================================= */

        .about-grid {
            display: grid;

            grid-template-columns: .95fr 1.05fr;

            gap: 70px;

            align-items: center;
        }

        .about-photo {
            position: relative;

            border-radius: 20px;

            overflow: hidden;

            border:
                1px solid rgba(124,58,237,.28);

            background:
                linear-gradient(
                    135deg,
                    rgba(124,58,237,.08),
                    rgba(6,182,212,.03)
                );

            min-height: 570px;
        }

        .about-photo img {
            width: 100%;
            height: 100%;

            min-height: 570px;

            object-fit: cover;

            transition: .7s;
        }

        .about-photo:hover img {
            transform: scale(1.04);
        }

        .about-photo::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    to top,
                    rgba(8,8,13,.3),
                    transparent 50%
                );

            pointer-events: none;
        }

        .about-content h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 30px;

            margin-bottom: 25px;
        }

        .about-content p {
            color: #9b9ba8;

            line-height: 1.9;

            margin-bottom: 22px;
        }

        .info-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 14px;

            margin: 35px 0;
        }

        .info-item {
            padding: 18px;

            border:
                1px solid rgba(255,255,255,.07);

            border-radius: 13px;

            background:
                rgba(255,255,255,.018);
        }

        .info-item span {
            display: block;

            color: #666674;

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 6px;
        }

        .info-item strong {
            color: #dddde4;

            font-size: 14px;
        }

        /* =========================================================
           SKILLS
        ========================================================= */

        .skills-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 18px;
        }

        .skill-card {
            position: relative;

            min-height: 300px;

            padding: 30px;

            border:
                1px solid rgba(255,255,255,.07);

            border-radius: 20px;

            background:
                linear-gradient(
                    145deg,
                    rgba(18,18,29,.72),
                    rgba(11,11,18,.45)
                );

            overflow: hidden;

            transition: .4s;
        }

        .skill-card::before {
            content: "";

            position: absolute;

            width: 160px;
            height: 160px;

            border-radius: 50%;

            right: -90px;
            bottom: -90px;

            background:
                rgba(124,58,237,.15);

            filter: blur(20px);
        }

        .skill-card:hover {
            transform: translateY(-8px);

            border-color:
                rgba(124,58,237,.38);

            box-shadow:
                0 20px 70px rgba(0,0,0,.25);
        }

        .skill-icon {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 15px;

            background:
                rgba(124,58,237,.1);

            border:
                1px solid rgba(124,58,237,.2);

            font-size: 21px;

            margin-bottom: 28px;
        }

        .skill-card h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 21px;

            margin-bottom: 17px;
        }

        .skill-list {
            list-style: none;

            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }

        .skill-list li {
            padding: 7px 10px;

            color: #9999a7;

            background:
                rgba(255,255,255,.035);

            border-radius: 7px;

            font-size: 11px;
        }

        /* =========================================================
           PROJECTS
        ========================================================= */

        .filter-buttons {
            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 10px;

            margin-bottom: 35px;
        }

        .filter-btn {
            border: 1px solid rgba(255,255,255,.08);

            background:
                rgba(255,255,255,.025);

            color: #858590;

            border-radius: 999px;

            padding: 10px 17px;

            cursor: pointer;

            transition: .3s;
        }

        .filter-btn.active,
        .filter-btn:hover {
            color: #fff;

            border-color:
                rgba(124,58,237,.55);

            background:
                rgba(124,58,237,.1);
        }

        .projects-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 25px;
        }

        .project-card {
            position: relative;

            overflow: hidden;

            border-radius: 20px;

            border:
                1px solid rgba(255,255,255,.07);

            background:
                #0d0d14;

            transition: .4s;
        }

        .project-card:hover {
            transform: translateY(-7px);

            border-color:
                rgba(124,58,237,.4);
        }

        .project-image {
            aspect-ratio: 16 / 9;

            overflow: hidden;

            background:
                #11111a;
        }

        .project-image img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            transition: .6s;
        }

        .project-card:hover .project-image img {
            transform: scale(1.06);
        }

        .project-info {
            padding: 25px;
        }

        .project-category {
            color: #7c6cf4;

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 2px;

            margin-bottom: 10px;
        }

        .project-info h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 23px;

            margin-bottom: 10px;
        }

        .project-info p {
            color: #858592;

            line-height: 1.7;

            font-size: 13px;

            margin-bottom: 18px;
        }

        .tags {
            display: flex;

            flex-wrap: wrap;

            gap: 7px;
        }

        .tag {
            font-size: 10px;

            padding: 6px 9px;

            color: #8e8e9b;

            background:
                rgba(255,255,255,.035);

            border-radius: 5px;
        }

        /* =========================================================
           EXPERIENCE
        ========================================================= */

        .experience-list {
            position: relative;

            max-width: 1000px;

            margin: auto;
        }

        .experience-list::before {
            content: "";

            position: absolute;

            top: 0;
            bottom: 0;

            left: 50%;

            width: 1px;

            background:
                linear-gradient(
                    to bottom,
                    transparent,
                    rgba(124,58,237,.7),
                    transparent
                );
        }

        .experience-item {
            width: 50%;

            padding: 0 45px 70px;

            position: relative;
        }

        .experience-item:nth-child(odd) {
            margin-right: auto;
            text-align: right;
        }

        .experience-item:nth-child(even) {
            margin-left: 50%;
            text-align: left;
        }

        .experience-dot {
            position: absolute;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background:
                #7c6cf4;

            box-shadow:
                0 0 20px rgba(124,58,237,.9);

            top: 7px;
        }

        .experience-item:nth-child(odd) .experience-dot {
            right: -5px;
        }

        .experience-item:nth-child(even) .experience-dot {
            left: -5px;
        }

        .experience-period {
            color: #6e6e7a;

            font-size: 11px;

            letter-spacing: 1px;

            margin-bottom: 10px;
        }

        .experience-role {
            font-family: "Space Grotesk", sans-serif;

            font-size: 22px;

            margin-bottom: 5px;
        }

        .experience-company {
            color: #7c6cf4;

            font-size: 13px;

            margin-bottom: 15px;
        }

        .experience-desc {
            color: #858592;

            font-size: 13px;

            line-height: 1.8;
        }

        /* =========================================================
           STATS
        ========================================================= */

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            border-top:
                1px solid rgba(255,255,255,.07);

            border-bottom:
                1px solid rgba(255,255,255,.07);
        }

        .stat-card {
            padding: 50px 20px;

            text-align: center;

            border-right:
                1px solid rgba(255,255,255,.07);
        }

        .stat-card:last-child {
            border-right: 0;
        }

        .stat-number {
            font-family: "Space Grotesk", sans-serif;

            font-size: 45px;

            font-weight: 700;

            background: var(--gradient);

            -webkit-background-clip: text;
            background-clip: text;

            color: transparent;

            margin-bottom: 8px;
        }

        .stat-label {
            color: #777783;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1px;
        }

        /* =========================================================
           CONTACT
        ========================================================= */

        .contact-grid {
            display: grid;

            grid-template-columns: .8fr 1.2fr;

            gap: 70px;

            align-items: start;
        }

        .contact-intro h3 {
            font-family: "Space Grotesk", sans-serif;

            font-size: 32px;

            margin-bottom: 18px;
        }

        .contact-intro p {
            color: #8d8d99;

            line-height: 1.8;

            margin-bottom: 35px;
        }

        .contact-info {
            display: grid;

            gap: 14px;
        }

        .contact-item {
            display: flex;

            align-items: center;

            gap: 17px;

            padding: 16px;

            border:
                1px solid rgba(255,255,255,.06);

            border-radius: 13px;

            background:
                rgba(255,255,255,.018);
        }

        .contact-icon {
            width: 43px;
            height: 43px;

            border-radius: 12px;

            display: flex;

            align-items: center;
            justify-content: center;

            background:
                rgba(124,58,237,.1);

            color: #8b7cf6;
        }

        .contact-item small {
            display: block;

            color: #64646f;

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 4px;
        }

        .contact-item strong {
            font-size: 13px;

            color: #dddde3;
        }

        .contact-form {
            display: grid;

            gap: 17px;
        }

        .form-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 17px;
        }

        .form-group label {
            display: block;

            color: #888894;

            font-size: 10px;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 9px;
        }

        .form-control {
            width: 100%;

            padding: 15px 17px;

            border:
                1px solid rgba(255,255,255,.08);

            border-radius: 12px;

            outline: none;

            color: #fff;

            background:
                rgba(255,255,255,.025);

            transition: .3s;
        }

        .form-control::placeholder {
            color: #4e4e59;
        }

        .form-control:focus {
            border-color:
                rgba(124,58,237,.65);

            background:
                rgba(124,58,237,.025);

            box-shadow:
                0 0 0 4px rgba(124,58,237,.05);
        }

        textarea.form-control {
            min-height: 160px;

            resize: vertical;
        }

        /* =========================================================
           FOOTER
        ========================================================= */

        footer {
            border-top:
                1px solid rgba(255,255,255,.06);

            padding: 35px 0;
        }

        .footer-inner {
            width: min(100% - 40px, var(--container));

            margin: auto;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;
        }

        .footer-logo img {
            width: 120px;
        }

        .footer-copy {
            color: #555561;

            font-size: 11px;
        }

        .social-links {
            display: flex;

            gap: 9px;
        }

        .social-links a {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            border:
                1px solid rgba(255,255,255,.07);

            border-radius: 50%;

            color: #858592;

            transition: .3s;
        }

        .social-links a:hover {
            color: #fff;

            border-color:
                rgba(124,58,237,.5);

            background:
                rgba(124,58,237,.08);

            transform: translateY(-3px);
        }

        /* =========================================================
           REVEAL ANIMATION
        ========================================================= */

        .reveal {
            opacity: 0;

            transform: translateY(35px);

            transition:
                opacity .8s ease,
                transform .8s ease;
        }

        .reveal.show {
            opacity: 1;

            transform: translateY(0);
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 900px) {

            .nav-links {
                position: fixed;

                top: 88px;
                left: 20px;
                right: 20px;

                display: none;

                flex-direction: column;

                padding: 25px;

                border:
                    1px solid rgba(255,255,255,.08);

                border-radius: 18px;

                background:
                    rgba(10,10,16,.95);

                backdrop-filter: blur(20px);
            }

            .nav-links.active {
                display: flex;
            }

            .menu-btn {
                display: block;
            }

            .hero-wrapper {
                grid-template-columns: 1fr;

                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-visual {
                margin-top: 40px;
            }

            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .about-photo {
                max-width: 600px;
                margin: auto;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .experience-list::before {
                left: 10px;
            }

            .experience-item,
            .experience-item:nth-child(even) {
                width: 100%;

                margin-left: 0;

                margin-right: 0;

                padding-left: 40px;

                padding-right: 0;

                text-align: left;
            }

            .experience-item:nth-child(odd) {
                text-align: left;
            }

            .experience-item:nth-child(odd) .experience-dot,
            .experience-item:nth-child(even) .experience-dot {
                left: 5px;
                right: auto;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-card:nth-child(2) {
                border-right: 0;
            }

            .stat-card:nth-child(-n+2) {
                border-bottom:
                    1px solid rgba(255,255,255,.07);
            }
        }

        @media (max-width: 600px) {

            section {
                padding: 90px 0;
            }

            .container {
                width: min(100% - 28px, var(--container));
            }

            .navbar {
                width: min(100% - 28px, var(--container));
            }

            .logo img {
                width: 120px;
            }

            .hero h1 {
                font-size: 54px;

                letter-spacing: -3px;
            }

            .hero {
                min-height: auto;

                padding-top: 150px;

                padding-bottom: 100px;
            }

            .hero-circle {
                width: 300px;
            }

            .stat-project {
                left: -5px;
            }

            .stat-year {
                right: -5px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .about-photo,
            .about-photo img {
                min-height: 450px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }

            .stat-card {
                padding: 35px 10px;
            }

            .stat-number {
                font-size: 34px;
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .section-title {
                font-size: 42px;
            }
        }

    </style>
</head>

<body>

<!-- =========================================================
     BACKGROUND
========================================================= -->

<div class="bg-grid"></div>
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>


<!-- =========================================================
     NAVBAR
========================================================= -->

<header>

    <nav class="navbar">

        <a href="#home" class="logo">
            <img
                src="assets/img/logo-bill4skyy.png"
                alt="Bill4skyy"
            >
        </a>

        <div class="nav-links" id="navLinks">

            <a href="#home">Home</a>

            <a href="#about">About</a>

            <a href="#skills">Skills</a>

            <a href="#projects">Projects</a>

            <a href="#experience">Experience</a>

            <a href="#contact">Contact</a>

            <a
                href="#contact"
                class="nav-cta"
            >
                <span class="status-dot"></span>
                Open Commission
            </a>

        </div>

        <button
            class="menu-btn"
            id="menuBtn"
            aria-label="Menu"
        >
            <i class="fa-solid fa-bars"></i>
        </button>

    </nav>

</header>


<!-- =========================================================
     HERO
========================================================= -->

<main>

<section
    id="home"
    class="hero"
>

    <div class="hero-wrapper">

        <div class="hero-content reveal">

            <div class="eyebrow">
                Software Engineer • Creative Designer
            </div>

            <h1>
                I'm <span class="gradient-text">bill4skyy</span>
            </h1>

            <p class="hero-description">
                Saya membangun pengalaman digital melalui
                software engineering, web development, UI/UX,
                typography, dan branding.
            </p>

            <div class="hero-buttons">

                <a
                    href="#projects"
                    class="btn btn-primary"
                >
                    Lihat Portfolio
                    <i
                        class="fa-solid fa-arrow-down"
                        style="margin-left:10px;"
                    ></i>
                </a>

                <a
                    href="#contact"
                    class="btn btn-outline"
                >
                    Hubungi Saya
                </a>

            </div>

        </div>


        <div class="hero-visual reveal">

            <div class="hero-circle">

                <div class="hero-circle-inner">

                    <img
                        src="assets/img/hero-dj-bill4skyy.png"
                        alt="Bill4skyy"
                    >

                </div>

            </div>

            <div class="floating-stat stat-project">
                <strong>50+</strong>
                <span>Projects</span>
            </div>

            <div class="floating-stat stat-year">
                <strong>3+</strong>
                <span>Years Experience</span>
            </div>

        </div>

    </div>


    <div class="scroll-indicator">

        <span>SCROLL</span>

        <div class="mouse"></div>

    </div>

</section>


<!-- =========================================================
     ABOUT
========================================================= -->

<section id="about">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                TENTANG SAYA
            </div>

            <h2 class="section-title">
                Who is <span class="gradient-text">bill4skyy?</span>
            </h2>

        </div>


        <div class="about-grid">

            <div class="about-photo reveal">

                <img
                    src="assets/img/about-bill4skyy.jpg"
                    alt="Bill4skyy"
                >

            </div>


            <div class="about-content reveal">

                <h3>
                    Software Engineer & Creative Designer
                </h3>

                <p>
                    Saya adalah seorang Software Engineer yang juga
                    memiliki passion di bidang UI/UX Design.
                    Saat ini berperan sebagai <strong>Web Dev Lead</strong>
                    dan mengelola digital experience untuk beberapa
                    brand dan project digital.
                </p>

                <p>
                    Dengan keahlian di bidang Typography, branding,
                    dan pengembangan web, saya membantu bisnis dan
                    individu untuk membangun kehadiran digital yang
                    profesional dan berkesan.
                </p>


                <div class="info-grid">

                    <div class="info-item">
                        <span>Nama</span>
                        <strong>bill4skyy</strong>
                    </div>

                    <div class="info-item">
                        <span>Lokasi</span>
                        <strong>Yogyakarta, Indonesia</strong>
                    </div>

                    <div class="info-item">
                        <span>Role</span>
                        <strong>Web Dev Lead</strong>
                    </div>

                    <div class="info-item">
                        <span>Status</span>
                        <strong>Open Commission</strong>
                    </div>

                </div>


                <a
                    href="#contact"
                    class="btn btn-primary"
                >
                    Let's Work Together
                    <i
                        class="fa-solid fa-arrow-right"
                        style="margin-left:10px;"
                    ></i>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     SKILLS
========================================================= -->

<section id="skills">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                KEAHLIAN
            </div>

            <h2 class="section-title">
                Skills & <span class="gradient-text">Technologies</span>
            </h2>

        </div>


        <div class="skills-grid">

            <!-- FRONTEND -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>
                    Frontend Development
                </h3>

                <ul class="skill-list">

                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                    <li>React.js</li>
                    <li>Tailwind CSS</li>
                    <li>Bootstrap</li>

                </ul>

            </div>


            <!-- BACKEND -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-server"></i>
                </div>

                <h3>
                    Backend Development
                </h3>

                <ul class="skill-list">

                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>Node.js</li>
                    <li>MySQL</li>
                    <li>REST API</li>
                    <li>Git</li>

                </ul>

            </div>


            <!-- UI UX -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-palette"></i>
                </div>

                <h3>
                    UI/UX Design
                </h3>

                <ul class="skill-list">

                    <li>Figma</li>
                    <li>Adobe XD</li>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>Wireframing</li>
                    <li>Prototyping</li>

                </ul>

            </div>


            <!-- TYPOGRAPHY -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-font"></i>
                </div>

                <h3>
                    Typography & Branding
                </h3>

                <ul class="skill-list">

                    <li>Type Design</li>
                    <li>Logo Design</li>
                    <li>Brand Identity</li>
                    <li>Visual System</li>
                    <li>Print Design</li>
                    <li>Packaging</li>

                </ul>

            </div>


            <!-- DIGITAL EXPERIENCE -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>

                <h3>
                    Digital Experience
                </h3>

                <ul class="skill-list">

                    <li>Responsive Design</li>
                    <li>PWA</li>
                    <li>Performance</li>
                    <li>SEO</li>
                    <li>Accessibility</li>

                </ul>

            </div>


            <!-- TOOLS -->

            <div class="skill-card reveal">

                <div class="skill-icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>

                <h3>
                    Creative Tools
                </h3>

                <ul class="skill-list">

                    <li>Figma</li>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>VS Code</li>
                    <li>GitHub</li>
                    <li>Blender</li>

                </ul>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     PROJECTS
========================================================= -->

<section id="projects">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                PORTFOLIO
            </div>

            <h2 class="section-title">
                Selected <span class="gradient-text">Projects</span>
            </h2>

        </div>


        <div class="filter-buttons reveal">

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


            <!-- PROJECT 1 -->

            <article
                class="project-card reveal"
                data-category="web-dev"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-makmur-jaya.jpg"
                        alt="Makmur Jaya Website"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=Makmur+Jaya'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        Web Development
                    </div>

                    <h3>
                        Makmur Jaya Website
                    </h3>

                    <p>
                        Full-stack web development untuk
                        platform bisnis digital.
                    </p>

                    <div class="tags">
                        <span class="tag">PHP</span>
                        <span class="tag">Laravel</span>
                        <span class="tag">Tailwind</span>
                    </div>

                </div>

            </article>


            <!-- PROJECT 2 -->

            <article
                class="project-card reveal"
                data-category="uiux"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-the-brinn.jpg"
                        alt="The Brinn Experience"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=The+Brinn'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        UI/UX
                    </div>

                    <h3>
                        The Brinn Experience
                    </h3>

                    <p>
                        Digital experience design untuk
                        brand lifestyle.
                    </p>

                    <div class="tags">
                        <span class="tag">Figma</span>
                        <span class="tag">UI/UX</span>
                        <span class="tag">Branding</span>
                    </div>

                </div>

            </article>


            <!-- PROJECT 3 -->

            <article
                class="project-card reveal"
                data-category="branding"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-baze-home.jpg"
                        alt="B.A.Z.E Home"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=BAZE+Home'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        Branding
                    </div>

                    <h3>
                        B.A.Z.E Home
                    </h3>

                    <p>
                        Brand identity dan digital presence
                        untuk home decor.
                    </p>

                    <div class="tags">
                        <span class="tag">Branding</span>
                        <span class="tag">Logo</span>
                        <span class="tag">Visual</span>
                    </div>

                </div>

            </article>


            <!-- PROJECT 4 -->

            <article
                class="project-card reveal"
                data-category="typography"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-thebpln.jpg"
                        alt="THEBPLN Typography"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=Typography'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        Typography
                    </div>

                    <h3>
                        THEBPLN Typography
                    </h3>

                    <p>
                        Custom typeface dan lettering artwork
                        untuk kebutuhan visual.
                    </p>

                    <div class="tags">
                        <span class="tag">Typography</span>
                        <span class="tag">Lettering</span>
                        <span class="tag">Art</span>
                    </div>

                </div>

            </article>


            <!-- PROJECT 5 -->

            <article
                class="project-card reveal"
                data-category="web-dev"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-brillian-laundry.jpg"
                        alt="Brillian Laundry"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=Brillian+Laundry'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        Web Development
                    </div>

                    <h3>
                        Brillian Laundry
                    </h3>

                    <p>
                        Laundry management system untuk
                        pengelolaan transaksi dan layanan.
                    </p>

                    <div class="tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                    </div>

                </div>

            </article>


            <!-- PROJECT 6 -->

            <article
                class="project-card reveal"
                data-category="uiux"
            >

                <div class="project-image">

                    <img
                        src="assets/img/project-uiux.jpg"
                        alt="UI UX Design"
                        onerror="this.src='https://placehold.co/1200x700/10101a/ffffff?text=UI%2FUX+Design'"
                    >

                </div>

                <div class="project-info">

                    <div class="project-category">
                        UI/UX
                    </div>

                    <h3>
                        Digital Product Design
                    </h3>

                    <p>
                        Interface design dan user experience
                        untuk produk digital.
                    </p>

                    <div class="tags">
                        <span class="tag">Figma</span>
                        <span class="tag">Prototype</span>
                        <span class="tag">UX</span>
                    </div>

                </div>

            </article>

        </div>

    </div>

</section>


<!-- =========================================================
     EXPERIENCE
========================================================= -->

<section id="experience">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                PENGALAMAN
            </div>

            <h2 class="section-title">
                Work <span class="gradient-text">Experience</span>
            </h2>

        </div>


        <div class="experience-list">


            <!-- EXPERIENCE 1 -->

            <div class="experience-item reveal">

                <span class="experience-dot"></span>

                <div class="experience-period">
                    2024 — Present
                </div>

                <div class="experience-role">
                    Web Dev Lead
                </div>

                <div class="experience-company">
                    @makmurjaya.ig
                </div>

                <div class="experience-desc">
                    Memimpin tim pengembangan web,
                    merancang arsitektur aplikasi, dan
                    mengimplementasikan solusi digital
                    untuk meningkatkan bisnis.
                </div>

            </div>


            <!-- EXPERIENCE 2 -->

            <div class="experience-item reveal">

                <span class="experience-dot"></span>

                <div class="experience-period">
                    2023 — Present
                </div>

                <div class="experience-role">
                    Digital Experience Manager
                </div>

                <div class="experience-company">
                    @the.brinn & @b.a.z.e.home
                </div>

                <div class="experience-desc">
                    Mengelola seluruh aspek digital experience
                    termasuk UI/UX, branding, dan content
                    strategy untuk dua brand.
                </div>

            </div>


            <!-- EXPERIENCE 3 -->

            <div class="experience-item reveal">

                <span class="experience-dot"></span>

                <div class="experience-period">
                    2022 — Present
                </div>

                <div class="experience-role">
                    Freelance UI/UX Designer
                </div>

                <div class="experience-company">
                    Open Commission
                </div>

                <div class="experience-desc">
                    Menerima berbagai commission project
                    untuk desain UI/UX, typography, dan
                    branding dari klien domestik maupun
                    internasional.
                </div>

            </div>


            <!-- EXPERIENCE 4 -->

            <div class="experience-item reveal">

                <span class="experience-dot"></span>

                <div class="experience-period">
                    2021 — Present
                </div>

                <div class="experience-role">
                    Software Engineer
                </div>

                <div class="experience-company">
                    Self-employed
                </div>

                <div class="experience-desc">
                    Mengembangkan berbagai aplikasi web
                    full-stack menggunakan PHP, Laravel,
                    React, dan teknologi modern lainnya.
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     STATISTICS
========================================================= -->

<section>

    <div class="container">

        <div class="stats-grid reveal">

            <div class="stat-card">

                <div class="stat-number">
                    50+
                </div>

                <div class="stat-label">
                    Projects Completed
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-number">
                    30+
                </div>

                <div class="stat-label">
                    Happy Clients
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-number">
                    3+
                </div>

                <div class="stat-label">
                    Years Experience
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-number">
                    8.3K
                </div>

                <div class="stat-label">
                    Followers
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTACT
========================================================= -->

<section id="contact">

    <div class="container">

        <div class="section-header reveal">

            <div class="section-label">
                KONTAK
            </div>

            <h2 class="section-title">
                Let's <span class="gradient-text">Connect</span>
            </h2>

            <p
                style="
                    max-width:620px;
                    margin:20px auto 0;
                    color:#888894;
                    line-height:1.8;
                "
            >
                Ada project yang ingin diwujudkan?
                Atau sekadar ingin ngobrol?
                Jangan ragu untuk menghubungi saya!
            </p>

        </div>


        <div class="contact-grid">

            <!-- CONTACT INFO -->

            <div class="contact-intro reveal">

                <h3>
                    Let's build something
                    <span class="gradient-text">
                        great.
                    </span>
                </h3>

                <p>
                    Ceritakan project, ide, atau kebutuhan
                    digital kamu. Saya terbuka untuk
                    collaboration maupun commission.
                </p>


                <div class="contact-info">

                    <a
                        href="mailto:hello@bill4skyy.com"
                        class="contact-item"
                    >

                        <div class="contact-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>

                            <small>
                                Email
                            </small>

                            <strong>
                                hello@bill4skyy.com
                            </strong>

                        </div>

                    </a>


                    <a
                        href="https://instagram.com/bill4skyy"
                        target="_blank"
                        class="contact-item"
                    >

                        <div class="contact-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </div>

                        <div>

                            <small>
                                Instagram
                            </small>

                            <strong>
                                @bill4skyy
                            </strong>

                        </div>

                    </a>


                    <div class="contact-item">

                        <div class="contact-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>

                            <small>
                                Location
                            </small>

                            <strong>
                                Yogyakarta, Indonesia
                            </strong>

                        </div>

                    </div>

                </div>

            </div>


            <!-- FORM -->

            <form
                class="contact-form reveal"
                id="contactForm"
            >

                <div class="form-row">

                    <div class="form-group">

                        <label for="name">
                            Nama
                        </label>

                        <input
                            id="name"
                            name="name"
                            type="text"
                            class="form-control"
                            placeholder="Nama lengkap Anda"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email
                        </label>

                        <input
                            id="email"
                            name="email"
                            type="email"
                            class="form-control"
                            placeholder="email@example.com"
                            required
                        >

                    </div>

                </div>


                <div class="form-group">

                    <label for="subject">
                        Subject
                    </label>

                    <input
                        id="subject"
                        name="subject"
                        type="text"
                        class="form-control"
                        placeholder="Project yang ingin didiskusikan"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="message">
                        Pesan
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        class="form-control"
                        placeholder="Ceritakan tentang project Anda..."
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="border:0;"
                >
                    Kirim Pesan
                    <i
                        class="fa-solid fa-paper-plane"
                        style="margin-left:10px;"
                    ></i>
                </button>

            </form>

        </div>

    </div>

</section>

</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="footer-inner">

        <a
            href="#home"
            class="footer-logo"
        >

            <img
                src="assets/img/logo-bill4skyy.png"
                alt="Bill4skyy"
            >

        </a>


        <div class="footer-copy">

            © <span id="year"></span>
            Bill4skyy. All rights reserved.

        </div>


        <div class="social-links">

            <a
                href="https://instagram.com/bill4skyy"
                target="_blank"
                aria-label="Instagram"
            >
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a
                href="https://open.spotify.com/"
                target="_blank"
                aria-label="Spotify"
            >
                <i class="fa-brands fa-spotify"></i>
            </a>

            <a
                href="#"
                aria-label="GitHub"
            >
                <i class="fa-brands fa-github"></i>
            </a>

            <a
                href="#"
                aria-label="LinkedIn"
            >
                <i class="fa-brands fa-linkedin-in"></i>
            </a>

            <a
                href="#"
                aria-label="Threads"
            >
                <i class="fa-brands fa-threads"></i>
            </a>

        </div>

    </div>

</footer>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

    /* =========================================================
       MOBILE MENU
    ========================================================= */

    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", function () {

        navLinks.classList.toggle("active");

        const icon = menuBtn.querySelector("i");

        if (navLinks.classList.contains("active")) {
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

            navLinks.classList.remove("active");

            const icon = menuBtn.querySelector("i");

            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars");

        });

    });


    /* =========================================================
       REVEAL ANIMATION
    ========================================================= */

    const revealElements =
        document.querySelectorAll(".reveal");

    const revealObserver =
        new IntersectionObserver(
            function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("show");

                        revealObserver.unobserve(
                            entry.target
                        );

                    }

                });

            },
            {
                threshold: .1
            }
        );


    revealElements.forEach(function(element) {

        revealObserver.observe(element);

    });


    /* =========================================================
       PROJECT FILTER
    ========================================================= */

    const filterButtons =
        document.querySelectorAll(".filter-btn");

    const projectCards =
        document.querySelectorAll(".project-card");


    filterButtons.forEach(function(button) {

        button.addEventListener("click", function() {

            const filter =
                this.dataset.filter;


            filterButtons.forEach(function(btn) {
                btn.classList.remove("active");
            });

            this.classList.add("active");


            projectCards.forEach(function(card) {

                const category =
                    card.dataset.category;


                if (
                    filter === "all" ||
                    category === filter
                ) {

                    card.style.display = "block";

                    setTimeout(function() {
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }, 10);

                } else {

                    card.style.opacity = "0";
                    card.style.transform = "translateY(15px)";

                    setTimeout(function() {
                        card.style.display = "none";
                    }, 250);

                }

            });

        });

    });


    /* =========================================================
       COPYRIGHT YEAR
    ========================================================= */

    document.getElementById("year").textContent =
        new Date().getFullYear();


    /* =========================================================
       CONTACT FORM
    ========================================================= */

    const contactForm =
        document.getElementById("contactForm");


    contactForm.addEventListener("submit", function(event) {

        event.preventDefault();


        const name =
            document.getElementById("name").value.trim();

        const email =
            document.getElementById("email").value.trim();

        const subject =
            document.getElementById("subject").value.trim();

        const message =
            document.getElementById("message").value.trim();


        const whatsappMessage =
            `Halo Bill4skyy,

Nama: ${name}
Email: ${email}

Subject:
${subject}

Pesan:
${message}`;


        const whatsappURL =
            "https://wa.me/6280000000000?text=" +
            encodeURIComponent(whatsappMessage);


        window.open(
            whatsappURL,
            "_blank"
        );

    });


    /* =========================================================
       SMOOTH SCROLL
    ========================================================= */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(function(anchor) {

        anchor.addEventListener("click", function(event) {

            const target =
                document.querySelector(
                    this.getAttribute("href")
                );

            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });

            }

        });

    });

</script>

</body>
</html>