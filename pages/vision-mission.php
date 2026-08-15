<style>
/* =============================================
   VISION & MISSION PAGE STYLES
   ============================================= */

/* Hero Banner */
.vision-hero {
    padding: var(--space-20) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    position: relative;
    overflow: hidden;
}

.vision-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.vision-hero-content {
    position: relative;
    z-index: 1;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.vision-hero h1 {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.vision-hero p {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
    line-height: 1.8;
}

/* Vision Section */
.vision-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.vision-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
    background: var(--off-white);
    border-radius: var(--radius-2xl);
    padding: var(--space-10);
    position: relative;
    overflow: hidden;
}

.vision-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 6px;
    height: 100%;
    background: linear-gradient(180deg, var(--accent), var(--primary));
}

.vision-icon-box {
    width: 100%;
    height: 350px;
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    border-radius: var(--radius-xl);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: var(--white);
    text-align: center;
    padding: var(--space-8);
}

.vision-icon-box i {
    font-size: 5rem;
    margin-bottom: var(--space-5);
    color: var(--accent);
}

.vision-icon-box h3 {
    color: var(--white);
    font-size: var(--text-2xl);
}

.vision-card-content h2 {
    color: var(--primary);
    margin-bottom: var(--space-5);
}

.vision-card-content p {
    color: var(--gray-600);
    font-size: var(--text-lg);
    line-height: 1.9;
}

/* Mission Section */
.mission-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
}

.mission-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.mission-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
    position: relative;
    z-index: 1;
}

.mission-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
}

.mission-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-10px);
}

.mission-icon {
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

.mission-card h3 {
    color: var(--white);
    font-size: var(--text-xl);
    margin-bottom: var(--space-4);
}

.mission-card p {
    color: rgba(255, 255, 255, 0.75);
    font-size: var(--text-sm);
    line-height: 1.8;
    margin: 0;
}

/* Goals Section */
.goals-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.goals-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-6);
}

.goal-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    display: flex;
    gap: var(--space-5);
    transition: all var(--transition-base);
    border: 1px solid var(--gray-100);
}

.goal-card:hover {
    box-shadow: var(--shadow-xl);
    transform: translateY(-5px);
}

.goal-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-family: var(--font-display);
    font-size: var(--text-2xl);
    font-weight: 800;
    flex-shrink: 0;
}

.goal-content h4 {
    color: var(--primary);
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
}

.goal-content p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin: 0;
}

/* Responsive */
@media (max-width: 1024px) {
    .vision-card {
        grid-template-columns: 1fr;
    }
    
    .mission-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .goals-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .mission-grid {
        grid-template-columns: 1fr;
    }
    
    .vision-icon-box {
        height: 250px;
    }
    
    .vision-icon-box i {
        font-size: 3.5rem;
    }
}
</style>

<!-- HERO BANNER -->
<section class="vision-hero">
    <div class="container">
        <div class="vision-hero-content">
            <h1>Vision & Mission</h1>
            <p>
                Guided by faith, driven by excellence—our vision and mission define who we are 
                and inspire everything we do at Al-Ansaar Schools.
            </p>
        </div>
    </div>
</section>

<!-- VISION SECTION -->
<section class="vision-section">
    <div class="container">
        <div class="vision-card reveal">
            <div class="vision-icon-box">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>
            </div>
            
            <div class="vision-card-content">
                <h2>To Be the Leading Institution</h2>
                <p>
                    Our vision is to become the leading educational institution in Pakistan that 
                    produces Hafiz-e-Quran who are also leaders in modern professional fields—doctors, 
                    engineers, entrepreneurs, scientists, and responsible citizens who contribute 
                    positively to society.
                </p>
                <p>
                    We envision a future where every child has access to quality education that 
                    balances Deen and Duniya, where academic excellence and spiritual growth go 
                    hand in hand, and where our graduates become beacons of knowledge, faith, 
                    and character in their communities.
                </p>
                <p>
                    We see Al-Ansaar expanding its reach to more cities and towns, making holistic 
                    education accessible to families across Pakistan, and creating a generation 
                    that leads with integrity, compassion, and excellence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- MISSION SECTION -->
<section class="mission-section">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Our Purpose</span>
            <h2 class="section-title" style="color: var(--white);">Our Mission</h2>
        </div>
        
        <div class="mission-grid">
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Safe Environment</h3>
                <p>
                    To provide a safe, nurturing, and stimulating environment where children can 
                    develop their full potential without fear or distraction.
                </p>
            </div>
            
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Intellectual Growth</h3>
                <p>
                    To develop critical thinking, creativity, and a love for learning through 
                    innovative teaching methods and a rigorous curriculum.
                </p>
            </div>
            
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-book-quran"></i>
                </div>
                <h3>Spiritual Foundation</h3>
                <p>
                    To build a strong connection with the Quran and Islamic values through our 
                    integrated Hifz program and Islamic studies curriculum.
                </p>
            </div>
            
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3>Physical Development</h3>
                <p>
                    To promote physical fitness, sportsmanship, and healthy lifestyle habits 
                    through regular sports activities and physical education.
                </p>
            </div>
            
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3>Practical Skills</h3>
                <p>
                    To equip students with practical skills for the modern world including 
                    technology, communication, and vocational training.
                </p>
            </div>
            
            <div class="mission-card reveal">
                <div class="mission-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Character Building</h3>
                <p>
                    To instill strong moral values, integrity, compassion, and a sense of 
                    responsibility towards family, community, and humanity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- GOALS SECTION -->
<section class="goals-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Strategic Goals</span>
            <h2 class="section-title">Our Objectives</h2>
            <p class="section-desc">Clear goals that drive our mission forward.</p>
        </div>
        
        <div class="goals-grid">
            <div class="goal-card reveal">
                <div class="goal-number">01</div>
                <div class="goal-content">
                    <h4>Expand Educational Access</h4>
                    <p>
                        Open new campuses in underserved areas to make quality Islamic-integrated 
                        education accessible to more families across Punjab and beyond.
                    </p>
                </div>
            </div>
            
            <div class="goal-card reveal">
                <div class="goal-number">02</div>
                <div class="goal-content">
                    <h4>Enhance Curriculum</h4>
                    <p>
                        Continuously improve our curriculum to meet international standards while 
                        maintaining our Islamic identity and values-based approach.
                    </p>
                </div>
            </div>
            
            <div class="goal-card reveal">
                <div class="goal-number">03</div>
                <div class="goal-content">
                    <h4>Teacher Development</h4>
                    <p>
                        Invest in ongoing professional development for our teachers to ensure 
                        they deliver the highest quality education and mentorship.
                    </p>
                </div>
            </div>
            
            <div class="goal-card reveal">
                <div class="goal-number">04</div>
                <div class="goal-content">
                    <h4>Technology Integration</h4>
                    <p>
                        Incorporate modern technology and digital learning tools to prepare 
                        students for the challenges and opportunities of the 21st century.
                    </p>
                </div>
            </div>
            
            <div class="goal-card reveal">
                <div class="goal-number">05</div>
                <div class="goal-content">
                    <h4>Community Engagement</h4>
                    <p>
                        Strengthen ties with parents and communities through regular engagement, 
                        events, and collaborative initiatives for student development.
                    </p>
                </div>
            </div>
            
            <div class="goal-card reveal">
                <div class="goal-number">06</div>
                <div class="goal-content">
                    <h4>Alumni Network</h4>
                    <p>
                        Build a strong alumni network that supports graduates in their higher 
                        education and career paths while they give back to the institution.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Join Us in Our Mission</h2>
            <p class="cta-desc">
                Be part of an educational revolution that nurtures both Deen and Duniya. 
                Together, we can build a brighter future for our children.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="?page=contact" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-phone-alt"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>