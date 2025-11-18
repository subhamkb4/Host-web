<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENX DADU - Bio Profile</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@400;500&family=Hind+Siliguri:wght@400;500;600&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Root for Color Variables */
        :root {
            --primary-bg: linear-gradient(135deg, #6e7fd1, #3b9bff); /* Blue Gradient */
            --card-bg: rgba(255, 255, 255, 0.1); /* Semi-transparent for Glassmorphism */
            --card-hover: rgba(255, 255, 255, 0.2);
            --text-color: #fff;
            --designation-color: #3b9bff;
            --bio-color: #aaa;
            --social-icon-hover-bg: #3b9bff;
            --social-icon-hover-color: #fff;
            --box-shadow: rgba(0, 0, 0, 0.15) 0px 10px 30px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Applying Fonts */
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--primary-bg);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: var(--text-color);
            position: relative;
            overflow: hidden;
        }

        /* Bengali text font */
        .bio {
            font-family: 'Hind Siliguri', sans-serif;
        }

        /* Domain Owner font */
        .designation {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }

        /* Matrix effect background */
        .matrix {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: black;
            font-family: monospace;
            font-size: 20px;
            line-height: 1.5;
            color: #0F0;
            white-space: nowrap;
        }

        .matrix span {
            position: absolute;
            color: #0F0;
            font-family: monospace;
            font-size: 20px;
            animation: matrixAnimation 0.5s linear infinite;
        }

        @keyframes matrixAnimation {
            0% {
                opacity: 0.1;
                top: -100%;
            }
            100% {
                opacity: 1;
                top: 100%;
            }
        }

        /* Profile Card Style */
        .profile-card {
            background: var(--card-bg);
            width: 350px;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            backdrop-filter: blur(10px); /* Glassmorphism effect */
            border: 2px solid rgba(255, 255, 255, 0.2);
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .profile-card:hover {
            transform: translateY(-10px);
            background: var(--card-hover);
            box-shadow: rgba(0, 0, 0, 0.2) 0px 20px 50px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            border: 4px solid #fff;
            animation: scaleUp 1s ease-in-out;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(0.8);
            }
            100% {
                transform: scale(1);
            }
        }

        .profile-info h1 {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .designation {
            font-size: 20px;
            color: var(--designation-color);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .bio {
            font-size: 16px;
            line-height: 1.6;
            color: var(--bio-color);
            margin-bottom: 30px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            opacity: 0;
            animation: fadeIn 1.5s 0.5s forwards;
        }

        @keyframes fadeIn {
            0% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .social-icon {
            font-size: 24px;
            color: var(--text-color);
            text-decoration: none;
            padding: 14px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
        }

        .social-icon:hover {
            background-color: var(--social-icon-hover-bg);
            color: var(--social-icon-hover-color);
            transform: scale(1.1) translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Smooth hover effect */
        .social-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: var(--social-icon-hover-bg);
            transition: all 0.5s ease;
            transform: scale(0.9);
            z-index: -1;
            opacity: 0;
        }

        .social-icon:hover::before {
            transform: scale(1.1);
            opacity: 1;
        }

        /* Tooltip Styling */
        .social-icon::after {
            content: attr(data-tooltip);
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            visibility: hidden;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .social-icon:hover::after {
            visibility: visible;
            opacity: 1;
            transform: translateX(-50%) translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Matrix Background -->
    <div class="matrix">
        <!-- The matrix text will be dynamically created here -->
    </div>

    <!-- Profile Card -->
    <div class="container d-flex justify-content-center align-items-center h-100">
        <div class="profile-card">
            <img src="https://expcyber.my.id/images/profile.png" alt="Profile Picture" class="profile-img">
            <div class="profile-info">
                <h1>GENX DADU</h1>
                <p class="designation">DOMAIN OWNER</p>
                <p class="bio">আসসালামু আলাইকুম! এটি আমার ব্যক্তিগত ডোমেইন। কোনো সমস্যা বা জিজ্ঞাসা থাকলে নির্দ্বিধায় আমার সাথে যোগাযোগ করতে পারেন। আপনার মূল্যবান পরামর্শ ও মতামত সাদরে গ্রহণযোগ্য।</p>
            </div>
            <div class="social-links">
                <a href="https://t.me/GENXONE" class="social-icon" data-tooltip="Telegram Channel"><i class="fab fa-telegram-plane"></i></a>
                <a href="https://t.me/EXPOSED_CYBER" class="social-icon" data-tooltip="Community"><i class="fab fa-discourse"></i></a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Matrix effect with JavaScript
        const matrixContainer = document.querySelector('.matrix');
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#$%^&*()'.split('');
        
        // Dynamically create the text for the matrix effect
        let spans = [];
        for (let i = 0; i < 100; i++) {
            let span = document.createElement('span');
            span.innerText = characters[Math.floor(Math.random() * characters.length)];
            spans.push(span);
            matrixContainer.appendChild(span);
            span.style.left = `${Math.random() * 100}%`;
            span.style.animationDuration = `${Math.random() * 2 + 1}s`; // Randomize animation speed
        }
    </script>
</body>
</html>