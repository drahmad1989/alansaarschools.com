<style>
/* =============================================
   WHY AL-ANSAAR PAGE STYLES
   ============================================= */

/* USP Section */
.usp-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.usp-grid {
    display: flex;
    flex-direction: column;
    gap: var(--space-12);
}

.usp-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-10);
    align-items: center;
    background: var(--off-white);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    transition: all var(--transition-base);
}

.usp-card:hover {
    box-shadow: var(--shadow-xl);
}

.usp-card.reverse {
    direction: rtl;
}

.usp-card.reverse > * {
    direction: ltr;
}

.usp-image {
    height: 400px;
    overflow: hidden;
}

.usp-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.usp-card:hover .usp-image img {
    transform: scale(1.05);
}

.usp-content {
    padding: var(--space-8);
}

.usp-content h3 {
    font-size: var(--text-2xl);
    color: var(--primary);
    margin-bottom: var(--space-5);
    position: relative;
    padding-bottom: var(--space-4);
}

.usp-content h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: var(--accent);
    border-radius: var(--radius-full);
}

.usp-content p {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.9;
}

/* Features Grid */
.features-highlight {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
}

.features-grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.feature-highlight-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
}

.feature-highlight-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-10px);
}

.feature-highlight-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto var(--space-5);
    background: var(--accent);
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-3xl);
}

.feature-highlight-card h4 {
    color: var(--white);
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
}

.feature-highlight-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin: 0;
}

/* Comparison Section */
.comparison-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.comparison-table {
    background: var(--white);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.comparison-row {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    border-bottom: 1px solid var(--gray-100);
}

.comparison-row:last-child {
    border-bottom: none;
}

.comparison-row.header {
    background: var(--primary);
    color: var(--white);
    font-weight: 700;
}

.comparison-row.header span {
    padding: var(--space-5);
    text-align: center;
}

.comparison-row.header span:first-child {
    text-align: left;
}

.comparison-row span {
    padding: var(--space-4) var(--space-5);
    display: flex;
    align-items: center;
    font-size: var(--text-sm);
}

.comparison-row span:first-child {
    color: var(--gray-700);
    font-weight: 500;
}

.comparison-row span:nth-child(2) {
    background: rgba(201, 162, 39, 0.05);
    justify-content: center;
    color: var(--success);
}

.comparison-row span:nth-child(3) {
    justify-content: center;
    color: var(--gray-400);
}

/* Stats Section */
.why-stats {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
}

.why-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-8);
    text-align: center;
}

.why-stat-item h3 {
    font-size: var(--text-5xl);
    color: var(--white);
    margin-bottom: var(--space-2);
    font-family: var(--font-display);
}

.why-stat-item p {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .usp-card {
        grid-template-columns: 1fr;
    }
    
    .usp-card.reverse {
        direction: ltr;
    }
    
    .features-grid-4 {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .comparison-row {
        grid-template-columns: 1fr 1fr 1fr;
    }
    
    .why-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .usp-image {
        height: 280px;
    }
    
    .features-grid-4 {
        grid-template-columns: 1fr;
    }
    
    .comparison-row {
        grid-template-columns: 1.5fr 1fr 1fr;
    }
    
    .comparison-row span {
        padding: var(--space-3);
        font-size: var(--text-xs);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Why Choose Al-Ansaar?</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Why Al-Ansaar</span>
            </div>
        </div>
    </div>
</section>

<!-- USP SECTION -->
<section class="usp-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Difference</span>
            <h2 class="section-title">What Makes Us Unique</h2>
            <p class="section-desc">Discover the Al-Ansaar advantage that sets us apart from other institutions.</p>
        </div>
        
        <div class="usp-grid">
            <!-- Character Building -->
            <div class="usp-card reveal">
                <div class="usp-image">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Character Building">
                </div>
                <div class="usp-content">
                    <h3>Unmatched Character Building</h3>
                    <p>
                        We don't just teach subjects; we build individuals of integrity and faith. 
                        Our curriculum is integrated with Islamic teachings to foster strong moral 
                        character from a young age. Every student learns the importance of honesty, 
                        compassion, respect, and responsibility through daily practice and guidance.
                    </p>
                </div>
            </div>
            
            <!-- Hifz Program -->
            <div class="usp-card reverse reveal">
                <div class="usp-image">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Hifz Program">
                </div>
                <div class="usp-content">
                    <h3>Proven Success in Hifz</h3>
                    <p>
                        Our personalized Hifz program ensures every student receives the individual 
                        attention they need to succeed. We have a proud track record of producing 
                        successful Huffaz who excel in their future academic and professional lives. 
                        Students memorize the Quran while maintaining their regular studies.
                    </p>
                </div>
            </div>
            
            <!-- Skills Program -->
            <div class="usp-card reveal">
                <div class="usp-image">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Skills Program">
                </div>
                <div class="usp-content">
                    <h3>Future-Ready Skills</h3>
                    <p>
                        We equip our students for the 21st century with practical skills that matter. 
                        Our comprehensive skills program includes Coding, Robotics, Karate, Public 
                        Speaking, and more—ensuring our students are not just knowledgeable, but also 
                        skilled, confident, and ready to lead.
                    </p>
                </div>
            </div>
            
            <!-- Affordable Excellence -->
            <div class="usp-card reverse reveal">
                <div class="usp-image">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Affordable Excellence">
                </div>
                <div class="usp-content">
                    <h3>Affordable Excellence</h3>
                    <p>
                        We are proud to offer one of the most competitive fee structures for Hifz 
                        and skills-based education in the region. We believe quality education should 
                        be accessible to all families, regardless of their financial background. 
                        Scholarships are available for deserving students.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES HIGHLIGHT -->
<section class="features-highlight">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Our Strengths</span>
            <h2 class="section-title" style="color: var(--white);">The Al-Ansaar Advantage</h2>
        </div>
        
        <div class="features-grid-4">
            <div class="feature-highlight-card reveal">
                <div class="feature-highlight-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h4>Expert Teachers</h4>
                <p>Highly qualified and dedicated educators committed to your child's success</p>
            </div>
            
            <div class="feature-highlight-card reveal">
                <div class="feature-highlight-icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h4>Small Class Sizes</h4>
                <p>Individual attention with optimal student-teacher ratios</p>
            </div>
            
            <div class="feature-highlight-card reveal">
                <div class="feature-highlight-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4>Safe Environment</h4>
                <p>Secure campus with CCTV monitoring and strict safety protocols</p>
            </div>
            
            <div class="feature-highlight-card reveal">
                <div class="feature-highlight-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Proven Results</h4>
                <p>Consistent top positions in board exams and competitions</p>
            </div>
        </div>
    </div>
</section>

<!-- COMPARISON SECTION -->
<section class="comparison-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Comparison</span>
            <h2 class="section-title">Al-Ansaar vs Others</h2>
            <p class="section-desc">See how we compare to conventional schools.</p>
        </div>
        
        <div class="comparison-table reveal">
            <div class="comparison-row header">
                <span>Feature</span>
                <span>Al-Ansaar</span>
                <span>Others</span>
            </div>
            <div class="comparison-row">
                <span>Integrated Hifz Program</span>
                <span><i class="fas fa-check-circle"></i> Yes</span>
                <span><i class="fas fa-times-circle"></i> No</span>
            </div>
            <div class="comparison-row">
                <span>Skills Development</span>
                <span><i class="fas fa-check-circle"></i> Included</span>
                <span><i class="fas fa-times-circle"></i> Extra Fee</span>
            </div>
            <div class="comparison-row">
                <span>Character Education</span>
                <span><i class="fas fa-check-circle"></i> Integrated</span>
                <span><i class="fas fa-times-circle"></i> Limited</span>
            </div>
            <div class="comparison-row">
                <span>Individual Attention</span>
                <span><i class="fas fa-check-circle"></i> Guaranteed</span>
                <span><i class="fas fa-times-circle"></i> Varies</span>
            </div>
            <div class="comparison-row">
                <span>Islamic Environment</span>
                <span><i class="fas fa-check-circle"></i> 100%</span>
                <span><i class="fas fa-times-circle"></i> Varies</span>
            </div>
            <div class="comparison-row">
                <span>Affordable Fee</span>
                <span><i class="fas fa-check-circle"></i> Yes</span>
                <span><i class="fas fa-times-circle"></i> High</span>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="why-stats">
    <div class="container">
        <div class="why-stats-grid">
            <div class="why-stat-item reveal">
                <h3>98%</h3>
                <p>Parent Satisfaction</p>
            </div>
            <div class="why-stat-item reveal">
                <h3>500+</h3>
                <p>Successful Graduates</p>
            </div>
            <div class="why-stat-item reveal">
                <h3>50+</h3>
                <p>Expert Teachers</p>
            </div>
            <div class="why-stat-item reveal">
                <h3>5</h3>
                <p>Active Campuses</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Give Your Child the Best?</h2>
            <p class="cta-desc">
                Join the Al-Ansaar family and watch your child thrive with our unique 
                blend of Islamic education, academic excellence, and practical skills.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know more about Al-Ansaar Schools." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Us
                </a>
            </div>
        </div>
    </div>
</section>