<?php

/**
 * The template for the front page.
 *
 * @package TechGrow_Solutions
 */

get_header(); ?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-glow glow-1"></div>
        <div class="hero-glow glow-2"></div>
        <div class="container hero-content" data-aos="fade-up">
            <h1><span class="gradient-text">Elevate Your Vision</span> with <br>Elite Digital Craftsmanship</h1>
            <p>We engineer high-end websites and bespoke digital products for forward-thinking brands. TechGrow Solutions is where innovation meets precision.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn">Initiate Project</a>
                <a href="#services" class="btn btn-secondary" style="margin-left: 15px;">Explore Services</a>
            </div>
        </div>
    </section>

    <!-- Premium Services Section -->
    <section id="services" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Premium <span class="gradient-text">Services</span></h2>
                <p>Tailored digital solutions designed to scale your business and dominate your niche.</p>
            </div>
            <div class="grid grid-3">
                <div class="card service-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-code" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block;"></i>
                    <h3>Bespoke Web Engineering</h3>
                    <p>Building high-performance, secure, and scalable web architectures tailored to your unique business needs.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-paint-brush" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block;"></i>
                    <h3>High-End Product Design</h3>
                    <p>Crafting visually stunning and conversion-focused user experiences that define your brand's digital presence.</p>
                </div>
                <div class="card service-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-rocket" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block;"></i>
                    <h3>Digital Growth Strategy</h3>
                    <p>Integrated solutions that leverage technology to optimize operations and accelerate your market reach.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section section-bg-navy">
        <div class="glow-accent glow-blue" style="top: 10%; left: 5%;"></div>
        <div class="container">
            <div class="grid grid-2" style="align-items: center; gap: 80px;">
                <div class="about-content" data-aos="fade-right">
                    <div class="section-title" style="text-align: left; margin-bottom: 30px;">
                        <h2>The <span class="gradient-text">Standard of Excellence</span></h2>
                    </div>
                    <p>At TechGrow Solutions, we don't just build software; we engineer growth. Our approach combines technical mastery with strategic insight to deliver unparalleled results for global brands and forward-thinking startups.</p>
                    <div class="highlights">
                        <div class="highlight-item" style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 20px;">
                            <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-glow); border: 1px solid rgba(0, 123, 255, 0.2); box-shadow: 0 0 15px rgba(0, 123, 255, 0.15);">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; font-size: 1.2rem;">Radical Innovation</h4>
                                <p style="margin: 0; font-size: 0.95rem;">We pioneer new digital frontiers by leveraging cutting-edge AI and blockchain technologies to keep your business ahead of the curve.</p>
                            </div>
                        </div>
                        <div class="highlight-item" style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 20px;">
                            <div style="width: 50px; height: 50px; background: rgba(40, 167, 69, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--secondary-glow); border: 1px solid rgba(40, 167, 69, 0.2); box-shadow: 0 0 15px rgba(40, 167, 69, 0.15);">
                                <i class="fas fa-gem"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; font-size: 1.2rem;">Uncompromising Quality</h4>
                                <p style="margin: 0; font-size: 0.95rem;">Our precision-engineered solutions undergo rigorous testing to ensure zero-compromise performance, security, and scalability.</p>
                            </div>
                        </div>
                        <div class="highlight-item" style="margin-bottom: 25px; display: flex; align-items: flex-start; gap: 20px;">
                            <div style="width: 50px; height: 50px; background: rgba(0, 123, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-glow); border: 1px solid rgba(0, 123, 255, 0.2); box-shadow: 0 0 15px rgba(0, 123, 255, 0.15);">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div>
                                <h4 style="margin-bottom: 5px; font-size: 1.2rem;">Strategic Partnership</h4>
                                <p style="margin: 0; font-size: 0.95rem;">We don't just work for you; we grow with you. Your vision is our mission, and your success is our primary KPI.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-image" data-aos="fade-left">
                    <div style="width: 100%; aspect-ratio: 1/1; background: rgba(255, 255, 255, 0.02); border-radius: var(--border-radius-lg); border: 1px solid rgba(255, 255, 255, 0.05); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; backdrop-filter: blur(5px);">
                        <div style="width: 80%; height: 80%; background: var(--primary-gradient); filter: blur(100px); opacity: 0.1; position: absolute;"></div>
                        <i class="fas fa-microchip" style="font-size: 8rem; color: var(--primary-glow); opacity: 0.5; z-index: 1; text-shadow: 0 0 30px rgba(0, 123, 255, 0.4);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>The <span class="gradient-text">TechGrow Advantage</span></h2>
                <p>We're dedicated to providing the best service and results for our clients.</p>
            </div>
            <div class="grid grid-4">
                <div class="card why-us-item" data-aos="zoom-in" data-aos-delay="100" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.02);">
                    <i class="fas fa-bolt" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block; text-shadow: 0 0 15px rgba(0, 123, 255, 0.3);"></i>
                    <h4>Rapid Execution</h4>
                    <p style="font-size: 0.95rem;">Swift delivery without sacrificing excellence. We move at the speed of business.</p>
                </div>
                <div class="card why-us-item" data-aos="zoom-in" data-aos-delay="200" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.02);">
                    <i class="fas fa-magic" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block; text-shadow: 0 0 15px rgba(0, 123, 255, 0.3);"></i>
                    <h4>Elite Aesthetics</h4>
                    <p style="font-size: 0.95rem;">Clean, modern, and high-conversion interfaces that define industry standards.</p>
                </div>
                <div class="card why-us-item" data-aos="zoom-in" data-aos-delay="300" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.02);">
                    <i class="fas fa-expand-arrows-alt" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block; text-shadow: 0 0 15px rgba(0, 123, 255, 0.3);"></i>
                    <h4>Scalable Architecture</h4>
                    <p style="font-size: 0.95rem;">Future-proof systems designed for massive growth and seamless stability.</p>
                </div>
                <div class="card why-us-item" data-aos="zoom-in" data-aos-delay="400" style="backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.02);">
                    <i class="fas fa-crown" style="font-size: 2.5rem; color: var(--primary-glow); margin-bottom: 25px; display: block; text-shadow: 0 0 15px rgba(0, 123, 255, 0.3);"></i>
                    <h4>Guaranteed Excellence</h4>
                    <p style="font-size: 0.95rem;">100% commitment to your vision with a focus on total client satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section section-bg-navy">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Selected <span class="gradient-text">Works</span></h2>
                <p>A glimpse into the high-impact solutions we've delivered for our partners.</p>
            </div>
            <div class="grid grid-3">
                <?php
                $args = array('post_type' => 'portfolio', 'posts_per_page' => 3);
                $portfolio_query = new WP_Query($args);
                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                        <div class="card portfolio-card" data-aos="fade-up" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                            <div style="aspect-ratio: 16/10; background: rgba(255, 255, 255, 0.02); border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; overflow: hidden; border: 1px solid rgba(255, 255, 255, 0.05);">
                                <?php if (has_post_thumbnail()) : the_post_thumbnail('large');
                                else : ?>
                                    <i class="fas fa-image" style="font-size: 3.5rem; color: var(--primary-glow); opacity: 0.3;"></i>
                                <?php endif; ?>
                            </div>
                            <h3 style="font-size: 1.5rem; margin-bottom: 15px;"><?php the_title(); ?></h3>
                            <div style="font-size: 0.95rem; color: var(--text-muted);"><?php the_excerpt(); ?></div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div class="card portfolio-card" data-aos="fade-up" data-aos-delay="100" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                        <div style="aspect-ratio: 16/10; background: rgba(255, 255, 255, 0.02); border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.05);">
                            <i class="fas fa-shopping-cart" style="font-size: 3.5rem; color: var(--primary-glow); opacity: 0.5; text-shadow: 0 0 20px rgba(0, 123, 255, 0.3);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Luxury E-Commerce</h3>
                        <p style="font-size: 0.95rem; color: var(--text-muted);">A seamless shopping experience for global brands with integrated AI recommendations.</p>
                    </div>
                    <div class="card portfolio-card" data-aos="fade-up" data-aos-delay="200" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                        <div style="aspect-ratio: 16/10; background: rgba(255, 255, 255, 0.02); border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.05);">
                            <i class="fas fa-chart-pie" style="font-size: 3.5rem; color: var(--primary-glow); opacity: 0.5; text-shadow: 0 0 20px rgba(0, 123, 255, 0.3);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Fintech Ecosystem</h3>
                        <p style="font-size: 0.95rem; color: var(--text-muted);">Secure mobile banking for the modern user with real-time fraud detection and high-speed processing.</p>
                    </div>
                    <div class="card portfolio-card" data-aos="fade-up" data-aos-delay="300" style="background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.05);">
                        <div style="aspect-ratio: 16/10; background: rgba(255, 255, 255, 0.02); border-radius: 12px; margin-bottom: 25px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255, 255, 255, 0.05);">
                            <i class="fas fa-heartbeat" style="font-size: 3.5rem; color: var(--primary-glow); opacity: 0.5; text-shadow: 0 0 20px rgba(0, 123, 255, 0.3);"></i>
                        </div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 15px;">Enterprise Health</h3>
                        <p style="font-size: 0.95rem; color: var(--text-muted);">Data-driven solutions for medical institutions, streamlining patient care and operational workflows.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="glow-accent glow-green" style="bottom: 10%; right: 5%;"></div>
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Start Your <span class="gradient-text">Transformation</span></h2>
                <p>Ready to redefine your digital presence? Let's discuss your next breakthrough.</p>
            </div>
            <div class="contact-form-wrapper" style="max-width: 800px; margin: 0 auto; background: rgba(255, 255, 255, 0.02); padding: 60px; border-radius: var(--border-radius-lg); border: 1px solid rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); box-shadow: 0 20px 50px rgba(0,0,0,0.3);" data-aos="fade-up">
                <form id="contact-form" action="#" method="POST">
                    <div class="grid grid-2">
                        <div style="margin-bottom: 30px;">
                            <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-muted);">Full Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required class="glow-input">
                        </div>
                        <div style="margin-bottom: 30px;">
                            <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-muted);">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required class="glow-input">
                        </div>
                    </div>
                    <div style="margin-bottom: 40px;">
                        <label style="display: block; margin-bottom: 10px; font-weight: 600; color: var(--text-muted);">Your Message</label>
                        <textarea id="message" name="message" rows="6" placeholder="Tell us about your project..." required class="glow-input" style="resize: none;"></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%; font-size: 1.1rem;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</main>

<style>
    .glow-input {
        width: 100%;
        padding: 18px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        outline: none;
        transition: var(--transition-base);
    }
    .glow-input:focus {
        border-color: var(--primary-glow);
        background: rgba(0, 123, 255, 0.05);
        box-shadow: 0 0 15px rgba(0, 123, 255, 0.2);
    }
</style>