<style>
/* =============================================
   FAQ PAGE STYLES
   ============================================= */

/* FAQ Categories */
.faq-categories {
    padding: var(--space-10) 0;
    background: var(--white);
    position: sticky;
    top: 90px;
    z-index: 50;
    border-bottom: 1px solid var(--gray-100);
}

.category-buttons {
    display: flex;
    justify-content: center;
    gap: var(--space-3);
    flex-wrap: wrap;
}

.category-btn {
    padding: var(--space-2) var(--space-5);
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-600);
    background: var(--off-white);
    border: 2px solid transparent;
    border-radius: var(--radius-full);
    cursor: pointer;
    transition: all var(--transition-base);
}

.category-btn:hover {
    color: var(--primary);
    border-color: var(--primary);
}

.category-btn.active {
    background: var(--primary);
    color: var(--white);
    border-color: var(--primary);
}

/* FAQ Section */
.faq-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.faq-accordion {
    max-width: 900px;
    margin: 0 auto;
}

.faq-item {
    background: var(--white);
    border-radius: var(--radius-xl);
    margin-bottom: var(--space-4);
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: all var(--transition-base);
}

.faq-item:hover {
    box-shadow: var(--shadow-lg);
}

.faq-question {
    width: 100%;
    padding: var(--space-5) var(--space-6);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: var(--space-4);
    background: var(--white);
    border: none;
    cursor: pointer;
    text-align: left;
    transition: all var(--transition-base);
}

.faq-question:hover {
    background: var(--off-white);
}

.faq-question h4 {
    font-size: var(--text-base);
    color: var(--primary);
    margin: 0;
    flex: 1;
}

.faq-icon {
    width: 40px;
    height: 40px;
    background: var(--off-white);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    font-size: var(--text-lg);
    transition: all var(--transition-base);
    flex-shrink: 0;
}

.faq-item.active .faq-icon {
    background: var(--accent);
    color: var(--white);
    transform: rotate(180deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height var(--transition-base);
}

.faq-item.active .faq-answer {
    max-height: 500px;
}

.faq-answer-content {
    padding: 0 var(--space-6) var(--space-5);
    color: var(--gray-600);
    font-size: var(--text-sm);
    line-height: 1.8;
    border-top: 1px solid var(--gray-100);
    padding-top: var(--space-5);
}

.faq-answer-content a {
    color: var(--accent);
    font-weight: 600;
}

.faq-answer-content a:hover {
    text-decoration: underline;
}

/* Still Have Questions */
.faq-contact {
    padding: var(--space-16) 0;
    background: var(--primary-dark);
}

.faq-contact-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-10);
    align-items: center;
}

.faq-contact-text h2 {
    color: var(--white);
    margin-bottom: var(--space-4);
}

.faq-contact-text h2::after {
    background: var(--accent);
    margin: var(--space-4) 0 0;
}

.faq-contact-text p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-base);
    line-height: 1.8;
}

.faq-contact-methods {
    display: flex;
    flex-direction: column;
    gap: var(--space-4);
}

.contact-method {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    background: rgba(255, 255, 255, 0.05);
    padding: var(--space-4);
    border-radius: var(--radius-lg);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all var(--transition-base);
}

.contact-method:hover {
    background: rgba(255, 255, 255, 0.1);
}

.contact-method-icon {
    width: 50px;
    height: 50px;
    background: var(--accent);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-xl);
    flex-shrink: 0;
}

.contact-method-info h4 {
    color: var(--white);
    font-size: var(--text-base);
    margin-bottom: var(--space-1);
}

.contact-method-info a {
    color: var(--accent);
    font-size: var(--text-sm);
}

/* Responsive */
@media (max-width: 768px) {
    .faq-categories {
        top: 70px;
    }
    
    .category-buttons {
        gap: var(--space-2);
    }
    
    .category-btn {
        padding: var(--space-2) var(--space-4);
        font-size: var(--text-xs);
    }
    
    .faq-contact-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .faq-contact-text h2::after {
        margin: var(--space-4) auto 0;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Frequently Asked Questions</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>FAQs</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ CATEGORIES -->
<section class="faq-categories">
    <div class="container">
        <div class="category-buttons">
            <button class="category-btn active" data-category="all">All Questions</button>
            <button class="category-btn" data-category="admissions">Admissions</button>
            <button class="category-btn" data-category="academics">Academics</button>
            <button class="category-btn" data-category="fee">Fee & Payment</button>
            <button class="category-btn" data-category="hifz">Hifz Program</button>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
<section class="faq-section">
    <div class="container">
        <div class="faq-accordion">
            <!-- General -->
            <div class="faq-item reveal" data-category="admissions">
                <button class="faq-question">
                    <h4>What is the age requirement for admission to different classes?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Age requirements vary by class level:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Playgroup:</strong> 3+ years</li>
                            <li><strong>Nursery:</strong> 4+ years</li>
                            <li><strong>Prep:</strong> 5+ years</li>
                            <li><strong>Class 1:</strong> 5.5+ years</li>
                            <li><strong>Other Classes:</strong> Age appropriate for the class level</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">A birth certificate or Form B is required to verify the age.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="admissions">
                <button class="faq-question">
                    <h4>What is the admission process at Al-Ansaar Schools?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>The admission process is simple and straightforward:</p>
                        <ol style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Step 1:</strong> Submit an inquiry form online or visit the campus</li>
                            <li><strong>Step 2:</strong> Complete the registration with required documents</li>
                            <li><strong>Step 3:</strong> Child appears for a simple age-appropriate assessment</li>
                            <li><strong>Step 4:</strong> Parent interview and admission confirmation</li>
                        </ol>
                        <p style="margin-top: var(--space-3);">For detailed information, visit our <a href="?page=admissions">Admissions page</a>.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="admissions">
                <button class="faq-question">
                    <h4>Is there an admission test? How should my child prepare?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Yes, we conduct a simple age-appropriate assessment to understand your child's current learning level. The assessment covers:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li>Basic reading and writing skills (for older children)</li>
                            <li>Simple mathematics concepts</li>
                            <li>General awareness appropriate to their age</li>
                        </ul>
                        <p style="margin-top: var(--space-3);"><strong>No special preparation is required.</strong> The assessment is designed to evaluate natural abilities, not coached responses. We recommend your child is well-rested and comfortable on the assessment day.</p>
                    </div>
                </div>
            </div>
            
            <!-- Academics -->
            <div class="faq-item reveal" data-category="academics">
                <button class="faq-question">
                    <h4>What curriculum does Al-Ansaar Schools follow?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>We follow the national curriculum prescribed by the Punjab Education Department, supplemented with:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Islamic Education:</strong> Nazra, Hifz, Fiqh, and Islamic History</li>
                            <li><strong>Modern Skills:</strong> Coding, Robotics, Public Speaking</li>
                            <li><strong>English Language:</strong> Enhanced English curriculum</li>
                            <li><strong>Character Building:</strong> Values and ethics education</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Our students appear in board exams and consistently achieve excellent results.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="academics">
                <button class="faq-question">
                    <h4>What is the student-teacher ratio?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>We maintain optimal student-teacher ratios to ensure every child receives individual attention:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Playgroup:</strong> Maximum 15 students per class</li>
                            <li><strong>Primary Classes:</strong> Maximum 25 students per class</li>
                            <li><strong>Middle & Matric:</strong> Maximum 30 students per class</li>
                            <li><strong>Hifz Classes:</strong> Maximum 10-12 students per teacher</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="academics">
                <button class="faq-question">
                    <h4>What extracurricular activities are available?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>We offer a wide range of extracurricular activities:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Sports:</strong> Cricket, Football, Badminton, Athletics</li>
                            <li><strong>Skills:</strong> Coding, Robotics, Karate</li>
                            <li><strong>Arts:</strong> Drawing, Painting, Calligraphy</li>
                            <li><strong>Competitions:</strong> Qirat, Speech, Quiz, Debates</li>
                            <li><strong>Events:</strong> Annual Day, Sports Gala, Educational Trips</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Learn more on our <a href="?page=student-life">Student Life page</a>.</p>
                    </div>
                </div>
            </div>
            
            <!-- Fee -->
            <div class="faq-item reveal" data-category="fee">
                <button class="faq-question">
                    <h4>What is the fee structure?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Our fee structure varies by grade level and campus. We offer one of the most competitive fee structures in the region for quality education. The fee includes:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li>Tuition fee</li>
                            <li>Annual charges (books, uniform items, ID card)</li>
                            <li>Skills program (no extra charges)</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">For detailed fee information, please visit our <a href="?page=fee-structure">Fee Structure page</a> or contact your preferred campus directly.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="fee">
                <button class="faq-question">
                    <h4>Are there any scholarships or discounts available?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Yes, we offer several scholarship and discount programs:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Hifz Scholarship:</strong> Up to 50% concession for students enrolled in the Hifz program</li>
                            <li><strong>Sibling Discount:</strong> 10% off on tuition for the second child and onwards</li>
                            <li><strong>Merit Scholarship:</strong> 25% discount for students with exceptional academic performance</li>
                            <li><strong>Need-Based Support:</strong> Financial assistance for deserving families</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Contact the campus office for eligibility criteria and application process.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="fee">
                <button class="faq-question">
                    <h4>What are the payment options?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>We offer multiple convenient payment options:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Bank Transfer:</strong> Direct deposit to school account</li>
                            <li><strong>Cash Payment:</strong> At the campus accounts office</li>
                            <li><strong>Mobile Wallets:</strong> EasyPaisa, JazzCash</li>
                            <li><strong>Fee Voucher:</strong> Monthly vouchers issued for easy tracking</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Fee is due by the 10th of each month. A late fee surcharge applies after the 15th.</p>
                    </div>
                </div>
            </div>
            
            <!-- Hifz -->
            <div class="faq-item reveal" data-category="hifz">
                <button class="faq-question">
                    <h4>What is the integrated Hifz program?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Our integrated Hifz program allows students to memorize the Holy Quran while continuing their regular academic education. Key features include:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li>Dedicated Hifz classes with qualified Huffaz teachers</li>
                            <li>Balanced schedule between Hifz and academics</li>
                            <li>Personalized attention and progress tracking</li>
                            <li>Tajweed and revision sessions</li>
                            <li>Regular assessment and parent updates</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Students typically complete Hifz in 2-3 years while maintaining their grade-level studies.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="hifz">
                <button class="faq-question">
                    <h4>How long does it take to complete Hifz?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>The duration varies based on each student's ability and dedication:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Average Duration:</strong> 2-3 years</li>
                            <li><strong>Fast Learners:</strong> May complete in 1.5-2 years</li>
                            <li><strong>Regular Pace:</strong> 3 years is common</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Our teachers work with each student individually to ensure proper memorization with tajweed, rather than rushing. Quality of memorization is prioritized over speed.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="hifz">
                <button class="faq-question">
                    <h4>Can my child continue Hifz from another school?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Yes, students who have already started Hifz elsewhere can continue at Al-Ansaar. The process includes:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li>Assessment of current Hifz progress</li>
                            <li>Evaluation of tajweed and memorization quality</li>
                            <li>Placement in appropriate Hifz class</li>
                            <li>Revision plan for previously memorized portions</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Our teachers ensure a smooth transition and help students catch up if needed.</p>
                    </div>
                </div>
            </div>
            
            <!-- General -->
            <div class="faq-item reveal" data-category="admissions">
                <button class="faq-question">
                    <h4>Is transport facility available?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>Yes, we provide safe and reliable transport facilities on selected routes:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li>GPS-tracked vehicles</li>
                            <li>Trained drivers and attendants</li>
                            <li>Door-to-door pickup and drop (where possible)</li>
                            <li>Morning and afternoon routes</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Transport fee is charged separately based on distance. Please inquire at the campus office for routes and availability in your area.</p>
                    </div>
                </div>
            </div>
            
            <div class="faq-item reveal" data-category="admissions">
                <button class="faq-question">
                    <h4>What are the school timings?</h4>
                    <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
                </button>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <p>School timings vary slightly by campus and season:</p>
                        <ul style="margin-top: var(--space-3); padding-left: var(--space-5);">
                            <li><strong>Regular Classes:</strong> 8:00 AM - 2:00 PM (Mon-Thu), 8:00 AM - 12:30 PM (Fri)</li>
                            <li><strong>Hifz Classes:</strong> 8:00 AM - 3:00 PM (with breaks)</li>
                            <li><strong>Office Hours:</strong> 8:00 AM - 4:00 PM (Mon-Sat)</li>
                        </ul>
                        <p style="margin-top: var(--space-3);">Timings may vary during Ramadan and extreme weather conditions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STILL HAVE QUESTIONS -->
<section class="faq-contact">
    <div class="container">
        <div class="faq-contact-content">
            <div class="faq-contact-text">
                <h2>Still Have Questions?</h2>
                <p>If you couldn't find the answer you were looking for, please don't hesitate to contact us directly. Our team is always ready to assist you.</p>
            </div>
            
            <div class="faq-contact-methods">
                <div class="contact-method">
                    <div class="contact-method-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="contact-method-info">
                        <h4>WhatsApp</h4>
                        <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" target="_blank">Chat with Us</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-method-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-method-info">
                        <h4>Call Us</h4>
                        <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-method-info">
                        <h4>Email</h4>
                        <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close others
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current
            item.classList.toggle('active');
        });
    });
    
    // Category Filter
    const categoryBtns = document.querySelectorAll('.category-btn');
    
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.getAttribute('data-category');
            
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            faqItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>