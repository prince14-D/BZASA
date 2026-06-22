<?php
$page_title = "Admissions - BZASA";
$page_description = "Apply to BZASA - Learn about admission requirements, process, and how to join our agricultural programs.";
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color) 0%, #ff8c33 100%);">
    <div class="page-hero-content">
        <span class="page-badge">
            <i class="fas fa-user-plus"></i>
            Join BZASA
        </span>
        <h1>Admissions</h1>
        <p class="page-subtitle">Begin your journey toward a rewarding career in agriculture. Learn about our admission requirements and application process.</p>
        <div class="page-breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Admissions</span>
        </div>
    </div>
</section>

<!-- Admission Requirements -->
<section class="admission-requirements" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-clipboard-check"></i>
                Requirements
            </span>
            <h2>Admission <span class="highlight">Requirements</span></h2>
            <p class="section-subtitle">Review our admission criteria to ensure you're prepared for the application process.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Certificate Programs</h3>
                <ul style="list-style: none; padding: 0; text-align: left;">
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Basic education (WASSCE/GCSE equivalent)</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Minimum age: 16 years</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Passion for agriculture</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Valid identification</li>
                </ul>
            </div>

            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-award" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Diploma Programs</h3>
                <ul style="list-style: none; padding: 0; text-align: left;">
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> WASSCE/GCSE with 5 passes</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> Minimum age: 18 years</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> Science background preferred</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--tertiary-color); margin-right: 10px;"></i> Personal statement</li>
                </ul>
            </div>

            <div style="background: var(--gray-light); padding: 40px; border-radius: var(--border-radius-lg); text-align: center; transition: var(--transition);">
                <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-user-graduate" style="font-size: 2rem; color: var(--white);"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 15px; color: var(--secondary-color);">Degree Programs</h3>
                <ul style="list-style: none; padding: 0; text-align: left;">
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> WASSCE with 5 credits including Science</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> Minimum age: 16 years</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> English and Math required</li>
                    <li style="padding: 8px 0; color: var(--text-light);"><i class="fas fa-check" style="color: var(--secondary-color); margin-right: 10px;"></i> Interview may be required</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="application-process" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-list-ol"></i>
                How to Apply
            </span>
            <h2>Application <span class="highlight">Process</span></h2>
            <p class="section-subtitle">Follow these simple steps to complete your application.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--white); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); position: relative;">
                <div style="width: 60px; height: 60px; margin: 0 auto 20px; background: var(--primary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: var(--white);">1</div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Submit Application</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Complete the online application form with your personal and educational details.</p>
            </div>

            <div style="background: var(--white); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); position: relative;">
                <div style="width: 60px; height: 60px; margin: 0 auto 20px; background: var(--tertiary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: var(--white);">2</div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Submit Documents</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Upload required documents including transcripts, ID, and certificates.</p>
            </div>

            <div style="background: var(--white); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); position: relative;">
                <div style="width: 60px; height: 60px; margin: 0 auto 20px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: var(--white);">3</div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Interview</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Participate in an interview (for degree programs) to discuss your goals.</p>
            </div>

            <div style="background: var(--white); padding: 40px 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); position: relative;">
                <div style="width: 60px; height: 60px; margin: 0 auto 20px; background: linear-gradient(135deg, var(--primary-color), var(--tertiary-color)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: 700; color: var(--white);">4</div>
                <h3 style="font-size: 1.2rem; margin-bottom: 10px; color: var(--secondary-color);">Receive Decision</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Get your admission decision within 2-3 weeks and secure your spot.</p>
            </div>
        </div>
    </div>
</section>

<!-- Required Documents -->
<section class="required-documents" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <span class="section-badge">
                    <i class="fas fa-file-alt"></i>
                    Documentation
                </span>
                <h2>Required <span class="highlight">Documents</span></h2>
                <p style="color: var(--text-light); margin: 20px 0 30px;">Please prepare and submit the following documents with your application.</p>
                
                <div style="margin-bottom: 20px;">
                    <div style="display: flex; align-items: center; padding: 15px; background: var(--gray-light); border-radius: var(--border-radius); margin-bottom: 10px;">
                        <i class="fas fa-id-card" style="font-size: 1.5rem; color: var(--primary-color); margin-right: 15px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Valid Identification</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">National ID, passport, or birth certificate</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; padding: 15px; background: var(--gray-light); border-radius: var(--border-radius); margin-bottom: 10px;">
                        <i class="fas fa-graduation-cap" style="font-size: 1.5rem; color: var(--tertiary-color); margin-right: 15px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Academic Transcripts</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">Previous educational certificates and transcripts</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; padding: 15px; background: var(--gray-light); border-radius: var(--border-radius); margin-bottom: 10px;">
                        <i class="fas fa-camera" style="font-size: 1.5rem; color: var(--secondary-color); margin-right: 15px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Passport Photos</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">Two recent passport-sized photographs</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; padding: 15px; background: var(--gray-light); border-radius: var(--border-radius);">
                        <i class="fas fa-file-medical" style="font-size: 1.5rem; color: #28a745; margin-right: 15px;"></i>
                        <div>
                            <h4 style="font-size: 1rem; color: var(--secondary-color); margin-bottom: 5px;">Medical Certificate</h4>
                            <p style="color: var(--text-light); font-size: 0.9rem;">Health clearance from a registered medical practitioner</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: linear-gradient(135deg, var(--primary-color), #ff8c33); padding: 50px; border-radius: var(--border-radius-lg); color: var(--white);">
                <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Application Fee</h3>
                <p style="margin-bottom: 30px; opacity: 0.9;">A non-refundable application fee is required to process your application.</p>
                
                <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <span>Certificate Programs</span>
                    <span style="font-weight: 600;">$50</span>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.2);">
                    <span>Diploma Programs</span>
                    <span style="font-weight: 600;">$75</span>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 15px 0;">
                    <span>Degree Programs</span>
                    <span style="font-weight: 600;">$100</span>
                </div>

                <a href="contact.php" style="display: block; text-align: center; background: var(--white); color: var(--primary-color); padding: 15px; border-radius: 50px; font-weight: 600; margin-top: 30px; transition: var(--transition);">Start Application</a>
            </div>
        </div>
    </div>
</section>

<!-- Important Dates -->
<section class="important-dates" style="padding: 80px 0; background: var(--gray-light);">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                <i class="fas fa-calendar-alt"></i>
                Key Dates
            </span>
            <h2>Important <span class="highlight">Dates</span></h2>
            <p class="section-subtitle">Mark your calendar with these key admission dates.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 50px;">
            <div style="background: var(--white); padding: 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); border-top: 4px solid var(--primary-color);">
                <div style="font-size: 3rem; font-weight: 700; color: var(--primary-color); margin-bottom: 10px;">Mar 1</div>
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Application Opens</h4>
                <p style="color: var(--text-light); font-size: 0.9rem;">Fall semester applications begin</p>
            </div>

            <div style="background: var(--white); padding: 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); border-top: 4px solid var(--tertiary-color);">
                <div style="font-size: 3rem; font-weight: 700; color: var(--tertiary-color); margin-bottom: 10px;">Jun 30</div>
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Early Bird Deadline</h4>
                <p style="color: var(--text-light); font-size: 0.9rem;">Reduced application fee ends</p>
            </div>

            <div style="background: var(--white); padding: 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); border-top: 4px solid var(--secondary-color);">
                <div style="font-size: 3rem; font-weight: 700; color: var(--secondary-color); margin-bottom: 10px;">Aug 15</div>
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Final Deadline</h4>
                <p style="color: var(--text-light); font-size: 0.9rem;">Last date to submit applications</p>
            </div>

            <div style="background: var(--white); padding: 30px; border-radius: var(--border-radius-lg); text-align: center; box-shadow: var(--shadow-medium); border-top: 4px solid #28a745;">
                <div style="font-size: 3rem; font-weight: 700; color: #28a745; margin-bottom: 10px;">Sep 1</div>
                <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Classes Begin</h4>
                <p style="color: var(--text-light); font-size: 0.9rem;">Fall semester orientation</p>
            </div>
        </div>
    </div>
</section>

<!-- Financial Aid -->
<section class="financial-aid" style="padding: 80px 0; background: var(--white);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div>
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600" alt="Students receiving scholarships" style="width: 100%; border-radius: var(--border-radius-lg); box-shadow: var(--shadow-large);">
            </div>
            <div>
                <span class="section-badge">
                    <i class="fas fa-hand-holding-usd"></i>
                    Financial Support
                </span>
                <h2>Scholarships & <span class="highlight">Financial Aid</span></h2>
                <p style="color: var(--text-light); margin: 20px 0;">We believe education should be accessible to all. Explore our scholarship and financial aid options.</p>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px;">
                    <div style="background: var(--gray-light); padding: 25px; border-radius: var(--border-radius);">
                        <i class="fas fa-star" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Merit Scholarships</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem;">Up to 50% tuition waiver for outstanding students</p>
                    </div>
                    <div style="background: var(--gray-light); padding: 25px; border-radius: var(--border-radius);">
                        <i class="fas fa-hands-helping" style="font-size: 2rem; color: var(--tertiary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Need-Based Aid</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem;">Financial assistance for qualifying students</p>
                    </div>
                    <div style="background: var(--gray-light); padding: 25px; border-radius: var(--border-radius);">
                        <i class="fas fa-seedling" style="font-size: 2rem; color: #28a745; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">Farm Worker Grants</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem;">Special programs for farming families</p>
                    </div>
                    <div style="background: var(--gray-light); padding: 25px; border-radius: var(--border-radius);">
                        <i class="fas fa-globe" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1.1rem; color: var(--secondary-color); margin-bottom: 10px;">International Grants</h4>
                        <p style="color: var(--text-light); font-size: 0.9rem;">Support for international students</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" style="padding: 80px 0; background: linear-gradient(135deg, var(--primary-color), #ff8c33);">
    <div class="container">
        <div style="text-align: center; color: var(--white);">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready to Begin Your Journey?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9;">Contact our admissions team for personalized guidance.</p>
            <div style="display: flex; gap: 20px; justify-content: center;">
                <a href="contact.php" style="display: inline-block; background: var(--white); color: var(--primary-color); padding: 15px 35px; border-radius: 50px; font-weight: 600; transition: var(--transition);">Contact Admissions</a>
                <a href="tel:+233000000000" style="display: inline-block; background: transparent; color: var(--white); padding: 15px 35px; border-radius: 50px; font-weight: 600; border: 2px solid var(--white); transition: var(--transition);"><i class="fas fa-phone"></i> Call Us</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>