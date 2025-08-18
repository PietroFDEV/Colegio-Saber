// ===== MODERN NAVIGATION SYSTEM =====
class ModernNavigation {
    constructor() {
        this.header = document.getElementById('header');
        this.navToggle = document.getElementById('nav-toggle');
        this.navMenu = document.getElementById('nav-menu');
        this.navLinks = document.querySelectorAll('.nav-link');
        this.currentSection = 'home';
        
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.setupScrollEffects();
        this.setupActiveNavigation();
    }

    setupEventListeners() {
        // Mobile menu toggle
        if (this.navToggle) {
            this.navToggle.addEventListener('click', () => this.toggleMobileMenu());
        }

        // Close mobile menu when clicking on links
        this.navLinks.forEach(link => {
            link.addEventListener('click', () => this.closeMobileMenu());
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!this.navMenu.contains(e.target) && !this.navToggle.contains(e.target)) {
                this.closeMobileMenu();
            }
        });

        // Smooth scrolling for all internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(anchor.getAttribute('href'));
                if (target) {
                    const headerHeight = this.header.offsetHeight;
                    const targetPosition = target.offsetTop - headerHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    setupScrollEffects() {
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Header background effect
            if (scrollTop > 100) {
                this.header.classList.add('scrolled');
            } else {
                this.header.classList.remove('scrolled');
            }
            
            // Hide/show header on scroll
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                this.header.style.transform = 'translateY(-100%)';
            } else {
                this.header.style.transform = 'translateY(0)';
            }
            
            lastScrollTop = scrollTop;
        });
    }

    setupActiveNavigation() {
        const sections = document.querySelectorAll('section[id]');
        
        window.addEventListener('scroll', () => {
            let current = '';
            const scrollPosition = window.pageYOffset + 200;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            this.navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    }

    toggleMobileMenu() {
        this.navMenu.classList.toggle('active');
        this.navToggle.classList.toggle('active');
        
        // Animate hamburger menu
        const bars = this.navToggle.querySelectorAll('.bar');
        if (this.navMenu.classList.contains('active')) {
            bars[0].style.transform = 'rotate(-45deg) translate(-5px, 6px)';
            bars[1].style.opacity = '0';
            bars[2].style.transform = 'rotate(45deg) translate(-5px, -6px)';
        } else {
            bars[0].style.transform = 'none';
            bars[1].style.opacity = '1';
            bars[2].style.transform = 'none';
        }
    }

    closeMobileMenu() {
        this.navMenu.classList.remove('active');
        this.navToggle.classList.remove('active');
        
        const bars = this.navToggle.querySelectorAll('.bar');
        bars[0].style.transform = 'none';
        bars[1].style.opacity = '1';
        bars[2].style.transform = 'none';
    }
}

// ===== ENHANCED GALLERY SYSTEM =====
class ModernGallery {
    constructor() {
        this.gallery = document.getElementById('gallery');
        this.modal = document.getElementById('modal');
        this.modalContent = document.getElementById('modalContent');
        this.showMoreBtn = document.getElementById('showMoreBtn');
        this.closeModal = document.getElementById('closeModal');
        
        this.init();
    }

    init() {
        this.loadImages();
        this.setupModalEvents();
    }

    async loadImages() {
        try {
            const response = await fetch('get-images.php');
            const images = await response.json();
            debugger
            this.renderGallery(images);
        } catch (error) {
            console.error('Error loading images:', error);
            this.showErrorMessage();
        }
    }

    renderGallery(images) {
        if (!this.gallery) return;
        
        const isMobile = window.innerWidth <= 768;
        const visibleCount = isMobile ? 6 : 9;
        
        // Clear existing content
        this.gallery.innerHTML = '';
        
        // Show initial images
        images.slice(0, visibleCount).forEach((src, i) => {
            const galleryItem = this.createGalleryItem(src, i);
            this.gallery.appendChild(galleryItem);
        });
        
        // Show "show more" button if there are more images
        if (images.length > visibleCount) {
            this.showMoreBtn.classList.remove('hidden');
            this.prepareModalContent(images);
        }
    }

    createGalleryItem(src, index) {
        const div = document.createElement('div');
        div.className = 'gallery-item';
        
        const img = document.createElement('img');
        img.src = src;
        img.alt = `Infraestrutura ${index + 1}`;
        img.loading = 'lazy';
        
        // Add click event to open modal
        div.addEventListener('click', () => this.openModal());
        
        div.appendChild(img);
        return div;
    }

    prepareModalContent(images) {
        if (!this.modalContent) return;
        
        this.modalContent.innerHTML = '';
        
        images.forEach((src, i) => {
            const img = document.createElement('img');
            img.src = src;
            img.alt = `Infraestrutura ${i + 1}`;
            img.className = 'modal-image';
            this.modalContent.appendChild(img);
        });
    }

    setupModalEvents() {
        if (!this.showMoreBtn || !this.closeModal) return;
        
        this.showMoreBtn.addEventListener('click', () => this.openModal());
        this.closeModal.addEventListener('click', () => this.closeModalView());
        
        // Close modal on outside click
        this.modal.addEventListener('click', (e) => {
            if (e.target === this.modal) {
                this.closeModalView();
            }
        });
        
        // Close modal on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !this.modal.classList.contains('hidden')) {
                this.closeModalView();
            }
        });
    }

    openModal() {
        this.modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        
        // Focus management for accessibility
        this.closeModal.focus();
        
        // Add entrance animation
        this.modal.style.opacity = '0';
        this.modal.style.transform = 'scale(0.9)';
        
        setTimeout(() => {
            this.modal.style.opacity = '1';
            this.modal.style.transform = 'scale(1)';
        }, 10);
    }

    closeModalView() {
        this.modal.style.opacity = '0';
        this.modal.style.transform = 'scale(0.9)';
        
        setTimeout(() => {
            this.modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }, 200);
    }

    showErrorMessage() {
        if (this.gallery) {
            this.gallery.innerHTML = `
                <div style="text-align: center; padding: 2rem; color: #666;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 3rem; margin-bottom: 1rem;"></i>
                    <p>Erro ao carregar as imagens. Tente novamente mais tarde.</p>
                </div>
            `;
        }
    }
}

// ===== ENHANCED SLIDER SYSTEM =====
class ModernSlider {
    constructor() {
        // Wait for DOM to be fully loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            this.init();
        }
    }

    init() {
        this.initializeHeroSlider();
        this.initializeGallerySliders();
        this.setupSliderEnhancements();
    }

    initializeHeroSlider() {
        if (typeof $ !== 'undefined' && $('.sliderB').length) {
            try {
                // Destroy existing slider if it exists
                if ($('.sliderB').hasClass('slick-initialized')) {
                    $('.sliderB').slick('unslick');
                }

                $('.sliderB').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 2500,
                    fade: true,
                    cssEase: 'linear',
                    arrows: true,
                    dots: false,
                    pauseOnHover: true,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false
                            }
                        }
                    ]
                });
                console.log('Hero slider initialized successfully');
            } catch (error) {
                console.error('Error initializing hero slider:', error);
            }
        } else {
            console.log('jQuery not available or sliderB not found');
        }
    }

    initializeGallerySliders() {
        if (typeof $ !== 'undefined') {
            // Main gallery slider
            if ($('.sliderX').length) {
                // Destroy existing slider if it exists
                if ($('.sliderX').hasClass('slick-initialized')) {
                    $('.sliderX').slick('unslick');
                }

                $('.sliderX').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: false,
                    fade: true,
                    asNavFor: '.sliderY',
                    adaptiveHeight: true
                });
            }

            // Thumbnail slider
            if ($('.sliderY').length) {
                // Destroy existing slider if it exists
                if ($('.sliderY').hasClass('slick-initialized')) {
                    $('.sliderY').slick('unslick');
                }

                $('.sliderY').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                    asNavFor: '.sliderX',
                    centerMode: true,
                    focusOnSelect: true,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3,
                                arrows: true
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                arrows: true
                            }
                        }
                    ]
                });
            }
        }
    }

    setupSliderEnhancements() {
        // Add loading states
        document.querySelectorAll('.sliderB img, .sliderX img, .sliderY img').forEach(img => {
            img.addEventListener('load', () => {
                img.classList.add('loaded');
            });
        });

        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                $('.sliderB').slick('slickPrev');
            } else if (e.key === 'ArrowRight') {
                $('.sliderB').slick('slickNext');
            }
        });
    }
}

// ===== SOCIAL MEDIA INTEGRATION =====
class SocialMediaManager {
    constructor() {
        this.setupSocialButtons();
    }

    setupSocialButtons() {
        // Facebook
        const facebookBtn = document.querySelector('.social-facebook');
        if (facebookBtn) {
            facebookBtn.addEventListener('click', () => this.openFacebook());
        }

        // Instagram
        const instagramBtn = document.querySelector('.social-instagram');
        if (instagramBtn) {
            instagramBtn.addEventListener('click', () => this.openInstagram());
        }

        // WhatsApp
        const whatsappBtn = document.querySelector('.social-whatsapp');
        if (whatsappBtn) {
            whatsappBtn.addEventListener('click', () => this.openWhatsApp());
        }
    }

    openFacebook() {
        window.open('https://www.facebook.com/ColegioSaberCuritiba', '_blank', 'noopener,noreferrer');
    }

    openInstagram() {
        window.open('https://www.instagram.com/colegiosabercuritiba/', '_blank', 'noopener,noreferrer');
    }

    openWhatsApp() {
        const message = encodeURIComponent('Oi, tem interesse em ter mais informações do Colégio Saber?');
        window.open(`https://wa.me/554195098043?text=${message}`, '_blank', 'noopener,noreferrer');
    }
}

// ===== WHATSAPP REGISTRATION SYSTEM =====
class WhatsAppRegistration {
    constructor() {
        this.setupRegistrationButtons();
    }

    setupRegistrationButtons() {
        const matriculaBtn = document.querySelector('[onclick*="5541988590440"]');
        const rematriculaBtn = document.querySelector('[onclick*="5541995098043"]');
        
        if (matriculaBtn) {
            matriculaBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openWhatsAppRegistration('5541988590440', true);
            });
        }
        
        if (rematriculaBtn) {
            rematriculaBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openWhatsAppRegistration('5541995098043', false);
            });
        }
    }

    openWhatsAppRegistration(phoneNumber, isMatricula) {
        const message = isMatricula 
            ? 'Olá! Entre em contato para realizar a matrícula!'
            : 'Olá! Entre em contato para realizar a rematrícula!';
        
        const encodedMessage = encodeURIComponent(message);
        window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank', 'noopener,noreferrer');
    }
}

// ===== FORM ENHANCEMENTS =====
class FormEnhancements {
    constructor() {
        this.setupFormValidation();
        this.setupFormAnimations();
    }

    setupFormValidation() {
        const form = document.getElementById('fs-frm');
        if (!form) return;

        const inputs = form.querySelectorAll('input, textarea');
        
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => this.clearFieldError(input));
        });

        form.addEventListener('submit', (e) => this.handleFormSubmit(e));
    }

    validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        let errorMessage = '';

        // Remove existing error styling
        this.clearFieldError(field);

        // Validation rules
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = 'Este campo é obrigatório';
        } else if (field.type === 'email' && value && !this.isValidEmail(value)) {
            isValid = false;
            errorMessage = 'Email inválido';
        } else if (field.type === 'tel' && value && !this.isValidPhone(value)) {
            isValid = false;
            errorMessage = 'Telefone inválido';
        }

        if (!isValid) {
            this.showFieldError(field, errorMessage);
        }

        return isValid;
    }

    isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    isValidPhone(phone) {
        const phoneRegex = /^\(?[1-9]{2}\)? ?(?:[2-8]|9[1-9])[0-9]{3}\-?[0-9]{4}$/;
        return phoneRegex.test(phone);
    }

    showFieldError(field, message) {
        field.classList.add('error');
        
        // Create error message element
        const errorDiv = document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.textContent = message;
        errorDiv.style.color = '#e74c3c';
        errorDiv.style.fontSize = '0.875rem';
        errorDiv.style.marginTop = '0.25rem';
        
        field.parentNode.appendChild(errorDiv);
    }

    clearFieldError(field) {
        field.classList.remove('error');
        const errorDiv = field.parentNode.querySelector('.field-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    handleFormSubmit(e) {
        const form = e.target;
        const inputs = form.querySelectorAll('input, textarea');
        let isValid = true;

        // Validate all fields
        inputs.forEach(input => {
            if (!this.validateField(input)) {
                isValid = false;
            }
        });

        if (!isValid) {
            e.preventDefault();
            this.showFormError('Por favor, corrija os erros no formulário.');
        } else {
            this.showFormSuccess('Enviando mensagem...');
        }
    }

    showFormError(message) {
        this.showFormMessage(message, 'error');
    }

    showFormSuccess(message) {
        this.showFormMessage(message, 'success');
    }

    showFormMessage(message, type) {
        const existingMessage = document.querySelector('.form-message');
        if (existingMessage) {
            existingMessage.remove();
        }

        const messageDiv = document.createElement('div');
        messageDiv.className = `form-message form-message--${type}`;
        messageDiv.textContent = message;
        messageDiv.style.padding = '1rem';
        messageDiv.style.marginTop = '1rem';
        messageDiv.style.borderRadius = '0.5rem';
        messageDiv.style.textAlign = 'center';
        messageDiv.style.fontWeight = '500';

        if (type === 'error') {
            messageDiv.style.backgroundColor = '#fef2f2';
            messageDiv.style.color = '#dc2626';
            messageDiv.style.border = '1px solid #fecaca';
        } else {
            messageDiv.style.backgroundColor = '#f0fdf4';
            messageDiv.style.color = '#16a34a';
            messageDiv.style.border = '1px solid #bbf7d0';
        }

        const form = document.getElementById('fs-frm');
        form.appendChild(messageDiv);

        // Auto-remove success messages
        if (type === 'success') {
            setTimeout(() => {
                messageDiv.remove();
            }, 3000);
        }
    }

    setupFormAnimations() {
        const form = document.getElementById('fs-frm');
        if (!form) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        });

        observer.observe(form);
    }
}

// ===== PERFORMANCE & ACCESSIBILITY ENHANCEMENTS =====
class PerformanceOptimizer {
    constructor() {
        this.init();
    }

    init() {
        this.setupLazyLoading();
        this.setupIntersectionObserver();
        //this.setupKeyboardNavigation();
    }

    setupLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    setupIntersectionObserver() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .matricula-card, .gallery-item, .contato-item').forEach(el => {
            observer.observe(el);
        });
    }

    setupKeyboardNavigation() {
        // Skip to main content link
        const skipLink = document.createElement('a');
        skipLink.href = '#main';
        skipLink.textContent = 'Pular para o conteúdo principal';
        skipLink.className = 'skip-link';
        skipLink.style.cssText = `
            position: absolute;
            top: -40px;
            left: 6px;
            background: #000;
            color: #fff;
            padding: 8px;
            text-decoration: none;
            z-index: 10000;
            transition: top 0.3s;
        `;

        document.body.insertBefore(skipLink, document.body.firstChild);

        skipLink.addEventListener('focus', () => {
            skipLink.style.top = '6px';
        });

        skipLink.addEventListener('blur', () => {
            skipLink.style.top = '-40px';
        });
    }
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', () => {
    // Initialize all systems
    new ModernNavigation();
    new ModernGallery();
    new ModernSlider();
    new SocialMediaManager();
    new WhatsAppRegistration();
    new FormEnhancements();
    new PerformanceOptimizer();

    // Add loading animation
    document.body.classList.add('loaded');
});

// ===== GLOBAL FUNCTIONS (for backward compatibility) =====
function openFacebook() {
    window.open('https://www.facebook.com/ColegioSaberCuritiba', '_blank', 'noopener,noreferrer');
}

function openInstagram() {
    window.open('https://www.instagram.com/colegiosabercuritiba/', '_blank', 'noopener,noreferrer');
}

function openWhatsApp() {
    const message = encodeURIComponent('Oi, tem interesse em ter mais informações do Colégio Saber?');
    window.open(`https://wa.me/554195098043?text=${message}`, '_blank', 'noopener,noreferrer');
}

function openWhatsAppRegistration(phoneNumber, isMatricula) {
    const message = isMatricula 
        ? 'Olá! Entre em contato para realizar a matrícula!'
        : 'Olá! Entre em contato para realizar a rematrícula!';
    
    const encodedMessage = encodeURIComponent(message);
    window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank', 'noopener,noreferrer');
}

