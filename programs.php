<?php
$page_title = "Programs - BZASA";
$page_description = "Explore our comprehensive agricultural programs designed to train the next generation of agricultural professionals.";
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--secondary-color) 0%, var(--tertiary-color) 100%);">
    <div class="page-hero-content">
        <span class="page-badge">
            <i class="fas fa-graduation-cap"></i>
            Academic Programs
        </span>
        <h1>Our <span class="highlight">Programs</span></h1>
        <p class="page-subtitle">Comprehensive agricultural education programs designed to cultivate the next generation of farming professionals, researchers, and agricultural leaders.</p>
        <div class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Programs</span>
        </div>
    </div>
</section>

<!-- Programs Overview -->
<section class="programs-overview-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-book-open"></i>
                What We Offer
            </span>
            <h2>Agricultural Programs <span class="highlight">for Every Goal</span></h2>
            <p class="section-subtitle">From certificate programs to advanced degrees, we provide pathways for students at every level of their agricultural journey.</p>
        </div>

        <div class="programs-overview-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 50px;">
            <div class="overview-card" style="text-align: center; padding: 40px 30px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-certificate" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Certificate Programs</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">6-month to 1-year programs for foundational skills</p>
            </div>
            <div class="overview-card" style="text-align: center; padding: 40px 30px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-award" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Diploma Programs</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">2-year programs for comprehensive training</p>
            </div>
            <div class="overview-card" style="text-align: center; padding: 40px 30px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user-graduate" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Degree Programs</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">3-4 year bachelor's degree programs</p>
            </div>
            <div class="overview-card" style="text-align: center; padding: 40px 30px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, var(--primary-color), var(--tertiary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-microscope" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Research Programs</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Advanced research opportunities for innovation</p>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Programs -->
<section class="certificate-programs" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-certificate"></i>
                Certificate Programs
            </span>
            <h2>Short-Term <span class="highlight">Certificate Courses</span></h2>
            <p class="section-subtitle">Quick-start your agricultural career with our focused certificate programs.</p>
        </div>

        <div class="programs-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 180px; background: linear-gradient(135deg, var(--primary-color), #ff8c33); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">6 Months</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Crop Production Certificate</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Master the fundamentals of crop cultivation, soil management, and sustainable farming practices.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 6 months</span>
                        <a href="contact.php" style="color: var(--primary-color); font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 180px; background: linear-gradient(135deg, var(--tertiary-color), #3399ff); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-tractor" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px;">
                    <span style="display: inline-block; background: var(--tertiary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">6 Months</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Agricultural Machinery Operation</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Learn to operate, maintain, and troubleshoot modern agricultural machinery and equipment.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 6 months</span>
                        <a href="contact.php" style="color: var(--primary-color); font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 180px; background: linear-gradient(135deg, var(--secondary-color), #555555); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-leaf" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px;">
                    <span style="display: inline-block; background: var(--secondary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">6 Months</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Organic Farming Certificate</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Discover organic farming techniques, certification requirements, and market opportunities.</p>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 6 months</span>
                        <a href="contact.php" style="color: var(--primary-color); font-weight: 600;">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Diploma Programs -->
<section class="diploma-programs" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-award"></i>
                Diploma Programs
            </span>
            <h2>Professional <span class="highlight">Diploma Courses</span></h2>
            <p class="section-subtitle">In-depth 2-year programs for comprehensive agricultural training and career advancement.</p>
        </div>

        <div class="programs-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; margin-top: 50px;">
            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); display: flex; transition: var(--transition);">
                <div style="width: 200px; background: linear-gradient(135deg, var(--primary-color), #ff8c33); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px; flex: 1;">
                    <span style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">2 Years</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Diploma in Crop Science & Technology</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Comprehensive training in crop production, plant breeding, pest management, and post-harvest technology.</p>
                    <div style="display: flex; gap: 20px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-book"></i> 12 modules</span>
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 2 years</span>
                    </div>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); display: flex; transition: var(--transition);">
                <div style="width: 200px; background: linear-gradient(135deg, var(--tertiary-color), #3399ff); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cow" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px; flex: 1;">
                    <span style="display: inline-block; background: var(--tertiary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">2 Years</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Diploma in Animal Husbandry</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Learn livestock management, animal nutrition, breeding techniques, and veterinary care basics.</p>
                    <div style="display: flex; gap: 20px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-book"></i> 12 modules</span>
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 2 years</span>
                    </div>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); display: flex; transition: var(--transition);">
                <div style="width: 200px; background: linear-gradient(135deg, var(--secondary-color), #555555); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-water" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px; flex: 1;">
                    <span style="display: inline-block; background: var(--secondary-color); color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">2 Years</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Diploma in Agricultural Engineering</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Master irrigation systems, farm machinery, greenhouse technology, and agricultural infrastructure.</p>
                    <div style="display: flex; gap: 20px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-book"></i> 14 modules</span>
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 2 years</span>
                    </div>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); display: flex; transition: var(--transition);">
                <div style="width: 200px; background: linear-gradient(135deg, #28a745, #20c997); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chart-line" style="font-size: 4rem; color: var(--white);"></i>
                </div>
                <div style="padding: 30px; flex: 1;">
                    <span style="display: inline-block; background: #28a745; color: var(--white); padding: 5px 15px; border-radius: 50px; font-size: 0.8rem; margin-bottom: 15px;">2 Years</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Diploma in Agribusiness Management</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Combine agricultural knowledge with business skills for careers in farm management and agricultural enterprise.</p>
                    <div style="display: flex; gap: 20px; padding-top: 15px; border-top: 1px solid var(--border-color);">
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-book"></i> 10 modules</span>
                        <span style="color: var(--text-muted); font-size: 0.9rem;"><i class="fas fa-clock"></i> 2 years</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Degree Programs -->
<section class="degree-programs" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-user-graduate"></i>
                Degree Programs
            </span>
            <h2>Bachelor's <span class="highlight">Degree Programs</span></h2>
            <p class="section-subtitle">4-year degree programs for in-depth knowledge and leadership in agriculture.</p>
        </div>

        <div class="programs-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: linear-gradient(135deg, var(--primary-color), #ff8c33); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="font-size: 4rem; color: var(--white);"></i>
                    <span style="color: var(--white); margin-top: 10px; font-weight: 600;">B.Sc. Agriculture</span>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Bachelor of Science in Agriculture</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Comprehensive study of agronomy, horticulture, soil science, plant pathology, and agricultural economics.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> 4-year program</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Hands-on farm training</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Industry internships</li>
                    </ul>
                    <a href="contact.php" class="btn-primary" style="display: inline-block; background: var(--primary-color); color: var(--white); padding: 12px 25px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Apply Now</a>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: linear-gradient(135deg, var(--tertiary-color), #3399ff); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <i class="fas fa-cow" style="font-size: 4rem; color: var(--white);"></i>
                    <span style="color: var(--white); margin-top: 10px; font-weight: 600;">B.Sc. Animal Science</span>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Bachelor of Science in Animal Science</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Study animal nutrition, breeding, health management, and livestock production systems.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> 4-year program</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> Farm practical training</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> Research opportunities</li>
                    </ul>
                    <a href="contact.php" class="btn-primary" style="display: inline-block; background: var(--tertiary-color); color: var(--white); padding: 12px 25px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Apply Now</a>
                </div>
            </div>

            <div class="program-card" style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: linear-gradient(135deg, var(--secondary-color), #555555); display: flex; flex-direction: column; align-items: center; justify-content: center;">
                    <i class="fas fa-tractor" style="font-size: 4rem; color: var(--white);"></i>
                    <span style="color: var(--white); margin-top: 10px; font-weight: 600;">B.Sc. Ag Engineering</span>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.4rem; margin-bottom: 10px; color: var(--secondary-color);">Bachelor of Science in Agricultural Engineering</h3>
                    <p style="color: var(--text-light); margin-bottom: 20px; font-size: 0.95rem;">Combine engineering principles with agriculture for farm mechanization and infrastructure.</p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> 4-year program</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> Engineering labs</li>
                        <li style="padding: 8px 0; color: var(--text-light); font-size: 0.9rem;"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> Industry partnerships</li>
                    </ul>
                    <a href="contact.php" class="btn-primary" style="display: inline-block; background: var(--secondary-color); color: var(--white); padding: 12px 25px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Features -->
<section class="program-features" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-star"></i>
                Why Choose Our Programs
            </span>
            <h2>What Makes <span class="highlight">BZASA Different</span></h2>
        </div>

        <div class="features-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 50px;">
            <div class="feature-card" style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hands-helping" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Hands-On Training</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Practical farming experience on our 500+ acre training farm</p>
            </div>

            <div class="feature-card" style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chalkboard-teacher" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Expert Faculty</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Learn from experienced agricultural professionals and researchers</p>
            </div>

            <div class="feature-card" style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-briefcase" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Career Support</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Job placement assistance and industry connections</p>
            </div>

            <div class="feature-card" style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, var(--primary-color), var(--tertiary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-globe" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Global Opportunities</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">International exchange programs and certifications</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--primary-color), #ff8c33);">
    <div class="container">
        <div style="text-align: center; color: var(--white);">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready to Start Your Agricultural Journey?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9;">Contact us today to learn more about our programs and admission requirements.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="contact.php" style="display: inline-block; background: var(--white); color: var(--primary-color); padding: 15px 35px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Contact Us</a>
                <a href="admissions.php" style="display: inline-block; background: transparent; color: var(--white); padding: 15px 35px; border-radius: 50px; font-weight: 600; border: 2px solid var(--white); transition: var(--transition);">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>