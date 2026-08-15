<style>
/* =============================================
   GALLERY PAGE STYLES
   ============================================= */

/* Filter Section */
.gallery-filters-section {
    padding: var(--space-10) 0;
    background: var(--white);
    position: sticky;
    top: 90px;
    z-index: 50;
    border-bottom: 1px solid var(--gray-100);
}

.filter-buttons {
    display: flex;
    justify-content: center;
    gap: var(--space-3);
    flex-wrap: wrap;
}

.filter-btn {
    padding: var(--space-3) var(--space-6);
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-600);
    background: var(--off-white);
    border: 2px solid transparent;
    border-radius: var(--radius-full);
    cursor: pointer;
    transition: all var(--transition-base);
}

.filter-btn:hover {
    color: var(--primary);
    border-color: var(--primary);
}

.filter-btn.active {
    background: var(--primary);
    color: var(--white);
    border-color: var(--primary);
}

/* Gallery Grid Section */
.gallery-section {
    padding: var(--space-16) 0;
    background: var(--off-white);
}

.gallery-masonry {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-5);
}

.gallery-item {
    position: relative;
    border-radius: var(--radius-xl);
    overflow: hidden;
    cursor: pointer;
    aspect-ratio: 1;
}

.gallery-item.tall {
    grid-row: span 2;
    aspect-ratio: auto;
}

.gallery-item.wide {
    grid-column: span 2;
    aspect-ratio: 2/1;
}

.gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.gallery-item:hover img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(transparent 40%, rgba(13, 59, 76, 0.9));
    opacity: 0;
    transition: opacity var(--transition-base);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: var(--space-5);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay h4 {
    color: var(--white);
    font-size: var(--text-base);
    margin-bottom: var(--space-2);
    transform: translateY(20px);
    transition: transform var(--transition-base);
}

.gallery-overlay span {
    color: var(--accent);
    font-size: var(--text-xs);
    text-transform: uppercase;
    letter-spacing: 1px;
    transform: translateY(20px);
    transition: transform var(--transition-base) 0.1s;
}

.gallery-item:hover .gallery-overlay h4,
.gallery-item:hover .gallery-overlay span {
    transform: translateY(0);
}

.gallery-zoom {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    width: 60px;
    height: 60px;
    background: var(--accent);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-xl);
    transition: transform var(--transition-base);
}

.gallery-item:hover .gallery-zoom {
    transform: translate(-50%, -50%) scale(1);
}

/* Load More */
.gallery-load-more {
    text-align: center;
    margin-top: var(--space-10);
}

/* Lightbox */
.lightbox {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: var(--space-8);
}

.lightbox.active {
    display: flex;
}

.lightbox-content {
    max-width: 90%;
    max-height: 90%;
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-2xl);
}

.close-lightbox {
    position: absolute;
    top: var(--space-6);
    right: var(--space-6);
    width: 50px;
    height: 50px;
    background: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-2xl);
    color: var(--primary);
    cursor: pointer;
    transition: all var(--transition-base);
}

.close-lightbox:hover {
    background: var(--accent);
    color: var(--white);
    transform: rotate(90deg);
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    cursor: pointer;
    transition: all var(--transition-base);
}

.lightbox-nav:hover {
    background: var(--accent);
    color: var(--white);
}

.lightbox-prev {
    left: var(--space-6);
}

.lightbox-next {
    right: var(--space-6);
}

.lightbox-caption {
    position: absolute;
    bottom: var(--space-6);
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255, 255, 255, 0.9);
    padding: var(--space-3) var(--space-6);
    border-radius: var(--radius-full);
    font-size: var(--text-sm);
    color: var(--primary);
    font-weight: 500;
}

/* Responsive */
@media (max-width: 1024px) {
    .gallery-masonry {
        grid-template-columns: repeat(3, 1fr);
    }
    
    .gallery-item.wide {
        grid-column: span 1;
        aspect-ratio: 1;
    }
}

@media (max-width: 768px) {
    .gallery-filters-section {
        top: 70px;
    }
    
    .filter-buttons {
        gap: var(--space-2);
    }
    
    .filter-btn {
        padding: var(--space-2) var(--space-4);
        font-size: var(--text-xs);
    }
    
    .gallery-masonry {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-3);
    }
    
    .gallery-item.tall {
        grid-row: span 1;
        aspect-ratio: 1;
    }
    
    .lightbox-nav {
        width: 40px;
        height: 40px;
    }
    
    .lightbox-prev {
        left: var(--space-3);
    }
    
    .lightbox-next {
        right: var(--space-3);
    }
}

@media (max-width: 480px) {
    .gallery-masonry {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Our Gallery</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Gallery</span>
            </div>
        </div>
    </div>
</section>

<!-- FILTER SECTION -->
<section class="gallery-filters-section">
    <div class="container">
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All Photos</button>
            <button class="filter-btn" data-filter="campuses">Campuses</button>
            <button class="filter-btn" data-filter="activities">Activities</button>
            <button class="filter-btn" data-filter="events">Events</button>
            <button class="filter-btn" data-filter="hifz">Hifz</button>
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->
<section class="gallery-section">
    <div class="container">
        <div class="gallery-masonry">
            <!-- Campus Photos -->
            <div class="gallery-item tall reveal" data-category="campuses">
                <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Madina Town Campus">
                <div class="gallery-overlay">
                    <h4>Madina Town Campus</h4>
                    <span>Main Campus - Kasur</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="campuses">
                <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Khudian Campus">
                <div class="gallery-overlay">
                    <h4>Khudian Khas Campus</h4>
                    <span>Campus - Kasur</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="campuses">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Gujranwala Campus">
                <div class="gallery-overlay">
                    <h4>Gujranwala Campus</h4>
                    <span>Campus - Gujranwala</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="campuses">
                <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Noorpur Campus">
                <div class="gallery-overlay">
                    <h4>Noorpur Campus</h4>
                    <span>Campus - Noorpur</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <!-- Activities Photos -->
            <div class="gallery-item wide reveal" data-category="activities">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Training Session">
                <div class="gallery-overlay">
                    <h4>Skills Training Session</h4>
                    <span>Activities</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="activities">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Physical Exercise">
                <div class="gallery-overlay">
                    <h4>Physical Training</h4>
                    <span>Activities</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="activities">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Plantation Drive">
                <div class="gallery-overlay">
                    <h4>Plantation Drive</h4>
                    <span>Activities</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="activities">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Parent Teacher Meeting">
                <div class="gallery-overlay">
                    <h4>Parent Teacher Meeting</h4>
                    <span>Activities</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <!-- Events Photos -->
            <div class="gallery-item tall reveal" data-category="events">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Annual Day">
                <div class="gallery-overlay">
                    <h4>Annual Day Celebration</h4>
                    <span>Events</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="events">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="School Trip">
                <div class="gallery-overlay">
                    <h4>Educational Trip</h4>
                    <span>Events</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="events">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Prize Distribution">
                <div class="gallery-overlay">
                    <h4>Prize Distribution</h4>
                    <span>Events</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="events">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Independence Day">
                <div class="gallery-overlay">
                    <h4>Independence Day</h4>
                    <span>Events</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <!-- Hifz Photos -->
            <div class="gallery-item wide reveal" data-category="hifz">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Hifz Class">
                <div class="gallery-overlay">
                    <h4>Hifz Class in Session</h4>
                    <span>Hifz Program</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="hifz">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Hifz Completion">
                <div class="gallery-overlay">
                    <h4>Hifz Completion Ceremony</h4>
                    <span>Hifz Program</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
            
            <div class="gallery-item reveal" data-category="hifz">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Quran Recitation">
                <div class="gallery-overlay">
                    <h4>Quran Recitation</h4>
                    <span>Hifz Program</span>
                </div>
                <div class="gallery-zoom">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
        </div>
        
        <div class="gallery-load-more">
            <button class="btn btn-secondary" id="loadMoreGallery">
                <i class="fas fa-images"></i>
                Load More Photos
            </button>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Want to See More?</h2>
            <p class="cta-desc">
                Schedule a campus visit to experience our vibrant learning environment firsthand.
            </p>
            <div class="cta-buttons">
                <a href="?page=contact" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar-alt"></i>
                    Schedule Visit
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to schedule a campus visit." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <span class="close-lightbox" id="closeLightbox">&times;</span>
    <div class="lightbox-nav lightbox-prev" id="lightboxPrev">
        <i class="fas fa-chevron-left"></i>
    </div>
    <img class="lightbox-content" id="lightboxImg" src="" alt="">
    <div class="lightbox-nav lightbox-next" id="lightboxNext">
        <i class="fas fa-chevron-right"></i>
    </div>
    <div class="lightbox-caption" id="lightboxCaption"></div>
</div>

<script>
// Gallery Filter & Lightbox
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const closeLightbox = document.getElementById('closeLightbox');
    const prevBtn = document.getElementById('lightboxPrev');
    const nextBtn = document.getElementById('lightboxNext');
    
    let currentIndex = 0;
    let visibleItems = [];
    
    // Filter functionality
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Lightbox functionality
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const title = this.querySelector('h4')?.textContent || '';
            
            visibleItems = Array.from(galleryItems).filter(i => i.style.display !== 'none');
            currentIndex = visibleItems.indexOf(this);
            
            lightboxImg.src = img.src;
            lightboxCaption.textContent = title;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    function closeLightboxFunc() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    closeLightbox.addEventListener('click', closeLightboxFunc);
    
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightboxFunc();
        }
    });
    
    function showImage(index) {
        if (index < 0) index = visibleItems.length - 1;
        if (index >= visibleItems.length) index = 0;
        currentIndex = index;
        
        const item = visibleItems[currentIndex];
        const img = item.querySelector('img');
        const title = item.querySelector('h4')?.textContent || '';
        
        lightboxImg.src = img.src;
        lightboxCaption.textContent = title;
    }
    
    prevBtn.addEventListener('click', function() {
        showImage(currentIndex - 1);
    });
    
    nextBtn.addEventListener('click', function() {
        showImage(currentIndex + 1);
    });
    
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') closeLightboxFunc();
        if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
        if (e.key === 'ArrowRight') showImage(currentIndex + 1);
    });
});
</script>