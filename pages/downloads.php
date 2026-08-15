<style>
/* =============================================
   DOWNLOADS PAGE STYLES
   ============================================= */

.downloads-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.downloads-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.download-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    padding: var(--space-6);
    text-align: center;
    transition: all var(--transition-base);
    border: 1px solid var(--gray-100);
}

.download-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
}

.download-icon {
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

.download-card:hover .download-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    transform: scale(1.1);
}

.download-card h3 {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-3);
}

.download-card p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    margin-bottom: var(--space-5);
}

.download-btn {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    padding: var(--space-2) var(--space-5);
    background: var(--off-white);
    color: var(--primary);
    border-radius: var(--radius-full);
    font-size: var(--text-sm);
    font-weight: 600;
    transition: all var(--transition-base);
}

.download-btn:hover {
    background: var(--primary);
    color: var(--white);
}

.download-category {
    margin-bottom: var(--space-12);
}

.download-category-title {
    font-size: var(--text-xl);
    color: var(--primary);
    margin-bottom: var(--space-6);
    padding-bottom: var(--space-3);
    border-bottom: 2px solid var(--accent);
}

@media (max-width: 1024px) {
    .downloads-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .downloads-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Downloads</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Downloads</span>
            </div>
        </div>
    </div>
</section>

<!-- DOWNLOADS SECTION -->
<section class="downloads-section">
    <div class="container">
        <!-- Admission Forms -->
        <div class="download-category">
            <h2 class="download-category-title">Admission Forms</h2>
            <div class="downloads-grid">
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Admission Form</h3>
                    <p>General admission application form for all grades</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <h3>Playgroup Form</h3>
                    <p>Special form for Playgroup & Nursery admission</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-quran"></i>
                    </div>
                    <h3>Hifz Admission Form</h3>
                    <p>Application form for Hifz program enrollment</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
        
        <!-- School Documents -->
        <div class="download-category">
            <h2 class="download-category-title">School Documents</h2>
            <div class="downloads-grid">
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Prospectus 2026</h3>
                    <p>Complete school prospectus with all information</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Academic Calendar</h3>
                    <p>Annual academic calendar for session 2026</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <h3>Fee Structure</h3>
                    <p>Complete fee structure for all grades</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-bus"></i>
                    </div>
                    <h3>Transport Routes</h3>
                    <p>Available transport routes and stops</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Uniform Guide</h3>
                    <p>School uniform requirements and guidelines</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
                
                <div class="download-card reveal">
                    <div class="download-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Curriculum Guide</h3>
                    <p>Detailed curriculum for all grades</p>
                    <a href="#" class="download-btn">
                        <i class="fas fa-download"></i>
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Need More Information?</h2>
            <p class="cta-desc">
                Contact us if you need any additional documents or have questions about our admission process.
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