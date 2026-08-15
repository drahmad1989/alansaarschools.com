<style>
.blog-grid-section{padding:var(--space-20) 0;background:var(--off-white)}
.blog-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:var(--space-8);max-width:1000px;margin:0 auto}
.blog-card{background:var(--white);border-radius:var(--radius-2xl);overflow:hidden;box-shadow:var(--shadow-md);transition:all var(--transition-base);display:flex;flex-direction:column}
.blog-card:hover{transform:translateY(-8px);box-shadow:var(--shadow-2xl)}
.blog-card-image{height:220px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.blog-card-image i{font-size:64px;color:rgba(255,255,255,0.2)}
.blog-card-category{position:absolute;top:var(--space-4);left:var(--space-4);background:var(--accent);color:var(--white);padding:var(--space-1) var(--space-4);border-radius:var(--radius-full);font-size:var(--text-xs);font-weight:700;text-transform:uppercase;letter-spacing:.5px}
.blog-card-body{padding:var(--space-8);flex:1;display:flex;flex-direction:column}
.blog-card-meta{display:flex;align-items:center;gap:var(--space-4);color:var(--gray-400);font-size:var(--text-sm);margin-bottom:var(--space-4)}
.blog-card-meta i{color:var(--accent)}
.blog-card-body h2{font-size:var(--text-xl);color:var(--primary);margin-bottom:var(--space-4);line-height:1.4}
.blog-card-body h2 a{color:inherit;text-decoration:none;transition:color var(--transition-fast)}
.blog-card-body h2 a:hover{color:var(--accent)}
.blog-card-body p{color:var(--gray-500);font-size:var(--text-sm);line-height:1.8;flex:1;margin-bottom:var(--space-6)}
.blog-card-link{display:inline-flex;align-items:center;gap:var(--space-2);color:var(--accent);font-weight:600;font-size:var(--text-sm);text-decoration:none;transition:all var(--transition-fast)}
.blog-card-link:hover{gap:var(--space-3);color:var(--primary)}
.blog-intro{text-align:center;max-width:700px;margin:0 auto var(--space-12)}
.blog-intro p{color:var(--gray-500);font-size:var(--text-lg);line-height:1.8}
@media(max-width:768px){.blog-grid{grid-template-columns:1fr}.blog-card-image{height:180px}}
</style>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1>Blog & Articles</h1>
            <div class="breadcrumb">
                <a href="<?php echo SITE_URL; ?>">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span>Blog</span>
            </div>
        </div>
    </div>
</section>

<section class="blog-grid-section">
    <div class="container">
        <div class="blog-intro">
            <p>Informative articles about Islamic education, digital skills for students, parenting tips, and insights from Al-Ansaar Schools Kasur.</p>
        </div>
        <div class="blog-grid">
            <article class="blog-card reveal">
                <div class="blog-card-image" style="background:linear-gradient(135deg,#1B4332 0%,#2D6A4F 100%)">
                    <i class="fas fa-quran"></i>
                    <span class="blog-card-category">Islamic Education</span>
                </div>
                <div class="blog-card-body">
                    <div class="blog-card-meta">
                        <span><i class="fas fa-calendar-alt"></i> June 15, 2026</span>
                        <span><i class="fas fa-clock"></i> 8 min read</span>
                    </div>
                    <h2><a href="<?php echo SITE_URL; ?>best-islamic-school-kasur">Best Islamic School in Kasur - A Complete Guide for Parents</a></h2>
                    <p>Discover what makes a truly excellent Islamic school and why parents in Kasur are choosing Al-Ansaar Schools for Quran Hifz, Tajweed, and Islamic education alongside modern academics.</p>
                    <a href="<?php echo SITE_URL; ?>best-islamic-school-kasur" class="blog-card-link">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            <article class="blog-card reveal">
                <div class="blog-card-image" style="background:linear-gradient(135deg,#1E3A5F 0%,#2563EB 100%)">
                    <i class="fas fa-laptop-code"></i>
                    <span class="blog-card-category">Digital Skills</span>
                </div>
                <div class="blog-card-body">
                    <div class="blog-card-meta">
                        <span><i class="fas fa-calendar-alt"></i> June 14, 2026</span>
                        <span><i class="fas fa-clock"></i> 10 min read</span>
                    </div>
                    <h2><a href="<?php echo SITE_URL; ?>digital-skills-students-pakistan">Why Digital Skills Are Essential for Students in Pakistan</a></h2>
                    <p>Pakistan IT industry is booming. Learn why web development, graphic design, freelancing, and AI skills are crucial for your child future and how Al-Ansaar Schools prepares students for the digital economy.</p>
                    <a href="<?php echo SITE_URL; ?>digital-skills-students-pakistan" class="blog-card-link">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Want to Learn More About Al-Ansaar Schools?</h2>
            <p class="cta-desc">Explore our programs, visit our campuses, or speak with our admissions team. We are here to help you make the best choice for your child future.</p>
            <div class="cta-buttons">
                <a href="<?php echo SITE_URL; ?>admissions" class="btn btn-primary btn-lg"><i class="fas fa-file-alt"></i> Apply for Admission</a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know more about Al-Ansaar Schools." class="btn btn-outline-white btn-lg" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Inquiry</a>
            </div>
        </div>
    </div>
</section>