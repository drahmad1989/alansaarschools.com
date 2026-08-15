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