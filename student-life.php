<?php
$page_title = "Student Life - BZASA";
$page_description = "Experience life at BZASA - campus activities, student organizations, accommodation, and more.";
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--tertiary-color) 0%, #3399ff 100%);">
    <div class="page-hero-content">
        <span class="page-badge">
            <i class="fas fa-users"></i>
            Campus Life
        </span>
        <h1>Student <span class="highlight">Life</span></h1>
        <p class="page-subtitle">Discover a vibrant community where learning extends beyond the classroom. Experience personal growth, lifelong friendships, and unforgettable memories at BZASA.</p>
        <div class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Student Life</span>
        </div>
    </div>
</section>

<!-- Campus Overview -->
<section class="campus-overview" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <span class="section-badge">
                    <i class="fas fa-university"></i>
                    Our Campus
                </span>
                <h2>A Modern <span class="highlight">Learning Environment</span></h2>
                <p style="color: var(--text-light); margin: 20px 0;">Our 500+ acre campus provides the perfect setting for agricultural education, combining state-of-the-art facilities with natural farming environments.</p>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Modern Classrooms</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Research Laboratories</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Training Farm</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Computer Labs</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Library</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-right: 10px;"></i>
                        <span style="color: var(--text-dark);">Sports Facilities</span>
                    </div>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=600" alt="BZASA Campus" style="width: 100%; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-large);">
            </div>
        </div>
    </div>
</section>

<!-- Student Activities -->
<section class="student-activities" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-running"></i>
                Activities
            </span>
            <h2>Student <span class="highlight">Activities</span></h2>
            <p class="section-subtitle">Beyond academics, engage in a variety of activities that enrich your university experience.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1461896836934- voices-of-color-cover-image?w=400') center/cover; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(255,107,0,0.8), rgba(255,140,51,0.8)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-music" style="font-size: 4rem; color: var(--white);"></i>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Cultural Events</h3>
                    <p style="color: var(--text-light); font-size: 0.95rem;">Celebrate diversity through music, dance, food festivals, and cultural exhibitions throughout the year.</p>
                </div>
            </div>

            <div style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1461896836934- voices-of-color-cover-image?w=400') center/cover; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(0,102,204,0.8), rgba(51,153,255,0.8)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-futbol" style="font-size: 4rem; color: var(--white);"></i>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Sports & Recreation</h3>
                    <p style="color: var(--text-light); font-size: 0.95rem;">Stay active with football, volleyball, athletics, and other sports. Join inter-class and inter-school competitions.</p>
                </div>
            </div>

            <div style="background: var(--white); border-radius: var(--border-radius-lg); overflow: hidden; box-shadow: var(--shadow-medium); transition: var(--transition);">
                <div style="height: 200px; background: url('https://images.unsplash.com/photo-1461896836934- voices-of-color-cover-image?w=400') center/cover; position: relative;">
                    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(51,51,51,0.8), rgba(85,85,85,0.8)); display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-book-reader" style="font-size: 4rem; color: var(--white);"></i>
                    </div>
                </div>
                <div style="padding: 30px;">
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px; color: var(--secondary-color);">Academic Clubs</h3>
                    <p style="color: var(--text-light); font-size: 0.95rem;">Join specialized clubs focused on crop science, animal husbandry, agribusiness, and more.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Student Organizations -->
<section class="student-organizations" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-user-friends"></i>
                Organizations
            </span>
            <h2>Student <span class="highlight">Organizations</span></h2>
            <p class="section-subtitle">Get involved in campus life through our various student organizations.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 50px;">
            <div style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-seedling" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 10px; color: var(--secondary-color);">Young Farmers Club</h3>
                <p style="color: var(--text-light); font-size: 0.9rem;">Promoting sustainable farming practices among students</p>
            </div>

            <div style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-microphone" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 10px; color: var(--secondary-color);">Debate Society</h3>
                <p style="color: var(--text-light); font-size: 0.9rem;">Develop public speaking and critical thinking skills</p>
            </div>

            <div style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hand-holding-heart" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 10px; color: var(--secondary-color);">Community Service</h3>
                <p style="color: var(--text-light); font-size: 0.9rem;">Give back through outreach programs and volunteering</p>
            </div>

            <div style="text-align: center; padding: 40px 25px; background: var(--gray-light); border-radius: var(--border-radius-lg); transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, var(--primary-color), var(--tertiary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-globe-africa" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.1rem; margin-bottom: 10px; color: var(--secondary-color);">Environmental Club</h3>
                <p style="color: var(--text-light); font-size: 0.9rem;">Advocating for environmental conservation and sustainability</p>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation -->
<section class="accommodation" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=600" alt="Student Accommodation" style="width: 100%; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-large);">
            </div>
            <div>
                <span class="section-badge">
                    <i class="fas fa-home"></i>
                    On-Campus Living
                </span>
                <h2>Student <span class="highlight">Accommodation</span></h2>
                <p style="color: var(--text-light); margin: 20px 0;">Comfortable and affordable accommodation options for students who choose to live on campus.</p>
                
                <div style="margin-top: 30px;">
                    <div style="display: flex; align-items: flex-start; padding: 20px; background: var(--white); border-radius: var(--border-radius); margin-bottom: 15px;">
                        <i class="fas fa-bed" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Modern Dormitories</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">Spacious rooms with essential amenities, shared kitchens, and study areas.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; padding: 20px; background: var(--white); border-radius: var(--border-radius); margin-bottom: 15px;">
                        <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: var(--tertiary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">24/7 Security</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">Secure campus with round-the-clock security personnel and CCTV surveillance.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; padding: 20px; background: var(--white); border-radius: var(--border-radius);">
                        <i class="fas fa-utensils" style="font-size: 1.5rem; color: var(--secondary-color); margin-right: 15px; margin-top: 5px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Meal Services</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">On-site cafeteria serving nutritious meals at affordable prices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-quote-left"></i>
                Testimonials
            </span>
            <h2>What Our <span class="highlight">Students Say</span></h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); position: relative;">
                <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--primary-color); opacity: 0.2; position: absolute; top: 20px; right: 30px;"></i>
                <p style="color: var(--text-light); font-style: italic; margin-bottom: 20px; line-height: 1.8;">"BZASA transformed my understanding of agriculture. The hands-on training prepared me for real-world farming challenges."</p>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50px; height: 50px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-user" style="color: var(--white);"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; color: var(--secondary-color);">Kwame Asante</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">Class of 2023, Diploma in Crop Science</p>
                    </div>
                </div>
            </div>

            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); position: relative;">
                <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--tertiary-color); opacity: 0.2; position: absolute; top: 20px; right: 30px;"></i>
                <p style="color: var(--text-light); font-style: italic; margin-bottom: 20px; line-height: 1.8;">"The faculty are incredibly supportive and the facilities are top-notch. I recommend BZASA to anyone serious about agriculture."</p>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50px; height: 50px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-user" style="color: var(--white);"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; color: var(--secondary-color);">Ama Darko</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">Class of 2024, B.Sc. Animal Science</p>
                    </div>
                </div>
            </div>

            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); position: relative;">
                <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--secondary-color); opacity: 0.2; position: absolute; top: 20px; right: 30px;"></i>
                <p style="color: var(--text-light); font-style: italic; margin-bottom: 20px; line-height: 1.8;">"The practical experience I gained at BZASA helped me start my own farm. The education truly pays off."</p>
                <div style="display: flex; align-items: center;">
                    <div style="width: 50px; height: 50px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-user" style="color: var(--white);"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1rem; color: var(--secondary-color);">Kofi Mensah</h4>
                        <p style="color: var(--text-muted); font-size: 0.9rem;">Class of 2022, Certificate in Organic Farming</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--tertiary-color), #3399ff);">
    <div class="container">
        <div style="text-align: center; color: var(--white);">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready to Join Our Community?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9;">Apply today and become part of the BZASA family.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="admissions.php" style="display: inline-block; background: var(--white); color: var(--tertiary-color); padding: 15px 35px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Apply Now</a>
                <a href="contact.php" style="display: inline-block; background: transparent; color: var(--white); padding: 15px 35px; border-radius: 50px; font-weight: 600; border: 2px solid var(--white); transition: var(--transition);">Learn More</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>