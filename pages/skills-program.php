<style>
/* =============================================
   SKILLS PROGRAM PAGE STYLES
   ============================================= */

/* Skills Hero */
.skills-hero {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    position: relative;
}

.skills-hero-content {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.skills-hero h1 {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.skills-hero p {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
}

/* Skills Grid Section */
.skills-programs-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.skills-programs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.skill-program-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.skill-program-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--accent), var(--primary));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform var(--transition-base);
}

.skill-program-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.skill-program-card:hover::before {
    transform: scaleX(1);
}

.skill-program-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto var(--space-6);
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-4xl);
    transition: all var(--transition-base);
}

.skill-program-card:hover .skill-program-icon {
    transform: scale(1.1) rotate(5deg);
}

.skill-program-card h3 {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-4);
}

.skill-program-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Benefits Section */
.skills-benefits {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.benefit-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
}

.benefit-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.benefit-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto var(--space-4);
    background: var(--accent);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-xl);
}

.benefit-card h4 {
    color: var(--white);
    font-size: var(--text-base);
    margin-bottom: var(--space-2);
}

.benefit-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: var(--text-sm);
    margin: 0;
}

/* Process Section */
.skills-process {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.process-timeline {
    display: flex;
    justify-content: space-between;
    position: relative;
    max-width: 900px;
    margin: 0 auto;
}

.process-timeline::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 60px;
    right: 60px;
    height: 4px;
    background: var(--gray-200);
}

.process-step {
    text-align: center;
    position: relative;
    flex: 1;
}

.process-number {
    width: 80px;
    height: 80px;
    background: var(--white);
    border: 4px solid var(--accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-5);
    font-family: var(--font-display);
    font-size: var(--text-2xl);
    font-weight: 800;
    color: var(--primary);
    position: relative;
    z-index: 1;
    transition: all var(--transition-base);
}

.process-step:hover .process-number {
    background: var(--accent);
    color: var(--white);
}

.process-step h4 {
    font-size: var(--text-base);
    color: var(--primary);
    margin-bottom: var(--space-2);
}

.process-step p {
    font-size: var(--text-sm);
    color: var(--gray-500);
    max-width: 180px;
    margin: 0 auto;
}

/* Schedule Section */
.skills-schedule {
    padding: var(--space-20) 0;
    background: var(--white);
}

.schedule-table {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.schedule-row {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    border-bottom: 1px solid var(--gray-100);
}

.schedule-row:last-child {
    border-bottom: none;
}

.schedule-row.header {
    background: var(--primary);
    color: var(--white);
    font-weight: 600;
}

.schedule-row span {
    padding: var(--space-4) var(--space-5);
    font-size: var(--text-sm);
}

.schedule-row.header span {
    text-align: center;
}

.schedule-row:not(.header) span {
    text-align: center;
    color: var(--gray-600);
}

.schedule-row:not(.header) span:first-child {
    text-align: left;
    font-weight: 600;
    color: var(--primary);
}

/* Responsive */
@media (max-width: 1024px) {
    .skills-programs-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .process-timeline {
        flex-wrap: wrap;
        gap: var(--space-8);
    }
    
    .process-timeline::before {
        display: none;
    }
    
    .process-step {
        flex: 0 0 calc(50% - var(--space-4));
    }
}

@media (max-width: 768px) {
    .skills-programs-grid {
        grid-template-columns: 1fr;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
    }
    
    .process-step {
        flex: 0 0 100%;
    }
    
    .schedule-row {
        grid-template-columns: 1fr;
    }
    
    .schedule-row span {
        border-bottom: 1px solid var(--gray-100);
    }
    
    .schedule-row span:last-child {
        border-bottom: none;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Skills Program</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Skills Program</span>
            </div>
        </div>
    </div>
</section>

<!-- SKILLS HERO -->
<section class="skills-hero">
    <div class="container">
        <div class="skills-hero-content">
            <h1>Future-Ready Skills</h1>
            <p>
                We prepare students for the 21st century with practical skills that go beyond 
                textbooks—programming, robotics, communication, and more.
            </p>
        </div>
    </div>
</section>

<!-- SKILLS PROGRAMS SECTION -->
<section class="skills-programs-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Offer</span>
            <h2 class="section-title">Our Skills Programs</h2>
            <p class="section-desc">Comprehensive training programs designed to prepare students for the modern world.</p>
        </div>
        
        <div class="skills-programs-grid">
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Coding & Programming</h3>
                <p>
                    Introduction to programming languages like Python and Scratch. Students learn 
                    logical thinking, problem-solving, and create their own projects.
                </p>
            </div>
            
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>Robotics & AI</h3>
                <p>
                    Hands-on experience with robotics kits and basic AI concepts. Students build 
                    and program robots while understanding automation fundamentals.
                </p>
            </div>
            
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-fist-raised"></i>
                </div>
                <h3>Karate & Self-Defense</h3>
                <p>
                    Physical fitness combined with discipline and self-defense skills. Students 
                    build confidence, strength, and respect for others.
                </p>
            </div>
            
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Public Speaking</h3>
                <p>
                    Building confidence in communication through speeches, debates, and presentations. 
                    Essential skills for leadership and career success.
                </p>
            </div>
            
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-language"></i>
                </div>
                <h3>English Language</h3>
                <p>
                    Advanced English communication skills including reading, writing, and speaking. 
                    Preparation for international opportunities.
                </p>
            </div>
            
            <div class="skill-program-card reveal">
                <div class="skill-program-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Arts & Creativity</h3>
                <p>
                    Nurturing creativity through drawing, painting, and crafts. Students explore 
                    their artistic talents and develop fine motor skills.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- BENEFITS SECTION -->
<section class="skills-benefits">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Advantages</span>
            <h2 class="section-title" style="color: var(--white);">Why Skills Matter</h2>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card reveal">
                <div class="benefit-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h4>Problem Solving</h4>
                <p>Develops critical thinking and analytical skills</p>
            </div>
            
            <div class="benefit-card reveal">
                <div class="benefit-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <h4>Career Ready</h4>
                <p>Prepares students for future job markets</p>
            </div>
            
            <div class="benefit-card reveal">
                <div class="benefit-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Teamwork</h4>
                <p>Builds collaboration and leadership skills</p>
            </div>
            
            <div class="benefit-card reveal">
                <div class="benefit-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Confidence</h4>
                <p>Boosts self-esteem and self-expression</p>
            </div>
        </div>
    </div>
</section>

<!-- SCHEDULE SECTION -->
<section class="skills-schedule">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Timings</span>
            <h2 class="section-title">Skills Schedule</h2>
            <p class="section-desc">Integrated into the weekly timetable for all students.</p>
        </div>
        
        <div class="schedule-table reveal">
            <div class="schedule-row header">
                <span>Program</span>
                <span>Days</span>
                <span>Time</span>
                <span>Grades</span>
            </div>
            <div class="schedule-row">
                <span>Coding</span>
                <span>Mon, Wed</span>
                <span>2:00 - 3:00 PM</span>
                <span>4-8</span>
            </div>
            <div class="schedule-row">
                <span>Robotics</span>
                <span>Tue, Thu</span>
                <span>2:00 - 3:00 PM</span>
                <span>6-10</span>
            </div>
            <div class="schedule-row">
                <span>Karate</span>
                <span>Wed, Fri</span>
                <span>3:00 - 4:00 PM</span>
                <span>All</span>
            </div>
            <div class="schedule-row">
                <span>Public Speaking</span>
                <span>Thu</span>
                <span>2:00 - 3:00 PM</span>
                <span>5-10</span>
            </div>
            <div class="schedule-row">
                <span>Arts & Crafts</span>
                <span>Fri</span>
                <span>2:00 - 3:00 PM</span>
                <span>Play-5</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Give Your Child the Skills Advantage</h2>
            <p class="cta-desc">
                Enroll your child in our skills-integrated education program and prepare 
                them for a successful future.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about the Skills Program." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Ask Questions
                </a>
            </div>
        </div>
    </div>
</section>