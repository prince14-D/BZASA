<?php
/**
 * BZASA - Bendu Zinnah International School of Agriculture
 * Home Page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | BZASA - Bendu Zinnah International School of Agriculture</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Slider -->
    <section class="hero-slider">
        <div class="slider-container">
            <div class="slide active" style="background: linear-gradient(135deg, rgba(255,107,0,0.9), rgba(0,102,204,0.8)), url('https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=1920') center/cover;">
                <div class="slide-content">
                    <h1 class="fade-in">Designing the Future</h1>
                    <h2 class="fade-in">Inspiring Generations</h2>
                    <p class="fade-in">Empowering women in Liberia through agriculture and entrepreneurship</p>
                    <div class="slide-buttons fade-in">
                        <a href="admissions.php" class="btn-primary">Apply Now</a>
                        <a href="programs.php" class="btn-secondary">Explore Programs</a>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background: linear-gradient(135deg, rgba(0,102,204,0.9), rgba(51,51,51,0.8)), url('https://images.unsplash.com/photo-1542838132-92c53300491e?w=1920') center/cover;">
                <div class="slide-content">
                    <h1 class="fade-in">Transforming Lives</h1>
                    <h2 class="fade-in">Through Agriculture</h2>
                    <p class="fade-in">From training to land allocation - we support your journey to success</p>
                    <div class="slide-buttons fade-in">
                        <a href="about.php" class="btn-primary">Learn More</a>
                        <a href="ai-assistant.php" class="btn-secondary">Talk to AI</a>
                    </div>
                </div>
            </div>
            
            <div class="slide" style="background: linear-gradient(135deg, rgba(51,51,51,0.9), rgba(255,107,0,0.8)), url('https://images.unsplash.com/photo-1595855759920-86582396756a?w=1920') center/cover;">
                <div class="slide-content">
                    <h1 class="fade-in">International</h1>
                    <h2 class="fade-in">Market Access</h2>
                    <p class="fade-in">Connecting Liberian women farmers to global opportunities</p>
                    <div class="slide-buttons fade-in">
                        <a href="programs.php" class="btn-primary">View Programs</a>
                        <a href="contact.php" class="btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>
            
            <div class="slider-nav">
                <button class="slider-dot active" data-slide="0"></button>
                <button class="slider-dot" data-slide="1"></button>
                <button class="slider-dot" data-slide="2"></button>
            </div>
            
            <button class="slider-arrow prev"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-arrow next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle fade-in">Who We Are</span>
                <h2 class="section-title fade-in">Our Purpose</h2>
            </div>
            
            <div class="mv-grid">
                <div class="mv-card mission fade-in">
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To educate and empower women in Liberia through agriculture, entrepreneurship, and vocational skills training, enabling them to become self-reliant business owners and community leaders.</p>
                </div>
                
                <div class="mv-card vision fade-in">
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To create a new generation of successful women farmers and entrepreneurs who contribute to Liberia's economic growth and compete in international markets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview -->
    <section class="about-preview">
        <div class="container">
            <div class="about-preview-grid">
                <div class="about-preview-content fade-in">
                    <span class="section-subtitle">About BZASA</span>
                    <h2>Bendu Zinnah International School of Agriculture</h2>
                    <p>Bendu Zinnah International School of Agriculture provides practical agricultural training, entrepreneurship education, housing, feeding, mentorship, and land support to help graduates establish successful farming businesses.</p>
                    <p>We are dedicated to transforming the lives of women in Liberia by providing them with the skills, resources, and support they need to become successful farmers and entrepreneurs.</p>
                    <ul class="about-features">
                        <li><i class="fas fa-check"></i> Practical Agricultural Training</li>
                        <li><i class="fas fa-check"></i> Entrepreneurship Education</li>
                        <li><i class="fas fa-check"></i> Housing & Daily Meals</li>
                        <li><i class="fas fa-check"></i> Land Allocation Program</li>
                        <li><i class="fas fa-check"></i> International Market Access</li>
                    </ul>
                    <a href="about.php" class="btn-primary">Learn More About Us</a>
                </div>
                <div class="about-preview-image fade-in">
                    <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?w=600" alt="Agriculture Training">
                    <div class="experience-badge">
                        <span class="number">5+</span>
                        <span class="text">Years of Impact</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Preview -->
    <section class="programs-preview">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle fade-in">What We Offer</span>
                <h2 class="section-title fade-in">Our Programs</h2>
                <p class="section-desc fade-in">Comprehensive training in agriculture and entrepreneurship</p>
            </div>
            
            <div class="programs-grid">
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-fish"></i>
                    </div>
                    <h3>Fishery & Aquaculture</h3>
                    <p>Fish farming, catfish production, pond management, and fish processing techniques.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3>Piggery Management</h3>
                    <p>Pig breeding, feeding management, disease control, and marketing strategies.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-egg"></i>
                    </div>
                    <h3>Poultry Management</h3>
                    <p>Broiler and layer production, hatchery management, and poultry business development.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Crop Farming</h3>
                    <p>Cocoa, palm, and groundnut farming with modern techniques and export preparation.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Business & Marketing</h3>
                    <p>Digital marketing, agribusiness management, financial calculations, and international trade.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="program-card fade-in">
                    <div class="program-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3>Language & Communication</h3>
                    <p>English communication skills, business writing, and public speaking training.</p>
                    <a href="programs.php" class="program-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="text-center fade-in">
                <a href="programs.php" class="btn-primary btn-lg">View All Programs</a>
            </div>
        </div>
    </section>

    <!-- Founder Message -->
    <section class="founder-section">
        <div class="container">
            <div class="founder-grid">
                <div class="founder-image fade-in">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500" alt="Founder">
                    <div class="founder-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="founder-content fade-in">
                    <span class="section-subtitle">Founder's Message</span>
                    <h2>A Message From Our Founder</h2>
                    <blockquote>
                        <p>"At BZASA, we believe that every woman has the potential to become a successful entrepreneur. Our mission is to provide the training, resources, and support needed to transform lives and build communities through agriculture."</p>
                    </blockquote>
                    <p>Through our comprehensive programs, we are not just teaching farming techniques – we are nurturing future leaders who will shape Liberia's agricultural landscape and contribute to global food security.</p>
                    <div class="founder-signature">
                        <h4>Mrs. Bendu Zinnah</h4>
                        <span>Founder & CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-header light">
                <span class="section-subtitle fade-in">Why BZASA</span>
                <h2 class="section-title fade-in">Why Choose Us</h2>
                <p class="section-desc fade-in">What makes BZASA the premier choice for agricultural education</p>
            </div>
            
            <div class="why-grid">
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Housing & Feeding</h3>
                    <p>Safe accommodation and daily meals provided for all students throughout their training period.</p>
                </div>
                
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Mentorship</h3>
                    <p>One-on-one mentorship from experienced farmers and business professionals.</p>
                </div>
                
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>Land Allocation</h3>
                    <p>Graduates receive land to start their own farming operations.</p>
                </div>
                
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3>Market Access</h3>
                    <p>Connect to international markets and export opportunities.</p>
                </div>
                
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Cooperative Support</h3>
                    <p>Join our network of women-owned agricultural enterprises.</p>
                </div>
                
                <div class="why-card fade-in">
                    <div class="why-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Startup Support</h3>
                    <p>Business development support to launch your farming enterprise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item fade-in">
                    <i class="fas fa-graduation-cap"></i>
                    <span class="stat-number" data-count="500">0</span>
                    <span class="stat-label">Students Trained</span>
                </div>
                <div class="stat-item fade-in">
                    <i class="fas fa-users"></i>
                    <span class="stat-number" data-count="50">0</span>
                    <span class="stat-label">Expert Trainers</span>
                </div>
                <div class="stat-item fade-in">
                    <i class="fas fa-leaf"></i>
                    <span class="stat-number" data-count="15">0</span>
                    <span class="stat-label">Programs Offered</span>
                </div>
                <div class="stat-item fade-in">
                    <i class="fas fa-globe"></i>
                    <span class="stat-number" data-count="8">0</span>
                    <span class="stat-label">Countries Reached</span>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle fade-in">Latest Updates</span>
                <h2 class="section-title fade-in">News & Events</h2>
            </div>
            
            <div class="news-grid">
                <article class="news-card main-news fade-in">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=600" alt="News">
                        <span class="news-category">Featured</span>
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar"></i> June 15, 2026</span>
                        <h3>New Cohort Enrollment Now Open for 2026-2027 Academic Year</h3>
                        <p>We are excited to announce that applications are now open for our next cohort. Join us and transform your future through agricultural entrepreneurship.</p>
                        <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="news-card fade-in">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?w=400" alt="News">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar"></i> June 10, 2026</span>
                        <h3>International Trade Workshop for Graduates</h3>
                        <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="news-card fade-in">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=400" alt="News">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar"></i> June 5, 2026</span>
                        <h3>Partnership with ECOWAS for Market Access</h3>
                        <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <article class="news-card fade-in">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=400" alt="News">
                    </div>
                    <div class="news-content">
                        <span class="news-date"><i class="far fa-calendar"></i> May 28, 2026</span>
                        <h3>Graduation Ceremony for Class of 2026</h3>
                        <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle fade-in">Our Leadership</span>
                <h2 class="section-title fade-in">Meet Our Team</h2>
            </div>
            
            <div class="team-grid">
                <div class="team-card fade-in">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400" alt="Team Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Mrs. Bendu Zinnah</h3>
                        <span>Founder & CEO</span>
                        <p>Agricultural Education Specialist with 20+ years experience</p>
                    </div>
                </div>
                
                <div class="team-card fade-in">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400" alt="Team Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Dr. James K. Johnson</h3>
                        <span>Academic Director</span>
                        <p>PhD in Agricultural Sciences, Former University Professor</p>
                    </div>
                </div>
                
                <div class="team-card fade-in">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400" alt="Team Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Ms. Martha B. Cole</h3>
                        <span>Programs Coordinator</span>
                        <p>Expert in Vocational Training & Student Development</p>
                    </div>
                </div>
                
                <div class="team-card fade-in">
                    <div class="team-image">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400" alt="Team Member">
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-info">
                        <h3>Mr. Robert T. Sherman</h3>
                        <span>Business Development</span>
                        <p>International Trade Expert & Entrepreneurship Coach</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- YouTube Section -->
    <section class="youtube-section">
        <div class="container">
            <div class="section-header light">
                <span class="section-subtitle fade-in">Watch & Learn</span>
                <h2 class="section-title fade-in">Our YouTube Channel</h2>
                <p class="section-desc fade-in">Subscribe to see our programs, student success stories, and agricultural training tips</p>
            </div>
            
            <div class="youtube-grid">
                <div class="youtube-featured fade-in">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="BZASA Introduction" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <h3>Welcome to BZASA - Transforming Lives Through Agriculture</h3>
                    <p>Learn about our mission and the impact we're making in Liberia.</p>
                </div>
                
                <div class="youtube-sidebar">
                    <div class="video-thumb fade-in">
                        <div class="thumb-image">
                            <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=300" alt="Video">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <div class="thumb-info">
                            <h4>Student Success Stories</h4>
                            <span>1.2K views</span>
                        </div>
                    </div>
                    
                    <div class="video-thumb fade-in">
                        <div class="thumb-image">
                            <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?w=300" alt="Video">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <div class="thumb-info">
                            <h4>Fish Farming Tutorial</h4>
                            <span>890 views</span>
                        </div>
                    </div>
                    
                    <div class="video-thumb fade-in">
                        <div class="thumb-image">
                            <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?w=300" alt="Video">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                        </div>
                        <div class="thumb-info">
                            <h4>Export Opportunities</h4>
                            <span>567 views</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="youtube-subscribe fade-in">
                <a href="https://youtube.com/@bzasa" target="_blank" class="btn-subscribe">
                    <i class="fab fa-youtube"></i> Subscribe to Our Channel
                </a>
            </div>
        </div>
    </section>

    <!-- Goals Section -->
    <section class="goals-section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle fade-in">Our Roadmap</span>
                <h2 class="section-title fade-in">3-Year Strategic Goals</h2>
            </div>
            
            <div class="goals-grid">
                <div class="goal-card fade-in">
                    <div class="goal-number">01</div>
                    <h3>Train Thousands</h3>
                    <p>Train thousands of women in modern agricultural techniques and business skills.</p>
                </div>
                
                <div class="goal-card fade-in">
                    <div class="goal-number">02</div>
                    <h3>Sustainable Communities</h3>
                    <p>Develop sustainable farming communities across Liberia.</p>
                </div>
                
                <div class="goal-card fade-in">
                    <div class="goal-number">03</div>
                    <h3>Increase Exports</h3>
                    <p>Increase agricultural exports through quality production and international partnerships.</p>
                </div>
                
                <div class="goal-card fade-in">
                    <div class="goal-number">04</div>
                    <h3>Global Markets</h3>
                    <p>Connect Liberian farmers to international markets and trade opportunities.</p>
                </div>
                
                <div class="goal-card fade-in">
                    <div class="goal-number">05</div>
                    <h3>Land & Business</h3>
                    <p>Support graduates with land allocation and startup business opportunities.</p>
                </div>
                
                <div class="goal-card fade-in">
                    <div class="goal-number">06</div>
                    <h3>Network Growth</h3>
                    <p>Create a national network of women-owned agricultural enterprises.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in">
                <h2>Ready to Transform Your Future?</h2>
                <p>Join BZASA today and start your journey to becoming a successful agricultural entrepreneur.</p>
                <div class="cta-buttons">
                    <a href="admissions.php" class="btn-primary btn-lg">Apply Now</a>
                    <a href="contact.php" class="btn-secondary btn-lg">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/231770123456" target="_blank" class="whatsapp-float" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    
    <!-- AI Assistant Float -->
    <a href="ai-assistant.php" class="ai-float" title="AI Assistant">
        <i class="fas fa-robot"></i>
        <span class="ai-pulse"></span>
    </a>
    
    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop" title="Back to Top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script src="assets/js/main.js"></script>
</body>
</html>