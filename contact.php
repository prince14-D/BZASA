<?php
$page_title = "Contact Us - BZASA";
$page_description = "Get in touch with BZASA - Visit our campus, call, email, or send us a message.";
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #555555 100%);">
    <div class="page-hero-content">
        <span class="page-badge">
            <i class="fas fa-envelope"></i>
            Get in Touch
        </span>
        <h1>Contact <span class="highlight">Us</span></h1>
        <p class="page-subtitle">Have questions? We'd love to hear from you. Reach out to us through any of the channels below.</p>
        <div class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Contact</span>
        </div>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="contact-info" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px;">
            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Our Location</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Bendu Zinnah Village<br>Kenema District, Sierra Leone</p>
            </div>

            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-phone-alt" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Phone Number</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">+232 00 000 000<br>+232 00 000 001</p>
            </div>

            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-envelope" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Email Address</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">info@bzasa.edu.sl<br>admissions@bzasa.edu.sl</p>
            </div>

            <div style="background: var(--gray-light); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, var(--primary-color), var(--tertiary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-clock" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Office Hours</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Mon - Fri: 8AM - 5PM<br>Sat: 9AM - 1PM</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="contact-section" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px;">
            <!-- Contact Form -->
            <div style="background: var(--white); padding: 50px; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-medium);">
                <h2 style="font-size: 2rem; margin-bottom: 10px; color: var(--secondary-color);">Send Us a <span class="highlight">Message</span></h2>
                <p style="color: var(--text-light); margin-bottom: 30px;">Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <form id="contact-form" style="display: grid; gap: 20px;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">First Name</label>
                            <input type="text" name="first_name" required style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition);">
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">Last Name</label>
                            <input type="text" name="last_name" required style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition);">
                        </div>
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">Email Address</label>
                        <input type="email" name="email" required style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition);">
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">Phone Number</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition);">
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">Subject</label>
                        <select name="subject" required style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition);">
                            <option value="">Select a subject</option>
                            <option value="admissions">Admissions Inquiry</option>
                            <option value="programs">Program Information</option>
                            <option value="financial">Financial Aid</option>
                            <option value="campus">Campus Visit</option>
                            <option value="general">General Question</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: 500; color: var(--secondary-color);">Your Message</label>
                        <textarea name="message" rows="5" required style="width: 100%; padding: 15px; border: 1px solid var(--gray-medium); border-radius: var(--border-radius); font-size: 1rem; transition: var(--transition); resize: vertical;"></textarea>
                    </div>
                    <button type="submit" style="background: var(--primary-color); color: var(--white); padding: 15px 40px; border: none; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: var(--transition);">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Map & Additional Info -->
            <div>
                <div style="background: var(--white); padding: 30px; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-medium); margin-bottom: 30px;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px; color: var(--secondary-color);">Find Us on the Map</h3>
                    <div style="height: 300px; background: var(--gray-medium); border-radius: var(--border-radius); display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center; color: var(--text-light);">
                            <i class="fas fa-map-marked-alt" style="font-size: 4rem; margin-bottom: 15px; color: var(--primary-color);"></i>
                            <p>Interactive map would be displayed here</p>
                            <p style="font-size: 0.9rem;">Bendu Zinnah Village, Kenema District</p>
                        </div>
                    </div>
                </div>

                <div style="background: linear-gradient(135deg, var(--primary-color), #ff8c33); padding: 40px; border-radius: var(--border-radius-lg); color: var(--white);">
                    <h3 style="font-size: 1.5rem; margin-bottom: 20px;">Schedule a Campus Visit</h3>
                    <p style="margin-bottom: 25px; opacity: 0.9;">Come see our campus firsthand. We offer guided tours for prospective students and their families.</p>
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <i class="fas fa-calendar-check" style="margin-right: 15px; font-size: 1.2rem;"></i>
                        <span>Tours available Monday - Friday</span>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 25px;">
                        <i class="fas fa-clock" style="margin-right: 15px; font-size: 1.2rem;"></i>
                        <span>Morning tours: 9AM | Afternoon tours: 2PM</span>
                    </div>
                    <a href="tel:+232000000000" style="display: inline-block; background: var(--white); color: var(--primary-color); padding: 12px 30px; border-radius: 50px; font-weight: 600; transition: var(--transition);">
                        <i class="fas fa-phone"></i> Schedule Visit
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-question-circle"></i>
                FAQ
            </span>
            <h2>Frequently Asked <span class="highlight">Questions</span></h2>
        </div>

        <div style="max-width: 800px; margin: 50px auto 0;">
            <div style="background: var(--gray-light); padding: 25px 30px; border-radius: var(--border-radius); margin-bottom: 15px; border-left: 4px solid var(--primary-color);">
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;"><i class="fas fa-chevron-right" style="color: var(--primary-color); margin-right: 10px;"></i>What are the admission requirements?</h4>
                <p style="color: var(--text-light); padding-left: 30px;">Requirements vary by program. Generally, you'll need your WASSCE/GCSE certificates and valid identification. Visit our Admissions page for detailed requirements.</p>
            </div>

            <div style="background: var(--gray-light); padding: 25px 30px; border-radius: var(--border-radius); margin-bottom: 15px; border-left: 4px solid var(--tertiary-color);">
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;"><i class="fas fa-chevron-right" style="color: var(--tertiary-color); margin-right: 10px;"></i>How much does tuition cost?</h4>
                <p style="color: var(--text-light); padding-left: 30px;">Tuition varies by program level. We offer competitive rates and financial aid options. Contact our admissions office for specific fee structures.</p>
            </div>

            <div style="background: var(--gray-light); padding: 25px 30px; border-radius: var(--border-radius); margin-bottom: 15px; border-left: 4px solid var(--secondary-color);">
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;"><i class="fas fa-chevron-right" style="color: var(--secondary-color); margin-right: 10px;"></i>Is on-campus accommodation available?</h4>
                <p style="color: var(--text-light); padding-left: 30px;">Yes, we offer comfortable dormitory accommodations for students. Rooms are equipped with basic amenities and are competitively priced.</p>
            </div>

            <div style="background: var(--gray-light); padding: 25px 30px; border-radius: var(--border-radius); border-left: 4px solid #28a745;">
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;"><i class="fas fa-chevron-right" style="color: #28a745; margin-right: 10px;"></i>Can I apply online?</h4>
                <p style="color: var(--text-light); padding-left: 30px;">Yes! You can complete the entire application process online through our website. Visit the Admissions page to start your application.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>