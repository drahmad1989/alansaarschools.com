<style>
/* =============================================
   ADMISSIONS PAGE STYLES
   ============================================= */

/* Hero CTA */
.admission-hero-cta {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.admission-hero-cta::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -20%;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.admission-hero-cta::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -10%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
}

.admission-hero-content {
    position: relative;
    z-index: 1;
}

.admission-badge {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    background: rgba(255, 255, 255, 0.2);
    padding: var(--space-2) var(--space-5);
    border-radius: var(--radius-full);
    color: var(--white);
    font-size: var(--text-sm);
    font-weight: 600;
    margin-bottom: var(--space-5);
    animation: pulse 2s ease-in-out infinite;
}

.admission-hero-content h1 {
    color: var(--white);
    font-size: var(--text-4xl);
    margin-bottom: var(--space-4);
}

.admission-hero-content p {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-xl);
    max-width: 600px;
    margin: 0 auto var(--space-8);
}

.admission-hero-buttons {
    display: flex;
    justify-content: center;
    gap: var(--space-4);
    flex-wrap: wrap;
}

.admission-hero-buttons .btn-primary {
    background: var(--white);
    color: var(--primary);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.admission-hero-buttons .btn-primary:hover {
    background: var(--primary);
    color: var(--white);
}

/* Process Section */
.process-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.process-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
    position: relative;
}

.process-grid::before {
    content: '';
    position: absolute;
    top: 50px;
    left: 10%;
    right: 10%;
    height: 4px;
    background: var(--gray-200);
    z-index: 0;
}

.process-step {
    text-align: center;
    position: relative;
    z-index: 1;
}

.process-number {
    width: 100px;
    height: 100px;
    margin: 0 auto var(--space-6);
    background: var(--white);
    border: 4px solid var(--accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-display);
    font-size: var(--text-4xl);
    font-weight: 800;
    color: var(--primary);
    transition: all var(--transition-base);
    box-shadow: var(--shadow-lg);
}

.process-step:hover .process-number {
    background: var(--accent);
    color: var(--white);
    transform: scale(1.1);
}

.process-step h3 {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.process-step p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Form Section */
.admission-form-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.admission-form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: start;
}

.admission-form-info h2 {
    margin-bottom: var(--space-6);
}

.admission-form-info h2::after {
    margin: var(--space-4) 0 0;
}

.admission-form-info p {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.8;
    margin-bottom: var(--space-6);
}

.admission-benefits {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    background: var(--white);
    padding: var(--space-4);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.benefit-item:hover {
    box-shadow: var(--shadow-md);
    transform: translateX(5px);
}

.benefit-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-xl);
    flex-shrink: 0;
}

.benefit-item h4 {
    font-size: var(--text-base);
    color: var(--primary);
    margin: 0;
}

/* Form Wrapper */
.admission-form-wrapper {
    background: var(--white);
    border-radius: var(--radius-2xl);
    padding: var(--space-10);
    box-shadow: var(--shadow-xl);
}

.admission-form-wrapper h3 {
    text-align: center;
    margin-bottom: var(--space-6);
    color: var(--primary);
}

.admission-form-wrapper h3::after {
    display: none;
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

select.form-control {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%2364748B' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10l-5 5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right var(--space-4) center;
    padding-right: var(--space-10);
}

.form-success {
    background: #D1FAE5;
    border: 1px solid #A7F3D0;
    border-radius: var(--radius-lg);
    padding: var(--space-4);
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

/* Documents Section */
.documents-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
}

.documents-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-10);
    align-items: center;
}

.documents-content .section-subtitle {
    color: var(--accent);
}

.documents-content .section-subtitle::before,
.documents-content .section-subtitle::after {
    background: var(--accent);
}

.documents-content .section-title {
    color: var(--white);
}

.documents-content .section-title::after {
    background: var(--accent);
    margin: var(--space-5) 0 0;
}

.documents-list {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-4);
}

.document-item {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    background: rgba(255, 255, 255, 0.05);
    padding: var(--space-4);
    border-radius: var(--radius-lg);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all var(--transition-base);
}

.document-item:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
}

.document-icon {
    width: 45px;
    height: 45px;
    background: var(--accent);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-lg);
    flex-shrink: 0;
}

.document-item span {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
}

.documents-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-2xl);
}

.documents-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* FAQ Section */
.faq-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-5);
    max-width: 1000px;
    margin: 0 auto;
}

.faq-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    border-left: 4px solid var(--accent);
    transition: all var(--transition-base);
}

.faq-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-5px);
}

.faq-card h4 {
    font-size: var(--text-base);
    color: var(--primary);
    margin-bottom: var(--space-3);
    display: flex;
    align-items: flex-start;
    gap: var(--space-3);
}

.faq-card h4 i {
    color: var(--accent);
    margin-top: 3px;
}

.faq-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin: 0;
    padding-left: var(--space-7);
}

/* Responsive */
@media (max-width: 1024px) {
    .process-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .process-grid::before {
        display: none;
    }
    
    .admission-form-grid {
        grid-template-columns: 1fr;
    }
    
    .documents-grid {
        grid-template-columns: 1fr;
    }
    
    .documents-image {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .process-grid {
        grid-template-columns: 1fr;
    }
    
    .process-number {
        width: 80px;
        height: 80px;
        font-size: var(--text-2xl);
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .admission-form-wrapper {
        padding: var(--space-6);
    }
    
    .admission-hero-content h1 {
        font-size: var(--text-2xl);
    }
    
    .admission-hero-content p {
        font-size: var(--text-base);
    }
    
    .admission-hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .admission-hero-buttons .btn {
        width: 100%;
        max-width: 280px;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Admissions 2026</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Admissions</span>
            </div>
        </div>
    </div>
</section>

<!-- HERO CTA -->
<section class="admission-hero-cta">
    <div class="container">
        <div class="admission-hero-content">
            <span class="admission-badge">
                <i class="fas fa-star"></i>
                Session 2026
            </span>
            <h1>Admissions Are Now Open!</h1>
            <p>Secure your child's future with quality education. Limited seats available across all campuses.</p>
            <div class="admission-hero-buttons">
                <a href="#admission-form" class="btn btn-primary btn-lg">
                    <i class="fas fa-file-alt"></i>
                    Apply Online
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to inquire about admissions for 2026." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Inquiry
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS SECTION -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">How to Apply</span>
            <h2 class="section-title">Admission Process</h2>
            <p class="section-desc">Simple 4-step process to enroll your child at Al-Ansaar Schools.</p>
        </div>
        
        <div class="process-grid">
            <div class="process-step reveal">
                <div class="process-number">1</div>
                <h3>Inquiry</h3>
                <p>Visit our campus or fill out the online inquiry form to express your interest.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-number">2</div>
                <h3>Registration</h3>
                <p>Submit the admission form along with the required documents and registration fee.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-number">3</div>
                <h3>Assessment</h3>
                <p>A simple age-appropriate assessment to understand your child's learning level.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-number">4</div>
                <h3>Confirmation</h3>
                <p>Interview with parents and formal admission offer upon successful assessment.</p>
            </div>
        </div>
    </div>
</section>

<!-- ADMISSION FORM SECTION -->
<section class="admission-form-section" id="admission-form">
    <div class="container">
        <div class="admission-form-grid">
            <!-- Info Column -->
            <div class="admission-form-info reveal-left">
                <h2>Apply for Admission</h2>
                <p>
                    Begin your child's journey with Al-Ansaar Schools. Fill out the inquiry form 
                    and our admissions team will contact you within 24 hours to guide you through 
                    the enrollment process.
                </p>
                
                <div class="admission-benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Quick Response within 24 Hours</h4>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Personalized Guidance</h4>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Campus Tour Available</h4>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4>Scholarship Information</h4>
                    </div>
                </div>
            </div>
            
            <!-- Form Column -->
            <div class="admission-form-wrapper reveal-right">
                <h3>Admission Inquiry Form</h3>
                
                <div class="form-success" id="admissionSuccess">
                    <i class="fas fa-check-circle"></i>
                    <span>Thank you! Your inquiry has been submitted. We will contact you soon.</span>
                </div>
                
                <form id="admissionForm" data-validate action="" method="POST">
                    <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Student Name <span>*</span></label>
                            <input type="text" name="student_name" class="form-control" placeholder="Student's full name" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Parent/Guardian Name <span>*</span></label>
                            <input type="text" name="parent_name" class="form-control" placeholder="Parent's full name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Phone Number <span>*</span></label>
                            <input type="tel" name="phone" class="form-control" placeholder="03XX-XXXXXXX" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="your@email.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Preferred Campus <span>*</span></label>
                            <select name="campus" class="form-control" required>
                                <option value="">Select Campus</option>
                                <option value="Madina Town">Madina Town Campus (Main)</option>
                                <option value="Khudian Khas">Khudian Khas Campus</option>
                                <option value="Gujranwala">Gujranwala Campus</option>
                                <option value="Noorpur">Noorpur Campus</option>
                                <option value="Atheel Pur">Atheel Pur Campus</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Applying for Grade <span>*</span></label>
                            <select name="grade" class="form-control" required>
                                <option value="">Select Grade</option>
                                <option value="Playgroup">Playgroup</option>
                                <option value="Nursery">Nursery</option>
                                <option value="Prep">Prep</option>
                                <?php for($i=1; $i<=10; $i++): ?>
                                <option value="Grade <?php echo $i; ?>">Grade <?php echo $i; ?></option>
                                <?php endfor; ?>
                                <option value="Hifz">Hifz Program</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Additional Message</label>
                        <textarea name="message" class="form-control" placeholder="Any specific questions or requirements..." rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        <i class="fas fa-paper-plane"></i>
                        Submit Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- DOCUMENTS SECTION -->
<section class="documents-section">
    <div class="container">
        <div class="documents-grid">
            <div class="documents-content reveal-left">
                <span class="section-subtitle">Checklist</span>
                <h2 class="section-title">Required Documents</h2>
                <p style="color: rgba(255,255,255,0.8); margin-bottom: var(--space-6);">
                    Please ensure you have the following documents ready at the time of registration:
                </p>
                
                <div class="documents-list">
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <span>Attested Birth Certificate or Form B</span>
                    </div>
                    
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <span>School Leaving Certificate (if applicable)</span>
                    </div>
                    
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <span>Last Academic Report Card / Result Card</span>
                    </div>
                    
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-id-card"></i>
                        </div>
                        <span>Parents' CNIC Copies (Attested)</span>
                    </div>
                    
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-camera"></i>
                        </div>
                        <span>4 Recent Passport Size Photographs</span>
                    </div>
                    
                    <div class="document-item">
                        <div class="document-icon">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <span>Vaccination Record (for Playgroup/Nursery)</span>
                    </div>
                </div>
            </div>
            
            <div class="documents-image reveal-right">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Admission Documents">
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Common Questions</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-grid">
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> What is the age requirement for admission?</h4>
                <p>Playgroup: 3+ years, Nursery: 4+ years, Prep: 5+ years. For other grades, age should be appropriate for the class level.</p>
            </div>
            
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> Is there an admission test?</h4>
                <p>Yes, a simple age-appropriate assessment is conducted to understand the child's learning level. No intensive preparation is required.</p>
            </div>
            
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> What is the fee structure?</h4>
                <p>Fee varies by grade and campus. Please visit our <a href="?page=fee-structure" style="color: var(--accent); font-weight: 600;">Fee Structure</a> page or contact the campus directly for details.</p>
            </div>
            
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> Is transport available?</h4>
                <p>Yes, we provide safe and reliable transport facilities on selected routes. Please inquire at the campus office for availability in your area.</p>
            </div>
            
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> Can my child join Hifz along with regular studies?</h4>
                <p>Yes! Our integrated Hifz program allows students to memorize the Quran while continuing their academic education in a balanced schedule.</p>
            </div>
            
            <div class="faq-card reveal">
                <h4><i class="fas fa-question-circle"></i> Are scholarships available?</h4>
                <p>Yes, we offer scholarships for Hifz students, siblings, and merit-based scholarships for high achievers. Contact us for eligibility criteria.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Join Al-Ansaar?</h2>
            <p class="cta-desc">
                Don't miss the opportunity to give your child quality education with Islamic values. 
                Limited seats available for session 2026.
            </p>
            <div class="cta-buttons">
                <a href="#admission-form" class="btn btn-primary btn-lg">
                    <i class="fas fa-file-alt"></i>
                    Apply Now
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to schedule a campus visit." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Schedule Campus Visit
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Form Submission Handler -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['student_name'])) {
    // Verify CSRF
    if (!verify_csrf($_POST['csrf_token'] ?? '')) {
        set_flash('error', 'Invalid request. Please try again.');
    } else {
        // Sanitize inputs
        $student_name = sanitize($_POST['student_name'] ?? '');
        $parent_name = sanitize($_POST['parent_name'] ?? '');
        $phone = sanitize($_POST['phone'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $campus = sanitize($_POST['campus'] ?? '');
        $grade = sanitize($_POST['grade'] ?? '');
        $message = sanitize($_POST['message'] ?? '');
        
        // Validate
        $errors = [];
        if (empty($student_name)) $errors[] = 'student_name';
        if (empty($parent_name)) $errors[] = 'parent_name';
        if (empty($phone)) $errors[] = 'phone';
        if (empty($campus)) $errors[] = 'campus';
        if (empty($grade)) $errors[] = 'grade';
        
        if (empty($errors)) {
            // Save to database
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO admission_inquiries 
                    (student_name, parent_name, phone, email, campus, grade, message, created_at) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
                ");
                $stmt->execute([$student_name, $parent_name, $phone, $email, $campus, $grade, $message]);
                
                // Log activity
                log_activity('admission_inquiry', "New admission inquiry: $student_name - $grade");
                
                // Show success
                echo '<script>document.addEventListener("DOMContentLoaded", function() { 
                    document.getElementById("admissionSuccess").classList.add("show");
                    document.getElementById("admissionForm").reset();
                    document.getElementById("admissionSuccess").scrollIntoView({behavior: "smooth", block: "center"});
                });</script>';
                
            } catch (PDOException $e) {
                error_log("Admission form error: " . $e->getMessage());
                set_flash('error', 'Something went wrong. Please try again or contact us directly.');
            }
        }
    }
}
?>