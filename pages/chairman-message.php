<style>
/* =============================================
   CHAIRMAN MESSAGE PAGE STYLES
   ============================================= */

/* Chairman Section */
.chairman-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.chairman-grid {
    display: grid;
    grid-template-columns: 400px 1fr;
    gap: var(--space-16);
    align-items: start;
}

.chairman-image-wrapper {
    position: sticky;
    top: 120px;
}

.chairman-image {
    width: 100%;
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-xl);
    overflow: hidden;
    position: relative;
}

.chairman-image img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    object-position: top;
}

.chairman-image-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(13, 59, 76, 0.9));
    padding: var(--space-10) var(--space-6) var(--space-6);
    text-align: center;
}

.chairman-name {
    color: var(--white);
    font-size: var(--text-2xl);
    margin-bottom: var(--space-2);
}

.chairman-title {
    color: var(--accent);
    font-size: var(--text-sm);
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
}

.chairman-social {
    display: flex;
    justify-content: center;
    gap: var(--space-3);
    margin-top: var(--space-5);
}

.chairman-social a {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    transition: all var(--transition-base);
}

.chairman-social a:hover {
    background: var(--accent);
    transform: translateY(-3px);
}

.chairman-content .section-subtitle {
    text-align: left;
}

.chairman-content .section-subtitle::before {
    display: none;
}

.chairman-content .section-title {
    text-align: left;
    margin-bottom: var(--space-8);
}

.chairman-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.chairman-quote {
    background: var(--off-white);
    padding: var(--space-6);
    border-radius: var(--radius-xl);
    border-left: 4px solid var(--accent);
    margin-bottom: var(--space-8);
    position: relative;
}

.chairman-quote::before {
    content: '\201C';
    font-size: 4rem;
    color: var(--accent);
    opacity: 0.3;
    position: absolute;
    top: -10px;
    left: 15px;
    font-family: Georgia, serif;
    line-height: 1;
}

.chairman-quote p {
    font-size: var(--text-lg);
    color: var(--gray-700);
    font-style: italic;
    line-height: 1.8;
    position: relative;
    z-index: 1;
    margin: 0;
}

.chairman-text {
    font-size: var(--text-base);
    color: var(--gray-600);
    line-height: 1.9;
    margin-bottom: var(--space-5);
}

.chairman-text:last-of-type {
    margin-bottom: var(--space-8);
}

.chairman-signature {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    padding-top: var(--space-6);
    border-top: 1px solid var(--gray-200);
}

.chairman-signature-img {
    max-width: 200px;
    opacity: 0.8;
}

.chairman-signature-info h4 {
    color: var(--primary);
    font-size: var(--text-lg);
    margin-bottom: var(--space-1);
}

.chairman-signature-info p {
    color: var(--gray-500);
    font-size: var(--text-sm);
    margin: 0;
}

/* Values Section */
.values-highlight {
    padding: var(--space-16) 0;
    background: var(--primary-dark);
}

.values-highlight-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.value-highlight-card {
    background: rgba(255, 255, 255, 0.05);
    padding: var(--space-6);
    border-radius: var(--radius-xl);
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all var(--transition-base);
}

.value-highlight-card:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateY(-5px);
}

.value-highlight-icon {
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

.value-highlight-card h4 {
    color: var(--white);
    font-size: var(--text-lg);
    margin-bottom: var(--space-2);
}

.value-highlight-card p {
    color: rgba(255, 255, 255, 0.7);
    font-size: var(--text-sm);
    margin: 0;
}

/* CTA Section */
.chairman-cta {
    padding: var(--space-16) 0;
    background: var(--off-white);
}

.chairman-cta-content {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

/* Responsive */
@media (max-width: 1024px) {
    .chairman-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .chairman-image-wrapper {
        position: static;
        max-width: 400px;
        margin: 0 auto;
    }
    
    .chairman-content .section-subtitle,
    .chairman-content .section-title {
        text-align: center;
    }
    
    .chairman-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
    
    .values-highlight-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .chairman-image img {
        height: 400px;
    }
    
    .values-highlight-grid {
        grid-template-columns: 1fr;
    }
    
    .chairman-signature {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Chairman's Message</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Chairman's Message</span>
            </div>
        </div>
    </div>
</section>

<!-- CHAIRMAN SECTION -->
<section class="chairman-section">
    <div class="container">
        <div class="chairman-grid">
            <div class="chairman-image-wrapper reveal-left">
                <div class="chairman-image">
                    <img src="<?php echo SITE_URL; ?>assets/images/gallery/Hafiz-Siddique-Baloch.webp" alt="Hafiz Siddique Baloch - Chairman">
                    <div class="chairman-image-overlay">
                        <h3 class="chairman-name">Hafiz Siddique Baloch</h3>
                        <span class="chairman-title">Founder & Chairman</span>
                        <div class="chairman-social">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="chairman-content reveal-right">
                <span class="section-subtitle">Leadership Vision</span>
                <h2 class="section-title">A Message from Our Founder</h2>
                
                <div class="chairman-quote">
                    <p>
                        "Education is not merely about acquiring knowledge; it is about transforming 
                        that knowledge into wisdom, character, and service to humanity."
                    </p>
                </div>
                
                <p class="chairman-text">
                    Assalam o Alaikum wa Rahmatullahi wa Barakatuhu,
                </p>
                
                <p class="chairman-text">
                    It gives me immense pleasure and gratitude to Allah (SWT) to witness the growth 
                    of Al-Ansaar Schools from humble beginnings to a network of five thriving campuses. 
                    What started as a small dream in two rooms has blossomed into an institution that 
                    has touched the lives of thousands of students and their families.
                </p>
                
                <p class="chairman-text">
                    Our journey began with a simple yet profound realization: our children deserve an 
                    education that doesn't force them to choose between Deen and Duniya. We envisioned 
                    an institution where Quranic education and modern academics walk hand in hand, 
                    where character building is as important as curriculum, and where every child is 
                    nurtured to become the best version of themselves.
                </p>
                
                <p class="chairman-text">
                    At Al-Ansaar, we don't just produce students; we cultivate leaders, Huffaz, 
                    professionals, and most importantly, good human beings. Our integrated approach 
                    ensures that a child who memorizes the Quran also excels in mathematics, science, 
                    and modern skills. This holistic development is what sets us apart.
                </p>
                
                <p class="chairman-text">
                    I am deeply grateful to the parents who have entrusted us with their children's 
                    futures, to our dedicated teachers who go above and beyond every day, and to the 
                    entire Al-Ansaar family for their unwavering support. Together, we are building 
                    generations that will InshaAllah illuminate the world with knowledge, faith, and 
                    exemplary character.
                </p>
                
                <p class="chairman-text">
                    I invite you to be part of this noble mission. Whether you are a parent seeking 
                    quality education for your child, a teacher looking to make a difference, or a 
                    well-wisher wanting to contribute—there is a place for you in the Al-Ansaar family.
                </p>
                
                <p class="chairman-text">
                    May Allah (SWT) guide us all on the straight path and accept our efforts. Ameen.
                </p>
                
                <div class="chairman-signature">
                    <div class="chairman-signature-info">
                        <h4>Hafiz Siddique Baloch</h4>
                        <p>Founder & Chairman, Al-Ansaar Schools</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VALUES HIGHLIGHT -->
<section class="values-highlight">
    <div class="container">
        <div class="section-header" style="margin-bottom: var(--space-12);">
            <span class="section-subtitle" style="color: var(--accent);">Our Foundation</span>
            <h2 class="section-title" style="color: var(--white);">Guiding Principles</h2>
        </div>
        
        <div class="values-highlight-grid">
            <div class="value-highlight-card reveal">
                <div class="value-highlight-icon">
                    <i class="fas fa-book-quran"></i>
                </div>
                <h4>Quran First</h4>
                <p>Building a strong foundation with Quranic education and values</p>
            </div>
            
            <div class="value-highlight-card reveal">
                <div class="value-highlight-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4>Academic Excellence</h4>
                <p>Rigorous curriculum meeting the highest educational standards</p>
            </div>
            
            <div class="value-highlight-card reveal">
                <div class="value-highlight-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h4>Character Building</h4>
                <p>Nurturing integrity, compassion, and leadership qualities</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="chairman-cta">
    <div class="container">
        <div class="chairman-cta-content reveal">
            <h2 class="section-title">Join Our Mission</h2>
            <p class="section-desc" style="margin-bottom: var(--space-8);">
                Be part of an educational revolution that nurtures both Deen and Duniya. 
                Enroll your child today and witness the transformation.
            </p>
            <div style="display: flex; justify-content: center; gap: var(--space-4); flex-wrap: wrap;">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to discuss about Al-Ansaar Schools." class="btn btn-secondary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>