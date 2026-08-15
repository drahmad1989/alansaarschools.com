<style>
/* =============================================
   STUDENT LIFE PAGE STYLES
   ============================================= */

/* Life Grid Section */
.life-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.life-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.life-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    transition: all var(--transition-base);
    border: 1px solid var(--gray-100);
}

.life-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.life-card-img {
    height: 200px;
    overflow: hidden;
}

.life-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.life-card:hover .life-card-img img {
    transform: scale(1.1);
}

.life-card-content {
    padding: var(--space-6);
}

.life-card-content h3 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.life-card-content p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Activities Section */
.activities-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
}

.activities-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
}

.activity-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
}

.activity-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.activity-icon {
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

.activity-card h4 {
    color: var(--white);
    font-size: var(--text-base);
    margin-bottom: var(--space-2);
}

.activity-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: var(--text-sm);
    margin: 0;
}

/* Events Timeline */
.events-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.events-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.events-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 100%;
    background: var(--gray-200);
}

.event-item {
    display: flex;
    margin-bottom: var(--space-8);
    position: relative;
}

.event-item:nth-child(odd) {
    justify-content: flex-start;
    padding-right: 50%;
}

.event-item:nth-child(even) {
    justify-content: flex-end;
    padding-left: 50%;
}

.event-content {
    background: var(--white);
    padding: var(--space-5);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    max-width: 350px;
    position: relative;
}

.event-item:nth-child(odd) .event-content {
    margin-right: var(--space-8);
}

.event-item:nth-child(even) .event-content {
    margin-left: var(--space-8);
}

.event-dot {
    position: absolute;
    top: 50%;
    width: 20px;
    height: 20px;
    background: var(--accent);
    border-radius: 50%;
    transform: translateY(-50%);
}

.event-item:nth-child(odd) .event-dot {
    right: -10px;
    left: auto;
}

.event-item:nth-child(even) .event-dot {
    left: -10px;
    right: auto;
}

.event-month {
    display: inline-block;
    background: var(--accent);
    color: var(--white);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    margin-bottom: var(--space-2);
}

.event-content h4 {
    font-size: var(--text-base);
    color: var(--primary);
    margin-bottom: var(--space-2);
}

.event-content p {
    font-size: var(--text-sm);
    color: var(--gray-500);
    margin: 0;
}

/* Testimonials */
.testimonials-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.testimonial-slider {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-6);
}

.testimonial-card {
    background: var(--off-white);
    padding: var(--space-8);
    border-radius: var(--radius-xl);
    position: relative;
}

.testimonial-card::before {
    content: '\201C';
    font-size: 5rem;
    color: var(--accent);
    opacity: 0.2;
    position: absolute;
    top: var(--space-4);
    left: var(--space-6);
    font-family: Georgia, serif;
    line-height: 1;
}

.testimonial-text {
    font-size: var(--text-base);
    color: var(--gray-600);
    line-height: 1.8;
    font-style: italic;
    margin-bottom: var(--space-6);
    position: relative;
    z-index: 1;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: var(--space-4);
}

.testimonial-avatar {
    width: 50px;
    height: 50px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-weight: 700;
}

.testimonial-info h5 {
    font-size: var(--text-base);
    color: var(--primary);
    margin-bottom: var(--space-1);
}

.testimonial-info span {
    font-size: var(--text-sm);
    color: var(--gray-500);
}

/* Responsive */
@media (max-width: 1024px) {
    .life-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .activities-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .testimonial-slider {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .life-grid {
        grid-template-columns: 1fr;
    }
    
    .activities-grid {
        grid-template-columns: 1fr;
    }
    
    .events-timeline::before {
        left: 20px;
    }
    
    .event-item:nth-child(odd),
    .event-item:nth-child(even) {
        justify-content: flex-start;
        padding-right: 0;
        padding-left: 50px;
    }
    
    .event-item:nth-child(odd) .event-content,
    .event-item:nth-child(even) .event-content {
        margin-left: 0;
        margin-right: 0;
    }
    
    .event-item:nth-child(odd) .event-dot,
    .event-item:nth-child(even) .event-dot {
        left: 10px;
        right: auto;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Student Life</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Student Life</span>
            </div>
        </div>
    </div>
</section>

<!-- LIFE SECTION -->
<section class="life-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Beyond Classroom</span>
            <h2 class="section-title">Life at Al-Ansaar</h2>
            <p class="section-desc">A nurturing environment where students grow, learn, and thrive together.</p>
        </div>
        
        <div class="life-grid">
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Morning Assembly">
                </div>
                <div class="life-card-content">
                    <h3>Morning Assembly</h3>
                    <p>
                        Every day begins with Quran recitation, Duas, and physical exercise to 
                        energize students and set a positive tone for learning.
                    </p>
                </div>
            </div>
            
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Classroom Learning">
                </div>
                <div class="life-card-content">
                    <h3>Interactive Classes</h3>
                    <p>
                        Engaging lessons with modern teaching methods, smart boards, and 
                        hands-on activities that make learning enjoyable.
                    </p>
                </div>
            </div>
            
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Sports Activities">
                </div>
                <div class="life-card-content">
                    <h3>Sports & Games</h3>
                    <p>
                        Regular physical education classes and sports activities including 
                        cricket, football, badminton, and athletics.
                    </p>
                </div>
            </div>
            
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Library">
                </div>
                <div class="life-card-content">
                    <h3>Library Time</h3>
                    <p>
                        A well-stocked library with books on various subjects, encouraging 
                        students to develop a love for reading and research.
                    </p>
                </div>
            </div>
            
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Arts & Crafts">
                </div>
                <div class="life-card-content">
                    <h3>Creative Arts</h3>
                    <p>
                        Art classes where students explore painting, drawing, calligraphy, 
                        and crafts to express their creativity.
                    </p>
                </div>
            </div>
            
            <div class="life-card reveal">
                <div class="life-card-img">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Events">
                </div>
                <div class="life-card-content">
                    <h3>Events & Celebrations</h3>
                    <p>
                        Annual days, prize distributions, Islamic events, and national 
                        celebrations that bring the school community together.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACTIVITIES SECTION -->
<section class="activities-section">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Activities</span>
            <h2 class="section-title" style="color: var(--white);">Daily Activities</h2>
        </div>
        
        <div class="activities-grid">
            <div class="activity-card reveal">
                <div class="activity-icon">
                    <i class="fas fa-book-quran"></i>
                </div>
                <h4>Quran Classes</h4>
                <p>Daily Nazra & Hifz sessions</p>
            </div>
            
            <div class="activity-card reveal">
                <div class="activity-icon">
                    <i class="fas fa-pray"></i>
                </div>
                <h4>Prayer Breaks</h4>
                <p>Salah in congregation</p>
            </div>
            
            <div class="activity-card reveal">
                <div class="activity-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h4>Lunch Break</h4>
                <p>Healthy eating time</p>
            </div>
            
            <div class="activity-card reveal">
                <div class="activity-icon">
                    <i class="fas fa-running"></i>
                </div>
                <h4>Physical Training</h4>
                <p>Exercise & sports</p>
            </div>
        </div>
    </div>
</section>

<!-- EVENTS SECTION -->
<section class="events-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Calendar</span>
            <h2 class="section-title">Annual Events</h2>
            <p class="section-desc">Key events that shape our academic year.</p>
        </div>
        
        <div class="events-timeline">
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">March</span>
                    <h4>Annual Day Celebration</h4>
                    <p>Cultural performances, awards, and student showcases</p>
                </div>
                <div class="event-dot"></div>
            </div>
            
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">April</span>
                    <h4>Parent-Teacher Meeting</h4>
                    <p>Academic progress discussions and feedback sessions</p>
                </div>
                <div class="event-dot"></div>
            </div>
            
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">Ramadan</span>
                    <h4>Special Quran Programs</h4>
                    <p>Extra Hifz sessions and Taraweeh preparations</p>
                </div>
                <div class="event-dot"></div>
            </div>
            
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">August</span>
                    <h4>Independence Day</h4>
                    <p>Patriotic celebrations and flag hoisting ceremony</p>
                </div>
                <div class="event-dot"></div>
            </div>
            
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">November</span>
                    <h4>Sports Gala</h4>
                    <p>Inter-campus sports competitions and games</p>
                </div>
                <div class="event-dot"></div>
            </div>
            
            <div class="event-item reveal">
                <div class="event-content">
                    <span class="event-month">December</span>
                    <h4>Hifz Completion Ceremony</h4>
                    <p>Celebrating our new Huffaz with pride</p>
                </div>
                <div class="event-dot"></div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Feedback</span>
            <h2 class="section-title">What Students Say</h2>
        </div>
        
        <div class="testimonial-slider">
            <div class="testimonial-card reveal">
                <p class="testimonial-text">
                    "Al-Ansaar is like my second home. I've learned so much here—not just 
                    subjects, but also how to be a good person. The teachers care about us 
                    and always help when we're stuck."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">A</div>
                    <div class="testimonial-info">
                        <h5>Ahmed, Grade 7</h5>
                        <span>Madina Town Campus</span>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card reveal">
                <p class="testimonial-text">
                    "I completed my Hifz here while studying for my matric exams. The 
                    teachers made it possible for me to balance both. I'm grateful to 
                    Al-Ansaar for this opportunity."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">F</div>
                    <div class="testimonial-info">
                        <h5>Fatima, Grade 10</h5>
                        <span>Khudian Campus</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Experience Student Life at Al-Ansaar</h2>
            <p class="cta-desc">
                Schedule a campus visit to see our vibrant learning environment firsthand.
            </p>
            <div class="cta-buttons">
                <a href="?page=contact" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar-alt"></i>
                    Schedule Visit
                </a>
                <a href="?page=gallery" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-images"></i>
                    View Gallery
                </a>
            </div>
        </div>
    </div>
</section>