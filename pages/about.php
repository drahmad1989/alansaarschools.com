<style>
/* =============================================
   ABOUT PAGE STYLES
   ============================================= */

/* Story Section */
.story-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.story-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-16);
    align-items: center;
}

.story-images {
    position: relative;
}

.story-main-img {
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-xl);
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.story-badge {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: var(--accent);
    color: var(--white);
    padding: var(--space-5) var(--space-6);
    border-radius: var(--radius-xl);
    text-align: center;
    box-shadow: var(--shadow-lg);
}

.story-badge span {
    display: block;
    font-family: var(--font-display);
    font-size: var(--text-4xl);
    font-weight: 800;
    line-height: 1;
}

.story-badge small {
    font-size: var(--text-xs);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.story-content .section-subtitle {
    text-align: left;
}

.story-content .section-subtitle::before {
    display: none;
}

.story-content .section-title {
    text-align: left;
}

.story-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.story-text {
    font-size: var(--text-base);
    color: var(--gray-600);
    line-height: 1.9;
    margin-bottom: var(--space-5);
}

/* Values Section */
.values-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.value-card {
    background: var(--white);
    padding: var(--space-8);
    border-radius: var(--radius-xl);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.value-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--accent));
}

.value-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.value-icon {
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

.value-card:hover .value-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    transform: scale(1.1) rotate(5deg);
}

.value-title {
    font-size: var(--text-xl);
    margin-bottom: var(--space-3);
    color: var(--primary);
}

.value-desc {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Vision Mission Section */
.vision-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.vision-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-16);
    align-items: center;
}

.vision-images {
    position: relative;
}

.vision-img {
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-xl);
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.vision-content .section-subtitle {
    text-align: left;
}

.vision-content .section-subtitle::before {
    display: none;
}

.vision-content .section-title {
    text-align: left;
}

.vision-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.vision-box {
    background: var(--off-white);
    padding: var(--space-6);
    border-radius: var(--radius-xl);
    margin-bottom: var(--space-5);
    border-left: 4px solid var(--accent);
}

.vision-box h4 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-3);
    display: flex;
    align-items: center;
    gap: var(--space-3);
}

.vision-box h4 i {
    color: var(--accent);
}

.vision-box p {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.8;
    margin: 0;
}

/* Message Section */
.message-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}

.message-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.message-box {
    background: rgba(255, 255, 255, 0.05);
    padding: var(--space-10);
    border-radius: var(--radius-2xl);
    border-left: 6px solid var(--accent);
    position: relative;
    z-index: 1;
}

.message-box .section-subtitle {
    color: var(--accent);
}

.message-box .section-subtitle::before,
.message-box .section-subtitle::after {
    background: var(--accent);
}

.message-box .section-title {
    color: var(--white);
}

.message-box .section-title::after {
    background: var(--accent);
}

.message-text {
    font-size: var(--text-lg);
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.9;
    font-style: italic;
    margin-bottom: var(--space-6);
}

.message-author {
    color: var(--accent);
    font-weight: 600;
    font-size: var(--text-base);
}

/* Stats Banner */
.stats-banner {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
}

.stats-banner-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-8);
    text-align: center;
}

.stats-banner-item h3 {
    font-size: var(--text-5xl);
    color: var(--white);
    margin-bottom: var(--space-2);
    font-family: var(--font-display);
}

.stats-banner-item p {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .story-grid,
    .vision-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .story-images,
    .vision-images {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .story-badge {
        display: none;
    }
    
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .story-content .section-subtitle,
    .story-content .section-title,
    .vision-content .section-subtitle,
    .vision-content .section-title {
        text-align: center;
    }
    
    .story-content .section-title::after,
    .vision-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
    
    .stats-banner-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .values-grid {
        grid-template-columns: 1fr;
    }
    
    .message-box {
        padding: var(--space-6);
    }
    
    .stats-banner-grid {
        grid-template-columns: 1fr 1fr;
        gap: var(--space-5);
    }
    
    .stats-banner-item h3 {
        font-size: var(--text-3xl);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>About Al-Ansaar</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>About Us</span>
            </div>
        </div>
    </div>
</section>

<!-- OUR STORY SECTION -->
<section class="story-section">
    <div class="container">
        <div class="story-grid">
            <div class="story-images reveal-left">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Our Journey" class="story-main-img">
                <div class="story-badge">
                    <span>10+</span>
                    <small>Years</small>
                </div>
            </div>
            
            <div class="story-content reveal-right">
                <span class="section-subtitle">Our Story</span>
                <h2 class="section-title">A Journey of Excellence</h2>
                
                <p class="story-text">
                    Established a decade ago with just two small rooms, Al-Ansaar Schools has grown into 
                    a trusted network of five campuses across Punjab. This remarkable growth is not just 
                    a number—it is a testament to the unwavering trust of our community and our commitment 
                    to excellence in education.
                </p>
                
                <p class="story-text">
                    We recognized a crucial gap in the education system—a need for learning that goes 
                    beyond textbooks. Our vision was to create an environment where academic success 
                    walks hand-in-hand with moral character, spiritual growth, and practical skills.
                </p>
                
                <p class="story-text">
                    Today, Al-Ansaar stands as a beacon of holistic education, producing graduates who 
                    excel not only in academics but also as Huffaz and responsible citizens contributing 
                    positively to society.
                </p>
                
                <a href="?page=chairman-message" class="btn btn-secondary">
                    Chairman's Message
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- STATS BANNER -->
<section class="stats-banner">
    <div class="container">
        <div class="stats-banner-grid">
            <div class="stats-banner-item reveal">
                <h3>10+</h3>
                <p>Years of Excellence</p>
            </div>
            <div class="stats-banner-item reveal">
                <h3>5</h3>
                <p>Active Campuses</p>
            </div>
            <div class="stats-banner-item reveal">
                <h3>50+</h3>
                <p>Expert Teachers</p>
            </div>
            <div class="stats-banner-item reveal">
                <h3>1500+</h3>
                <p>Students Enrolled</p>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES SECTION -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Believe</span>
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-desc">The principles that guide every decision we make and every lesson we teach.</p>
        </div>
        
        <div class="values-grid">
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="value-title">Integrity</h3>
                <p class="value-desc">
                    We teach students to be honest and truthful in all aspects of life. 
                    Integrity forms the foundation of character development at Al-Ansaar.
                </p>
            </div>
            
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3 class="value-title">Compassion</h3>
                <p class="value-desc">
                    Instilling a sense of duty towards others and the community. 
                    We believe in nurturing empathetic individuals who care for humanity.
                </p>
            </div>
            
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="value-title">Excellence</h3>
                <p class="value-desc">
                    Striving for the best in academics, character, and skills. 
                    We encourage students to push their limits and achieve greatness.
                </p>
            </div>
            
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-book-quran"></i>
                </div>
                <h3 class="value-title">Faith</h3>
                <p class="value-desc">
                    Building a strong connection with the Quran and Islamic values. 
                    Our integrated Hifz program nurtures both Deen and Duniya.
                </p>
            </div>
            
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="value-title">Community</h3>
                <p class="value-desc">
                    Creating a supportive network of students, parents, and teachers. 
                    Together, we build an environment of mutual respect and growth.
                </p>
            </div>
            
            <div class="value-card reveal">
                <div class="value-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3 class="value-title">Growth</h3>
                <p class="value-desc">
                    Continuous improvement in all areas of education. 
                    We embrace innovation while staying rooted in our values.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- VISION & MISSION SECTION -->
<section class="vision-section">
    <div class="container">
        <div class="vision-grid">
            <div class="vision-content reveal-left">
                <span class="section-subtitle">Our Purpose</span>
                <h2 class="section-title">Vision & Mission</h2>
                
                <div class="vision-box">
                    <h4><i class="fas fa-eye"></i> Our Vision</h4>
                    <p>
                        To be the leading educational institution in Pakistan that produces 
                        Hafiz-e-Quran who are also leaders in modern professional fields—doctors, 
                        engineers, entrepreneurs, and responsible citizens.
                    </p>
                </div>
                
                <div class="vision-box">
                    <h4><i class="fas fa-bullseye"></i> Our Mission</h4>
                    <p>
                        To provide a safe, nurturing, and stimulating environment where children 
                        can develop their full potential—intellectually, spiritually, and physically—while 
                        maintaining the highest standards of education and character.
                    </p>
                </div>
                
                <div class="vision-box">
                    <h4><i class="fas fa-flag"></i> Our Goal</h4>
                    <p>
                        To expand our network of quality education to more communities, ensuring 
                        every child has access to holistic education that prepares them for both 
                        worlds—Deen and Duniya.
                    </p>
                </div>
                
                <a href="?page=admissions" class="btn btn-primary">
                    Join Our Mission
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="vision-images reveal-right">
                <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Vision & Mission" class="vision-img">
            </div>
        </div>
    </div>
</section>

<!-- MESSAGE SECTION -->
<section class="message-section">
    <div class="container">
        <div class="message-box reveal">
            <div class="section-header" style="margin-bottom: var(--space-8);">
                <span class="section-subtitle">Leadership</span>
                <h2 class="section-title">A Word from the Administration</h2>
            </div>
            
            <p class="message-text">
                "At Al-Ansaar, we believe every child is unique and blessed with hidden talents waiting 
                to be discovered. Our dedicated team of educators works tirelessly to identify and nurture 
                these talents, providing personalized attention to each student. We don't just teach subjects; 
                we teach life skills. We don't just build students; we build character. Join us in building 
                a brighter future for our children and our community."
            </p>
            
            <p class="message-author">
                — Administration, Al-Ansaar Schools
            </p>
        </div>
    </div>
</section>