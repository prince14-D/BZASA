<?php
/**
 * BZASA Website
 * About Us Page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | BZASA - Bendu Zinnah International School of Agriculture</title>
    <meta name="description" content="Learn about BZASA's mission, vision, history, and commitment to agricultural education in Sierra Leone.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php define('BZASA_DOCUMENT_STARTED', true); ?>
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- Page Header -->
        <section class="page-hero">
            <div class="page-hero-bg" style="background: linear-gradient(135deg, rgba(51,51,51,0.85), rgba(0,102,204,0.75)), url('assets/images/about-hero.jpg') center/cover;"></div>
            <div class="container">
                <div class="page-hero-content animate-on-scroll">
                    <span class="page-badge"><i class="fas fa-info-circle"></i> Discover Our Story</span>
                    <h1>About <span class="highlight">BZASA</span></h1>
                    <p class="page-subtitle">Bendu Zinnah International School of Agriculture - Cultivating Tomorrow's Agricultural Leaders</p>
                    <div class="page-breadcrumb">
                        <a href="index.php"><i class="fas fa-home"></i> Home</a>
                        <span>/</span>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="section mission-vision-section">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <span class="section-badge"><i class="fas fa-bullseye"></i> Our Purpose</span>
                    <h2>Mission & Vision</h2>
                    <p>Guiding principles that drive our commitment to agricultural excellence</p>
                </div>
                <div class="mission-vision-grid">
                    <div class="mission-card animate-on-scroll">
                        <div class="mission-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To provide world-class agricultural education that empowers students with knowledge, practical skills, and ethical values. We are dedicated to transforming Sierra Leone's agricultural sector by培养新一代创新型农民和研究人员 who will drive sustainable farming practices and food security across the nation.</p>
                        <div class="mission-stats">
                            <div class="mission-stat">
                                <span class="stat-number" data-count="500" data-suffix="+">0</span>
                                <span class="stat-label">Students Trained</span>
                            </div>
                            <div class="mission-stat">
                                <span class="stat-number" data-count="15" data-suffix="+">0</span>
                                <span class="stat-label">Partner Farms</span>
                            </div>
                        </div>
                    </div>
                    <div class="vision-card animate-on-scroll">
                        <div class="vision-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To become West Africa's premier agricultural institution, recognized for excellence in education, research, and community impact. We envision a future where every young person in Sierra Leone has access to quality agricultural training that opens doors to meaningful careers and entrepreneurship opportunities.</p>
                        <div class="vision-features">
                            <div class="vision-feature">
                                <i class="fas fa-seedling"></i>
                                <span>Sustainable Farming</span>
                            </div>
                            <div class="vision-feature">
                                <i class="fas fa-flask"></i>
                                <span>Research Excellence</span>
                            </div>
                            <div class="vision-feature">
                                <i class="fas fa-globe-africa"></i>
                                <span>Regional Leadership</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Preview Section -->
        <section class="section about-preview-section" style="background: var(--gray-light);">
            <div class="container">
                <div class="about-preview-grid">
                    <div class="about-preview-content animate-on-scroll">
                        <span class="section-badge"><i class="fas fa-history"></i> Our Story</span>
                        <h2>A Legacy of Agricultural Excellence</h2>
                        <p class="lead">Founded on the principles of Bendu Zinnah's vision, our school has grown to become a beacon of agricultural education in Sierra Leone.</p>
                        <p>Since our establishment, BZASA has been at the forefront of agricultural innovation, combining traditional farming wisdom with modern scientific techniques. Our comprehensive curriculum covers everything from crop science and animal husbandry to agricultural economics and sustainable farming practices.</p>
                        <p>We believe in learning by doing. That's why our students spend significant time in our demonstration farms, research plots, and partner agricultural enterprises throughout the country.</p>
                        <div class="about-features">
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>State-of-the-art facilities</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Experienced faculty members</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Practical hands-on training</span>
                            </div>
                            <div class="about-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Industry partnerships</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-preview-image animate-on-scroll">
                        <div class="about-image-wrapper">
                            <div class="about-image-placeholder">
                                <i class="fas fa-school"></i>
                                <span>BZASA Campus</span>
                            </div>
                            <div class="about-image-accent"></div>
                        </div>
                        <div class="about-year-badge">
                            <span class="year">Est.</span>
                            <span class="year-number">2015</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values Section -->
        <section class="section core-values-section">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <span class="section-badge"><i class="fas fa-heart"></i> Our Values</span>
                    <h2>Core Values</h2>
                    <p>The principles that guide everything we do at BZASA</p>
                </div>
                <div class="values-grid">
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3>Excellence</h3>
                        <p>We strive for the highest standards in education, research, and community service, continuously pushing boundaries to achieve greatness.</p>
                    </div>
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>Integrity</h3>
                        <p>We build trust through honest, ethical behavior and transparent operations, fostering lasting relationships with our community.</p>
                    </div>
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Innovation</h3>
                        <p>We embrace new ideas and creative solutions, encouraging our students to think outside the box and pioneer change.</p>
                    </div>
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Inclusivity</h3>
                        <p>We celebrate diversity and foster a sense of belonging, ensuring every student has equal opportunities to succeed.</p>
                    </div>
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-people-carry"></i>
                        </div>
                        <h3>Community</h3>
                        <p>We work together for common goals, building strong partnerships with local farmers, organizations, and stakeholders.</p>
                    </div>
                    <div class="value-card animate-on-scroll">
                        <div class="value-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Sustainability</h3>
                        <p>We promote environmentally responsible practices, preparing students to address climate change and preserve our natural resources.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="section stats-section" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="stat-number" data-count="500" data-suffix="+">0</div>
                        <div class="stat-label">Students Enrolled</div>
                    </div>
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="stat-number" data-count="35" data-suffix="+">0</div>
                        <div class="stat-label">Expert Faculty</div>
                    </div>
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="stat-number" data-count="12" data-suffix="">0</div>
                        <div class="stat-label">Programs Offered</div>
                    </div>
                    <div class="stat-item animate-on-scroll">
                        <div class="stat-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="stat-number" data-count="95" data-suffix="%">0</div>
                        <div class="stat-label">Graduate Success</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership Section -->
        <section class="section leadership-section">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <span class="section-badge"><i class="fas fa-users-cog"></i> Our Team</span>
                    <h2>Leadership Team</h2>
                    <p>Dedicated professionals guiding BZASA toward excellence</p>
                </div>
                <div class="team-grid">
                    <div class="team-card animate-on-scroll">
                        <div class="team-image">
                            <div class="team-placeholder">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Dr. Emmanuel K. Sesay</h3>
                            <span class="team-role">Principal</span>
                            <p>Leading BZASA with over 20 years of experience in agricultural education and rural development.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card animate-on-scroll">
                        <div class="team-image">
                            <div class="team-placeholder">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Mrs. Fatmata J. Bangura</h3>
                            <span class="team-role">Vice Principal</span>
                            <p> Overseeing academic programs and student development with expertise in crop science.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card animate-on-scroll">
                        <div class="team-image">
                            <div class="team-placeholder">
                                <i class="fas fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Mr. Joseph M. Kargbo</h3>
                            <span class="team-role">Head of Agriculture</span>
                            <p>Bringing practical farming experience and research expertise to our curriculum.</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        <section class="section achievements-section" style="background: var(--gray-light);">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <span class="section-badge"><i class="fas fa-award"></i> Recognition</span>
                    <h2>Our Achievements</h2>
                    <p>Milestones that mark our journey of excellence</p>
                </div>
                <div class="achievements-timeline">
                    <div class="timeline-item animate-on-scroll">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2015</span>
                            <h3>School Founded</h3>
                            <p>BZASA established with a vision to transform agricultural education in Sierra Leone.</p>
                        </div>
                    </div>
                    <div class="timeline-item animate-on-scroll">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2017</span>
                            <h3>First Graduation</h3>
                            <p>Celebrated our first cohort of graduates, many now leading agricultural projects nationwide.</p>
                        </div>
                    </div>
                    <div class="timeline-item animate-on-scroll">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2019</span>
                            <h3>Research Center</h3>
                            <p>Opened state-of-the-art agricultural research center for student and faculty research.</p>
                        </div>
                    </div>
                    <div class="timeline-item animate-on-scroll">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2022</span>
                            <h3>National Recognition</h3>
                            <p>Received Ministry of Agriculture award for excellence in agricultural training.</p>
                        </div>
                    </div>
                    <div class="timeline-item animate-on-scroll">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <span class="timeline-year">2024</span>
                            <h3>Expansion</h3>
                            <p>Launched new programs in sustainable technology and agricultural entrepreneurship.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="section partners-section">
            <div class="container">
                <div class="section-header animate-on-scroll">
                    <span class="section-badge"><i class="fas fa-handshake"></i> Partners</span>
                    <h2>Our Partners</h2>
                    <p>Collaborating with leading organizations for agricultural advancement</p>
                </div>
                <div class="partners-grid">
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-university"></i>
                        <span>Ministry of Agriculture</span>
                    </div>
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-seedling"></i>
                        <span>FAO Sierra Leone</span>
                    </div>
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-globe"></i>
                        <span>World Food Program</span>
                    </div>
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-building"></i>
                        <span>Local Cooperatives</span>
                    </div>
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-industry"></i>
                        <span>AgriBusiness Inc.</span>
                    </div>
                    <div class="partner-logo animate-on-scroll">
                        <i class="fas fa-school"></i>
                        <span>UNIV. of Sierra Leone</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section cta-section" style="background: linear-gradient(135deg, var(--dark-color), var(--secondary-color));">
            <div class="container">
                <div class="cta-content animate-on-scroll">
                    <h2>Ready to Start Your Agricultural Journey?</h2>
                    <p>Join BZASA and become part of Sierra Leone's agricultural transformation. Applications are now open for the upcoming academic year.</p>
                    <div class="cta-buttons">
                        <a href="admissions.php" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Apply Now</a>
                        <a href="contact.php" class="btn btn-outline"><i class="fas fa-phone"></i> Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
