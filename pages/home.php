<style>
/* =============================================
   HOME PAGE STYLES
   ============================================= */

/* Hero Section */
.hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    overflow: hidden;
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.12;
}

.hero-pattern {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.hero-shapes {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    overflow: hidden;
}

.hero-shape {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(201, 162, 39, 0.2);
}

.hero-shape-1 {
    width: 500px;
    height: 500px;
    top: -100px;
    right: -100px;
    animation: rotate 60s linear infinite;
}

.hero-shape-2 {
    width: 300px;
    height: 300px;
    bottom: 10%;
    right: 20%;
    border-color: rgba(255, 255, 255, 0.1);
    animation: rotate 40s linear infinite reverse;
}

.hero-shape-3 {
    width: 200px;
    height: 200px;
    top: 20%;
    left: 5%;
    border-color: rgba(201, 162, 39, 0.15);
    animation: rotate 50s linear infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 750px;
    padding: var(--space-10) var(--space-6);
}

.hero-badge {
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
    animation: fadeInDown 0.8s ease-out;
}

.hero-badge i {
    animation: pulse 2s ease-in-out infinite;
}

.hero-title {
    color: var(--white);
    font-size: clamp(2.5rem, 6vw, 4.5rem);
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: var(--space-6);
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.hero-title .highlight {
    color: var(--accent);
    position: relative;
    display: inline-block;
}

.hero-title .highlight::after {
    content: '';
    position: absolute;
    bottom: 5px;
    left: 0;
    width: 100%;
    height: 8px;
    background: rgba(201, 162, 39, 0.3);
    z-index: -1;
}

.hero-desc {
    color: rgba(255, 255, 255, 0.85);
    font-size: var(--text-lg);
    line-height: 1.9;
    margin-bottom: var(--space-8);
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

.hero-buttons {
    display: flex;
    gap: var(--space-4);
    flex-wrap: wrap;
    animation: fadeInUp 0.8s ease-out 0.6s both;
}

.hero-buttons .btn {
    min-width: 200px;
}

/* Animations */
@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* Stats Section */
.stats-section {
    background: var(--white);
    padding: var(--space-16) 0;
    margin-top: -80px;
    position: relative;
    z-index: 10;
}

.stats-wrapper {
    max-width: 1100px;
    margin: 0 auto;
    background: var(--white);
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-2xl);
    padding: var(--space-10);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-8);
    text-align: center;
}

.stat-item {
    padding: var(--space-4);
}

.stat-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto var(--space-4);
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-xl);
}

.stat-number {
    font-family: var(--font-display);
    font-size: var(--text-5xl);
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
    margin-bottom: var(--space-2);
}

.stat-number span {
    color: var(--accent);
}

.stat-label {
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-500);
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Welcome Section */
.welcome-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.welcome-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-16);
    align-items: center;
}

.welcome-images {
    position: relative;
}

.welcome-main-img {
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-xl);
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.welcome-float-img {
    position: absolute;
    bottom: -40px;
    right: -40px;
    width: 220px;
    height: 220px;
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-xl);
    object-fit: cover;
    border: 6px solid var(--white);
}

.welcome-experience {
    position: absolute;
    top: 30px;
    left: -30px;
    background: var(--accent);
    color: var(--white);
    padding: var(--space-6);
    border-radius: var(--radius-xl);
    text-align: center;
    box-shadow: var(--shadow-lg);
}

.welcome-experience span {
    display: block;
    font-family: var(--font-display);
    font-size: var(--text-4xl);
    font-weight: 800;
    line-height: 1;
}

.welcome-experience small {
    font-size: var(--text-xs);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.welcome-content .section-subtitle {
    text-align: left;
}

.welcome-content .section-subtitle::before {
    display: none;
}

.welcome-content .section-title {
    text-align: left;
}

.welcome-content .section-title::after {
    margin: var(--space-5) 0 0;
}

.welcome-text {
    font-size: var(--text-base);
    color: var(--gray-600);
    line-height: 1.9;
    margin-bottom: var(--space-6);
}

.welcome-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
    margin-bottom: var(--space-8);
}

.welcome-feature {
    display: flex;
    align-items: center;
    gap: var(--space-3);
    padding: var(--space-3);
    background: var(--white);
    border-radius: var(--radius-lg);
    transition: all var(--transition-base);
}

.welcome-feature:hover {
    box-shadow: var(--shadow-md);
    transform: translateX(5px);
}

.welcome-feature i {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    color: var(--white);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-sm);
    flex-shrink: 0;
}

.welcome-feature span {
    font-size: var(--text-sm);
    font-weight: 600;
    color: var(--gray-700);
}

/* Programs Highlight Section */
.programs-highlight {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.programs-highlight-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-8);
}

.program-highlight-card {
    background: var(--white);
    border-radius: var(--radius-2xl);
    overflow: hidden;
    transition: all var(--transition-base);
    box-shadow: var(--shadow-md);
    position: relative;
}

.program-highlight-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-2xl);
}

.program-highlight-header {
    padding: var(--space-8);
    position: relative;
    overflow: hidden;
}

.program-highlight-card:nth-child(1) .program-highlight-header {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
}

.program-highlight-card:nth-child(2) .program-highlight-header {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
}

.program-highlight-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.program-highlight-icon {
    width: 80px;
    height: 80px;
    background: rgba(201, 162, 39, 0.2);
    border: 2px solid rgba(201, 162, 39, 0.4);
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent);
    font-size: var(--text-3xl);
    margin-bottom: var(--space-5);
    position: relative;
    z-index: 1;
}

.program-highlight-header h3 {
    color: var(--white);
    font-size: var(--text-2xl);
    margin-bottom: var(--space-3);
    position: relative;
    z-index: 1;
}

.program-highlight-header p {
    color: rgba(255, 255, 255, 0.8);
    font-size: var(--text-sm);
    line-height: 1.7;
    position: relative;
    z-index: 1;
}

.program-highlight-body {
    padding: var(--space-6) var(--space-8);
}

.program-highlight-tags {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-2);
    margin-bottom: var(--space-5);
}

.program-tag-item {
    display: inline-flex;
    align-items: center;
    gap: var(--space-1);
    background: var(--off-white);
    color: var(--gray-600);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 500;
}

.program-tag-item i {
    color: var(--accent);
    font-size: 8px;
}

.program-highlight-btn {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    padding: var(--space-3) var(--space-6);
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    color: var(--white);
    font-weight: 600;
    font-size: var(--text-sm);
    border-radius: var(--radius-full);
    transition: all var(--transition-base);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.program-highlight-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(var(--accent-rgb), 0.45);
}

.program-highlight-btn i {
    transition: transform var(--transition-fast);
}

.program-highlight-btn:hover i {
    transform: translateX(5px);
}

/* Responsive Programs Highlight */
@media (max-width: 1024px) {
    .programs-highlight-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .program-highlight-header {
        padding: var(--space-6);
    }
    
    .program-highlight-body {
        padding: var(--space-5) var(--space-6);
    }
}

/* Features Section */
.features-section {
    padding: var(--space-20) 0;
    background: var(--white);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.feature-card {
    background: var(--white);
    padding: var(--space-8);
    border-radius: var(--radius-xl);
    text-align: center;
    transition: all var(--transition-base);
    position: relative;
    overflow: hidden;
    border: 1px solid var(--gray-100);
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--accent));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform var(--transition-base);
}

.feature-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-xl);
    border-color: transparent;
}

.feature-card:hover::before {
    transform: scaleX(1);
}

.feature-icon {
    width: 90px;
    height: 90px;
    margin: 0 auto var(--space-6);
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
    border-radius: var(--radius-xl);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: var(--text-3xl);
    transition: all var(--transition-base);
}

.feature-card:hover .feature-icon {
    background: linear-gradient(135deg, var(--accent), var(--accent-dark));
    transform: scale(1.1) rotate(5deg);
}

.feature-title {
    font-size: var(--text-xl);
    margin-bottom: var(--space-4);
    color: var(--primary);
}

.feature-desc {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.8;
}

/* Campuses Section */
.campuses-section {
    padding: var(--space-20) 0;
    background: var(--primary-dark);
    position: relative;
    overflow: hidden;
}

.campuses-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    pointer-events: none;
}

.campuses-section .section-subtitle {
    color: var(--accent);
}

.campuses-section .section-title {
    color: var(--white);
}

.campuses-section .section-title::after {
    background: var(--accent);
}

.campus-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
    position: relative;
    z-index: 1;
}

.campus-grid-5 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.campus-grid-5 .campus-card:last-child:nth-child(4),
.campus-grid-5 .campus-card:last-child:nth-child(5) {
    grid-column: auto;
}

.campus-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    transition: all var(--transition-base);
}

.campus-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
}

.campus-img-wrapper {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.campus-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.campus-card:hover .campus-img {
    transform: scale(1.1);
}

.campus-badge {
    position: absolute;
    top: var(--space-3);
    left: var(--space-3);
    background: var(--accent);
    color: var(--white);
    padding: var(--space-1) var(--space-3);
    border-radius: var(--radius-full);
    font-size: var(--text-xs);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.campus-badge-main {
    background: var(--success);
}

.campus-content {
    padding: var(--space-5);
}

.campus-title {
    font-size: var(--text-lg);
    color: var(--primary);
    margin-bottom: var(--space-2);
}

.campus-location {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--gray-500);
    font-size: var(--text-sm);
    margin-bottom: var(--space-4);
}

.campus-location i {
    color: var(--accent);
}

.campus-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--primary);
    font-weight: 600;
    font-size: var(--text-sm);
    transition: all var(--transition-fast);
}

.campus-link i {
    transition: transform var(--transition-fast);
}

.campus-link:hover {
    color: var(--accent);
}

.campus-link:hover i {
    transform: translateX(5px);
}

/* CTA Section */
.cta-section {
    padding: var(--space-20) 0;
    background: linear-gradient(135deg, var(--accent) 0%, var(--accent-dark) 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
}

.cta-section::after {
    content: '';
    position: absolute;
    bottom: -30%;
    left: -5%;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
}

.cta-content {
    position: relative;
    z-index: 1;
}

.cta-title {
    color: var(--white);
    margin-bottom: var(--space-5);
}

.cta-desc {
    color: rgba(255, 255, 255, 0.9);
    font-size: var(--text-lg);
    max-width: 600px;
    margin: 0 auto var(--space-8);
    line-height: 1.8;
}

.cta-buttons {
    display: flex;
    justify-content: center;
    gap: var(--space-4);
    flex-wrap: wrap;
}

.cta-buttons .btn-primary {
    background: var(--white);
    color: var(--primary);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.cta-buttons .btn-primary:hover {
    background: var(--primary);
    color: var(--white);
}

/* News Section */
.news-section {
    padding: var(--space-20) 0;
    background: var(--off-white);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-6);
}

.news-card {
    background: var(--white);
    border-radius: var(--radius-xl);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all var(--transition-base);
}

.news-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.news-img-wrapper {
    height: 200px;
    overflow: hidden;
}

.news-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.news-card:hover .news-img {
    transform: scale(1.1);
}

.news-content {
    padding: var(--space-6);
}

.news-date {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--accent);
    font-size: var(--text-sm);
    font-weight: 600;
    margin-bottom: var(--space-3);
}

.news-title {
    font-size: var(--text-lg);
    margin-bottom: var(--space-3);
    color: var(--primary);
    line-height: 1.4;
}

.news-excerpt {
    color: var(--gray-500);
    font-size: var(--text-sm);
    line-height: 1.7;
    margin-bottom: var(--space-4);
}

.news-link {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    color: var(--primary);
    font-weight: 600;
    font-size: var(--text-sm);
    transition: all var(--transition-fast);
}

.news-link i {
    transition: transform var(--transition-fast);
}

.news-link:hover {
    color: var(--accent);
}

.news-link:hover i {
    transform: translateX(5px);
}

/* Responsive */
@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .features-grid,
    .campus-grid-5 {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .news-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .welcome-grid {
        grid-template-columns: 1fr;
        gap: var(--space-10);
    }
    
    .welcome-images {
        order: -1;
        max-width: 500px;
        margin: 0 auto;
    }
    
    .welcome-float-img,
    .welcome-experience {
        display: none;
    }
    
    .welcome-content .section-subtitle,
    .welcome-content .section-title {
        text-align: center;
    }
    
    .welcome-content .section-title::after {
        margin: var(--space-5) auto 0;
    }
}

@media (max-width: 768px) {
    .hero {
        min-height: auto;
        padding: var(--space-20) 0;
    }
    
    .hero-shapes {
        display: none;
    }
    
    .hero-content {
        text-align: center;
        padding: var(--space-6);
    }
    
    .hero-buttons {
        justify-content: center;
    }
    
    .stats-section {
        margin-top: 0;
        padding: var(--space-10) 0;
    }
    
    .stats-wrapper {
        box-shadow: none;
        padding: 0;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--space-4);
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
    }
    
    .stat-number {
        font-size: var(--text-3xl);
    }
    
    .features-grid,
    .campus-grid-5,
    .news-grid {
        grid-template-columns: 1fr;
    }
    
    .welcome-features {
        grid-template-columns: 1fr;
    }
    
    .hero-buttons .btn {
        width: 100%;
    }
    
    .cta-buttons .btn {
        width: 100%;
    }
}
</style>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-bg">
        <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Campus">
    </div>
    <div class="hero-pattern"></div>
    
    <div class="hero-shapes">
        <div class="hero-shape hero-shape-1"></div>
        <div class="hero-shape hero-shape-2"></div>
        <div class="hero-shape hero-shape-3"></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-star"></i>
                Excellence in Education Since 2014
            </div>
            
            <h1 class="hero-title">
                Nurturing Minds,<br>
                Building <span class="highlight">Character</span>
            </h1>
            
            <p class="hero-desc">
                Where Islamic values meet modern education. Al-Ansaar Schools provides holistic 
                education integrating Quranic teachings with academic excellence and practical 
                skills development for tomorrow's leaders.
            </p>
            
            <div class="hero-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-graduation-cap"></i>
                    Apply for Admission
                </a>
                <a href="?page=about" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-info-circle"></i>
                    Explore Our School
                </a>
            </div>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="stats-wrapper">
            <div class="stats-grid">
                <div class="stat-item reveal">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">
                        <span class="counter" data-target="10">0</span><span>+</span>
                    </div>
                    <div class="stat-label">Years of Excellence</div>
                </div>
                
                <div class="stat-item reveal">
                    <div class="stat-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="stat-number">
                        <span class="counter" data-target="5">0</span>
                    </div>
                    <div class="stat-label">Active Campuses</div>
                </div>
                
                <div class="stat-item reveal">
                    <div class="stat-icon">
                        <i class="fas fa-quran"></i>
                    </div>
                    <div class="stat-number">
                        <span class="counter" data-target="100">0</span><span>%</span>
                    </div>
                    <div class="stat-label">Hifz Integration</div>
                </div>
                
                <div class="stat-item reveal">
                    <div class="stat-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="stat-number">
                        <span class="counter" data-target="500">0</span><span>+</span>
                    </div>
                    <div class="stat-label">Skilled Graduates</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WELCOME SECTION -->
<section class="welcome-section">
    <div class="container">
        <div class="welcome-grid">
            <div class="welcome-images reveal-left">
                <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Students Learning" class="welcome-main-img">
                <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Campus Life" class="welcome-float-img">
                <div class="welcome-experience">
                    <span>10+</span>
                    <small>Years</small>
                </div>
            </div>
            
            <div class="welcome-content reveal-right">
                <span class="section-subtitle">Welcome to Al-Ansaar</span>
                <h2 class="section-title">A Legacy of Excellence in Education</h2>
                
                <p class="welcome-text">
                    For over a decade, Al-Ansaar Schools has been at the forefront of providing 
                    quality education that balances academic rigor with Islamic values. Our unique 
                    approach combines modern curriculum with Quranic education, creating well-rounded 
                    individuals prepared for both worldly success and spiritual growth.
                </p>
                
                <p class="welcome-text">
                    With state-of-the-art facilities, experienced faculty, and a nurturing environment, 
                    we ensure every student receives the attention and guidance they need to excel.
                </p>
                
                <div class="welcome-features">
                    <div class="welcome-feature">
                        <i class="fas fa-quran"></i>
                        <span>Integrated Hifz Program</span>
                    </div>
                    <div class="welcome-feature">
                        <i class="fas fa-laptop-code"></i>
                        <span>Modern Skills Training</span>
                    </div>
                    <div class="welcome-feature">
                        <i class="fas fa-user-graduate"></i>
                        <span>Qualified Faculty</span>
                    </div>
                    <div class="welcome-feature">
                        <i class="fas fa-building"></i>
                        <span>State-of-the-Art Campus</span>
                    </div>
                </div>
                
                <a href="?page=about" class="btn btn-secondary">
                    Learn More About Us
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAMS HIGHLIGHT SECTION -->
<section class="programs-highlight">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Special Programs</span>
            <h2 class="section-title">Explore Our Key Programs</h2>
            <p class="section-desc">Two flagship programs that set Al-Ansaar Schools apart from the rest.</p>
        </div>
        
        <div class="programs-highlight-grid">
            <!-- Islamic Education Card -->
            <div class="program-highlight-card reveal-left">
                <div class="program-highlight-header">
                    <div class="program-highlight-icon">
                        <i class="fas fa-quran"></i>
                    </div>
                    <h3>Islamic Education</h3>
                    <p>
                        Comprehensive Quranic education including Tajweed, Hifz-e-Quran, 
                        Nazra, Islamic Studies, Arabic Language, and Duas — nurturing 
                        souls with Quranic wisdom.
                    </p>
                </div>
                <div class="program-highlight-body">
                    <div class="program-highlight-tags">
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Tajweed</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Hifz-e-Quran</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Nazra</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Islamic Studies</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Arabic</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Duas & Azkar</span>
                    </div>
                    <a href="?page=islamic-education" class="program-highlight-btn">
                        Explore Islamic Education
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Online Education Card -->
            <div class="program-highlight-card reveal-right">
                <div class="program-highlight-header">
                    <div class="program-highlight-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Online Education & Digital Skills</h3>
                    <p>
                        Future-ready digital skills training — Web Development, Graphic 
                        Design, Digital Marketing, AI & ChatGPT, Freelancing, and much 
                        more for the modern world.
                    </p>
                </div>
                <div class="program-highlight-body">
                    <div class="program-highlight-tags">
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Web Development</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Graphic Design</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Digital Marketing</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> AI & ChatGPT</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Freelancing</span>
                        <span class="program-tag-item"><i class="fas fa-circle"></i> Video Editing</span>
                    </div>
                    <a href="?page=online-education" class="program-highlight-btn">
                        Explore Digital Skills
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Why Choose Us</span>
            <h2 class="section-title">The Al-Ansaar Difference</h2>
            <p class="section-desc">What sets us apart is our commitment to nurturing every aspect of your child's development.</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-quran"></i>
                </div>
                <h3 class="feature-title">Integrated Hifz Program</h3>
                <p class="feature-desc">
                    A seamless blend of Quran memorization with regular academics, allowing students 
                    to excel in both Deen and Duniya without compromise.
                </p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="feature-title">Skills Development</h3>
                <p class="feature-desc">
                    Practical training in computers, public speaking, arts, and life skills 
                    to prepare students for the challenges of the modern world.
                </p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="feature-title">Character Building</h3>
                <p class="feature-desc">
                    We prioritize honesty, integrity, and compassion, building responsible 
                    citizens who contribute positively to society.
                </p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3 class="feature-title">Expert Faculty</h3>
                <p class="feature-desc">
                    Highly qualified and dedicated teachers who are passionate about education 
                    and committed to each student's success.
                </p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Safe Environment</h3>
                <p class="feature-desc">
                    A secure and nurturing campus environment where students can focus on 
                    learning and personal growth without distractions.
                </p>
            </div>
            
            <div class="feature-card reveal">
                <div class="feature-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="feature-title">Proven Results</h3>
                <p class="feature-desc">
                    Consistently excellent board exam results with students achieving top 
                    positions and securing admissions in premier institutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CAMPUSES SECTION -->
<section class="campuses-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Our Network</span>
            <h2 class="section-title">5 Campuses Across Punjab</h2>
        </div>
        
        <div class="campus-grid-5">
            <!-- Campus 1: Madina Town (Main) -->
            <div class="campus-card reveal">
                <div class="campus-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Madina Town Campus" class="campus-img">
                    <span class="campus-badge campus-badge-main">Main Campus</span>
                </div>
                <div class="campus-content">
                    <h3 class="campus-title">Madina Town Campus</h3>
                    <p class="campus-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Kasur City, Punjab
                    </p>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Madina Town Campus." target="_blank" class="campus-link">
                        Contact Campus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Campus 2: Khudian Khas -->
            <div class="campus-card reveal">
                <div class="campus-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Khudian Khas Campus" class="campus-img">
                </div>
                <div class="campus-content">
                    <h3 class="campus-title">Khudian Khas Campus</h3>
                    <p class="campus-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Kasur, Punjab
                    </p>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Khudian Khas Campus." target="_blank" class="campus-link">
                        Contact Campus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Campus 3: Gujranwala -->
            <div class="campus-card reveal">
                <div class="campus-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Gujranwala Campus" class="campus-img">
                </div>
                <div class="campus-content">
                    <h3 class="campus-title">Gujranwala Campus</h3>
                    <p class="campus-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Gujranwala, Punjab
                    </p>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Gujranwala Campus." target="_blank" class="campus-link">
                        Contact Campus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Campus 4: Noorpur -->
            <div class="campus-card reveal">
                <div class="campus-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Noorpur Campus" class="campus-img">
                </div>
                <div class="campus-content">
                    <h3 class="campus-title">Noorpur Campus</h3>
                    <p class="campus-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Noorpur, Punjab
                    </p>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Noorpur Campus." target="_blank" class="campus-link">
                        Contact Campus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Campus 5: Atheel Pur (Farzand) -->
            <div class="campus-card reveal">
                <div class="campus-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Atheel Pur Campus" class="campus-img">
                </div>
                <div class="campus-content">
                    <h3 class="campus-title">Atheel Pur Campus</h3>
                    <p class="campus-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Atheel Pur (Farzand)
                    </p>
                    <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Atheel Pur Campus." target="_blank" class="campus-link">
                        Contact Campus
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS SECTION -->
<section class="news-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Latest Updates</span>
            <h2 class="section-title">News & Events</h2>
        </div>
        
        <div class="news-grid">
            <div class="news-card reveal">
                <div class="news-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/activities/event.webp" alt="Admissions Open" class="news-img">
                </div>
                <div class="news-content">
                    <div class="news-date">
                        <i class="fas fa-calendar-alt"></i>
                        <?php echo date('d M, Y'); ?>
                    </div>
                    <h3 class="news-title">Admissions Open for Session 2026</h3>
                    <p class="news-excerpt">
                        We are now accepting applications for the upcoming academic session. 
                        Limited seats available. Apply early to secure your child's admission.
                    </p>
                    <a href="?page=admissions" class="news-link">
                        Apply Now
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="news-card reveal">
                <div class="news-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/madina-town-campus.webp" alt="Annual Prize" class="news-img">
                </div>
                <div class="news-content">
                    <div class="news-date">
                        <i class="fas fa-calendar-alt"></i>
                        <?php echo date('d M, Y', strtotime('-1 week')); ?>
                    </div>
                    <h3 class="news-title">Annual Prize Distribution Ceremony</h3>
                    <p class="news-excerpt">
                        Celebrating the achievements of our brilliant students who excelled 
                        in academics, sports, and extracurricular activities throughout the year.
                    </p>
                    <a href="?page=news" class="news-link">
                        Read More
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="news-card reveal">
                <div class="news-img-wrapper">
                    <img src="<?php echo SITE_URL; ?>assets/images/campuses/khudian-campus.webp" alt="Hifz Ceremony" class="news-img">
                </div>
                <div class="news-content">
                    <div class="news-date">
                        <i class="fas fa-calendar-alt"></i>
                        <?php echo date('d M, Y', strtotime('-2 weeks')); ?>
                    </div>
                    <h3 class="news-title">Hifz Completion Ceremony</h3>
                    <p class="news-excerpt">
                        Alhamdulillah, another group of students completed their Hifz-e-Quran. 
                        A proud moment for the entire Al-Ansaar family.
                    </p>
                    <a href="?page=news" class="news-link">
                        Read More
                        <i class="fas fa-arrow-right"></i>
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
            <h2 class="cta-title">Begin Your Child's Journey Today</h2>
            <p class="cta-desc">
                Admissions are now open for session 2026. 
                Limited seats available. Secure your child's future with Al-Ansaar Schools.
            </p>
            <div class="cta-buttons">
                <a href="?page=admissions" class="btn btn-primary btn-lg">
                    <i class="fas fa-file-alt"></i>
                    Apply for Admission
                </a>
                <a href="https://wa.me/<?php echo SITE_WHATSAPP; ?>?text=Assalam o Alaikum! I want to know about Al-Ansaar Schools admissions for 2026." class="btn btn-outline-white btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Us
                </a>
            </div>
        </div>
    </div>
</section>