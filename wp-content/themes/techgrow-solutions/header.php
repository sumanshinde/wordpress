<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        /* --- Header & Navigation --- */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 30px 0;
            transition: var(--transition-base);
        }

        .navbar.scrolled {
            padding: 20px 0;
            background: rgba(5, 5, 5, 0.8);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 900;
            color: var(--text-main);
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .logo span {
            color: var(--primary-glow);
            text-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .nav-links {
            display: flex;
            gap: 50px;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition-base);
            text-decoration: none;
        }

        .nav-links a:hover {
            color: var(--text-main);
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        /* --- Hero Section Styles --- */
        .hero-section {
            padding: 220px 0 140px;
            background: var(--bg-dark);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .hero-content {
            max-width: 1000px;
            margin: 0 auto;
            z-index: 1;
        }

        .hero-content h1 {
            margin-bottom: 30px;
        }

        .hero-content p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 50px;
        }

        /* Animated Glow Shapes */
        .hero-glow {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            filter: blur(150px);
            z-index: 0;
            opacity: 0.2;
            animation: pulse 10s infinite alternate;
        }

        @keyframes pulse {
            0% { transform: translate(-10%, -10%) scale(1); }
            100% { transform: translate(10%, 10%) scale(1.2); }
        }

        .glow-1 { top: -200px; left: -200px; background: var(--primary-glow); }
        .glow-2 { bottom: -200px; right: -200px; background: var(--secondary-glow); }

        @media (max-width: 768px) {
            .navbar { padding: 20px 0; }
            .nav-links { display: none; }
            .hero-section { padding: 160px 0 100px; }
        }
    </style>
    <script>
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar">
    <div class="container">
        <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                TechGrow<span>Solutions</span>
            </a>
        <?php endif; ?>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav-links',
            'fallback_cb'    => '__return_false',
        ) );
        ?>
        
        <a href="#contact" class="btn" style="padding: 14px 30px; font-size: 0.95rem;">Initiate Project</a>
    </div>
</nav>
