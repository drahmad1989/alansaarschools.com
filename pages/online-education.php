<style>
/* =============================================
   ONLINE EDUCATION / DIGITAL SKILLS PAGE STYLES
   ============================================= */

/* Digital Hero */
.digital-hero {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    position: relative;
    overflow: hidden;
}

.digital-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M20 20.5V18H0v-2h20v-2l2 3.5-2 3z'/%3E%3C/g%3E%3C/svg%3E");
}

.digital-hero-content {
    text-align: center;
    max-width: 750px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.digital-hero h1 {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.digital-hero p {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
    line-height: 1.9;
}

.digital-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    background: rgba(201, 162, 39, 0.15);
    border: 1px solid rgba(201, 162, 39, 0.3);
    color: var(--accent-light);
    padding: var(--space-2) var(--space-5);
    border-radius: var(--radius-full);
    font-size: var(--text-sm);
    font-weight: 600;
    margin-bottom: var(--space-6);
}

/* Why Digital Skills Section */
.why-digital {
    padding: var(--space-20) 0;
    background: var(--white);
}

.why-digital-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
}

.why-digital-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.why-digital-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.why-digital-content .section-subtitle {
    text-align: left;
}

.why-digital-content .section-subtitle::before {
    display: none;
}

.why-digital-content .section-title {
    text-align: left;
}

.why-digital-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.why-digital-text {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.9;
    margin-bottom: var(--space-6);
}

.why-digital-points {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
}

.why-digital-point {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    padding: var(--space-3);
    background: var(--off-white);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.why-digital-point:hover {
    box-shadow: var(--shadow-md);
    transform: translateX(5px);
}

.why-digital-point i {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-sm);
    flex-shrink: 0;
}

.why-digital-point span {
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-700);
}

/* Skills Programs Grid Section */
.digital-skills-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.digital-skills-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.digital-skill-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.digital-skill-card::before {
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

.digital-skill-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.digital-skill-card:hover::before {
    transform: scaleX(1);
}

.digital-skill-icon {
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

.digital-skill-card:hover .digital-skill-icon {
    transform: scale(1.1) rotate(5deg);
}

.digital-skill-card h3 {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.digital-skill-card .skill-tag {
    display: inline-block;
    background: var(--off-white);
    color: var(--accent);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    margin-bottom: var(--space-4);
}

.digital-skill-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

.digital-skill-card .skill-topics {
    text-align: left;
    margin-top: var(--space-5);
    padding-top: var(--space-5);
    border-top: 1px solid var(--gray-100);
}

.digital-skill-card .skill-topics ul {
    list-style: none;
}

.digital-skill-card .skill-topics li {
    position: relative;
    padding-left: var(--space-5);
    margin-bottom: var(--space-2);
    font-size: var(--text-xs);
    color: var(--gray-500);
}

.digital-skill-card .skill-topics li::before {
    content: '\f00c';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--success);
    font-size: 10px;
    top: 2px;
}

/* Learning Path Section */
.learning-path {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}

.learning-path::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.learning-path-content {
    position: relative;
    z-index: 1;
}

.learning-path-content .section-subtitle {
    color: var(--accent);
}

.learning-path-content .section-title {
    color: var(--white);
}

.learning-path-content .section-title::after {
    background: var(--accent);
}

.path-timeline {
    display: flex;
    justify-content: space-between;
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.path-timeline::before {
    content: '';
    position: absolute;
    top: 50px;
    left: 80px;
    right: 80px;
    height: 4px;
    background: rgba(255, 255, 255, 0.1);
}

.path-step {
    text-align: center;
    position: relative;
    flex: 1;
}

.path-number {
    width: 100px;
    height: 100px;
    background: rgba(255, 255, 255, 0.05);
    border: 3px solid var(--accent);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-5);
    position: relative;
    z-index: 1;
    transition: all var(--transition-base);
}

.path-number:hover {
    background: var(--accent);
}

.path-number i {
    font-size: var(--text-2xl);
    color: var(--white);
    margin-bottom: var(--space-1);
}

.path-number span {
    font-size: var(--text-xs);
    color: rgba(255, 255, 255, 0.8);
    font-weight: 600;
}

.path-step:hover .path-number i,
.path-step:hover .path-number span {
    color: var(--white);
}

.path-step h4 {
    color: var(--white);
    font-size: var(--text-base);
    margin-bottom: var(--space-2);
    font-family: var(--font-body);
}

.path-step p {
    font-size: var(--text-sm);
    color: rgba(255, 255, 255, 0.6);
    max-width: 200px;
    margin: 0 auto;
}

/* Tools & Software Section */
.tools-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.tools-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-5);
}

.tool-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
    border: 1px solid var(--gray-100);
}

.tool-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-lg);
    border-color: var(--accent);
}

.tool-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto var(--space-4);
    background: var(--off-white);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-2xl);
    transition: all var(--transition-base);
}

.tool-card:hover .tool-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    color: var(--white);
}

.tool-card h4 {
    font-size: var(--text-sm);
    color: var(--primary);
    margin-bottom: var(--space-2);
    font-family: var(--font-body);
    font-weight: 600;
}

.tool-card p {
    font-size: var(--text-xs);
    color: var(--gray-400);
    margin: 0;
}

/* Benefits Section */
.digital-benefits {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.benefits-comparison {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-8);
    max-width: 1000px;
    margin: 0 auto;
}

.benefit-column {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    box-shadow: var(--shadow-md);
}

.benefit-column h3 {
    text-align: center;
    margin-bottom: var(--space-6);
    font-size: var(--text-xl);
}

.benefit-column h3 i {
    color: var(--accent);
    margin-right: var(--space-2);
}

.benefit-list {
    list-style: none;
}

.benefit-list li {
    display: flex;
    align-items: flex-start;
    gap: var(--space-3);
    padding: var(--space-3) 0;
    border-bottom: 1px solid var(--gray-100);
    font-size: var(--text-sm);
    color: var(--gray-600);
}

.benefit-list li:last-child {
    border-bottom: none;
}

.benefit-list li i {
    color: var(--success);
    margin-top: 3px;
    flex-shrink: 0;
}

/* Schedule Section */
.digital-schedule {
    padding: var(--space-20) 0;
    background: var(--white);
}

.digital-schedule-table {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.digital-schedule-row {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    border-bottom: 1px solid var(--gray-100);
}

.digital-schedule-row:last-child {
    border-bottom: none;
}

.digital-schedule-row.header {
    background: var(--primary);
    color: var(--white);
    font-weight: 600;
}

.digital-schedule-row span {
    padding: var(--space-4) var(--space-5);
    font-size: var(--text-sm);
}

.digital-schedule-row.header span {
    text-align: center;
}

.digital-schedule-row:not(.header) span {
    text-align: center;
    color: var(--gray-600);
}

.digital-schedule-row:not(.header) span:first-child {
    text-align: left;
    font-weight: 600;
    color: var(--primary);
}

/* Certifications Section */
.certifications-section {
    padding: var(--space-20) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    position: relative;
    overflow: hidden;
}

.certifications-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.cert-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
    position: relative;
    z-index: 1;
}

.cert-card {
    background: rgba(255, 255, 255, 0.15);
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
}

.cert-card:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-5px);
}

.cert-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto var(--space-5);
    background: rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-3xl);
}

.cert-card h4 {
    color: var(--white);
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
    font-family: var(--font-body);
}

.cert-card p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-sm);
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .why-digital-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .why-digital-content .section-subtitle,
    .why-digital-content .section-title {
        text-align: center;
    }
    
    .why-digital-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
    
    .why-digital-image {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .digital-skills-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .path-timeline {
        flex-wrap: wrap;
        gap: var(--space-8);
    }
    
    .path-timeline::before {
        display: none;
    }
    
    .path-step {
        flex: 0 0 calc(50% - var(--space-4));
    }
    
    .tools-grid {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .benefits-comparison {
        grid-template-columns: 1fr;
    }
    
    .cert-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .digital-skills-grid {
        grid-template-columns: 1fr;
    }
    
    .why-digital-points {
        grid-template-columns: 1fr;
    }
    
    .path-step {
        flex: 0 0 100%;
    }
    
    .tools-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .cert-grid {
        grid-template-columns: 1fr;
    }
    
    .digital-schedule-row {
        grid-template-columns: 1fr;
    }
    
    .digital-schedule-row span {
        border-bottom: 1px solid var(--gray-100);
    }
    
    .digital-schedule-row span:last-child {
        border-bottom: none;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Online Education & Digital Skills</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Online Education</span>
            </div>
        </div>
    </div>
</section>

<!-- DIGITAL HERO -->
<section class="digital-hero">
    <div class="container">
        <div class="digital-hero-content">
            <div class="digital-hero-badge">
                <i class="fas fa-laptop-code"></i>
                Preparing Students for the Digital Age
            </div>
            <h1>Master the Skills<br>of Tomorrow</h1>
            <p>
                In today's rapidly evolving digital world, technical skills are no longer optional — 
                they are essential. At Al-Ansaar Schools, our Online Education & Digital Skills 
                program equips students with cutting-edge technology skills that open doors to 
                endless opportunities in the modern workforce.
            </p>
        </div>
    </div>
</section>

<!-- WHY DIGITAL SKILLS SECTION -->
<section class="why-digital">
    <div class="container">
        <div class="why-digital-grid">
            <div class="why-digital-image reveal-left">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/training.webp" alt="Digital Skills Training">
            </div>
            
            <div class="why-digital-content reveal-right">
                <span class="section-subtitle">The Digital Future</span>
                <h2 class="section-title">Why Digital Skills Matter</h2>
                
                <p class="why-digital-text">
                    The world is moving online at an unprecedented pace. From education to business, 
                    healthcare to entertainment, every industry is being transformed by technology. 
                    Students who develop digital skills today will be the leaders, innovators, and 
                    problem-solvers of tomorrow. At Al-Ansaar Schools, we believe in preparing our 
                    students not just for exams, but for life.
                </p>
                
                <p class="why-digital-text">
                    Our comprehensive digital skills curriculum covers everything from basic computer 
                    literacy to advanced programming, graphic design, and digital marketing. Each 
                    skill is taught with hands-on projects and real-world applications, ensuring 
                    students don't just learn theory — they build practical expertise.
                </p>
                
                <div class="why-digital-points">
                    <div class="why-digital-point">
                        <i class="fas fa-briefcase"></i>
                        <span>Career Readiness</span>
                    </div>
                    <div class="why-digital-point">
                        <i class="fas fa-brain"></i>
                        <span>Problem Solving</span>
                    </div>
                    <div class="why-digital-point">
                        <i class="fas fa-globe"></i>
                        <span>Global Opportunities</span>
                    </div>
                    <div class="why-digital-point">
                        <i class="fas fa-lightbulb"></i>
                        <span>Innovation Mindset</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DIGITAL SKILLS PROGRAMS SECTION -->
<section class="digital-skills-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Teach</span>
            <h2 class="section-title">Digital Skills Programs</h2>
            <p class="section-desc">Comprehensive training programs designed to prepare students for the modern digital economy.</p>
        </div>
        
        <div class="digital-skills-grid">
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Web Development</h3>
                <span class="skill-tag">High Demand</span>
                <p>
                    Learn to build professional websites from scratch. Students master HTML, CSS, 
                    and JavaScript to create responsive, modern websites that look great on 
                    any device.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>HTML5 & Semantic Markup</li>
                        <li>CSS3 & Responsive Design</li>
                        <li>JavaScript Fundamentals</li>
                        <li>Website Deployment</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Graphic Design</h3>
                <span class="skill-tag">Creative</span>
                <p>
                    Unleash your creativity with professional graphic design skills. Students 
                    learn to create stunning visuals, logos, social media content, and brand 
                    identities using industry-standard tools.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Canva & Design Principles</li>
                        <li>Adobe Photoshop Basics</li>
                        <li>Logo & Brand Design</li>
                        <li>Social Media Graphics</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Digital Marketing</h3>
                <span class="skill-tag">Business</span>
                <p>
                    Master the art of promoting businesses online. Students learn social media 
                    marketing, SEO basics, content creation, and email marketing strategies 
                    that drive real results.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Social Media Marketing</li>
                        <li>SEO Fundamentals</li>
                        <li>Content Strategy</li>
                        <li>Email Marketing</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-file-word"></i>
                </div>
                <h3>MS Office & Productivity</h3>
                <span class="skill-tag">Essential</span>
                <p>
                    Build a solid foundation in office productivity tools. Master Word, Excel, 
                    PowerPoint, and Google Workspace for academic excellence and professional 
                    efficiency.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Microsoft Word & Excel</li>
                        <li>PowerPoint Presentations</li>
                        <li>Google Docs & Sheets</li>
                        <li>File Management & Typing</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Video Editing</h3>
                <span class="skill-tag">Creative</span>
                <p>
                    Learn to create professional-quality videos. Students master video editing 
                    techniques, transitions, effects, and storytelling to produce engaging 
                    content for YouTube and social media.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Video Editing Software</li>
                        <li>Transitions & Effects</li>
                        <li>Audio Editing</li>
                        <li>YouTube Content Creation</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>AI & ChatGPT Skills</h3>
                <span class="skill-tag">Future Ready</span>
                <p>
                    Stay ahead with artificial intelligence skills. Students learn to use AI 
                    tools like ChatGPT effectively for research, writing, coding, and creative 
                    projects while understanding ethical AI usage.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>AI Tools & Applications</li>
                        <li>Prompt Engineering Basics</li>
                        <li>AI-Assisted Research</li>
                        <li>Ethical AI Usage</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Freelancing Skills</h3>
                <span class="skill-tag">Earning</span>
                <p>
                    Learn to earn online through freelancing platforms. Students discover how 
                    to create profiles, find clients, manage projects, and build a sustainable 
                    online income using their digital skills.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Freelance Platforms (Fiverr, Upwork)</li>
                        <li>Profile Building</li>
                        <li>Client Communication</li>
                        <li>Project Management</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Cybersecurity Basics</h3>
                <span class="skill-tag">Safety</span>
                <p>
                    Stay safe in the digital world. Students learn about online privacy, 
                    password security, safe browsing practices, and how to protect themselves 
                    and their data from cyber threats.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Online Privacy & Safety</li>
                        <li>Password Security</li>
                        <li>Safe Browsing Practices</li>
                        <li>Data Protection</li>
                    </ul>
                </div>
            </div>
            
            <div class="digital-skill-card reveal">
                <div class="digital-skill-icon">
                    <i class="fas fa-terminal"></i>
                </div>
                <h3>Programming & Coding</h3>
                <span class="skill-tag">Advanced</span>
                <p>
                    Go beyond basic coding with structured programming. Students learn Python, 
                    problem-solving algorithms, and software development fundamentals that 
                    prepare them for tech careers.
                </p>
                <div class="skill-topics">
                    <ul>
                        <li>Python Programming</li>
                        <li>Algorithmic Thinking</li>
                        <li>Debugging & Testing</li>
                        <li>Mini Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LEARNING PATH SECTION -->
<section class="learning-path">
    <div class="container">
        <div class="learning-path-content">
            <div class="section-header">
                <span class="section-subtitle">Step by Step</span>
                <h2 class="section-title">Our Learning Path</h2>
                <p class="section-desc" style="color: rgba(255,255,255,0.7);">A structured progression from basics to advanced skills.</p>
            </div>
        </div>
        
        <div class="path-timeline">
            <div class="path-step reveal">
                <div class="path-number">
                    <i class="fas fa-desktop"></i>
                    <span>Step 1</span>
                </div>
                <h4>Digital Literacy</h4>
                <p>Computer basics, typing, internet safety, and file management</p>
            </div>
            
            <div class="path-step reveal">
                <div class="path-number">
                    <i class="fas fa-tools"></i>
                    <span>Step 2</span>
                </div>
                <h4>Core Skills</h4>
                <p>MS Office, Canva, basic coding concepts, and email communication</p>
            </div>
            
            <div class="path-step reveal">
                <div class="path-number">
                    <i class="fas fa-rocket"></i>
                    <span>Step 3</span>
                </div>
                <h4>Advanced Skills</h4>
                <p>Web development, graphic design, video editing, and digital marketing</p>
            </div>
            
            <div class="path-step reveal">
                <div class="path-number">
                    <i class="fas fa-briefcase"></i>
                    <span>Step 4</span>
                </div>
                <h4>Professional Ready</h4>
                <p>Freelancing, portfolio building, certifications, and career guidance</p>
            </div>
        </div>
    </div>
</section>

<!-- TOOLS & SOFTWARE SECTION -->
<section class="tools-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Hands-On Experience</span>
            <h2 class="section-title">Tools & Software We Teach</h2>
            <p class="section-desc">Students gain practical experience with industry-standard tools and platforms.</p>
        </div>
        
        <div class="tools-grid">
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fab fa-html5"></i></div>
                <h4>HTML5 / CSS3</h4>
                <p>Web Structure & Styling</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fab fa-js-square"></i></div>
                <h4>JavaScript</h4>
                <p>Interactive Web Development</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fab fa-python"></i></div>
                <h4>Python</h4>
                <p>Programming & Automation</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fas fa-palette"></i></div>
                <h4>Canva</h4>
                <p>Graphic Design & Branding</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fas fa-file-excel"></i></div>
                <h4>MS Excel</h4>
                <p>Data Analysis & Spreadsheets</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fas fa-file-powerpoint"></i></div>
                <h4>PowerPoint</h4>
                <p>Presentations & Slides</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fas fa-film"></i></div>
                <h4>CapCut / Filmora</h4>
                <p>Video Editing & Production</p>
            </div>
            
            <div class="tool-card reveal">
                <div class="tool-icon"><i class="fas fa-robot"></i></div>
                <h4>ChatGPT / AI Tools</h4>
                <p>AI-Powered Productivity</p>
            </div>
        </div>
    </div>
</section>

<!-- BENEFITS SECTION -->
<section class="digital-benefits">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">The Advantage</span>
            <h2 class="section-title">Why Our Students Stand Out</h2>
            <p class="section-desc">Digital skills give our students a competitive edge that sets them apart.</p>
        </div>
        
        <div class="benefits-comparison">
            <div class="benefit-column reveal-left">
                <h3><i class="fas fa-graduation-cap"></i> Academic Benefits</h3>
                <ul class="benefit-list">
                    <li><i class="fas fa-check-circle"></i> Better presentation and project quality</li>
                    <li><i class="fas fa-check-circle"></i> Enhanced research and analysis skills</li>
                    <li><i class="fas fa-check-circle"></i> Improved typing speed and efficiency</li>
                    <li><i class="fas fa-check-circle"></i> Digital portfolio for college applications</li>
                    <li><i class="fas fa-check-circle"></i> Self-paced online learning capability</li>
                </ul>
            </div>
            
            <div class="benefit-column reveal-right">
                <h3><i class="fas fa-briefcase"></i> Career Benefits</h3>
                <ul class="benefit-list">
                    <li><i class="fas fa-check-circle"></i> Freelancing opportunities while studying</li>
                    <li><i class="fas fa-check-circle"></i> Higher earning potential in future</li>
                    <li><i class="fas fa-check-circle"></i> In-demand skills for tech industry</li>
                    <li><i class="fas fa-check-circle"></i> Remote work readiness</li>
                    <li><i class="fas fa-check-circle"></i> Entrepreneurship and startup skills</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SCHEDULE SECTION -->
<section class="digital-schedule">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Timings</span>
            <h2 class="section-title">Digital Skills Schedule</h2>
            <p class="section-desc">Integrated into the weekly timetable alongside academic and Islamic education.</p>
        </div>
        
        <div class="digital-schedule-table reveal">
            <div class="digital-schedule-row header">
                <span>Program</span>
                <span>Days</span>
                <span>Time</span>
                <span>Grades</span>
            </div>
            <div class="digital-schedule-row">
                <span>Computer Basics & Typing</span>
                <span>Mon, Wed</span>
                <span>2:00 - 2:45 PM</span>
                <span>1-5</span>
            </div>
            <div class="digital-schedule-row">
                <span>MS Office & Productivity</span>
                <span>Tue, Thu</span>
                <span>2:00 - 2:45 PM</span>
                <span>3-8</span>
            </div>
            <div class="digital-schedule-row">
                <span>Web Development</span>
                <span>Mon, Wed, Fri</span>
                <span>2:45 - 3:45 PM</span>
                <span>6-10</span>
            </div>
            <div class="digital-schedule-row">
                <span>Graphic Design</span>
                <span>Tue, Thu</span>
                <span>2:45 - 3:45 PM</span>
                <span>5-10</span>
            </div>
            <div class="digital-schedule-row">
                <span>Video Editing</span>
                <span>Fri</span>
                <span>2:00 - 3:30 PM</span>
                <span>7-10</span>
            </div>
            <div class="digital-schedule-row">
                <span>Digital Marketing</span>
                <span>Sat</span>
                <span>10:00 - 11:30 AM</span>
                <span>8-10</span>
            </div>
            <div class="digital-schedule-row">
                <span>Programming (Python)</span>
                <span>Mon, Wed</span>
                <span>3:45 - 4:45 PM</span>
                <span>8-10</span>
            </div>
        </div>
    </div>
</section>

<!-- CERTIFICATIONS SECTION -->
<section class="certifications-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle" style="color: var(--white);">Recognition</span>
            <h2 class="section-title" style="color: var(--white);">Certificates & Achievements</h2>
            <p class="section-desc" style="color: rgba(255,255,255,0.8);">Students earn certificates and build portfolios as they master each skill.</p>
        </div>
        
        <div class="cert-grid">
            <div class="cert-card reveal">
                <div class="cert-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h4>Skill Completion Certificates</h4>
                <p>Official certificates awarded upon successful completion of each digital skills module</p>
            </div>
            
            <div class="cert-card reveal">
                <div class="cert-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <h4>Digital Portfolio</h4>
                <p>Every student builds an online portfolio showcasing their projects and accomplishments</p>
            </div>
            
            <div class="cert-card reveal">
                <div class="cert-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h4>Annual Tech Competition</h4>
                <p>Inter-campus technology competitions with awards for top performers and innovators</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Give Your Child the Digital Advantage</h2>
            <p class="cta-desc">
                Equip your child with the digital skills that will shape their future. 
                Enroll them in our comprehensive online education program today.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about the Digital Skills program at Al-Ansaar Schools." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Ask Questions
                </a>
            </div>
        </div>
    </div>
</section>
