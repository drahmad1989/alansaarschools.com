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