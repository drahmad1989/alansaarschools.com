<style>
/* =============================================
   NEWS PAGE STYLES
   ============================================= */

/* Featured News */
.featured-news {
    padding: var(--space-16) 0;
    background: var(--primary-dark);
}

.featured-news-card {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: var(--space-10);
    align-items: center;
    background: rgba(255, 255, 255, 0.05);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.featured-news-img {
    height: 400px;
    overflow: hidden;
}

.featured-news-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.featured-news-card:hover .featured-news-img img {
    transform: scale(1.05);
}

.featured-news-content {
    padding: var(--space-8);
}

.featured-badge {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    background: var(--accent);
    color: var(--white);
    padding: var(--space-1) var(--space-4);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: var(--space-4);
}

.featured-news-content h2 {
    color: var(--white);
    font-size: var(--text-2xl);
    margin-bottom: var(--space-4);
    line-height: 1.3;
}

.featured-news-content p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-base);
    line-height: 1.8;
    margin-bottom: var(--space-5);
}

.featured-meta {
    display: flex;
    align-items: center;
    gap: var(--space-5);
    margin-bottom: var(--space-5);
}

.featured-meta span {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: rgba(255, 255, 255, 0.6);
    font-size: var(--text-sm);
}

.featured-meta i {
    color: var(--accent);
}

.featured-news-content .btn {
    margin-top: var(--space-2);
}

/* News Grid */
.news-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.news-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.news-card-full {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all var(--transition-base);
}

.news-card-full:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.news-card-img {
    height: 200px;
    overflow: hidden;
}

.news-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.news-card-full:hover .news-card-img img {
    transform: scale(1.1);
}

.news-card-body {
    padding: var(--space-6);
}

.news-card-category {
    display: inline-block;
    background: var(--off-white);
    color: var(--accent);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: var(--space-3);
}

.news-card-date {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--gray-500);
    font-size: var(--text-sm);
    margin-bottom: var(--space-3);
}

.news-card-date i {
    color: var(--accent);
}

.news-card-body h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
    line-height: 1.4;
}

.news-card-body h3 a {
    color: var(--primary);
    transition: color var(--transition-fast);
}

.news-card-body h3 a:hover {
    color: var(--accent);
}

.news-card-body p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin-bottom: var(--space-4);
}

.news-card-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--primary);
    font-weight: 600;
    font-size: var(--text-sm);
    transition: all var(--transition-fast);
}

.news-card-link i {
    transition: transform var(--transition-fast);
}

.news-card-link:hover {
    color: var(--accent);
}

.news-card-link:hover i {
    transform: translateX(5px);
}

/* News List */
.news-list-section {
    padding: var(--space-16) 0;
    background: var(--white);
}

.news-list-item {
    display: grid;
    grid-template-columns: 250px 1fr;
    gap: var(--space-6);
    padding: var(--space-6);
    background: var(--off-white);
    border-radius: var(--radius-xl);
    margin-bottom: var(--space-5);
    transition: all var(--transition-base);
}

.news-list-item:hover {
    background: var(--white);
    box-shadow: var(--shadow-lg);
}

.news-list-img {
    width: 100%;
    height: 150px;
    border-radius: var(--radius-lg);
    overflow: hidden;
}

.news-list-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.news-list-item:hover .news-list-img img {
    transform: scale(1.1);
}

.news-list-content h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
}

.news-list-content h3 a {
    color: var(--primary);
}

.news-list-content h3 a:hover {
    color: var(--accent);
}

.news-list-content p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin-bottom: var(--space-3);
}

.news-list-meta {
    display: flex;
    align-items: center;
    gap: var(--space-5);
}

.news-list-meta span {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--gray-400);
    font-size: var(--text-sm);
}

.news-list-meta i {
    color: var(--accent);
}

/* Categories Sidebar */
.news-with-sidebar {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: var(--space-10);
}

.news-sidebar {
    position: sticky;
    top: 120px;
}

.sidebar-widget {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    margin-bottom: var(--space-6);
    box-shadow: var(--shadow-md);
}

.sidebar-widget h4 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-5);
    padding-bottom: var(--space-3);
    border-bottom: 2px solid var(--accent);
}

.category-list {
    list-style: none;
}

.category-list li {
    margin-bottom: var(--space-3);
}

.category-list a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--space-3);
    background: var(--off-white);
    border-radius: var(--radius-md);
    color: var(--gray-600);
    font-size: var(--text-sm);
    transition: all var(--transition-fast);
}

.category-list a:hover {
    background: var(--primary);
    color: var(--white);
}

.category-list span {
    background: var(--gray-200);
    padding: var(--space-1) var(--space-2);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
}

.category-list a:hover span {
    background: var(--accent);
    color: var(--white);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: var(--space-2);
    margin-top: var(--space-10);
}

.page-link {
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border-radius: var(--radius-md);
    color: var(--gray-600);
    font-weight: 600;
    transition: all var(--transition-fast);
}

.page-link:hover,
.page-link.active {
    background: var(--primary);
    color: var(--white);
}

/* Responsive */
@media (max-width: 1024px) {
    .featured-news-card {
        grid-template-columns: 1fr;
    }
    
    .featured-news-img {
        height: 300px;
    }
    
    .news-grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .news-with-sidebar {
        grid-template-columns: 1fr;
    }
    
    .news-sidebar {
        position: static;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-6);
    }
    
    .news-sidebar .sidebar-widget {
        margin-bottom: 0;
    }
}

@media (max-width: 768px) {
    .news-grid-3 {
        grid-template-columns: 1fr;
    }
    
    .news-list-item {
        grid-template-columns: 1fr;
    }
    
    .news-list-img {
        height: 200px;
    }
    
    .news-sidebar {
        grid-template-columns: 1fr;
    }
    
    .featured-news-content h2 {
        font-size: var(--text-xl);
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>News & Updates</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>News</span>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED NEWS -->
<section class="featured-news">
    <div class="container">
        <div class="featured-news-card reveal">
            <div class="featured-news-img">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Admissions Open">
            </div>
            <div class="featured-news-content">
                <span class="featured-badge">
                    <i class="fas fa-star"></i>
                    Featured
                </span>
                <h2>Admissions Open for Session 2026</h2>
                <p>
                    We are excited to announce that admissions are now open for all our campuses 
                    for the upcoming academic session 2026. Secure your child's place today and 
                    give them the gift of quality education.
                </p>
                <div class="featured-meta">
                    <span><i class="fas fa-calendar-alt"></i> <?php echo date('d M, Y'); ?></span>
                    <span><i class="fas fa-tag"></i> Admissions</span>
                </div>
                <a href="?page=admissions" class="btn btn-primary">
                    Apply Now
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Latest Updates</span>
            <h2 class="section-title">Recent News</h2>
        </div>
        
        <div class="news-with-sidebar">
            <div class="news-main">
                <div class="news-grid-3">
                    <!-- News 1 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Annual Day">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Events</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-1 week')); ?>
                            </div>
                            <h3><a href="#">Annual Prize Distribution Ceremony 2025</a></h3>
                            <p>
                                Celebrating the achievements of our brilliant students who excelled 
                                in academics, sports, and extracurricular activities throughout the year.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                    <!-- News 2 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Hifz Ceremony">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Hifz</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-2 weeks')); ?>
                            </div>
                            <h3><a href="#">Hifz Completion Ceremony</a></h3>
                            <p>
                                Alhamdulillah, another group of students completed their Hifz-e-Quran. 
                                A proud moment for the entire Al-Ansaar family.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                    <!-- News 3 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Science Fair">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Activities</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-3 weeks')); ?>
                            </div>
                            <h3><a href="#">Annual Science Exhibition</a></h3>
                            <p>
                                Students showcased their innovative science projects at our annual 
                                science exhibition, demonstrating creativity and scientific thinking.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                    <!-- News 4 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Teacher Training">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Training</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-1 month')); ?>
                            </div>
                            <h3><a href="#">Teacher Training Workshop</a></h3>
                            <p>
                                Our teachers participated in a comprehensive professional development 
                                workshop to enhance their teaching skills and methodologies.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                    <!-- News 5 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Plantation">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Community</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-5 weeks')); ?>
                            </div>
                            <h3><a href="#">Tree Plantation Drive</a></h3>
                            <p>
                                In honor of Green Pakistan Day, our students and staff participated 
                                in a tree plantation drive across all campuses.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                    
                    <!-- News 6 -->
                    <article class="news-card-full reveal">
                        <div class="news-card-img">
                            <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Independence Day">
                        </div>
                        <div class="news-card-body">
                            <span class="news-card-category">Events</span>
                            <div class="news-card-date">
                                <i class="fas fa-calendar-alt"></i>
                                <?php echo date('d M, Y', strtotime('-6 weeks')); ?>
                            </div>
                            <h3><a href="#">Independence Day Celebrations</a></h3>
                            <p>
                                Patriotic celebrations and flag hoisting ceremonies were held at 
                                all campuses to mark Pakistan's Independence Day.
                            </p>
                            <a href="#" class="news-card-link">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                
                <!-- Pagination -->
                <div class="pagination">
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            
            <!-- Sidebar -->
            <aside class="news-sidebar">
                <div class="sidebar-widget">
                    <h4>Categories</h4>
                    <ul class="category-list">
                        <li>
                            <a href="#">
                                All News
                                <span>12</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Events
                                <span>5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Admissions
                                <span>2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Hifz
                                <span>3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Activities
                                <span>2</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="sidebar-widget">
                    <h4>Quick Links</h4>
                    <ul class="category-list">
                        <li><a href="?page=admissions">Apply for Admission</a></li>
                        <li><a href="?page=fee-structure">Fee Structure</a></li>
                        <li><a href="?page=contact">Contact Us</a></li>
                        <li><a href="?page=gallery">Photo Gallery</a></li>
                    </ul>
                </div>
                
                <div class="sidebar-widget" style="background: var(--primary); color: var(--white);">
                    <h4 style="color: var(--white); border-color: var(--accent);">Stay Updated</h4>
                    <p style="font-size: var(--text-sm); color: rgba(255,255,255,0.8); margin-bottom: var(--space-4);">
                        Follow us on social media for latest updates.
                    </p>
                    <div style="display: flex; gap: var(--space-3);">
                        <a href="#" style="width: 40px; height: 40px; background: var(--accent); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--white);">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" style="width: 40px; height: 40px; background: var(--accent); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--white);">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" style="width: 40px; height: 40px; background: var(--accent); border-radius: var(--radius-md); display: flex; align-items: center; justify-content: center; color: var(--white);">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Stay Connected</h2>
            <p class="cta-desc">
                Don't miss any updates. Follow us on social media and stay connected with 
                the Al-Ansaar community.
            </p>
            <div class="cta-buttons">
                <a href="?page=contact" class="btn btn-primary btn-lg">
                    <i class="fas fa-envelope"></i>
                    Contact Us
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>