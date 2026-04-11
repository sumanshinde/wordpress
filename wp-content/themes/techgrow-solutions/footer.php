<footer style="background: var(--bg-dark); padding: 100px 0 50px; border-top: 1px solid rgba(255, 255, 255, 0.05); position: relative; overflow: hidden;">
    <div class="glow-accent glow-blue" style="bottom: -150px; left: -150px; opacity: 0.1;"></div>
    <div class="container">
        <div class="footer-grid" style="display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 60px; margin-bottom: 80px;">
            <div class="footer-links">
                <div class="footer-logo" style="font-size: 1.6rem; font-weight: 900; margin-bottom: 25px; letter-spacing: -1px;">TechGrow<span style="color: var(--primary-glow);">Solutions</span></div>
                <p style="font-size: 1rem; line-height: 1.6; color: var(--text-muted); margin-bottom: 30px;">Engineering the digital future with precision and elite craftsmanship. Where vision meets high-end execution.</p>
                <div class="social-icons" style="display: flex; gap: 20px;">
                    <?php
                    $socials = array('facebook' => 'fab fa-facebook-f', 'twitter' => 'fab fa-twitter', 'linkedin' => 'fab fa-linkedin-in', 'instagram' => 'fab fa-instagram');
                    foreach ($socials as $key => $icon) :
                        $url = get_theme_mod("techgrow_$key", "#");
                        if ($url) : ?>
                            <a href="<?php echo esc_url($url); ?>" style="width: 45px; height: 45px; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--text-muted); transition: var(--transition-base); text-decoration: none;">
                                <i class="<?php echo esc_attr($icon); ?>"></i>
                            </a>
                    <?php endif;
                    endforeach; ?>
                </div>
            </div>
            <div class="footer-links">
                <h4 style="font-size: 1.2rem; margin-bottom: 30px; color: var(--text-main);">Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu-list',
                    'fallback_cb'    => '__return_false',
                ));
                ?>
                <style>
                    .footer-menu-list {
                        list-style: none;
                        padding: 0;
                    }

                    .footer-menu-list li {
                        margin-bottom: 15px;
                    }

                    .footer-menu-list li a {
                        color: var(--text-muted);
                        text-decoration: none;
                        transition: var(--transition-base);
                        font-size: 1rem;
                    }

                    .footer-menu-list li a:hover {
                        color: var(--text-main);
                        padding-left: 5px;
                    }
                </style>
            </div>
            <div class="footer-links">
                <h4 style="font-size: 1.2rem; margin-bottom: 30px; color: var(--text-main);">Services</h4>
                <ul class="footer-menu-list">
                    <li><a href="#services">Web Engineering</a></li>
                    <li><a href="#services">Product Design</a></li>
                    <li><a href="#services">Growth Strategy</a></li>
                    <li><a href="#services">Architecture</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4 style="font-size: 1.2rem; margin-bottom: 30px; color: var(--text-main);">Contact Us</h4>
                <ul class="footer-menu-list">
                    <li style="display: flex; align-items: center; gap: 12px; color: var(--text-muted);">
                        <i class="fas fa-envelope" style="color: var(--primary-glow);"></i>
                        <?php echo esc_html(get_theme_mod('techgrow_email', 'info@techgrow.com')); ?>
                    </li>
                    <li style="display: flex; align-items: center; gap: 12px; color: var(--text-muted);">
                        <i class="fas fa-phone" style="color: var(--primary-glow);"></i>
                        <?php echo esc_html(get_theme_mod('techgrow_phone', '+1 (555) 123-4567')); ?>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 12px; color: var(--text-muted);">
                        <i class="fas fa-map-marker-alt" style="color: var(--primary-glow); margin-top: 5px;"></i>
                        <?php echo esc_html(get_theme_mod('techgrow_address', '123 Tech Avenue, Silicon Valley')); ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom" style="text-align: center; padding-top: 40px; border-top: 1px solid rgba(255, 255, 255, 0.05); color: var(--text-light); font-size: 0.9rem;">
            &copy; <?php echo date('Y'); ?> TechGrow Solutions. Crafted for Excellence.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>