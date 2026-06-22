/**
 * BZASA - Bendu Zinnah International School of Agriculture
 * Main JavaScript File
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initMobileMenu();
    initHeroSlider();
    initScrollAnimations();
    initStatsCounter();
    initBackToTop();
    initActiveNavigation();
    initSmoothScroll();
    initContactForm();
    initAIChat();
});

/**
 * Mobile Menu Toggle
 */
function initMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');
    
    if (mobileMenuBtn && nav) {
        mobileMenuBtn.addEventListener('click', function() {
            nav.classList.toggle('active');
            this.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!nav.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                nav.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });
    }
}

/**
 * Hero Slider with Auto-play
 */
function initHeroSlider() {
    const slider = document.querySelector('.hero-slider');
    if (!slider) return;
    
    const slides = slider.querySelectorAll('.slide');
    const dots = slider.querySelectorAll('.slider-dot');
    const prevBtn = slider.querySelector('.slider-prev');
    const nextBtn = slider.querySelector('.slider-next');
    
    if (slides.length === 0) return;
    
    let currentSlide = 0;
    let slideInterval;
    const autoPlayDelay = 5000;
    
    function showSlide(index) {
        // Handle wrap-around
        if (index >= slides.length) currentSlide = 0;
        if (index < 0) currentSlide = slides.length - 1;
        
        // Update slides
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === currentSlide) slide.classList.add('active');
        });
        
        // Update dots
        if (dots.length > 0) {
            dots.forEach((dot, i) => {
                dot.classList.remove('active');
                if (i === currentSlide) dot.classList.add('active');
            });
        }
    }
    
    function nextSlide() {
        currentSlide++;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide--;
        showSlide(currentSlide);
    }
    
    function startAutoPlay() {
        slideInterval = setInterval(nextSlide, autoPlayDelay);
    }
    
    function stopAutoPlay() {
        clearInterval(slideInterval);
    }
    
    // Event listeners for controls
    if (nextBtn) nextBtn.addEventListener('click', () => { stopAutoPlay(); nextSlide(); startAutoPlay(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { stopAutoPlay(); prevSlide(); startAutoPlay(); });
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoPlay();
            currentSlide = index;
            showSlide(currentSlide);
            startAutoPlay();
        });
    });
    
    // Pause on hover
    slider.addEventListener('mouseenter', stopAutoPlay);
    slider.addEventListener('mouseleave', startAutoPlay);
    
    // Start auto-play
    showSlide(0);
    startAutoPlay();
}

/**
 * Scroll Animations (Fade-in effects)
 */
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    if (animatedElements.length === 0) return;
    
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(el => observer.observe(el));
}

/**
 * Stats Counter Animation
 */
function initStatsCounter() {
    const counters = document.querySelectorAll('.stat-number');
    
    if (counters.length === 0) return;
    
    const observerOptions = {
        threshold: 0.5
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => observer.observe(counter));
}

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-count'));
    const suffix = element.getAttribute('data-suffix') || '';
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const updateCounter = () => {
        current += step;
        if (current < target) {
            element.textContent = Math.floor(current) + suffix;
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target + suffix;
        }
    };
    
    updateCounter();
}

/**
 * Back to Top Button
 */
function initBackToTop() {
    const backToTopBtn = document.querySelector('.back-to-top');
    
    if (!backToTopBtn) return;
    
    // Show/hide based on scroll position
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });
    
    // Scroll to top on click
    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Active Navigation Highlighting
 */
function initActiveNavigation() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    
    document.querySelectorAll('nav a').forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.php')) {
            link.classList.add('active');
        }
    });
}

/**
 * Smooth Scroll for Anchor Links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * Contact Form Validation
 */
function initContactForm() {
    const contactForm = document.querySelector('.contact-form');
    
    if (!contactForm) return;
    
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');
        
        // Clear previous errors
        clearErrors();
        
        let isValid = true;
        
        // Validate name
        if (!name.value.trim()) {
            showError(name, 'Please enter your name');
            isValid = false;
        }
        
        // Validate email
        if (!email.value.trim()) {
            showError(email, 'Please enter your email');
            isValid = false;
        } else if (!isValidEmail(email.value)) {
            showError(email, 'Please enter a valid email address');
            isValid = false;
        }
        
        // Validate message
        if (!message.value.trim()) {
            showError(message, 'Please enter your message');
            isValid = false;
        }
        
        if (isValid) {
            // Show success message
            showSuccessMessage('Thank you for your message! We will get back to you soon.');
            this.reset();
        }
    });
}

function showError(input, message) {
    input.classList.add('error');
    const errorDiv = document.createElement('div');
    errorDiv.className = 'error-message';
    errorDiv.textContent = message;
    input.parentNode.appendChild(errorDiv);
}

function clearErrors() {
    document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
    document.querySelectorAll('.error-message').forEach(el => el.remove());
    document.querySelectorAll('.success-message').forEach(el => el.remove());
}

function showSuccessMessage(message) {
    const form = document.querySelector('.contact-form');
    const successDiv = document.createElement('div');
    successDiv.className = 'success-message';
    successDiv.textContent = message;
    form.parentNode.insertBefore(successDiv, form.nextSibling);
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

/**
 * AI Chat Functionality
 */
function initAIChat() {
    const userInput = document.getElementById('userInput');
    const chatMessages = document.getElementById('chatMessages');
    const sendBtn = document.querySelector('.chat-send-btn');
    
    if (!userInput || !chatMessages) return;
    
    // Send message on Enter key
    userInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendChatMessage();
        }
    });
    
    // Send message on button click
    if (sendBtn) {
        sendBtn.addEventListener('click', sendChatMessage);
    }
}

function sendChatMessage() {
    const userInput = document.getElementById('userInput');
    const chatMessages = document.getElementById('chatMessages');
    
    if (!userInput || !chatMessages) return;
    
    const message = userInput.value.trim();
    if (!message) return;
    
    // Add user message
    addChatMessage(message, 'user');
    userInput.value = '';
    
    // Show typing indicator
    showTypingIndicator();
    
    // Simulate bot response
    setTimeout(() => {
        hideTypingIndicator();
        const botResponse = getAIResponse(message);
        addChatMessage(botResponse, 'bot');
    }, 1500);
}

function addChatMessage(text, type) {
    const chatMessages = document.getElementById('chatMessages');
    if (!chatMessages) return;
    
    const messageDiv = document.createElement('div');
    messageDiv.className = `message ${type}`;
    
    const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    
    if (type === 'user') {
        messageDiv.innerHTML = `
            <div class="message-content">
                <p>${text}</p>
                <span class="message-time">${time}</span>
            </div>
            <div class="message-avatar">
                <i class="fas fa-user"></i>
            </div>
        `;
    } else {
        messageDiv.innerHTML = `
            <div class="message-avatar">
                <i class="fas fa-robot"></i>
            </div>
            <div class="message-content">
                <p>${text}</p>
                <span class="message-time">${time}</span>
            </div>
        `;
    }
    
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function showTypingIndicator() {
    const chatMessages = document.getElementById('chatMessages');
    if (!chatMessages) return;
    
    const typingDiv = document.createElement('div');
    typingDiv.className = 'message bot typing';
    typingDiv.id = 'typing-indicator';
    typingDiv.innerHTML = `
        <div class="message-avatar">
            <i class="fas fa-robot"></i>
        </div>
        <div class="message-content">
            <div class="typing-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    `;
    chatMessages.appendChild(typingDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function hideTypingIndicator() {
    const typing = document.getElementById('typing-indicator');
    if (typing) typing.remove();
}

function getAIResponse(userMessage) {
    const lowerMessage = userMessage.toLowerCase();
    
    // Greetings
    if (lowerMessage.match(/^(hi|hello|hey|greetings)/)) {
        return "Hello! Welcome to BZASA - Bendu Zinnah International School of Agriculture! 🌱 I'm your AI assistant here to help you learn about our programs, admissions, and agricultural education. How can I assist you today?";
    }
    
    // Admissions related
    if (lowerMessage.includes('admission') || lowerMessage.includes('apply') || lowerMessage.includes('enroll')) {
        return "Great question about admissions! At BZASA, we welcome students passionate about agriculture. Our admission process includes: 1) Submit an application form, 2) Provide academic transcripts, 3) Write a personal statement, 4) Attend an interview. Would you like more details about any specific step?";
    }
    
    // Programs/Courses
    if (lowerMessage.includes('program') || lowerMessage.includes('course') || lowerMessage.includes('study')) {
        return "BZASA offers diverse programs in agricultural sciences including: 🌾 Crop Science, 🐄 Animal Husbandry, 🌱 Sustainable Farming, 💧 Irrigation Systems, 🏡 Rural Development, and more! Each program combines classroom learning with hands-on field experience. Which area interests you most?";
    }
    
    // Fees/Tuition
    if (lowerMessage.includes('fee') || lowerMessage.includes('cost') || lowerMessage.includes('tuition') || lowerMessage.includes('price')) {
        return "Our tuition is designed to be accessible! We offer various scholarship opportunities for deserving students. Contact our admissions office at info@bzasa.edu.sl for detailed fee structures and scholarship information. We're committed to making agricultural education affordable!";
    }
    
    // Location
    if (lowerMessage.includes('location') || lowerMessage.includes('where') || lowerMessage.includes('address') || lowerMessage.includes('campus')) {
        return "BZASA is located on the beautiful Bendu Zinnah Campus in Sierra Leone. Our campus features modern classrooms, fully equipped laboratories, and extensive farmland for practical training. Would you like directions or information about accommodation?";
    }
    
    // Contact
    if (lowerMessage.includes('contact') || lowerMessage.includes('phone') || lowerMessage.includes('email')) {
        return "You can reach us at:\n📞 Phone: +232 79 123 456\n📧 Email: info@bzasa.edu.sl\n🕐 Hours: Monday - Friday, 8:00 AM - 5:00 PM\n\nWe typically respond within 24 hours!";
    }
    
    // Requirements
    if (lowerMessage.includes('requirement') || lowerMessage.includes('eligibility') || lowerMessage.includes('qualification')) {
        return "To be eligible for BZASA programs, you typically need:\n• High school diploma or equivalent\n• Pass in Science subjects (preferred)\n• Passion for agriculture\n• Good standing in character\n\nSpecific programs may have additional requirements. Which program are you interested in?";
    }
    
    // Career/Job opportunities
    if (lowerMessage.includes('career') || lowerMessage.includes('job') || lowerMessage.includes('employment') || lowerMessage.includes('future')) {
        return "BZASA graduates have excellent career prospects! Our alumni work as: 🌿 Agricultural Officers, 🏢 Farm Managers, 🔬 Research Scientists, 🌍 NGO Development Workers, 🏭 Food Industry Professionals, and 👨‍🌾 Entrepreneurs. Agriculture is the backbone of Sierra Leone's economy!";
    }
    
    // Thanks
    if (lowerMessage.includes('thank')) {
        return "You're welcome! 🙏 It's my pleasure to help. Is there anything else you'd like to know about BZASA or agricultural education?";
    }
    
    // Help
    if (lowerMessage.includes('help')) {
        return "I can help you with information about:\n• Admissions & Applications\n• Programs & Courses\n• Fees & Scholarships\n• Campus Life\n• Career Opportunities\n• Contact Information\n\nJust ask me anything!";
    }
    
    // Default response
    return "That's a great question! While I'm a demo AI assistant, in the full version I would provide detailed information to help with your inquiries about BZASA. For specific questions, you can email us at info@bzasa.edu.sl or call +232 79 123 456. What else would you like to know?";
}