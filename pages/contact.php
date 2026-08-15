<style>
/* =============================================
   CONTACT PAGE STYLES
   ============================================= */

/* Contact Info Section */
.contact-info-section {
    padding: var(--space-16) 0;
    background: var(--white);
    margin-top: -80px;
    position: relative;
    z-index: 10;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.contact-info-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    box-shadow: var(--shadow-lg);
    transition: all var(--transition-base);
    border: 1px solid var(--gray-100);
}

.contact-info-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.contact-info-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto var(--space-5);
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-3xl);
    transition: all var(--transition-base);
}

.contact-info-card:hover .contact-info-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    transform: scale(1.1) rotate(5deg);
}

.contact-info-card h3 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.contact-info-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    margin-bottom: var(--space-4);
}

.contact-info-card a {
    color: var(--accent);
    font-weight: 600;
    font-size: var(--text-base);
    transition: color var(--transition-fast);
}

.contact-info-card a:hover {
    color: var(--primary);
}

/* Contact Form Section */
.contact-form-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: start;
}

.contact-form-wrapper {
    background: var(--white);
    border-radius: var(--radius-2xl);
    padding: var(--space-10);
    box-shadow: var(--shadow-lg);
}

.contact-form-wrapper h2 {
    margin-bottom: var(--space-6);
}

.contact-form-wrapper h2::after {
    margin: var(--space-4) 0 0;
}

.contact-form-desc {
    color: var(--gray-500);
    font-size: var(--text-base);
    margin-bottom: var(--space-8);
    line-height: 1.7;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-5);
}

.form-group {
    margin-bottom: var(--space-5);
}

.form-label {
    display: block;
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-700);
    margin-bottom: var(--space-2);
}

.form-label span {
    color: var(--error);
}

.form-control {
    width: 100%;
    padding: var(--space-3) var(--space-4);
    font-family: var(--font-body);
    font-size: var(--text-base);
    color: var(--gray-700);
    background: var(--off-white);
    border: 2px solid transparent;
    border-radius: var(--radius-lg);
    transition: all var(--transition-fast);
}

.form-control:focus {
    background: var(--white);
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(201, 162, 39, 0.15);
}

.form-control::placeholder {
    color: var(--gray-400);
}

textarea.form-control {
    min-height: 140px;
    resize: vertical;
}

select.form-control {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2364748B' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right var(--space-4) center;
    padding-right: var(--space-10);
}

.form-error {
    color: var(--error);
    font-size: var(--text-xs);
    margin-top: var(--space-1);
    display: none;
}

.form-control.error {
    border-color: var(--error);
}

.form-control.error + .form-error {
    display: block;
}

/* Map Section */
.contact-map-wrapper {
    background: var(--white);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.contact-map-wrapper h3 {
    padding: var(--space-5);
    margin: 0;
    border-bottom: 1px solid var(--gray-100);
}

.map-container {
    height: 300px;
    background: var(--gray-100);
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-placeholder {
    text-align: center;
    color: var(--gray-500);
}

.map-placeholder i {
    font-size: 3rem;
    color: var(--primary);
    margin-bottom: var(--space-3);
}

/* Campus Cards in Sidebar */
.campus-cards-sidebar {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
    margin-top: var(--space-6);
}

.campus-mini-card {
    background: var(--off-white);
    border-radius: var(--radius-lg);
    padding: var(--space-4);
    display: flex;
    align-items: center;
    gap: var(--space-4);
    transition: all var(--transition-base);
}

.campus-mini-card:hover {
    background: var(--primary);
    color: var(--white);
}

.campus-mini-card:hover h4 {
    color: var(--white);
}

.campus-mini-card:hover p {
    color: rgba(255,255,255,0.8);
}

.campus-mini-card:hover .campus-mini-icon {
    background: var(--accent);
}

.campus-mini-icon {
    width: 50px;
    height: 50px;
    background: var(--primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-lg);
    flex-shrink: 0;
    transition: all var(--transition-base);
}

.campus-mini-info h4 {
    font-size: var(--text-sm);
    color: var(--primary);
    margin-bottom: var(--space-1);
    transition: color var(--transition-base);
}

.campus-mini-info p {
    font-size: var(--text-xs);
    color: var(--gray-500);
    margin: 0;
    transition: color var(--transition-base);
}

/* Campuses Section */
.campuses-section-contact {
    padding: var(--space-20) 0;
    background: var(--white);
}

.campuses-contact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.campus-contact-card {
    background: var(--off-white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    transition: all var(--transition-base);
}

.campus-contact-card:hover {
    box-shadow: var(--shadow-xl);
    transform: translateY(-5px);
}

.campus-contact-img {
    height: 180px;
    overflow: hidden;
}

.campus-contact-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.campus-contact-card:hover .campus-contact-img img {
    transform: scale(1.1);
}

.campus-contact-info {
    padding: var(--space-5);
}

.campus-contact-info h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
}

.campus-contact-info h3::after {
    display: none;
}

.campus-contact-detail {
    display: flex;
    align-items: flex-start;
    gap: var(--space-3);
    margin-bottom: var(--space-3);
    font-size: var(--text-sm);
    color: var(--gray-600);
}

.campus-contact-detail i {
    color: var(--accent);
    margin-top: 3px;
}

.campus-contact-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--primary);
    font-weight: 600;
    font-size: var(--text-sm);
    margin-top: var(--space-2);
    transition: color var(--transition-fast);
}

.campus-contact-link:hover {
    color: var(--accent);
}

/* FAQ CTA */
.contact-faq-cta {
    padding: var(--space-16) 0;
    background: var(--primary-dark);
}

.contact-faq-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: var(--space-8);
}

.contact-faq-text h3 {
    color: var(--white);
    font-size: var(--text-2xl);
    margin-bottom: var(--space-3);
}

.contact-faq-text p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-base);
    margin: 0;
}

/* Success Message */
.form-success {
    background: #D1FAE5;
    border: 1px solid #A7F3D0;
    border-radius: var(--radius-lg);
    padding: var(--space-4) var(--space-5);
    color: #065F46;
    font-size: var(--text-sm);
    display: none;
    align-items: center;
    gap: var(--space-3);
    margin-bottom: var(--space-5);
}

.form-success.show {
    display: flex;
}

.form-success i {
    font-size: var(--text-xl);
}

/* Responsive */
@media (max-width: 1024px) {
    .contact-info-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .campuses-contact-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .contact-faq-content {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 768px) {
    .contact-info-section {
        margin-top: 0;
        padding: var(--space-10) 0;
    }
    
    .contact-info-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .campuses-contact-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-form-wrapper {
        padding: var(--space-6);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Contact Us</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Contact</span>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT INFO SECTION -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-grid">
            <div class="contact-info-card reveal">
                <div class="contact-info-icon">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <h3>Call Us</h3>
                <p>Mon - Sat, 8AM - 4PM</p>
                <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a>
            </div>
            
            <div class="contact-info-card reveal">
                <div class="contact-info-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3>WhatsApp</h3>
                <p>Quick Response</p>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank">Chat Now</a>
            </div>
            
            <div class="contact-info-card reveal">
                <div class="contact-info-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Email Us</h3>
                <p>We reply within 24 hours</p>
                <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
            </div>
            
            <div class="contact-info-card reveal">
                <div class="contact-info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Visit Us</h3>
                <p>Main Campus</p>
                <a href="#" style="font-size: var(--text-sm);"><?php echo SITE_ADDRESS; ?></a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM SECTION -->
<section class="contact-form-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper reveal-left">
                <h2>Send Us a Message</h2>
                <p class="contact-form-desc">
                    Have questions about admissions, fee structure, or programs? 
                    Fill out the form below and we'll get back to you shortly.
                </p>
                
                <div class="form-success" id="formSuccess">
                    <i class="fas fa-check-circle"></i>
                    <span>Thank you! Your message has been sent successfully. We'll contact you soon.</span>
                </div>
                
                <form id="contactForm" data-validate action="" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name <span>*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            <span class="form-error">Please enter your name</span>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Phone Number <span>*</span></label>
                            <input type="tel" name="phone" class="form-control" placeholder="03XX-XXXXXXX" required>
                            <span class="form-error">Please enter your phone number</span>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="your@email.com">
                            <span class="form-error">Please enter a valid email</span>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Interested Campus <span>*</span></label>
                            <select name="campus" class="form-control" required>
                                <option value="">Select Campus</option>
                                <option value="Madina Town">Madina Town Campus (Main)</option>
                                <option value="Khudian Khas">Khudian Khas Campus</option>
                                <option value="Gujranwala">Gujranwala Campus</option>
                                <option value="Noorpur">Noorpur Campus</option>
                                <option value="Atheel Pur">Atheel Pur Campus</option>
                                <option value="Any">Any Campus</option>
                            </select>
                            <span class="form-error">Please select a campus</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Subject <span>*</span></label>
                        <select name="subject" class="form-control" required>
                            <option value="">Select Subject</option>
                            <option value="Admission Inquiry">Admission Inquiry</option>
                            <option value="Fee Information">Fee Information</option>
                            <option value="Hifz Program">Hifz Program</option>
                            <option value="Skills Program">Skills Program</option>
                            <option value="Schedule Visit">Schedule Campus Visit</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="form-error">Please select a subject</span>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Your Message <span>*</span></label>
                        <textarea name="message" class="form-control" placeholder="Write your message here..." required></textarea>
                        <span class="form-error">Please enter your message</span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Map & Campuses -->
            <div class="contact-map-wrapper reveal-right">
                <h3 style="padding: var(--space-5); margin: 0; border-bottom: 1px solid var(--gray-100); display: flex; align-items: center; gap: var(--space-3);">
                    <i class="fas fa-map-marked-alt" style="color: var(--accent);"></i>
                    Our Locations
                </h3>
                
                <!-- Map Container -->
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Madina Town, Kasur<br>Punjab, Pakistan</p>
                    </div>
                </div>
                
                <!-- Campus Quick Links -->
                <div style="padding: var(--space-5);">
                    <h4 style="font-size: var(--text-base); margin-bottom: var(--space-3); color: var(--gray-700);">Quick Contact:</h4>
                    <div class="campus-cards-sidebar">
                        <div class="campus-mini-card">
                            <div class="campus-mini-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="campus-mini-info">
                                <h4>Madina Town (Main)</h4>
                                <p>Kasur City</p>
                            </div>
                        </div>
                        
                        <div class="campus-mini-card">
                            <div class="campus-mini-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="campus-mini-info">
                                <h4>Khudian Khas</h4>
                                <p>Kasur District</p>
                            </div>
                        </div>
                        
                        <div class="campus-mini-card">
                            <div class="campus-mini-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="campus-mini-info">
                                <h4>Gujranwala</h4>
                                <p>Gujranwala City</p>
                            </div>
                        </div>
                        
                        <div class="campus-mini-card">
                            <div class="campus-mini-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="campus-mini-info">
                                <h4>Noorpur</h4>
                                <p>Punjab</p>
                            </div>
                        </div>
                        
                        <div class="campus-mini-card">
                            <div class="campus-mini-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="campus-mini-info">
                                <h4>Atheel Pur</h4>
                                <p>Farzand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CAMPUSES SECTION -->
<section class="campuses-section-contact">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Network</span>
            <h2 class="section-title">All Campuses</h2>
            <p class="section-desc">Visit any of our 5 campuses across Punjab.</p>
        </div>
        
        <div class="campuses-contact-grid">
            <!-- Campus 1: Madina Town -->
            <div class="campus-contact-card reveal">
                <div class="campus-contact-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Madina Town Campus">
                </div>
                <div class="campus-contact-info">
                    <h3>Madina Town Campus</h3>
                    <div class="campus-contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Madina Town, Kasur City, Punjab</span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo SITE_PHONE; ?></span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                    </div>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Madina Town Campus." target="_blank" class="campus-contact-link">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp Campus
                    </a>
                </div>
            </div>
            
            <!-- Campus 2: Khudian Khas -->
            <div class="campus-contact-card reveal">
                <div class="campus-contact-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Khudian Khas Campus">
                </div>
                <div class="campus-contact-info">
                    <h3>Khudian Khas Campus</h3>
                    <div class="campus-contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Khudian Khas, Kasur District, Punjab</span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo SITE_PHONE; ?></span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                    </div>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Khudian Khas Campus." target="_blank" class="campus-contact-link">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp Campus
                    </a>
                </div>
            </div>
            
            <!-- Campus 3: Gujranwala -->
            <div class="campus-contact-card reveal">
                <div class="campus-contact-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Gujranwala Campus">
                </div>
                <div class="campus-contact-info">
                    <h3>Gujranwala Campus</h3>
                    <div class="campus-contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Gujranwala City, Punjab</span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo SITE_PHONE; ?></span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                    </div>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Gujranwala Campus." target="_blank" class="campus-contact-link">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp Campus
                    </a>
                </div>
            </div>
            
            <!-- Campus 4: Noorpur -->
            <div class="campus-contact-card reveal">
                <div class="campus-contact-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Noorpur Campus">
                </div>
                <div class="campus-contact-info">
                    <h3>Noorpur Campus</h3>
                    <div class="campus-contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Noorpur, Punjab</span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo SITE_PHONE; ?></span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                    </div>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Noorpur Campus." target="_blank" class="campus-contact-link">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp Campus
                    </a>
                </div>
            </div>
            
            <!-- Campus 5: Atheel Pur -->
            <div class="campus-contact-card reveal">
                <div class="campus-contact-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Atheel Pur Campus">
                </div>
                <div class="campus-contact-info">
                    <h3>Atheel Pur Campus</h3>
                    <div class="campus-contact-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Atheel Pur (Farzand), Punjab</span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo SITE_PHONE; ?></span>
                    </div>
                    <div class="campus-contact-detail">
                        <i class="fas fa-clock"></i>
                        <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                    </div>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Atheel Pur Campus." target="_blank" class="campus-contact-link">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp Campus
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ CTA -->
<section class="contact-faq-cta">
    <div class="container">
        <div class="contact-faq-content">
            <div class="contact-faq-text">
                <h3>Have More Questions?</h3>
                <p>Check out our frequently asked questions for quick answers.</p>
            </div>
            <a href="?page=faqs" class="btn btn-primary btn-lg">
                <i class="fas fa-question-circle"></i>
                View FAQs
            </a>
        </div>
    </div>
</section>

<!-- Form Submission Handler -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verify CSRF
    if (!verify_csrf($_POST['csrf_token'] ?? '')) {
        set_flash('error', 'Invalid request. Please try again.');
    } else {
        // Sanitize inputs
        $name = sanitize($_POST['name'] ?? '');
        $phone = sanitize($_POST['phone'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $campus = sanitize($_POST['campus'] ?? '');
        $subject = sanitize($_POST['subject'] ?? '');
        $message = sanitize($_POST['message'] ?? '');
        
        // Validate
        $errors = [];
        if (empty($name)) $errors[] = 'name';
        if (empty($phone)) $errors[] = 'phone';
        if (empty($campus)) $errors[] = 'campus';
        if (empty($subject)) $errors[] = 'subject';
        if (empty($message)) $errors[] = 'message';
        
        if (empty($errors)) {
            // Save to database
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO contact_inquiries 
                    (name, phone, email, campus, subject, message, created_at) 
                    VALUES (?, ?, ?, ?, ?, ?, NOW())
                ");
                $stmt->execute([$name, $phone, $email, $campus, $subject, $message]);
                
                // Log activity
                log_activity('contact_form', "New inquiry from: $name");
                
                // Show success
                echo '<script>document.addEventListener("DOMContentLoaded", function() { 
                    document.getElementById("formSuccess").classList.add("show");
                    document.getElementById("contactForm").reset();
                });</script>';
                
            } catch (PDOException $e) {
                error_log("Contact form error: " . $e->getMessage());
                set_flash('error', 'Something went wrong. Please try again or contact us directly.');
            }
        }
    }
}
?>