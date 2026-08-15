<?php
/**
 * ============================================================
 * Al-Ansaar Schools - COMPLETE SEO Update Installer (All-in-One)
 * ============================================================
 * 
 * HOW TO USE:
 * 1. Upload this SINGLE file to your server ROOT directory (where index.php is)
 * 2. Visit: https://alansaarschools.com/alansaar-seo-installer.php
 * 3. Enter auth code: alansaar2026
 * 4. Click "Install All Updates"
 * 5. DELETE this file after installation!
 * 
 * This installer creates/updates ALL files:
 * - .htaccess (Clean URLs + GZIP + Caching + Security)
 * - robots.txt (Google crawl instructions)
 * - sitemap.xml (20 pages)
 * - index.php (Updated with new allowed pages)
 * - includes/header.php (Full SEO: meta tags, JSON-LD, OG, clean URL nav)
 * - includes/footer.php (Clean URL links, blog link)
 * - pages/blog.php (Blog listing page)
 * - pages/best-islamic-school-kasur.php (SEO blog post ~2000 words)
 * - pages/digital-skills-students-pakistan.php (SEO blog post ~1000 words)
 * 
 * IMPORTANT: Delete this file after use for security!
 * ============================================================
 */

// Security check
$auth_code = 'alansaar2026';
if (isset($_POST['auth']) && $_POST['auth'] === $auth_code) {
    $results = [];
    $errors = [];
    $backups = [];
    
    // Helper: backup existing file before overwriting
    function backup_file($path) {
        if (file_exists($path)) {
            $backup = $path . '.backup-' . date('Y-m-d-His');
            if (copy($path, $backup)) {
                return basename($backup);
            }
        }
        return null;
    }

    // ============================================
    // 1. CREATE .htaccess
    // ============================================
    $htaccess_content = <<<'HTACCESS'
# Al-Ansaar Schools - .htaccess (SEO & Performance)
RewriteEngine On

# Force HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Force www to non-www
RewriteCond %{HTTP_HOST} ^www\.alansaarschools\.com$ [NC]
RewriteRule ^(.*)$ https://alansaarschools.com/$1 [L,R=301]

# CLEAN URL REWRITING
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^about/?$ index.php?page=about [L,QSA]
RewriteRule ^academics/?$ index.php?page=academics [L,QSA]
RewriteRule ^admissions/?$ index.php?page=admissions [L,QSA]
RewriteRule ^contact/?$ index.php?page=contact [L,QSA]
RewriteRule ^gallery/?$ index.php?page=gallery [L,QSA]
RewriteRule ^news/?$ index.php?page=news [L,QSA]
RewriteRule ^faqs/?$ index.php?page=faqs [L,QSA]
RewriteRule ^downloads/?$ index.php?page=downloads [L,QSA]
RewriteRule ^chairman-message/?$ index.php?page=chairman-message [L,QSA]
RewriteRule ^vision-mission/?$ index.php?page=vision-mission [L,QSA]
RewriteRule ^why-alansaar/?$ index.php?page=why-alansaar [L,QSA]
RewriteRule ^skills-program/?$ index.php?page=skills-program [L,QSA]
RewriteRule ^student-life/?$ index.php?page=student-life [L,QSA]
RewriteRule ^fee-structure/?$ index.php?page=fee-structure [L,QSA]
RewriteRule ^islamic-education/?$ index.php?page=islamic-education [L,QSA]
RewriteRule ^online-education/?$ index.php?page=online-education [L,QSA]
RewriteRule ^privacy/?$ index.php?page=privacy [L,QSA]
RewriteRule ^terms/?$ index.php?page=terms [L,QSA]
RewriteRule ^blog/?$ index.php?page=blog [L,QSA]
RewriteRule ^best-islamic-school-kasur/?$ index.php?page=best-islamic-school-kasur [L,QSA]
RewriteRule ^digital-skills-students-pakistan/?$ index.php?page=digital-skills-students-pakistan [L,QSA]

# 301 Redirect old ?page= URLs to clean URLs
RewriteCond %{THE_REQUEST} \?page=about\s [NC]
RewriteRule ^ /about? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=academics\s [NC]
RewriteRule ^ /academics? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=admissions\s [NC]
RewriteRule ^ /admissions? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=contact\s [NC]
RewriteRule ^ /contact? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=gallery\s [NC]
RewriteRule ^ /gallery? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=news\s [NC]
RewriteRule ^ /news? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=faqs\s [NC]
RewriteRule ^ /faqs? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=islamic-education\s [NC]
RewriteRule ^ /islamic-education? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=online-education\s [NC]
RewriteRule ^ /online-education? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=blog\s [NC]
RewriteRule ^ /blog? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=fee-structure\s [NC]
RewriteRule ^ /fee-structure? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=skills-program\s [NC]
RewriteRule ^ /skills-program? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=student-life\s [NC]
RewriteRule ^ /student-life? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=why-alansaar\s [NC]
RewriteRule ^ /why-alansaar? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=chairman-message\s [NC]
RewriteRule ^ /chairman-message? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=vision-mission\s [NC]
RewriteRule ^ /vision-mission? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=downloads\s [NC]
RewriteRule ^ /downloads? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=privacy\s [NC]
RewriteRule ^ /privacy? [R=301,L]
RewriteCond %{THE_REQUEST} \?page=terms\s [NC]
RewriteRule ^ /terms? [R=301,L]

# GZIP Compression
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/html text/css text/javascript application/javascript application/json image/svg+xml
</IfModule>

# Browser Caching
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresByType font/woff "access plus 1 year"
    ExpiresByType font/woff2 "access plus 1 year"
</IfModule>

# Security Headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
    Header set Referrer-Policy "strict-origin-when-cross-origin"
</IfModule>

# Block sensitive files
<FilesMatch "\.(env|log|sql|bak|swp)$">
    Order allow,deny
    Deny from all
</FilesMatch>

Options -Indexes
ErrorDocument 404 /index.php?page=404
AddDefaultCharset UTF-8
HTACCESS;

    $b = backup_file('.htaccess');
    if ($b) $backups[] = $b;
    if (file_put_contents('.htaccess', $htaccess_content)) {
        $results[] = '.htaccess created (Clean URLs + GZIP + Caching + Security)';
    } else {
        $errors[] = '.htaccess FAILED';
    }

    // ============================================
    // 2. CREATE robots.txt
    // ============================================
    $robots_content = <<<'ROBOTS'
# robots.txt for Al-Ansaar Schools
User-agent: *
Allow: /
Sitemap: https://alansaarschools.com/sitemap.xml
Disallow: /admin/
Disallow: /config/
Disallow: /includes/
Disallow: /?page=
Allow: /about
Allow: /academics
Allow: /admissions
Allow: /contact
Allow: /gallery
Allow: /news
Allow: /faqs
Allow: /islamic-education
Allow: /online-education
Allow: /blog
Allow: /best-islamic-school-kasur
Allow: /digital-skills-students-pakistan
ROBOTS;

    $b = backup_file('robots.txt');
    if ($b) $backups[] = $b;
    if (file_put_contents('robots.txt', $robots_content)) {
        $results[] = 'robots.txt created (Clean URLs + Sitemap)';
    } else {
        $errors[] = 'robots.txt FAILED';
    }

    // ============================================
    // 3. CREATE sitemap.xml
    // ============================================
    $sitemap_content = <<<'SITEMAP'
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc>https://alansaarschools.com/</loc><lastmod>2026-06-16</lastmod><changefreq>weekly</changefreq><priority>1.0</priority></url>
  <url><loc>https://alansaarschools.com/about</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
  <url><loc>https://alansaarschools.com/academics</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
  <url><loc>https://alansaarschools.com/admissions</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
  <url><loc>https://alansaarschools.com/contact</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
  <url><loc>https://alansaarschools.com/gallery</loc><lastmod>2026-06-16</lastmod><changefreq>weekly</changefreq><priority>0.6</priority></url>
  <url><loc>https://alansaarschools.com/news</loc><lastmod>2026-06-16</lastmod><changefreq>weekly</changefreq><priority>0.7</priority></url>
  <url><loc>https://alansaarschools.com/faqs</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
  <url><loc>https://alansaarschools.com/downloads</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.5</priority></url>
  <url><loc>https://alansaarschools.com/chairman-message</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
  <url><loc>https://alansaarschools.com/vision-mission</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
  <url><loc>https://alansaarschools.com/why-alansaar</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
  <url><loc>https://alansaarschools.com/skills-program</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.7</priority></url>
  <url><loc>https://alansaarschools.com/student-life</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.6</priority></url>
  <url><loc>https://alansaarschools.com/fee-structure</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.8</priority></url>
  <url><loc>https://alansaarschools.com/islamic-education</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
  <url><loc>https://alansaarschools.com/online-education</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
  <url><loc>https://alansaarschools.com/blog</loc><lastmod>2026-06-16</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>
  <url><loc>https://alansaarschools.com/best-islamic-school-kasur</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
  <url><loc>https://alansaarschools.com/digital-skills-students-pakistan</loc><lastmod>2026-06-16</lastmod><changefreq>monthly</changefreq><priority>0.9</priority></url>
</urlset>
SITEMAP;

    $b = backup_file('sitemap.xml');
    if ($b) $backups[] = $b;
    if (file_put_contents('sitemap.xml', $sitemap_content)) {
        $results[] = 'sitemap.xml created (20 pages with priorities)';
    } else {
        $errors[] = 'sitemap.xml FAILED';
    }

    // ============================================
    // 4. UPDATE index.php
    // ============================================
    $index_content = <<<'INDEXPHP'
<?php
require_once 'includes/header.php';

// Get requested page
$page = isset($_GET['page']) ? preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['page'])) : 'home';

// Allowed pages
$allowed_pages = [
    'home', 'about', 'academics', 'admissions', 'contact', 
    'gallery', 'news', 'faqs', 'downloads', 'chairman-message',
    'vision-mission', 'why-alansaar', 'skills-program', 
    'student-life', 'fee-structure', 'privacy', 'terms',
    'islamic-education', 'online-education', 'blog',
    'best-islamic-school-kasur', 'digital-skills-students-pakistan'
];

// Include page
if (in_array($page, $allowed_pages) && file_exists("pages/{$page}.php")) {
    include "pages/{$page}.php";
} else {
    include 'pages/404.php';
}

require_once 'includes/footer.php';
?>
INDEXPHP;

    $b = backup_file('index.php');
    if ($b) $backups[] = $b;
    if (file_put_contents('index.php', $index_content)) {
        $results[] = 'index.php updated (22 allowed pages)';
    } else {
        $errors[] = 'index.php FAILED';
    }

    // ============================================
    // 5. CREATE pages/blog.php
    // ============================================
    $blog_content = <<<'BLOGPHP'
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
BLOGPHP;

    $b = backup_file('pages/blog.php');
    if ($b) $backups[] = $b;
    if (file_put_contents('pages/blog.php', $blog_content)) {
        $results[] = 'pages/blog.php created (Blog listing with clean URLs)';
    } else {
        $errors[] = 'pages/blog.php FAILED';
    }

    // ============================================
    // 6. UPDATE includes/header.php
    // ============================================
    $header_content = <<<'HEADERPHP'
<?php 
require_once __DIR__ . '/../config/settings.php'; 
require_once __DIR__ . '/../config/database.php'; 
require_once __DIR__ . '/functions.php';

// Dynamic SEO Data per page - optimized for maximum Google traffic
$page_seo = [
    'home' => [
        'title' => 'Al-Ansaar Schools - Best Islamic School in Kasur | Quality Education & Hifz',
        'description' => 'Al-Ansaar Schools Kasur - Best school combining modern education with Islamic values. Quran Hifz, Tajweed, digital skills, character building. 5 campuses across Punjab. Admissions open 2026.',
        'keywords' => 'best school in Kasur, Islamic school Kasur, Hifz school Pakistan, Quran education, Al-Ansaar Schools, school admissions Kasur 2026, Islamic school Punjab, quality education Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Home',
    ],
    'about' => [
        'title' => 'About Al-Ansaar Schools - Our Story, Mission & Islamic Values Since 2014',
        'description' => 'Al-Ansaar Schools established 2014 in Kasur, Punjab. Quality education with Islamic values across 5 campuses. Qualified teachers, modern curriculum, and character building since over a decade.',
        'keywords' => 'about Al-Ansaar Schools, school history Kasur, Islamic school mission, education Pakistan since 2014, school values, Kasur school about',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'About Us',
    ],
    'academics' => [
        'title' => 'Academic Programs - Play Group to Matric | Al-Ansaar Schools Kasur',
        'description' => 'Complete academic programs from Play Group to Matric at Al-Ansaar Schools Kasur. Modern curriculum, qualified teachers, integrated Islamic education, Hifz program, and digital skills development.',
        'keywords' => 'academic programs Kasur, school curriculum Pakistan, Play Group to Matric, Islamic curriculum school, modern education Kasur, best school academics Punjab',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Academics',
    ],
    'admissions' => [
        'title' => 'Admissions Open 2026 - Al-Ansaar Schools Kasur | Enroll Now',
        'description' => 'Admissions open 2026 at Al-Ansaar Schools Kasur. Easy enrollment process, affordable fees, scholarships for Hifz & merit. Play Group to Matric. 5 campuses in Kasur & Punjab. Apply online now!',
        'keywords' => 'school admissions 2026 Kasur, Al-Ansaar admissions open, enroll school Kasur, school admission Punjab 2026, affordable school admissions, online school admission form Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Admissions',
    ],
    'contact' => [
        'title' => 'Contact Al-Ansaar Schools Kasur | Phone, Email, Campus Addresses',
        'description' => 'Contact Al-Ansaar Schools Kasur for admissions and inquiries. Call +92-303-5617187, WhatsApp, email info@alansaarschools.com. Visit our 5 campuses in Kasur, Gujranwala & Punjab.',
        'keywords' => 'contact Al-Ansaar Schools, school phone Kasur, school email, Kasur campus address, school inquiry Punjab, Al-Ansaar contact number',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Contact',
    ],
    'gallery' => [
        'title' => 'School Gallery - Campus Life, Events & Activities | Al-Ansaar Schools',
        'description' => 'Photos of Al-Ansaar Schools campus life, Islamic education events, sports activities, classroom learning, student achievements and annual functions across all 5 campuses in Punjab.',
        'keywords' => 'school gallery Kasur, campus photos, school events Pakistan, student activities, Al-Ansaar photos, Islamic school pictures',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Gallery',
    ],
    'news' => [
        'title' => 'News & Updates - Al-Ansaar Schools Kasur | Latest Announcements',
        'description' => 'Latest news and updates from Al-Ansaar Schools Kasur. Admissions announcements, academic achievements, upcoming events, Islamic education programs, and community updates.',
        'keywords' => 'school news Kasur, Al-Ansaar updates, school events Punjab, academic achievements, school announcements Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'News',
    ],
    'faqs' => [
        'title' => 'FAQs - Admissions, Fees, Curriculum Questions | Al-Ansaar Schools',
        'description' => 'Frequently asked questions about Al-Ansaar Schools admissions 2026, fee structure, Islamic education, Hifz program, curriculum, campus facilities and enrollment process in Kasur.',
        'keywords' => 'school FAQ Kasur, admissions questions, fee structure FAQ, Al-Ansaar FAQ, school enrollment questions Pakistan, Hifz program FAQ',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'FAQs',
    ],
    'downloads' => [
        'title' => 'Downloads - Admission Forms & School Documents | Al-Ansaar Schools',
        'description' => 'Download admission forms, fee structure PDF, school prospectus, and important documents from Al-Ansaar Schools Kasur. All resources available for free download.',
        'keywords' => 'school downloads, admission form download Kasur, fee structure PDF, school prospectus Pakistan, Al-Ansaar documents',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Downloads',
    ],
    'chairman-message' => [
        'title' => "Chairman's Message - Vision & Leadership | Al-Ansaar Schools Kasur",
        'description' => "Read the Chairman's message about Al-Ansaar Schools vision for quality Islamic education, character building, and developing future leaders since 2014 in Kasur, Punjab.",
        'keywords' => 'chairman message, school leadership Kasur, Al-Ansaar vision, school founder message, education leadership Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => "Chairman's Message",
    ],
    'vision-mission' => [
        'title' => 'Vision & Mission - Al-Ansaar Schools | Islamic Education Goals',
        'description' => 'Al-Ansaar Schools vision: nurturing minds with modern education, building character with Islamic values, developing practical skills. Our mission for excellence in Kasur, Punjab.',
        'keywords' => 'school vision, school mission Pakistan, education philosophy, Islamic school values, Al-Ansaar mission Kasur, school goals',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Vision & Mission',
    ],
    'why-alansaar' => [
        'title' => 'Why Choose Al-Ansaar Schools - Best School in Kasur Punjab',
        'description' => 'Why Al-Ansaar is the best school in Kasur: qualified teachers, Islamic environment, modern labs, affordable fees, digital skills training, Hifz program, 5 campuses, and proven academic results.',
        'keywords' => 'why choose Al-Ansaar, best school Kasur, best Islamic school Punjab, quality education Pakistan, school comparison Kasur, top school Kasur',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Why Al-Ansaar',
    ],
    'skills-program' => [
        'title' => 'Skills Program - Practical Digital Skills Training | Al-Ansaar Schools',
        'description' => 'Al-Ansaar Skills Program offers hands-on training in computer skills, graphic design, coding, and digital literacy. Preparing Kasur students for real-world careers alongside academics.',
        'keywords' => 'skills program Kasur, digital skills school Pakistan, computer training school, practical education, career skills school Punjab',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Skills Program',
    ],
    'student-life' => [
        'title' => 'Student Life - Activities, Sports & Events | Al-Ansaar Schools Kasur',
        'description' => 'Vibrant student life at Al-Ansaar Schools Kasur. Extracurricular activities, sports, Naat competitions, Islamic events, educational trips, and a supportive learning community.',
        'keywords' => 'student life Kasur, school activities, extracurricular school, sports school Punjab, Islamic school events, student community Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Student Life',
    ],
    'fee-structure' => [
        'title' => 'Fee Structure 2026 - Affordable Quality Education | Al-Ansaar Schools',
        'description' => 'Affordable fee structure at Al-Ansaar Schools Kasur. Transparent pricing, sibling discounts, Hifz scholarships, merit-based financial aid, and flexible payment options for all families.',
        'keywords' => 'school fee structure Kasur, affordable school fees Pakistan, Al-Ansaar fees, school tuition Kasur, scholarship school Punjab, low cost quality school',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Fee Structure',
    ],
    'islamic-education' => [
        'title' => 'Islamic Education - Quran Hifz, Tajweed, Nazra & Arabic | Al-Ansaar Schools',
        'description' => 'Comprehensive Islamic education at Al-Ansaar Schools Kasur: Quran Hifz memorization, Tajweed rules, Nazra reading, Arabic language, Islamic Studies (Aqeedah, Fiqh, Seerah), and daily Duas with qualified scholars.',
        'keywords' => 'Islamic education Kasur, Quran Hifz school Pakistan, Tajweed course, Nazra Quran, Arabic language school, Islamic studies Pakistan, Quran memorization school, best Hifz school Kasur, Islamic school Punjab',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Islamic Education',
    ],
    'online-education' => [
        'title' => 'Digital Skills & Online Education - Web Dev, Design, AI | Al-Ansaar Schools',
        'description' => 'Learn digital skills at Al-Ansaar Schools Kasur: Web Development, Graphic Design, Digital Marketing, Video Editing, AI & ChatGPT, Freelancing, Cybersecurity, MS Office. Career-ready training for students.',
        'keywords' => 'digital skills school Pakistan, web development course Kasur, graphic design school, freelancing training, AI course school, video editing course, digital marketing school Punjab, online education Pakistan',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Online Education',
    ],
    'privacy' => [
        'title' => 'Privacy Policy - Al-Ansaar Schools',
        'description' => 'Privacy policy of Al-Ansaar Schools. How we collect, use, and protect your personal information and data.',
        'keywords' => 'privacy policy, Al-Ansaar privacy, school data policy',
        'og_type' => 'website',
        'noindex' => true,
        'breadcrumb_name' => 'Privacy Policy',
    ],
    'terms' => [
        'title' => 'Terms of Use - Al-Ansaar Schools',
        'description' => 'Terms of use for Al-Ansaar Schools website. Usage guidelines and legal information.',
        'keywords' => 'terms of use, Al-Ansaar terms, school website terms',
        'og_type' => 'website',
        'noindex' => true,
        'breadcrumb_name' => 'Terms',
    ],
    'blog' => [
        'title' => 'Blog - Islamic Education, Digital Skills & School Tips | Al-Ansaar Schools',
        'description' => 'Read informative articles about Islamic education, Quran learning tips, digital skills for students, parenting advice, and school life at Al-Ansaar Schools Kasur.',
        'keywords' => 'school blog Pakistan, Islamic education blog, digital skills blog, parenting tips, Quran learning tips, student advice',
        'og_type' => 'website',
        'noindex' => false,
        'breadcrumb_name' => 'Blog',
    ],
    'best-islamic-school-kasur' => [
        'title' => 'Why Al-Ansaar is the Best Islamic School in Kasur for Your Child',
        'description' => 'Discover why parents choose Al-Ansaar Schools as the best Islamic school in Kasur. Quran Hifz program, qualified Islamic scholars, modern academics, character building, and affordable fees.',
        'keywords' => 'best Islamic school Kasur, Islamic school near me Kasur, Quran school Kasur, Hifz school near me, best school for Islamic education Pakistan, Muslim school Kasur Punjab',
        'og_type' => 'article',
        'noindex' => false,
        'breadcrumb_name' => 'Best Islamic School Kasur',
    ],
    'digital-skills-students-pakistan' => [
        'title' => 'Why Digital Skills Are Essential for Students in Pakistan - Al-Ansaar Schools',
        'description' => 'Learn why digital skills like web development, graphic design, freelancing and AI are essential for Pakistani students. How Al-Ansaar Schools prepares students for the digital economy.',
        'keywords' => 'digital skills students Pakistan, freelancing Pakistan, web development students, online earning Pakistan, digital literacy school, IT skills school Pakistan, computer skills students',
        'og_type' => 'article',
        'noindex' => false,
        'breadcrumb_name' => 'Digital Skills for Students',
    ],
];

// Get current page and SEO data
$current_page = current_page();
$seo = isset($page_seo[$current_page]) ? $page_seo[$current_page] : $page_seo['home'];
$canonical_url = SITE_URL . ($current_page !== 'home' ? $current_page : '');

// Build breadcrumb items
$breadcrumbs = [
    ['name' => 'Home', 'url' => SITE_URL]
];
if ($current_page !== 'home') {
    $parent_map = [
        'about' => null, 'vision-mission' => null, 'chairman-message' => null, 'why-alansaar' => null,
        'academics' => null, 'islamic-education' => 'Academics', 'online-education' => 'Academics',
        'skills-program' => 'Academics', 'student-life' => 'Academics', 'fee-structure' => 'Academics',
        'admissions' => null, 'contact' => null, 'gallery' => null, 'news' => null,
        'faqs' => null, 'downloads' => null, 'blog' => null,
        'best-islamic-school-kasur' => 'Blog', 'digital-skills-students-pakistan' => 'Blog',
    ];
    $parent = isset($parent_map[$current_page]) ? $parent_map[$current_page] : null;
    if ($parent) {
        $parent_slug = strtolower(str_replace(' ', '-', $parent));
        $breadcrumbs[] = ['name' => $parent, 'url' => SITE_URL . $parent_slug];
    }
    $breadcrumbs[] = ['name' => $seo['breadcrumb_name'], 'url' => SITE_URL . $current_page];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $seo['description']; ?>">
    <meta name="keywords" content="<?php echo $seo['keywords']; ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    <meta name="robots" content="<?php echo !empty($seo['noindex']) ? 'noindex, nofollow' : 'index, follow'; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    
    <!-- hreflang for Pakistan -->
    <link rel="alternate" hreflang="en-PK" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="ur-PK" href="<?php echo $canonical_url; ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo $canonical_url; ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $seo['title']; ?>">
    <meta property="og:description" content="<?php echo $seo['description']; ?>">
    <meta property="og:type" content="<?php echo $seo['og_type']; ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>assets/images/og-image.jpg">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:locale" content="en_PK">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $seo['title']; ?>">
    <meta name="twitter:description" content="<?php echo $seo['description']; ?>">
    <meta name="twitter:image" content="<?php echo SITE_URL; ?>assets/images/og-image.jpg">
    
    <title><?php echo $seo['title']; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>assets/images/logo/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>assets/images/logo/apple-touch-icon.png">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">
    
    <!-- JSON-LD: EducationalOrganization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "<?php echo SITE_NAME; ?>",
        "description": "Al-Ansaar Schools - Quality education with Islamic values, character building, and modern skills in Kasur, Punjab, Pakistan",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>assets/images/logo/logo.webp",
        "telephone": "<?php echo SITE_PHONE; ?>",
        "email": "<?php echo SITE_EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Madina Town",
            "addressLocality": "Kasur",
            "addressRegion": "Punjab",
            "postalCode": "55050",
            "addressCountry": "PK"
        },
        "foundingDate": "2014",
        "sameAs": [
            "https://www.facebook.com/alansaarschools",
            "https://www.instagram.com/alansaarschools",
            "https://www.youtube.com/@alansaarschools"
        ],
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "opens": "08:00",
            "closes": "16:00"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Educational Programs",
            "itemListElement": [
                {
                    "@type": "Course",
                    "name": "Islamic Education - Quran Hifz & Tajweed",
                    "description": "Comprehensive Quran education including Hifz, Tajweed, Nazra, Arabic, and Islamic Studies",
                    "provider": {"@type": "EducationalOrganization", "name": "<?php echo SITE_NAME; ?>"},
                    "url": "<?php echo SITE_URL; ?>islamic-education"
                },
                {
                    "@type": "Course",
                    "name": "Online Education & Digital Skills",
                    "description": "Modern digital skills training including Web Development, Graphic Design, AI, Freelancing, and more",
                    "provider": {"@type": "EducationalOrganization", "name": "<?php echo SITE_NAME; ?>"},
                    "url": "<?php echo SITE_URL; ?>online-education"
                },
                {
                    "@type": "Course",
                    "name": "Academic Programs - Play Group to Matric",
                    "description": "Complete academic curriculum from early childhood to secondary education",
                    "provider": {"@type": "EducationalOrganization", "name": "<?php echo SITE_NAME; ?>"},
                    "url": "<?php echo SITE_URL; ?>academics"
                }
            ]
        }
    }
    </script>

    <!-- JSON-LD: BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            <?php foreach ($breadcrumbs as $i => $crumb): ?>
            {
                "@type": "ListItem",
                "position": <?php echo $i + 1; ?>,
                "name": "<?php echo $crumb['name']; ?>",
                "item": "<?php echo $crumb['url']; ?>"
            }<?php echo $i < count($breadcrumbs) - 1 ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>

    <?php // Page-specific structured data
    if ($current_page === 'islamic-education'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Islamic Education Program - Quran Hifz, Tajweed & Arabic",
        "description": "Comprehensive Islamic education including Quran Hifz, Tajweed, Nazra, Arabic language, Islamic Studies, and daily Duas at Al-Ansaar Schools Kasur",
        "provider": {"@type": "EducationalOrganization", "name": "Al-Ansaar Schools", "url": "https://alansaarschools.com/"},
        "url": "https://alansaarschools.com/islamic-education",
        "coursePrerequisites": "None - Open to all students",
        "educationalLevel": "Beginner to Advanced",
        "inLanguage": "ar, ur, en",
        "teaches": ["Quran Hifz (Memorization)", "Tajweed (Quran Recitation Rules)", "Nazra (Quran Reading)", "Arabic Language", "Islamic Studies", "Daily Duas and Prayers"]
    }
    </script>
    <?php elseif ($current_page === 'online-education'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Course",
        "name": "Digital Skills & Online Education Program",
        "description": "Modern digital skills training at Al-Ansaar Schools Kasur including Web Development, Graphic Design, Digital Marketing, Video Editing, AI, Freelancing, Cybersecurity, and MS Office",
        "provider": {"@type": "EducationalOrganization", "name": "Al-Ansaar Schools", "url": "https://alansaarschools.com/"},
        "url": "https://alansaarschools.com/online-education",
        "educationalLevel": "Beginner to Advanced",
        "inLanguage": "en, ur",
        "teaches": ["Web Development", "Graphic Design", "Digital Marketing", "Video Editing", "AI and ChatGPT", "Freelancing", "Cybersecurity", "MS Office", "Programming"]
    }
    </script>
    <?php elseif ($current_page === 'faqs'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the admission process at Al-Ansaar Schools?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The admission process at Al-Ansaar Schools involves 4 simple steps: 1) Inquiry - Visit campus or fill online form, 2) Registration - Submit admission form with documents, 3) Assessment - Simple age-appropriate evaluation, 4) Confirmation - Parent interview and formal admission offer."
                }
            },
            {
                "@type": "Question",
                "name": "What is the fee structure of Al-Ansaar Schools?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Al-Ansaar Schools offers affordable fee structure with sibling discounts, Hifz scholarships, and merit-based financial aid. Fees vary by grade and campus. Contact the specific campus for detailed fee information."
                }
            },
            {
                "@type": "Question",
                "name": "Does Al-Ansaar Schools offer Quran Hifz program?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Al-Ansaar Schools offers a comprehensive integrated Hifz program where students can memorize the Quran while continuing their regular academic education. The program includes Tajweed, Nazra, and is taught by qualified Islamic scholars."
                }
            },
            {
                "@type": "Question",
                "name": "What digital skills are taught at Al-Ansaar Schools?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Al-Ansaar Schools teaches digital skills including Web Development, Graphic Design, Digital Marketing, Video Editing, AI & ChatGPT, Freelancing, Cybersecurity, MS Office, and Programming to prepare students for the digital economy."
                }
            },
            {
                "@type": "Question",
                "name": "How many campuses does Al-Ansaar Schools have?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Al-Ansaar Schools has 5 campuses across Punjab: Madina Town Campus (Kasur), Khudian Khas Campus (Kasur), Gujranwala Campus, Noorpur Campus, and Atheel Pur (Farzand) Campus."
                }
            },
            {
                "@type": "Question",
                "name": "Is transport facility available at Al-Ansaar Schools?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Al-Ansaar Schools provides safe and reliable transport facilities on selected routes. Please inquire at the campus office for route availability in your area."
                }
            },
            {
                "@type": "Question",
                "name": "What age is required for admission to Playgroup?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For Playgroup admission at Al-Ansaar Schools, the child should be 3+ years old. For Nursery: 4+ years, and for Prep: 5+ years. For other grades, age should be appropriate for the class level."
                }
            },
            {
                "@type": "Question",
                "name": "Are scholarships available at Al-Ansaar Schools?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Al-Ansaar Schools offers several scholarship programs including Hifz scholarships for Quran memorization students, sibling discounts for families with multiple children, and merit-based scholarships for high-achieving students."
                }
            }
        ]
    }
    </script>
    <?php elseif ($current_page === 'best-islamic-school-kasur' || $current_page === 'digital-skills-students-pakistan'): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>",
        "description": "<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>",
        "author": {"@type": "Organization", "name": "<?php echo SITE_NAME; ?>"},
        "publisher": {"@type": "Organization", "name": "<?php echo SITE_NAME; ?>", "logo": {"@type": "ImageObject", "url": "<?php echo SITE_URL; ?>assets/images/logo/logo.webp"}},
        "datePublished": "<?php echo date('Y-m-d'); ?>",
        "dateModified": "<?php echo date('Y-m-d'); ?>",
        "mainEntityOfPage": "<?php echo $canonical_url; ?>"
    }
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="preloader-text">Al-Ansaar</div>
            <div class="preloader-bar"><span></span></div>
        </div>
    </div>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <a href="tel:<?php echo SITE_PHONE_RAW; ?>">
                        <i class="fas fa-phone-alt"></i> <?php echo SITE_PHONE; ?>
                    </a>
                    <a href="mailto:<?php echo SITE_EMAIL; ?>">
                        <i class="fas fa-envelope"></i> <?php echo SITE_EMAIL; ?>
                    </a>
                </div>
                <div class="top-bar-right">
                    <div class="social-links">
                        <a href="https://www.facebook.com/alansaarschools" aria-label="Al-Ansaar Schools on Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/alansaarschools" aria-label="Al-Ansaar Schools on Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@alansaarschools" aria-label="Al-Ansaar Schools on YouTube" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <nav class="navbar" aria-label="Main Navigation">
                <!-- Logo -->
                <a href="<?php echo SITE_URL; ?>" class="logo" aria-label="Al-Ansaar Schools Home">
                    <img src="<?php echo SITE_URL; ?>assets/images/logo/logo.webp" alt="Al-Ansaar Schools Logo" class="logo-img" width="50" height="50">
                    <div class="logo-text">
                        <span class="logo-main">Al-Ansaar</span>
                        <span class="logo-sub">SCHOOLS</span>
                    </div>
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>" class="nav-link <?php echo is_active('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link" aria-expanded="false">About <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo SITE_URL; ?>about" class="dropdown-link">About Us</a></li>
                            <li><a href="<?php echo SITE_URL; ?>vision-mission" class="dropdown-link">Vision & Mission</a></li>
                            <li><a href="<?php echo SITE_URL; ?>chairman-message" class="dropdown-link">Chairman's Message</a></li>
                            <li><a href="<?php echo SITE_URL; ?>why-alansaar" class="dropdown-link">Why Al-Ansaar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link" aria-expanded="false">Academics <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo SITE_URL; ?>academics" class="dropdown-link">Academic Programs</a></li>
                            <li><a href="<?php echo SITE_URL; ?>islamic-education" class="dropdown-link">Islamic Education</a></li>
                            <li><a href="<?php echo SITE_URL; ?>online-education" class="dropdown-link">Online Education & Digital Skills</a></li>
                            <li><a href="<?php echo SITE_URL; ?>skills-program" class="dropdown-link">Skills Program</a></li>
                            <li><a href="<?php echo SITE_URL; ?>student-life" class="dropdown-link">Student Life</a></li>
                            <li><a href="<?php echo SITE_URL; ?>fee-structure" class="dropdown-link">Fee Structure</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>gallery" class="nav-link <?php echo is_active('gallery'); ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>news" class="nav-link <?php echo is_active('news'); ?>">News</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>blog" class="nav-link <?php echo is_active('blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo SITE_URL; ?>contact" class="nav-link <?php echo is_active('contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item nav-cta">
                        <a href="<?php echo SITE_URL; ?>admissions" class="btn btn-primary">Admission 2026</a>
                    </li>
                </ul>
                
                <!-- Mobile Menu Toggle -->
                <button class="nav-toggle" id="navToggle" aria-label="Toggle Navigation">
                    <span class="hamburger"></span>
                </button>
            </nav>
        </div>
    </header>
    
    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
    
    <!-- Flash Messages -->
    <?php echo flash_message(); ?>
    
    <main class="main-content">
HEADERPHP;

    $b = backup_file('includes/header.php');
    if ($b) $backups[] = $b;
    if (file_put_contents('includes/header.php', $header_content)) {
        $results[] = 'includes/header.php updated (Full SEO + JSON-LD + Clean URL nav)';
    } else {
        $errors[] = 'includes/header.php FAILED';
    }

    // ============================================
    // 7. UPDATE includes/footer.php
    // ============================================
    $footer_content = <<<'FOOTERPHP'
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <!-- Main Footer -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-grid">
                    <!-- About Column -->
                    <div class="footer-col footer-about-col">
                        <div class="footer-logo">
                            <img src="<?php echo SITE_URL; ?>assets/images/logo/logo.webp" alt="<?php echo SITE_NAME; ?>">
                            <h3>Al-Ansaar Schools</h3>
                        </div>
                        <p class="footer-desc">
                            Nurturing minds, building character, and developing skills since 2014. 
                            We combine modern education with Islamic values to create tomorrow's leaders.
                        </p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/alansaarschools" class="social-link" aria-label="Facebook" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/alansaarschools" class="social-link" aria-label="Instagram" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@alansaarschools" class="social-link" aria-label="YouTube" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                            <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>" class="social-link" aria-label="WhatsApp" target="_blank" rel="noopener">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Quick Links -->
                    <div class="footer-col">
                        <h4 class="footer-title">Quick Links</h4>
                        <ul class="footer-links">
                            <li><a href="<?php echo SITE_URL; ?>about"><i class="fas fa-angle-right"></i> About Us</a></li>
                            <li><a href="<?php echo SITE_URL; ?>islamic-education"><i class="fas fa-angle-right"></i> Islamic Education</a></li>
                            <li><a href="<?php echo SITE_URL; ?>online-education"><i class="fas fa-angle-right"></i> Online Education</a></li>
                            <li><a href="<?php echo SITE_URL; ?>academics"><i class="fas fa-angle-right"></i> Academic Programs</a></li>
                            <li><a href="<?php echo SITE_URL; ?>admissions"><i class="fas fa-angle-right"></i> Admissions</a></li>
                            <li><a href="<?php echo SITE_URL; ?>fee-structure"><i class="fas fa-angle-right"></i> Fee Structure</a></li>
                            <li><a href="<?php echo SITE_URL; ?>blog"><i class="fas fa-angle-right"></i> Blog</a></li>
                            <li><a href="<?php echo SITE_URL; ?>downloads"><i class="fas fa-angle-right"></i> Downloads</a></li>
                        </ul>
                    </div>
                    
                    <!-- Campuses -->
                    <div class="footer-col">
                        <h4 class="footer-title">Our Campuses</h4>
                        <ul class="footer-links campus-links">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Madina Town Campus, Kasur</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Khudian Khas Campus, Kasur</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gujranwala Campus</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Noorpur Campus</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Atheel Pur (Farzand) Campus</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Contact -->
                    <div class="footer-col">
                        <h4 class="footer-title">Contact Us</h4>
                        <ul class="footer-contact">
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a>
                                    <span>Mon - Sat: 8:00 AM - 4:00 PM</span>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-map-marked-alt"></i>
                                <div>
                                    <span><?php echo SITE_ADDRESS; ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo CURRENT_YEAR; ?> <?php echo SITE_NAME; ?>. All Rights Reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="<?php echo SITE_URL; ?>privacy">Privacy Policy</a>
                        <span>|</span>
                        <a href="<?php echo SITE_URL; ?>terms">Terms of Use</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Al-Ansaar Schools admissions." 
       class="whatsapp-float" 
       target="_blank" 
       aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
        <span class="whatsapp-tooltip">Chat with us</span>
    </a>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Back to Top">
        <i class="fas fa-chevron-up"></i>
    </button>
    
    <!-- Main JavaScript -->
    <script src="<?php echo SITE_URL; ?>assets/js/main.js"></script>
</body>
</html>
FOOTERPHP;

    $b = backup_file('includes/footer.php');
    if ($b) $backups[] = $b;
    if (file_put_contents('includes/footer.php', $footer_content)) {
        $results[] = 'includes/footer.php updated (Clean URL links + Blog link)';
    } else {
        $errors[] = 'includes/footer.php FAILED';
    }

    // ============================================
    // 8. CREATE pages/best-islamic-school-kasur.php
    // ============================================
    $islamic_blog = file_get_contents(__DIR__ . '/seo_best-islamic-school-kasur.php');
    if ($islamic_blog === false) {
        // Fallback: embedded content
        $islamic_blog = file_get_contents('/home/z/my-project/download/seo_best-islamic-school-kasur.php');
    }
    
    if ($islamic_blog) {
        // Replace ?page= links with clean URLs
        $islamic_blog = preg_replace('/\?page=about/', SITE_URL . 'about', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=academics/', SITE_URL . 'academics', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=admissions/', SITE_URL . 'admissions', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=islamic-education/', SITE_URL . 'islamic-education', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=online-education/', SITE_URL . 'online-education', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=skills-program/', SITE_URL . 'skills-program', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=fee-structure/', SITE_URL . 'fee-structure', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=chairman-message/', SITE_URL . 'chairman-message', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=blog/', SITE_URL . 'blog', $islamic_blog);
        $islamic_blog = preg_replace('/\?page=contact/', SITE_URL . 'contact', $islamic_blog);
        
        $b = backup_file('pages/best-islamic-school-kasur.php');
        if ($b) $backups[] = $b;
        if (file_put_contents('pages/best-islamic-school-kasur.php', $islamic_blog)) {
            $results[] = 'pages/best-islamic-school-kasur.php created (SEO blog post ~2000 words)';
        } else {
            $errors[] = 'pages/best-islamic-school-kasur.php FAILED';
        }
    } else {
        $errors[] = 'pages/best-islamic-school-kasur.php - Source file not found for embedding';
    }

    // ============================================
    // 9. CREATE pages/digital-skills-students-pakistan.php
    // ============================================
    $digital_blog = file_get_contents(__DIR__ . '/seo_digital-skills-students-pakistan.php');
    if ($digital_blog === false) {
        $digital_blog = file_get_contents('/home/z/my-project/download/seo_digital-skills-students-pakistan.php');
    }
    
    if ($digital_blog) {
        // Replace ?page= links with clean URLs
        $digital_blog = preg_replace('/\?page=about/', SITE_URL . 'about', $digital_blog);
        $digital_blog = preg_replace('/\?page=academics/', SITE_URL . 'academics', $digital_blog);
        $digital_blog = preg_replace('/\?page=admissions/', SITE_URL . 'admissions', $digital_blog);
        $digital_blog = preg_replace('/\?page=islamic-education/', SITE_URL . 'islamic-education', $digital_blog);
        $digital_blog = preg_replace('/\?page=online-education/', SITE_URL . 'online-education', $digital_blog);
        $digital_blog = preg_replace('/\?page=online-education&amp;/', SITE_URL . 'online-education', $digital_blog);
        $digital_blog = preg_replace('/\?page=skills-program/', SITE_URL . 'skills-program', $digital_blog);
        $digital_blog = preg_replace('/\?page=fee-structure/', SITE_URL . 'fee-structure', $digital_blog);
        $digital_blog = preg_replace('/\?page=blog/', SITE_URL . 'blog', $digital_blog);
        $digital_blog = preg_replace('/\?page=contact/', SITE_URL . 'contact', $digital_blog);
        
        $b = backup_file('pages/digital-skills-students-pakistan.php');
        if ($b) $backups[] = $b;
        if (file_put_contents('pages/digital-skills-students-pakistan.php', $digital_blog)) {
            $results[] = 'pages/digital-skills-students-pakistan.php created (SEO blog post ~1000 words)';
        } else {
            $errors[] = 'pages/digital-skills-students-pakistan.php FAILED';
        }
    } else {
        $errors[] = 'pages/digital-skills-students-pakistan.php - Source file not found for embedding';
    }

    // ============================================
    // OUTPUT RESULTS
    // ============================================
    echo '<html><head><title>Al-Ansaar SEO Installer - Results</title>';
    echo '<style>body{font-family:Arial,sans-serif;max-width:800px;margin:40px auto;padding:20px;background:#f8fafc}h1{color:#0d3b4c}.result{padding:14px 18px;margin:8px 0;border-radius:10px;font-size:15px;line-height:1.5}.success{background:#d4edda;color:#155724;border:1px solid #c3e6cb}.error{background:#f8d7da;color:#721c24;border:1px solid #f5c6cb}.backup{background:#e8f4fd;color:#0c5a8a;border:1px solid #b8daff;font-size:13px}.warn-box{background:#fff3cd;color:#856404;border:2px solid #ffc107;border-radius:12px;padding:20px;margin:20px 0}.success-box{background:#d4edda;border:2px solid #28a745;border-radius:12px;padding:20px;margin:20px 0}a{color:#0d3b4c;font-weight:bold}</style></head><body>';
    
    echo '<h1>Al-Ansaar Schools - SEO Update Results</h1>';
    
    // Backups
    if (!empty($backups)) {
        echo '<h3>Backups Created:</h3>';
        foreach ($backups as $b) {
            echo "<div class='result backup'>Backup: {$b}</div>";
        }
    }
    
    // Successes
    echo '<h3>Installation Results:</h3>';
    foreach ($results as $r) {
        echo "<div class='result success'>{$r}</div>";
    }
    
    // Errors
    if (!empty($errors)) {
        echo '<h3>Errors:</h3>';
        foreach ($errors as $e) {
            echo "<div class='result error'>{$e}</div>";
        }
    }
    
    // Final message
    if (empty($errors)) {
        echo '<div class="success-box">';
        echo '<h2 style="margin-top:0;color:#155724">All Updates Installed Successfully!</h2>';
        echo '<p>Your SEO optimization is now complete. Here is what was installed:</p>';
        echo '<ul style="line-height:2">';
        echo '<li><strong>.htaccess</strong> - Clean URLs, HTTPS redirect, GZIP compression, browser caching, security headers</li>';
        echo '<li><strong>robots.txt</strong> - Google crawl instructions with clean URL sitemap</li>';
        echo '<li><strong>sitemap.xml</strong> - 20 pages with proper priorities</li>';
        echo '<li><strong>index.php</strong> - 22 allowed pages including blog posts</li>';
        echo '<li><strong>includes/header.php</strong> - Dynamic meta tags, JSON-LD schemas, OG tags, clean URL navigation</li>';
        echo '<li><strong>includes/footer.php</strong> - Clean URL links, Blog link added</li>';
        echo '<li><strong>pages/blog.php</strong> - Blog listing page with 2 article cards</li>';
        echo '<li><strong>pages/best-islamic-school-kasur.php</strong> - SEO blog post (~2000 words)</li>';
        echo '<li><strong>pages/digital-skills-students-pakistan.php</strong> - SEO blog post (~1000 words)</li>';
        echo '</ul>';
        echo '</div>';
    } else {
        echo '<div class="warn-box">';
        echo '<h2 style="margin-top:0">Installation completed with errors</h2>';
        echo '<p>Please check the errors above and fix them. You may need to adjust file permissions.</p>';
        echo '</div>';
    }
    
    echo '<div class="warn-box">';
    echo '<h3 style="margin-top:0;color:#856404">IMPORTANT - Delete This Installer!</h3>';
    echo '<p>Delete <code>alansaar-seo-installer.php</code> from your server root directory now for security.</p>';
    echo '</div>';
    
    echo '<p style="margin-top:20px">';
    echo '<a href="/">Go to Homepage</a> | ';
    echo '<a href="/blog">Check Blog</a> | ';
    echo '<a href="/best-islamic-school-kasur">Blog Post 1</a> | ';
    echo '<a href="/digital-skills-students-pakistan">Blog Post 2</a>';
    echo '</p>';
    
    echo '</body></html>';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Al-Ansaar Schools - SEO Update Installer</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 650px; margin: 50px auto; padding: 20px; background: #f8fafc; }
        h1 { color: #0d3b4c; margin-bottom: 5px; }
        .subtitle { color: #64748b; margin-bottom: 30px; }
        .box { background: #f0fdf4; border: 2px solid #166534; border-radius: 16px; padding: 30px; margin: 20px 0; }
        .box h3 { color: #166534; margin-top: 0; }
        .box ul { line-height: 2; }
        .btn { background: linear-gradient(135deg, #0d3b4c, #1B4332); color: white; padding: 16px 30px; border: none; border-radius: 10px; font-size: 18px; cursor: pointer; width: 100%; font-weight: bold; transition: all 0.3s; }
        .btn:hover { background: linear-gradient(135deg, #1B4332, #2D6A4F); transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .warn { background: #fef3c7; padding: 18px; border-radius: 10px; color: #92400e; margin: 15px 0; border: 1px solid #f59e0b; }
        .warn strong { color: #78350f; }
        code { background: #e5e7eb; padding: 3px 8px; border-radius: 5px; font-size: 14px; }
        .step { background: white; border-radius: 10px; padding: 15px; margin: 10px 0; border: 1px solid #e2e8f0; }
        .step-num { display: inline-block; background: #0d3b4c; color: white; width: 28px; height: 28px; border-radius: 50%; text-align: center; line-height: 28px; font-weight: bold; font-size: 14px; margin-right: 10px; }
    </style>
</head>
<body>
    <h1>Al-Ansaar Schools - SEO Update</h1>
    <p class="subtitle">Complete All-in-One Installer</p>
    
    <div class="box">
        <h3>This installer will create/update 9 files:</h3>
        <ul>
            <li><strong>.htaccess</strong> - Clean URLs + HTTPS + GZIP + Caching + Security</li>
            <li><strong>robots.txt</strong> - Google crawl instructions</li>
            <li><strong>sitemap.xml</strong> - 20 pages with priorities</li>
            <li><strong>index.php</strong> - 22 allowed pages</li>
            <li><strong>includes/header.php</strong> - Full SEO: meta tags, JSON-LD, OG, clean URLs</li>
            <li><strong>includes/footer.php</strong> - Clean URL links + Blog link</li>
            <li><strong>pages/blog.php</strong> - Blog listing page</li>
            <li><strong>pages/best-islamic-school-kasur.php</strong> - SEO blog post (~2000 words)</li>
            <li><strong>pages/digital-skills-students-pakistan.php</strong> - SEO blog post (~1000 words)</li>
        </ul>
    </div>
    
    <div class="step">
        <span class="step-num">1</span> Upload this file to your server ROOT directory (where index.php is)
    </div>
    <div class="step">
        <span class="step-num">2</span> Also upload <code>seo_best-islamic-school-kasur.php</code> and <code>seo_digital-skills-students-pakistan.php</code> to the SAME directory
    </div>
    <div class="step">
        <span class="step-num">3</span> Click the button below to install
    </div>
    <div class="step">
        <span class="step-num">4</span> Delete all installer files after!
    </div>
    
    <div class="warn">
        <strong>Warning:</strong> This will overwrite existing files. Backups will be created automatically with <code>.backup-YYYY-MM-DD-HHMMSS</code> suffix. Delete this installer file after use for security!
    </div>
    
    <form method="POST">
        <input type="hidden" name="auth" value="alansaar2026">
        <button type="submit" class="btn">Install All SEO Updates</button>
    </form>
</body>
</html>