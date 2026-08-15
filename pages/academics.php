<style>
/* =============================================
   ACADEMICS PAGE STYLES
   ============================================= */

/* Intro Section */
.academics-intro {
    padding: var(--space-16) 0;
    background: var(--white);
}

.intro-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.intro-content p {
    font-size: var(--text-lg);
    color: var(--gray-600);
    line-height: 1.9;
}

/* Programs Section */
.programs-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.program-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.program-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--accent));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform var(--transition-base);
}

.program-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.program-card:hover::before {
    transform: scaleX(1);
}

.program-icon {
    width: 90px;
    height: 90px;
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

.program-card:hover .program-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    transform: scale(1.1) rotate(5deg);
}

.program-card h3 {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.program-card .grades {
    display: inline-block;
    background: var(--off-white);
    color: var(--gray-600);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    margin-bottom: var(--space-4);
}

.program-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Hifz Section */
.hifz-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}

.hifz-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.hifz-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
    position: relative;
    z-index: 1;
}

.hifz-content .section-subtitle {
    color: var(--accent);
}

.hifz-content .section-subtitle::before,
.hifz-content .section-subtitle::after {
    background: var(--accent);
}

.hifz-content .section-title {
    color: var(--white);
}

.hifz-content .section-title::after {
    background: var(--accent);
    margin: var(--space-5) 0 0;
}

.hifz-content .section-title::after {
    margin-left: 0;
}

.hifz-text {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-base);
    line-height: 1.9;
}

.hifz-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
    margin-top: var(--space-6);
}

.hifz-feature {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
}

.hifz-feature i {
    color: var(--accent);
}

.hifz-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-2xl);
}

.hifz-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

/* Skills Section */
.skills-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.skills-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
}

.skills-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.skills-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.skills-content .section-subtitle {
    text-align: left;
}

.skills-content .section-subtitle::before {
    display: none;
}

.skills-content .section-title {
    text-align: left;
}

.skills-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.skills-text {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.9;
    margin-bottom: var(--space-6);
}

.skills-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-4);
}

.skill-item {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    background: var(--off-white);
    padding: var(--space-4);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.skill-item:hover {
    background: var(--primary);
    color: var(--white);
    transform: translateX(5px);
}

.skill-item:hover i {
    color: var(--accent);
}

.skill-item i {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-base);
    flex-shrink: 0;
}

.skill-item span {
    font-weight: 600;
    font-size: var(--text-sm);
}

/* Curriculum Section */
.curriculum-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.curriculum-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.curriculum-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    border-left: 4px solid var(--accent);
    transition: all var(--transition-base);
}

.curriculum-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-5px);
}

.curriculum-card h4 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-4);
    display: flex;
    align-items: center;
    gap: var(--space-3);
}

.curriculum-card h4 i {
    color: var(--accent);
}

.curriculum-card ul {
    list-style: none;
}

.curriculum-card ul li {
    position: relative;
    padding-left: var(--space-5);
    margin-bottom: var(--space-2);
    font-size: var(--text-sm);
    color: var(--gray-600);
}

.curriculum-card ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--success);
    font-weight: 700;
}

/* Responsive */
@media (max-width: 1024px) {
    .programs-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hifz-grid,
    .skills-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .hifz-content .section-subtitle,
    .hifz-content .section-title,
    .skills-content .section-subtitle,
    .skills-content .section-title {
        text-align: center;
    }
    
    .hifz-content .section-title::after,
    .skills-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
    
    .curriculum-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hifz-image,
    .skills-image {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .programs-grid {
        grid-template-columns: 1fr;
    }
    
    .hifz-features {
        grid-template-columns: 1fr;
    }
    
    .skills-list {
        grid-template-columns: 1fr;
    }
    
    .curriculum-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Academics & Programs</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Academics</span>
            </div>
        </div>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="academics-intro">
    <div class="container">
        <div class="intro-content reveal">
            <p>
                At Al-Ansaar Schools, we blend a rigorous academic curriculum with Islamic values 
                and practical skills. Our approach ensures that students not only excel in their 
                studies but also develop a strong moral compass and the abilities needed to succeed 
                in the modern world. From playgroup to matriculation, every stage is designed to 
                nurture growth, curiosity, and excellence.
            </p>
        </div>
    </div>
</section>

<!-- PROGRAMS SECTION -->
<section class="programs-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Programs</span>
            <h2 class="section-title">Educational Programs</h2>
            <p class="section-desc">Comprehensive programs designed for every stage of your child's educational journey.</p>
        </div>
        
        <div class="programs-grid">
            <div class="program-card reveal">
                <div class="program-icon">
                    <i class="fas fa-shapes"></i>
                </div>
                <h3>Playgroup</h3>
                <span class="grades">Age 3-4</span>
                <p>
                    A fun, nurturing environment where young minds learn through play, song, 
                    and interactive activities. We focus on developing social skills and a 
                    love for learning from the very beginning.
                </p>
            </div>
            
            <div class="program-card reveal">
                <div class="program-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Primary</h3>
                <span class="grades">Grades 1-5</span>
                <p>
                    Building strong foundations in core subjects like Mathematics, Science, 
                    and Languages, alongside regular Nazra and Islamic studies for a balanced 
                    education.
                </p>
            </div>
            
            <div class="program-card reveal">
                <div class="program-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Middle School</h3>
                <span class="grades">Grades 6-8</span>
                <p>
                    Preparing students for higher education with an advanced curriculum, 
                    critical thinking exercises, and a deeper understanding of their faith 
                    and values.
                </p>
            </div>
            
            <div class="program-card reveal">
                <div class="program-icon">
                    <i class="fas fa-university"></i>
                </div>
                <h3>Matriculation</h3>
                <span class="grades">Grades 9-10</span>
                <p>
                    Comprehensive preparation for board exams with focused guidance, 
                    ensuring our students achieve excellent results and are ready for 
                    higher education.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- HIFZ SECTION -->
<section class="hifz-section">
    <div class="container">
        <div class="hifz-grid">
            <div class="hifz-content reveal-left">
                <span class="section-subtitle">Our Flagship Program</span>
                <h2 class="section-title">Integrated Hifz Program</h2>
                
                <p class="hifz-text">
                    Our flagship Hifz program is designed with a deep understanding of a child's 
                    spiritual and educational needs. We provide a balanced schedule that allows 
                    students to memorize the Holy Quran while keeping up with their formal academic 
                    studies.
                </p>
                
                <p class="hifz-text">
                    Each student receives personalized attention from qualified Huffaz teachers 
                    who guide them through their memorization journey with patience and dedication. 
                    Our unique approach ensures students become confident Huffaz without compromising 
                    their academic progress.
                </p>
                
                <div class="hifz-features">
                    <div class="hifz-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Qualified Huffaz Teachers</span>
                    </div>
                    <div class="hifz-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Personalized Attention</span>
                    </div>
                    <div class="hifz-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Academic Balance</span>
                    </div>
                    <div class="hifz-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Tajweed Focus</span>
                    </div>
                </div>
                
                <a href="?page=contact" class="btn btn-primary" style="margin-top: var(--space-8);">
                    Learn More About Hifz
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="hifz-image reveal-right">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Hifz Class">
            </div>
        </div>
    </div>
</section>

<!-- SKILLS SECTION -->
<section class="skills-section">
    <div class="container">
        <div class="skills-grid">
            <div class="skills-image reveal-left">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Skills Training">
            </div>
            
            <div class="skills-content reveal-right">
                <span class="section-subtitle">Beyond Academics</span>
                <h2 class="section-title">Skills for the Future</h2>
                
                <p class="skills-text">
                    We believe in preparing students for the challenges and opportunities of 
                    tomorrow. Our comprehensive skills program introduces them to cutting-edge 
                    fields and essential life skills that give them a competitive edge.
                </p>
                
                <div class="skills-list">
                    <div class="skill-item">
                        <i class="fas fa-code"></i>
                        <span>Coding & Programming</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-robot"></i>
                        <span>Robotics & AI</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-fist-raised"></i>
                        <span>Karate & Self-Defense</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-comments"></i>
                        <span>Public Speaking</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-language"></i>
                        <span>English Language</span>
                    </div>
                    <div class="skill-item">
                        <i class="fas fa-palette"></i>
                        <span>Arts & Crafts</span>
                    </div>
                </div>
                
                <a href="?page=skills-program" class="btn btn-secondary" style="margin-top: var(--space-6);">
                    View All Skills
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CURRICULUM SECTION -->
<section class="curriculum-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Teach</span>
            <h2 class="section-title">Our Curriculum</h2>
            <p class="section-desc">A well-rounded curriculum covering all essential subjects.</p>
        </div>
        
        <div class="curriculum-grid">
            <div class="curriculum-card reveal">
                <h4><i class="fas fa-book"></i> Core Subjects</h4>
                <ul>
                    <li>Mathematics</li>
                    <li>Science (Physics, Chemistry, Biology)</li>
                    <li>English Language & Literature</li>
                    <li>Urdu Language & Literature</li>
                    <li>Pakistan Studies</li>
                </ul>
            </div>
            
            <div class="curriculum-card reveal">
                <h4><i class="fas fa-book-quran"></i> Islamic Education</h4>
                <ul>
                    <li>Nazra Quran</li>
                    <li>Hifz-e-Quran</li>
                    <li>Tajweed Rules</li>
                    <li>Islamic History</li>
                    <li>Fiqh & Hadith</li>
                </ul>
            </div>
            
            <div class="curriculum-card reveal">
                <h4><i class="fas fa-laptop"></i> Modern Skills</h4>
                <ul>
                    <li>Computer Science</li>
                    <li>Coding & Programming</li>
                    <li>Digital Literacy</li>
                    <li>Communication Skills</li>
                    <li>Critical Thinking</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Begin Your Child's Academic Journey</h2>
            <p class="cta-desc">
                Enroll your child in our comprehensive academic programs and watch them 
                excel in both Deen and Duniya.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply Now
                </a>
                <a href="?page=fee-structure" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-file-invoice-dollar"></i>
                    View Fee Structure
                </a>
            </div>
        </div>
    </div>
</section>