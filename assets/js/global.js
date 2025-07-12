/*
 * LANDIO - Global JavaScript Functions
 * Compatible with jQuery 3.x and modern browsers
 * 
 * Usage: This file handles all interactive features including:
 * - Mobile navigation menu toggle
 * - Modal contact form functionality
 * - Smooth scrolling for navigation links
 * - Dynamic content loading and animations
 */

$(document).ready(function() {
    'use strict';
    
    // Global variables
    var $window = $(window);
    var $document = $(document);
    var $body = $('body');
    var $mobileMenuToggle = $('#mobile-menu-toggle');
    var $navMenu = $('#nav-menu');
    var $modal = $('#contact-modal');
    var $bookCallBtn = $('#book-call-btn');
    var $viewWorkBtn = $('#view-work-btn');
    var $viewPortfolioBtn = $('#view-portfolio-btn');
    var $modalClose = $('#modal-close');
    
    // Initialize all functionality
    initMobileMenu();
    initModalFunctionality();
    initSmoothScrolling();
    initButtonInteractions();
    initFormValidation();
    
    // === MOBILE MENU FUNCTIONALITY === 
    function initMobileMenu() {
        // Toggle mobile menu
        $mobileMenuToggle.on('click', function() {
            $navMenu.toggleClass('active');
            $mobileMenuToggle.toggleClass('active');
            
            // Animate hamburger menu
            if ($mobileMenuToggle.hasClass('active')) {
                $mobileMenuToggle.find('span:nth-child(1)').css('transform', 'rotate(45deg) translate(5px, 5px)');
                $mobileMenuToggle.find('span:nth-child(2)').css('opacity', '0');
                $mobileMenuToggle.find('span:nth-child(3)').css('transform', 'rotate(-45deg) translate(7px, -6px)');
            } else {
                $mobileMenuToggle.find('span').css({
                    'transform': 'none',
                    'opacity': '1'
                });
            }
        });
        
        // Close mobile menu when clicking on nav links
        $('.nav-link').on('click', function() {
            $navMenu.removeClass('active');
            $mobileMenuToggle.removeClass('active');
            $mobileMenuToggle.find('span').css({
                'transform': 'none',
                'opacity': '1'
            });
        });
        
        // Close mobile menu when clicking outside
        $document.on('click', function(e) {
            if (!$mobileMenuToggle.is(e.target) && 
                !$navMenu.is(e.target) && 
                $navMenu.has(e.target).length === 0) {
                $navMenu.removeClass('active');
                $mobileMenuToggle.removeClass('active');
                $mobileMenuToggle.find('span').css({
                    'transform': 'none',
                    'opacity': '1'
                });
            }
        });
    }
    
    // === MODAL FUNCTIONALITY ===
    function initModalFunctionality() {
        // Open modal when clicking "Book A Free Call" button
        $bookCallBtn.on('click', function() {
            $modal.addClass('active');
            $body.css('overflow', 'hidden');
            
            // Focus on first input field
            setTimeout(function() {
                $modal.find('input[type="text"]').first().focus();
            }, 300);
        });
        
        // Close modal when clicking close button
        $modalClose.on('click', function() {
            closeModal();
        });
        
        // Close modal when clicking outside modal content
        $modal.on('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
        
        // Close modal with Escape key
        $document.on('keydown', function(e) {
            if (e.keyCode === 27 && $modal.hasClass('active')) {
                closeModal();
            }
        });
        
        function closeModal() {
            $modal.removeClass('active');
            $body.css('overflow', 'auto');
        }
    }
    
    // === SMOOTH SCROLLING ===
    function initSmoothScrolling() {
        // Smooth scrolling for navigation links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            
            var target = $(this.getAttribute('href'));
            if (target.length) {
                var headerHeight = $('.main-header').outerHeight();
                var targetPosition = target.offset().top - headerHeight;
                
                $('html, body').animate({
                    scrollTop: targetPosition
                }, 800, 'swing');
            }
        });
    }
    
    // === BUTTON INTERACTIONS ===
    function initButtonInteractions() {
        // View Work button functionality
        $viewWorkBtn.on('click', function() {
            // Add a subtle animation
            $(this).addClass('clicked');
            
            // Scroll to portfolio section (if it exists) or show message
            setTimeout(function() {
                var $portfolio = $('#portfolio');
                if ($portfolio.length) {
                    $('html, body').animate({
                        scrollTop: $portfolio.offset().top - $('.main-header').outerHeight()
                    }, 800);
                } else {
                    alert('Portfolio section coming soon! Please use the contact form to see examples of my work.');
                }
                $viewWorkBtn.removeClass('clicked');
            }, 200);
        });
        
        // View Portfolio button functionality
        $viewPortfolioBtn.on('click', function() {
            // Add a subtle animation
            $(this).addClass('clicked');
            
            // Show portfolio or redirect
            setTimeout(function() {
                alert('Portfolio showcase coming soon! Please contact me to see examples of my work.');
                $viewPortfolioBtn.removeClass('clicked');
            }, 200);
        });
        
        // Add click animation to all buttons
        $('.btn-primary, .btn-secondary, .btn-template').on('click', function() {
            var $this = $(this);
            $this.addClass('clicked');
            
            setTimeout(function() {
                $this.removeClass('clicked');
            }, 200);
        });
    }
    
    // === FORM VALIDATION ===
    function initFormValidation() {
        var $contactForm = $('.contact-form');
        
        // Real-time validation
        $contactForm.find('input, textarea, select').on('blur change', function() {
            validateField($(this));
        });
        
        // Form submission
        $contactForm.on('submit', function(e) {
            var isValid = true;
            
            // Validate all fields
            $contactForm.find('input[required], textarea[required], select[required]').each(function() {
                if (!validateField($(this))) {
                    isValid = false;
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                showFormMessage('Please fill in all required fields correctly.', 'error');
            } else {
                // Show loading state
                var $submitBtn = $contactForm.find('button[type="submit"]');
                var originalText = $submitBtn.text();
                $submitBtn.text('Sending...').prop('disabled', true);
                
                // Re-enable button after a delay (in case of error)
                setTimeout(function() {
                    $submitBtn.text(originalText).prop('disabled', false);
                }, 5000);
            }
        });
        
        function validateField($field) {
            var value = $field.val();
            var isValid = true;
            
            // Remove existing error styling
            $field.removeClass('error');
            
            // For text inputs and textareas, trim whitespace
            if ($field.is('input[type="text"], input[type="email"], textarea')) {
                value = value.trim();
            }
            
            // Check if field is required and empty
            if ($field.prop('required') && !value) {
                isValid = false;
            }
            
            // Email validation
            if ($field.attr('type') === 'email' && value) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    isValid = false;
                }
            }
            
            // Add error styling if invalid
            if (!isValid) {
                $field.addClass('error');
            }
            
            return isValid;
        }
        
        function showFormMessage(message, type) {
            var $existingMessage = $('.form-message');
            if ($existingMessage.length) {
                $existingMessage.remove();
            }
            
            var $message = $('<div class="form-message ' + type + '">' + message + '</div>');
            $contactForm.prepend($message);
            
            // Auto-hide success messages
            if (type === 'success') {
                setTimeout(function() {
                    $message.fadeOut(300, function() {
                        $(this).remove();
                    });
                }, 5000);
            }
        }
    }
    
    // === SCROLL EFFECTS ===
    function initScrollEffects() {
        var $header = $('.main-header');
        var scrollTimeout;
        
        $window.on('scroll', function() {
            // Clear timeout if it exists
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            
            // Set a timeout to run after scrolling ends
            scrollTimeout = setTimeout(function() {
                var scrollTop = $window.scrollTop();
                
                // Add/remove header background based on scroll position
                if (scrollTop > 50) {
                    $header.addClass('scrolled');
                } else {
                    $header.removeClass('scrolled');
                }
            }, 10);
        });
    }
    
    // === ANIMATIONS ===
    function initAnimations() {
        // Fade in elements on page load
        $('.hero-content, .hero-icon, .social-links').css('opacity', '0');
        
        setTimeout(function() {
            $('.hero-icon').animate({ opacity: 1 }, 600);
        }, 200);
        
        setTimeout(function() {
            $('.hero-content').animate({ opacity: 1 }, 600);
        }, 400);
        
        setTimeout(function() {
            $('.social-links').animate({ opacity: 1 }, 600);
        }, 600);
    }
    
    // === UTILITY FUNCTIONS ===
    function debounce(func, wait) {
        var timeout;
        return function executedFunction() {
            var context = this;
            var args = arguments;
            
            var later = function() {
                timeout = null;
                func.apply(context, args);
            };
            
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Initialize scroll effects and animations
    initScrollEffects();
    initAnimations();
    
    // Handle window resize
    $window.on('resize', debounce(function() {
        // Close mobile menu on resize to desktop
        if ($window.width() > 768) {
            $navMenu.removeClass('active');
            $mobileMenuToggle.removeClass('active');
            $mobileMenuToggle.find('span').css({
                'transform': 'none',
                'opacity': '1'
            });
        }
    }, 250));
    
    // Add error styles to CSS dynamically
    $('<style>')
        .prop('type', 'text/css')
        .html('.form-group input.error, .form-group textarea.error, .form-group select.error { border-color: #ef4444; } .btn-primary.clicked, .btn-secondary.clicked, .btn-template.clicked { transform: scale(0.98); }')
        .appendTo('head');
});

// === ADDITIONAL JQUERY EXTENSIONS ===
// Smooth scroll plugin extension
$.fn.smoothScroll = function(options) {
    var defaults = {
        duration: 800,
        easing: 'swing',
        offset: 0
    };
    
    var settings = $.extend(defaults, options);
    
    return this.each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            
            var target = $(this.getAttribute('href'));
            if (target.length) {
                var targetPosition = target.offset().top - settings.offset;
                
                $('html, body').animate({
                    scrollTop: targetPosition
                }, settings.duration, settings.easing);
            }
        });
    });
};

// Custom loading state plugin
$.fn.loadingState = function(options) {
    var defaults = {
        loadingText: 'Loading...',
        duration: 2000
    };
    
    var settings = $.extend(defaults, options);
    
    return this.each(function() {
        var $this = $(this);
        var originalText = $this.text();
        
        $this.text(settings.loadingText).prop('disabled', true);
        
        setTimeout(function() {
            $this.text(originalText).prop('disabled', false);
        }, settings.duration);
    });
}; 