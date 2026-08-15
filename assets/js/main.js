/**
 * Al-Ansaar Schools - Main JavaScript
 * Modern, Performant, Accessible
 */

(function() {
    'use strict';
    
    // =========================================
    // DOM ELEMENTS
    // =========================================
    const preloader = document.getElementById('preloader');
    const header = document.getElementById('header');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const backToTop = document.getElementById('backToTop');
    
    // =========================================
    // PRELOADER
    // =========================================
    window.addEventListener('load', function() {
        setTimeout(function() {
            if (preloader) {
                preloader.classList.add('hidden');
            }
        }, 600);
    });
    
    // =========================================
    // HEADER SCROLL EFFECT
    // =========================================
    let lastScrollY = window.scrollY;
    
    function handleScroll() {
        const currentScrollY = window.scrollY;
        
        // Add shadow on scroll
        if (header) {
            if (currentScrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        // Back to Top visibility
        if (backToTop) {
            if (currentScrollY > 500) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }
        
        lastScrollY = currentScrollY;
    }
    
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    // =========================================
    // MOBILE NAVIGATION
    // =========================================
    function openMobileNav() {
        navToggle.classList.add('active');
        navMenu.classList.add('active');
        mobileOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeMobileNav() {
        navToggle.classList.remove('active');
        navMenu.classList.remove('active');
        mobileOverlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    function toggleMobileNav() {
        if (navMenu.classList.contains('active')) {
            closeMobileNav();
        } else {
            openMobileNav();
        }
    }
    
    if (navToggle) {
        navToggle.addEventListener('click', toggleMobileNav);
    }
    
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileNav);
    }
    
    // Mobile Dropdown Toggle
    const dropdownItems = document.querySelectorAll('.has-dropdown');
    
    dropdownItems.forEach(function(item) {
        const link = item.querySelector('.nav-link');
        
        link.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                
                // Close other dropdowns
                dropdownItems.forEach(function(otherItem) {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                
                item.classList.toggle('active');
            }
        });
    });
    
    // Close mobile nav on link click
    const navLinks = document.querySelectorAll('.nav-link:not(.has-dropdown .nav-link), .dropdown-link');
    
    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                setTimeout(closeMobileNav, 100);
            }
        });
    });
    
    // Close mobile nav on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && navMenu.classList.contains('active')) {
            closeMobileNav();
        }
    });
    
    // =========================================
    // BACK TO TOP
    // =========================================
    if (backToTop) {
        backToTop.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // =========================================
    // SCROLL REVEAL ANIMATIONS
    // =========================================
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-up');
    
    if (revealElements.length > 0 && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        revealElements.forEach(function(el) {
            revealObserver.observe(el);
        });
    } else {
        // Fallback: Show all elements immediately
        revealElements.forEach(function(el) {
            el.classList.add('revealed');
        });
    }
    
    // =========================================
    // COUNTER ANIMATION
    // =========================================
    const counters = document.querySelectorAll('.counter');
    let countersAnimated = false;
    
    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'), 10);
        const duration = 2000;
        const startTime = performance.now();
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = Math.floor(easeOutQuart * target);
            
            counter.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        }
        
        requestAnimationFrame(updateCounter);
    }
    
    function animateAllCounters() {
        counters.forEach(function(counter) {
            animateCounter(counter);
        });
    }
    
    if (counters.length > 0 && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting && !countersAnimated) {
                    countersAnimated = true;
                    animateAllCounters();
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        
        const counterSection = counters[0].closest('section');
        if (counterSection) {
            counterObserver.observe(counterSection);
        }
    }
    
    // =========================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // =========================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // =========================================
    // FORM VALIDATION
    // =========================================
    const forms = document.querySelectorAll('form[data-validate]');
    
    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            // Remove previous errors
            form.querySelectorAll('.form-error').forEach(function(el) {
                el.remove();
            });
            form.querySelectorAll('.error').forEach(function(el) {
                el.classList.remove('error');
            });
            
            requiredFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                    
                    const errorEl = document.createElement('span');
                    errorEl.className = 'form-error';
                    errorEl.textContent = 'This field is required';
                    errorEl.style.cssText = 'color: #DC2626; font-size: 0.8rem; margin-top: 0.25rem; display: block;';
                    field.parentNode.appendChild(errorEl);
                }
                
                // Email validation
                if (field.type === 'email' && field.value.trim()) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(field.value)) {
                        isValid = false;
                        field.classList.add('error');
                        
                        const errorEl = document.createElement('span');
                        errorEl.className = 'form-error';
                        errorEl.textContent = 'Please enter a valid email';
                        errorEl.style.cssText = 'color: #DC2626; font-size: 0.8rem; margin-top: 0.25rem; display: block;';
                        field.parentNode.appendChild(errorEl);
                    }
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                
                // Scroll to first error
                const firstError = form.querySelector('.error');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            }
        });
        
        // Remove error on input
        form.querySelectorAll('.form-control').forEach(function(field) {
            field.addEventListener('input', function() {
                this.classList.remove('error');
                const errorEl = this.parentNode.querySelector('.form-error');
                if (errorEl) {
                    errorEl.remove();
                }
            });
        });
    });
    
    // =========================================
    // IMAGE LAZY LOADING
    // =========================================
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if (lazyImages.length > 0 && 'IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.getAttribute('data-src');
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            });
        }, { rootMargin: '100px' });
        
        lazyImages.forEach(function(img) {
            imageObserver.observe(img);
        });
    }
    
    // =========================================
    // ACTIVE NAVIGATION HIGHLIGHT
    // =========================================
    function setActiveNavLink() {
        const currentPath = window.location.pathname;
        const currentPage = window.location.search.includes('page=') 
            ? new URLSearchParams(window.location.search).get('page') 
            : 'home';
        
        document.querySelectorAll('.nav-link').forEach(function(link) {
            link.classList.remove('active');
            
            const href = link.getAttribute('href');
            
            if (href === '?' || href === SITE_URL || href === './') {
                if (currentPage === 'home') {
                    link.classList.add('active');
                }
            } else if (href && href.includes('page=' + currentPage)) {
                link.classList.add('active');
            }
        });
    }
    
    setActiveNavLink();
    
})();