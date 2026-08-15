<style>
/* =============================================
   ISLAMIC EDUCATION PAGE STYLES
   ============================================= */

/* Islamic Hero */
.islamic-hero {
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    position: relative;
    overflow: hidden;
}

.islamic-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M40 0C17.9 0 0 17.9 0 40s17.9 40 40 40 40-17.9 40-40S62.1 0 40 0zm0 70c-16.5 0-30-13.5-30-30S23.5 10 40 10s30 13.5 30 30-13.5 30-30 30z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.islamic-hero-content {
    text-align: center;
    max-width: 750px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.islamic-hero h1 {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.islamic-hero p {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
    line-height: 1.9;
}

.islamic-hero-badge {
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

/* Quran Quote Section */
.quran-quote {
    padding: var(--space-16) 0;
    background: var(--white);
    text-align: center;
}

.quran-quote-box {
    max-width: 800px;
    margin: 0 auto;
    padding: var(--space-10);
    background: var(--off-white);
    border-radius: var(--radius-2xl);
    border: 2px solid rgba(201, 162, 39, 0.2);
    position: relative;
}

.quran-quote-box::before {
    content: '\201C';
    position: absolute;
    top: -10px;
    left: 30px;
    font-size: 80px;
    color: var(--accent);
    font-family: var(--font-display);
    opacity: 0.3;
    line-height: 1;
}

.quran-arabic {
    font-size: var(--text-2xl);
    color: var(--primary);
    font-weight: 600;
    line-height: 2;
    margin-bottom: var(--space-6);
    direction: rtl;
}

.quran-translation {
    font-size: var(--text-lg);
    color: var(--gray-600);
    font-style: italic;
    line-height: 1.9;
    margin-bottom: var(--space-4);
}

.quran-reference {
    font-size: var(--text-sm);
    color: var(--accent);
    font-weight: 600;
}

/* Programs Grid Section */
.islamic-programs-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.islamic-programs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.islamic-program-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-8);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.islamic-program-card::before {
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

.islamic-program-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.islamic-program-card:hover::before {
    transform: scaleX(1);
}

.islamic-program-icon {
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

.islamic-program-card:hover .islamic-program-icon {
    transform: scale(1.1) rotate(5deg);
}

.islamic-program-card h3 {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.islamic-program-card .program-tag {
    display: inline-block;
    background: var(--off-white);
    color: var(--accent);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    margin-bottom: var(--space-4);
}

.islamic-program-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
}

/* Hifz Detail Section */
.hifz-detail-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}

.hifz-detail-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.hifz-detail-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
    position: relative;
    z-index: 1;
}

.hifz-detail-content .section-subtitle {
    color: var(--accent);
}

.hifz-detail-content .section-subtitle::before,
.hifz-detail-content .section-subtitle::after {
    background: var(--accent);
}

.hifz-detail-content .section-title {
    color: var(--white);
}

.hifz-detail-content .section-title::after {
    background: var(--accent);
    margin: var(--space-5) 0 0;
}

.hifz-detail-text {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-base);
    line-height: 1.9;
    margin-bottom: var(--space-6);
}

.hifz-journey {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
    margin-top: var(--space-6);
}

.hifz-journey-step {
    display: flex;
    align-items: flex-start;
    gap: var(--space-3);
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
    padding: var(--space-4);
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.hifz-journey-step:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
}

.hifz-journey-step i {
    color: var(--accent);
    margin-top: 2px;
    flex-shrink: 0;
}

.hifz-detail-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-2xl);
}

.hifz-detail-image img {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

/* Tajweed Section */
.tajweed-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.tajweed-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
}

.tajweed-image {
    border-radius: var(--radius-2xl);
    overflow: hidden;
    box-shadow: var(--shadow-xl);
}

.tajweed-image img {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.tajweed-content .section-subtitle {
    text-align: left;
}

.tajweed-content .section-subtitle::before {
    display: none;
}

.tajweed-content .section-title {
    text-align: left;
}

.tajweed-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.tajweed-text {
    color: var(--gray-600);
    font-size: var(--text-base);
    line-height: 1.9;
    margin-bottom: var(--space-6);
}

.tajweed-rules {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-4);
}

.tajweed-rule {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    background: var(--off-white);
    padding: var(--space-4);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.tajweed-rule:hover {
    background: var(--primary);
    color: var(--white);
    transform: translateX(5px);
}

.tajweed-rule:hover i {
    color: var(--accent);
}

.tajweed-rule i {
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

.tajweed-rule span {
    font-weight: 600;
    font-size: var(--text-sm);
}

/* Islamic Studies Section */
.islamic-studies-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.islamic-studies-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.islamic-study-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    border-left: 4px solid var(--accent);
    transition: all var(--transition-base);
}

.islamic-study-card:hover {
    box-shadow: var(--shadow-lg);
    transform: translateY(-5px);
}

.islamic-study-card h4 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-4);
    display: flex;
    align-items: center;
    gap: var(--space-3);
}

.islamic-study-card h4 i {
    color: var(--accent);
}

.islamic-study-card ul {
    list-style: none;
}

.islamic-study-card ul li {
    position: relative;
    padding-left: var(--space-5);
    margin-bottom: var(--space-2);
    font-size: var(--text-sm);
    color: var(--gray-600);
}

.islamic-study-card ul li::before {
    content: '\f005';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    left: 0;
    color: var(--accent);
    font-size: 10px;
    top: 3px;
}

/* Daily Schedule Section */
.islamic-schedule {
    padding: var(--space-20) 0;
    background: var(--white);
}

.islamic-schedule-table {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.islamic-schedule-row {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    border-bottom: 1px solid var(--gray-100);
}

.islamic-schedule-row:last-child {
    border-bottom: none;
}

.islamic-schedule-row.header {
    background: var(--primary);
    color: var(--white);
    font-weight: 600;
}

.islamic-schedule-row span {
    padding: var(--space-4) var(--space-5);
    font-size: var(--text-sm);
}

.islamic-schedule-row.header span {
    text-align: center;
}

.islamic-schedule-row:not(.header) span {
    text-align: center;
    color: var(--gray-600);
}

.islamic-schedule-row:not(.header) span:first-child {
    text-align: left;
    font-weight: 600;
    color: var(--primary);
}

/* Stats Section */
.islamic-stats {
    padding: var(--space-20) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    position: relative;
    overflow: hidden;
}

.islamic-stats::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.islamic-stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-6);
    position: relative;
    z-index: 1;
}

.islamic-stat-item {
    text-align: center;
    padding: var(--space-6);
}

.islamic-stat-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto var(--space-4);
    background: rgba(255, 255, 255, 0.2);
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-2xl);
}

.islamic-stat-number {
    font-family: var(--font-display);
    font-size: var(--text-4xl);
    font-weight: 800;
    color: var(--white);
    line-height: 1;
    margin-bottom: var(--space-2);
}

.islamic-stat-label {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-sm);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Responsive */
@media (max-width: 1024px) {
    .islamic-programs-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hifz-detail-grid,
    .tajweed-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .hifz-detail-content .section-subtitle,
    .hifz-detail-content .section-title,
    .tajweed-content .section-subtitle,
    .tajweed-content .section-title {
        text-align: center;
    }
    
    .hifz-detail-content .section-title::after,
    .tajweed-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
    
    .islamic-studies-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .islamic-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .hifz-detail-image,
    .tajweed-image {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
}

@media (max-width: 768px) {
    .islamic-programs-grid {
        grid-template-columns: 1fr;
    }
    
    .hifz-journey {
        grid-template-columns: 1fr;
    }
    
    .tajweed-rules {
        grid-template-columns: 1fr;
    }
    
    .islamic-studies-grid {
        grid-template-columns: 1fr;
    }
    
    .islamic-stats-grid {
        grid-template-columns: 1fr;
    }
    
    .islamic-schedule-row {
        grid-template-columns: 1fr;
    }
    
    .islamic-schedule-row span {
        border-bottom: 1px solid var(--gray-100);
    }
    
    .islamic-schedule-row span:last-child {
        border-bottom: none;
    }
    
    .quran-arabic {
        font-size: var(--text-xl);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Islamic Education</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Islamic Education</span>
            </div>
        </div>
    </div>
</section>

<!-- ISLAMIC HERO -->
<section class="islamic-hero">
    <div class="container">
        <div class="islamic-hero-content">
            <div class="islamic-hero-badge">
                <i class="fas fa-star"></i>
                Comprehensive Quranic & Islamic Studies
            </div>
            <h1>Nurturing Souls with<br>Quranic Wisdom</h1>
            <p>
                At Al-Ansaar Schools, Islamic education is not just a subject — it is the 
                foundation upon which we build every aspect of our students' lives. Our 
                comprehensive Islamic education program covers Tajweed, Hifz-e-Quran, 
                Nazra, Islamic Studies, Arabic Language, and much more.
            </p>
        </div>
    </div>
</section>

<!-- QURAN QUOTE -->
<section class="quran-quote">
    <div class="container">
        <div class="quran-quote-box reveal">
            <p class="quran-arabic">وَلَقَدْ يَسَّرْنَا الْقُرْآنَ لِلذِّكْرِ فَهَلْ مِن مُّدَّكِرٍ</p>
            <p class="quran-translation">
                "And We have certainly made the Quran easy for remembrance, 
                so is there any who will remember?"
            </p>
            <p class="quran-reference">— Surah Al-Qamar (54:17)</p>
        </div>
    </div>
</section>

<!-- ISLAMIC PROGRAMS SECTION -->
<section class="islamic-programs-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">What We Offer</span>
            <h2 class="section-title">Our Islamic Education Programs</h2>
            <p class="section-desc">A complete range of Quranic and Islamic education programs designed to nurture faith and knowledge.</p>
        </div>
        
        <div class="islamic-programs-grid">
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-quran"></i>
                </div>
                <h3>Nazra Quran</h3>
                <span class="program-tag">All Grades</span>
                <p>
                    Building a strong foundation in Quran reading. Students learn to read the 
                    Holy Quran fluently with proper pronunciation, starting from the Arabic 
                    alphabet and progressing to reading complete verses and surahs with confidence.
                </p>
            </div>
            
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-mosque"></i>
                </div>
                <h3>Hifz-e-Quran</h3>
                <span class="program-tag">Flagship Program</span>
                <p>
                    Our flagship Hifz program enables students to memorize the entire Holy Quran 
                    with proper Tajweed while maintaining their academic studies. Personalized 
                    guidance from qualified Huffaz ensures every student progresses at their own pace.
                </p>
            </div>
            
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-microphone-alt"></i>
                </div>
                <h3>Tajweed</h3>
                <span class="program-tag">Essential Training</span>
                <p>
                    Mastering the art of Quran recitation with proper Tajweed rules. Students 
                    learn Makharij (articulation points), Sifaat (characteristics of letters), 
                    and all essential rules for beautiful and correct Quran recitation.
                </p>
            </div>
            
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3>Islamic Studies</h3>
                <span class="program-tag">Comprehensive</span>
                <p>
                    A well-rounded curriculum covering Aqeedah (beliefs), Fiqh (jurisprudence), 
                    Seerah (Prophet's life), Hadith, and Islamic History. Students develop a deep 
                    understanding of their faith and its practical application in daily life.
                </p>
            </div>
            
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-language"></i>
                </div>
                <h3>Arabic Language</h3>
                <span class="program-tag">Language Skills</span>
                <p>
                    Understanding the language of the Quran. Students learn Arabic grammar, 
                    vocabulary, and comprehension skills that enable them to understand Quranic 
                    verses directly, enriching their connection with the Holy Book.
                </p>
            </div>
            
            <div class="islamic-program-card reveal">
                <div class="islamic-program-icon">
                    <i class="fas fa-hands-praying"></i>
                </div>
                <h3>Duas & Azkar</h3>
                <span class="program-tag">Daily Practice</span>
                <p>
                    Learning essential daily supplications and remembrances. Students memorize 
                    and understand the duas for every occasion — from waking up to sleeping, 
                    before meals, during travel, and throughout their daily routines.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- HIFZ DETAIL SECTION -->
<section class="hifz-detail-section">
    <div class="container">
        <div class="hifz-detail-grid">
            <div class="hifz-detail-content reveal-left">
                <span class="section-subtitle">Our Flagship Program</span>
                <h2 class="section-title">Integrated Hifz Program</h2>
                
                <p class="hifz-detail-text">
                    The Integrated Hifz Program at Al-Ansaar Schools is a carefully designed 
                    journey that allows students to memorize the Holy Quran while keeping pace 
                    with their formal academic education. We understand that every child is 
                    unique, and our program is structured to accommodate individual learning 
                    speeds and capabilities.
                </p>
                
                <p class="hifz-detail-text">
                    Under the guidance of experienced and qualified Huffaz teachers, students 
                    follow a structured daily schedule that balances Quran memorization with 
                    revision and academic classes. Our unique approach has produced hundreds 
                    of Huffaz who excel in both Deen and Duniya.
                </p>
                
                <div class="hifz-journey">
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Qualified Huffaz Teachers</span>
                    </div>
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Personalized Learning Pace</span>
                    </div>
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Academic Balance Maintained</span>
                    </div>
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Daily Revision & Testing</span>
                    </div>
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Tajweed Perfection Focus</span>
                    </div>
                    <div class="hifz-journey-step">
                        <i class="fas fa-check-circle"></i>
                        <span>Hifz Completion Ceremony</span>
                    </div>
                </div>
                
                <a href="?page=contact" class="btn btn-primary" style="margin-top: var(--space-8);">
                    Enroll in Hifz Program
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="hifz-detail-image reveal-right">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Hifz Class at Al-Ansaar">
            </div>
        </div>
    </div>
</section>

<!-- TAJWEED SECTION -->
<section class="tajweed-section">
    <div class="container">
        <div class="tajweed-grid">
            <div class="tajweed-image reveal-left">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/training.webp" alt="Tajweed Class">
            </div>
            
            <div class="tajweed-content reveal-right">
                <span class="section-subtitle">The Art of Recitation</span>
                <h2 class="section-title">Tajweed — Read the Quran as it Deserves</h2>
                
                <p class="tajweed-text">
                    Tajweed is the science of beautifying Quran recitation. At Al-Ansaar Schools, 
                    we place special emphasis on teaching Tajweed rules so that students can 
                    recite the Quran exactly as it was revealed. Proper Tajweed is not merely 
                    about beautiful recitation — it is about preserving the meaning and honoring 
                    the words of Allah.
                </p>
                
                <p class="tajweed-text">
                    Our Tajweed program covers everything from the basic Makharij (points of 
                    articulation) to advanced rules like Ghunnah, Idghaam, Ikhfaa, and Qalqalah. 
                    Students practice through guided sessions and receive individual feedback 
                    to perfect their recitation.
                </p>
                
                <div class="tajweed-rules">
                    <div class="tajweed-rule">
                        <i class="fas fa-volume-up"></i>
                        <span>Makharij al-Huroof</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-music"></i>
                        <span>Sifaat al-Huroof</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-link"></i>
                        <span>Rules of Noon Sakin</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-link"></i>
                        <span>Rules of Meem Sakin</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-compress-arrows-alt"></i>
                        <span>Idghaam Rules</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-hand-point-right"></i>
                        <span>Madd Rules</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-stop-circle"></i>
                        <span>Waqf & Ibtida</span>
                    </div>
                    <div class="tajweed-rule">
                        <i class="fas fa-star"></i>
                        <span>Qalqalah</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ISLAMIC STUDIES SECTION -->
<section class="islamic-studies-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Beyond Recitation</span>
            <h2 class="section-title">Islamic Studies Curriculum</h2>
            <p class="section-desc">A comprehensive understanding of Islam that goes beyond Quran recitation to build a complete Muslim personality.</p>
        </div>
        
        <div class="islamic-studies-grid">
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-heart"></i> Aqeedah (Beliefs)</h4>
                <ul>
                    <li>Tawheed — Oneness of Allah</li>
                    <li>Articles of Faith (Iman)</li>
                    <li>Pillars of Islam</li>
                    <li>Angels, Prophets & Divine Books</li>
                    <li>Life after Death & Akhirah</li>
                </ul>
            </div>
            
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-balance-scale"></i> Fiqh (Jurisprudence)</h4>
                <ul>
                    <li>Salah — Step by Step Prayer Guide</li>
                    <li>Sawm — Fasting Rules & Etiquettes</li>
                    <li>Zakat — Understanding Obligatory Charity</li>
                    <li>Hajj — Pilgrimage Essentials</li>
                    <li>Halal & Haram in Daily Life</li>
                </ul>
            </div>
            
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-user-friends"></i> Seerah (Prophet's Life)</h4>
                <ul>
                    <li>Life of Prophet Muhammad (PBUH)</li>
                    <li>Makkan Period & Persecution</li>
                    <li>Migration to Madinah</li>
                    <li>Battles & Treaties</li>
                    <li>Prophet's Character & Sunnah</li>
                </ul>
            </div>
            
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-scroll"></i> Hadith Studies</h4>
                <ul>
                    <li>40 Hadith for Students</li>
                    <li>Understanding Hadith Terminology</li>
                    <li>Authentic Hadith Collections</li>
                    <li>Application in Daily Life</li>
                    <li>Hadith Memorization Program</li>
                </ul>
            </div>
            
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-landmark"></i> Islamic History</h4>
                <ul>
                    <li>Khulafa-e-Rashidun Era</li>
                    <li>Golden Age of Islam</li>
                    <li>Muslim Scientists & Scholars</li>
                    <li>Islamic Civilization & Culture</li>
                    <li>Lessons from Islamic History</li>
                </ul>
            </div>
            
            <div class="islamic-study-card reveal">
                <h4><i class="fas fa-user-shield"></i> Character Building</h4>
                <ul>
                    <li>Akhlaq — Islamic Ethics & Morals</li>
                    <li>Respect for Parents & Elders</li>
                    <li>Honesty, Truthfulness & Trust</li>
                    <li>Kindness & Compassion</li>
                    <li>Social Responsibility in Islam</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DAILY SCHEDULE SECTION -->
<section class="islamic-schedule">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Daily Routine</span>
            <h2 class="section-title">Islamic Education Schedule</h2>
            <p class="section-desc">A structured daily routine that ensures consistent Quranic and Islamic education alongside academics.</p>
        </div>
        
        <div class="islamic-schedule-table reveal">
            <div class="islamic-schedule-row header">
                <span>Activity</span>
                <span>Time</span>
                <span>Days</span>
                <span>Grades</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Morning Quran Recitation</span>
                <span>8:00 - 8:30 AM</span>
                <span>Mon - Sat</span>
                <span>All</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Hifz Class</span>
                <span>8:30 - 10:00 AM</span>
                <span>Mon - Sat</span>
                <span>Hifz Students</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Tajweed Lesson</span>
                <span>11:00 - 11:30 AM</span>
                <span>Mon, Wed, Fri</span>
                <span>All</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Islamic Studies</span>
                <span>12:00 - 12:30 PM</span>
                <span>Tue, Thu</span>
                <span>3-10</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Arabic Language</span>
                <span>1:00 - 1:30 PM</span>
                <span>Mon, Wed</span>
                <span>4-10</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Dua & Azkar Session</span>
                <span>2:30 - 2:45 PM</span>
                <span>Mon - Sat</span>
                <span>All</span>
            </div>
            <div class="islamic-schedule-row">
                <span>Asr Prayer (Jammat)</span>
                <span>Asr Time</span>
                <span>Mon - Sat</span>
                <span>All</span>
            </div>
        </div>
    </div>
</section>

<!-- ISLAMIC STATS -->
<section class="islamic-stats">
    <div class="container">
        <div class="islamic-stats-grid">
            <div class="islamic-stat-item reveal">
                <div class="islamic-stat-icon">
                    <i class="fas fa-quran"></i>
                </div>
                <div class="islamic-stat-number">50+</div>
                <div class="islamic-stat-label">Huffaz Graduates</div>
            </div>
            
            <div class="islamic-stat-item reveal">
                <div class="islamic-stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="islamic-stat-number">15+</div>
                <div class="islamic-stat-label">Quran Teachers</div>
            </div>
            
            <div class="islamic-stat-item reveal">
                <div class="islamic-stat-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="islamic-stat-number">100%</div>
                <div class="islamic-stat-label">Tajweed Integration</div>
            </div>
            
            <div class="islamic-stat-item reveal">
                <div class="islamic-stat-icon">
                    <i class="fas fa-mosque"></i>
                </div>
                <div class="islamic-stat-number">5</div>
                <div class="islamic-stat-label">Campus Prayer Halls</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Begin Your Child's Quranic Journey</h2>
            <p class="cta-desc">
                Give your child the gift of Quran education. Enroll them in our 
                comprehensive Islamic education program and watch them grow in faith and knowledge.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about the Islamic Education program at Al-Ansaar Schools." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Ask Questions
                </a>
            </div>
        </div>
    </div>
</section>
