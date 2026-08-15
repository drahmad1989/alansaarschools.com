<style>
/* =============================================
   FEE STRUCTURE PAGE STYLES
   ============================================= */

/* Fee Hero */
.fee-hero {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
}

.fee-hero-content {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.fee-hero h1 {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.fee-hero p {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
}

/* Fee Tables Section */
.fee-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.fee-tables-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-8);
}

.fee-table-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    border: 1px solid var(--gray-100);
}

.fee-table-header {
    background: var(--primary);
    color: var(--white);
    padding: var(--space-5);
    text-align: center;
}

.fee-table-header h3 {
    color: var(--white);
    font-size: var(--text-xl);
    margin: 0;
}

.fee-table-header span {
    display: block;
    font-size: var(--text-sm);
    opacity: 0.8;
    margin-top: var(--space-1);
}

.fee-table {
    width: 100%;
}

.fee-table-row {
    display: grid;
    grid-template-columns: 2fr 1fr;
    padding: var(--space-4) var(--space-5);
    border-bottom: 1px solid var(--gray-100);
}

.fee-table-row:last-child {
    border-bottom: none;
}

.fee-table-row.total {
    background: var(--off-white);
    font-weight: 700;
    color: var(--primary);
}

.fee-table-row span:first-child {
    color: var(--gray-600);
    font-size: var(--text-sm);
}

.fee-table-row span:last-child {
    text-align: right;
    color: var(--primary);
    font-weight: 600;
}

.fee-table-row.total span {
    color: var(--primary);
}

/* Note Section */
.fee-notes {
    padding: var(--space-12) 0;
    background: var(--off-white);
}

.notes-box {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    border-left: 4px solid var(--accent);
}

.notes-box h3 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-4);
}

.notes-box ul {
    list-style: none;
}

.notes-box ul li {
    position: relative;
    padding-left: var(--space-6);
    margin-bottom: var(--space-3);
    color: var(--gray-600);
    font-size: var(--text-sm);
    line-height: 1.7;
}

.notes-box ul li::before {
    content: '•';
    position: absolute;
    left: var(--space-3);
    color: var(--accent);
    font-weight: 700;
}

/* Scholarship Section */
.scholarship-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
}

.scholarship-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.scholarship-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
}

.scholarship-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.scholarship-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto var(--space-4);
    background: var(--accent);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-2xl);
}

.scholarship-card h4 {
    color: var(--white);
    font-size: var(--text-lg);
    margin-bottom: var(--space-2);
}

.scholarship-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: var(--text-sm);
    margin: 0;
}

/* Payment Section */
.payment-section {
    padding: var(--space-16) 0;
    background: var(--white);
}

.payment-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.payment-card {
    background: var(--off-white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
}

.payment-card:hover {
    background: var(--primary);
    color: var(--white);
}

.payment-card:hover h4 {
    color: var(--white);
}

.payment-card:hover i {
    color: var(--accent);
}

.payment-card i {
    font-size: var(--text-3xl);
    color: var(--primary);
    margin-bottom: var(--space-4);
    transition: color var(--transition-base);
}

.payment-card h4 {
    font-size: var(--text-base);
    color: var(--primary);
    transition: color var(--transition-base);
}

/* Responsive */
@media (max-width: 1024px) {
    .fee-tables-grid {
        grid-template-columns: 1fr;
    }
    
    .scholarship-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .payment-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .scholarship-grid {
        grid-template-columns: 1fr;
    }
    
    .payment-grid {
        grid-template-columns: 1fr;
    }
    
    .fee-table-row {
        padding: var(--space-3) var(--space-4);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Fee Structure</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Fee Structure</span>
            </div>
        </div>
    </div>
</section>

<!-- FEE HERO -->
<section class="fee-hero">
    <div class="container">
        <div class="fee-hero-content">
            <h1>Affordable Excellence</h1>
            <p>
                Quality education should be accessible to all. Our fee structure is designed 
                to provide the best value without compromising on quality.
            </p>
        </div>
    </div>
</section>

<!-- FEE TABLES SECTION -->
<section class="fee-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Fee Details</span>
            <h2 class="section-title">Academic Fee Structure 2026</h2>
            <p class="section-desc">Transparent pricing for all grade levels.</p>
        </div>
        
        <div class="fee-tables-grid">
            <!-- Playgroup -->
            <div class="fee-table-card reveal">
                <div class="fee-table-header">
                    <h3>Playgroup</h3>
                    <span>Age 3-4 Years</span>
                </div>
                <div class="fee-table">
                    <div class="fee-table-row">
                        <span>Admission Fee</span>
                        <span>Rs. 5,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Monthly Tuition</span>
                        <span>Rs. 2,500</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Annual Charges</span>
                        <span>Rs. 3,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Activity Fee</span>
                        <span>Rs. 1,000</span>
                    </div>
                    <div class="fee-table-row total">
                        <span>Total (First Month)</span>
                        <span>Rs. 11,500</span>
                    </div>
                </div>
            </div>
            
            <!-- Primary -->
            <div class="fee-table-card reveal">
                <div class="fee-table-header">
                    <h3>Primary (Grades 1-5)</h3>
                    <span>Class 1 to 5</span>
                </div>
                <div class="fee-table">
                    <div class="fee-table-row">
                        <span>Admission Fee</span>
                        <span>Rs. 7,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Monthly Tuition</span>
                        <span>Rs. 3,500</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Annual Charges</span>
                        <span>Rs. 4,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Activity Fee</span>
                        <span>Rs. 1,500</span>
                    </div>
                    <div class="fee-table-row total">
                        <span>Total (First Month)</span>
                        <span>Rs. 16,000</span>
                    </div>
                </div>
            </div>
            
            <!-- Middle -->
            <div class="fee-table-card reveal">
                <div class="fee-table-header">
                    <h3>Middle (Grades 6-8)</h3>
                    <span>Class 6 to 8</span>
                </div>
                <div class="fee-table">
                    <div class="fee-table-row">
                        <span>Admission Fee</span>
                        <span>Rs. 8,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Monthly Tuition</span>
                        <span>Rs. 4,500</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Annual Charges</span>
                        <span>Rs. 5,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Lab & Activity Fee</span>
                        <span>Rs. 2,000</span>
                    </div>
                    <div class="fee-table-row total">
                        <span>Total (First Month)</span>
                        <span>Rs. 19,500</span>
                    </div>
                </div>
            </div>
            
            <!-- Matric -->
            <div class="fee-table-card reveal">
                <div class="fee-table-header">
                    <h3>Matriculation (9-10)</h3>
                    <span>Class 9 & 10</span>
                </div>
                <div class="fee-table">
                    <div class="fee-table-row">
                        <span>Admission Fee</span>
                        <span>Rs. 10,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Monthly Tuition</span>
                        <span>Rs. 5,500</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Annual Charges</span>
                        <span>Rs. 6,000</span>
                    </div>
                    <div class="fee-table-row">
                        <span>Lab & Board Prep</span>
                        <span>Rs. 3,000</span>
                    </div>
                    <div class="fee-table-row total">
                        <span>Total (First Month)</span>
                        <span>Rs. 24,500</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NOTES SECTION -->
<section class="fee-notes">
    <div class="container">
        <div class="notes-box reveal">
            <h3><i class="fas fa-info-circle" style="color: var(--accent); margin-right: var(--space-2);"></i> Important Notes</h3>
            <ul>
                <li>Fees are subject to annual revision. Current structure is valid for the 2026 academic session.</li>
                <li>Admission fee is one-time and non-refundable. Monthly tuition fee is payable by the 10th of each month.</li>
                <li>Annual charges cover textbooks, notebooks, ID card, and school diary.</li>
                <li>Sibling discount of 10% on tuition fee is available for the second child onwards.</li>
                <li>Skills program (Coding, Robotics, etc.) is included in the fee—no extra charges.</li>
                <li>Hifz students receive special fee concessions. Contact the campus for details.</li>
                <li>Late payment surcharge of Rs. 500 applies after the 15th of each month.</li>
                <li>Scholarships are available for deserving students. See details below.</li>
            </ul>
        </div>
    </div>
</section>

<!-- SCHOLARSHIP SECTION -->
<section class="scholarship-section">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Financial Support</span>
            <h2 class="section-title" style="color: var(--white);">Scholarships Available</h2>
        </div>
        
        <div class="scholarship-grid">
            <div class="scholarship-card reveal">
                <div class="scholarship-icon">
                    <i class="fas fa-quran"></i>
                </div>
                <h4>Hifz Scholarship</h4>
                <p>Up to 50% concession for students enrolled in Hifz program</p>
            </div>
            
            <div class="scholarship-card reveal">
                <div class="scholarship-icon">
                    <i class="fas fa-medal"></i>
                </div>
                <h4>Merit Scholarship</h4>
                <p>25% discount for students with exceptional academic performance</p>
            </div>
            
            <div class="scholarship-card reveal">
                <div class="scholarship-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Sibling Discount</h4>
                <p>10% off on tuition for each additional sibling enrolled</p>
            </div>
        </div>
    </div>
</section>

<!-- PAYMENT SECTION -->
<section class="payment-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Payment Options</span>
            <h2 class="section-title">How to Pay</h2>
        </div>
        
        <div class="payment-grid">
            <div class="payment-card reveal">
                <i class="fas fa-university"></i>
                <h4>Bank Transfer</h4>
            </div>
            
            <div class="payment-card reveal">
                <i class="fas fa-money-bill-wave"></i>
                <h4>Cash at Campus</h4>
            </div>
            
            <div class="payment-card reveal">
                <i class="fas fa-mobile-alt"></i>
                <h4>EasyPaisa/JazzCash</h4>
            </div>
            
            <div class="payment-card reveal">
                <i class="fas fa-file-invoice"></i>
                <h4>Fee Voucher</h4>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Have Questions About Fees?</h2>
            <p class="cta-desc">
                Contact our admissions team for detailed fee information and scholarship eligibility.
            </p>
            <div class="cta-buttons">
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about the fee structure at Al-Ansaar Schools." class="btn btn-primary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Us
                </a>
                <a href="?page=admissions" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>