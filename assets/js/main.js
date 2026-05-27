(function () {
    'use strict';

    function hideSpinner() {
        var s = document.getElementById('spinner');
        if (s) s.classList.remove('show');
    }
    document.addEventListener('DOMContentLoaded', hideSpinner);
    window.addEventListener('load', hideSpinner);

    var navbar = document.querySelector('.navbar.sticky-top');
    var backToTop = document.querySelector('.back-to-top');

    // High-Performance Scroll Handling (IntersectionObserver instead of scroll event)
    if ('IntersectionObserver' in window && (navbar || backToTop)) {
        // Sentinel for Navbar (45px)
        if (navbar) {
            var navSentinel = document.createElement('div');
            navSentinel.style.position = 'absolute';
            navSentinel.style.top = '45px';
            navSentinel.style.left = '0';
            navSentinel.style.width = '1px';
            navSentinel.style.height = '1px';
            navSentinel.style.visibility = 'hidden';
            document.body.appendChild(navSentinel);

            var navObserver = new IntersectionObserver(function(entries) {
                if (!entries[0].isIntersecting) {
                    navbar.style.top = '0px';
                } else {
                    navbar.style.top = '-100px';
                }
            }, { rootMargin: '0px' });
            navObserver.observe(navSentinel);
        }

        // Sentinel for Back to Top (300px)
        if (backToTop) {
            backToTop.style.display = 'none'; // Default hidden
            var bttSentinel = document.createElement('div');
            bttSentinel.style.position = 'absolute';
            bttSentinel.style.top = '300px';
            bttSentinel.style.left = '0';
            bttSentinel.style.width = '1px';
            bttSentinel.style.height = '1px';
            bttSentinel.style.visibility = 'hidden';
            document.body.appendChild(bttSentinel);

            var bttObserver = new IntersectionObserver(function(entries) {
                if (!entries[0].isIntersecting) {
                    backToTop.style.display = 'flex';
                } else {
                    backToTop.style.display = 'none';
                }
            }, { rootMargin: '0px' });
            bttObserver.observe(bttSentinel);

            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
    }

    // Dropdown and Nav Toggles
    document.addEventListener('DOMContentLoaded', function () {
        var toggler = document.querySelector('.navbar-toggler');
        var collapse = document.querySelector('#navbarCollapse');
        if (toggler && collapse) {
            toggler.addEventListener('click', function () {
                var isOpen = collapse.classList.contains('show');
                collapse.classList.toggle('show', !isOpen);
                toggler.setAttribute('aria-expanded', String(!isOpen));
            });
            document.addEventListener('click', function (e) {
                if (navbar && !navbar.contains(e.target)) {
                    collapse.classList.remove('show');
                    toggler.setAttribute('aria-expanded', 'false');
                }
            });
        }
        document.querySelectorAll('[data-bs-toggle="dropdown"]').forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                var menu = toggle.nextElementSibling;
                var isOpen = menu && menu.classList.contains('show');
                document.querySelectorAll('.dropdown-menu.show').forEach(function (m) {
                    m.classList.remove('show');
                });
                if (!isOpen && menu) menu.classList.add('show');
            });
        });
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(function (m) {
                    m.classList.remove('show');
                });
            }
        });
    });

    function initAnimations() {
        if (window.innerWidth <= 768) return;
        if (!('IntersectionObserver' in window)) return;
        var elements = document.querySelectorAll('.wow');
        if (!elements.length) return;
        elements.forEach(function (el) { el.style.visibility = 'hidden'; });
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                var delay = el.getAttribute('data-wow-delay') || '0s';
                el.style.animationDelay = delay;
                el.style.visibility = 'visible';
                el.classList.add('animated');
                observer.unobserve(el);
            });
        }, { threshold: 0.1 });
        elements.forEach(function (el) { observer.observe(el); });
    }

    function initCounters() {
        var counters = document.querySelectorAll('.js-counter');
        if (!counters.length || !('IntersectionObserver' in window)) return;
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                var target = parseInt(el.getAttribute('data-target'), 10) || 0;
                var duration = 1500;
                var startTime = null;
                function step(ts) {
                    if (!startTime) startTime = ts;
                    var progress = Math.min((ts - startTime) / duration, 1);
                    el.textContent = Math.floor(progress * target);
                    if (progress < 1) requestAnimationFrame(step);
                    else el.textContent = target;
                }
                requestAnimationFrame(step);
                observer.unobserve(el);
            });
        }, { threshold: 0.5 });
        counters.forEach(function (el) { observer.observe(el); });
    }

    function initHeaderCarousel() {
        var carousel = document.querySelector('.header-carousel');
        if (!carousel) return;
        var items = Array.prototype.slice.call(carousel.querySelectorAll('.owl-carousel-item'));
        if (!items.length) return;
        var total = items.length, current = 0, timer = null;
        carousel.classList.add('owl-loaded');
        items.forEach(function (item, i) { if (i === 0) item.classList.add('active'); });
        
        var dotsWrap = document.createElement('div');
        dotsWrap.className = 'owl-dots';
        items.forEach(function (_, i) {
            var dot = document.createElement('button');
            dot.className = 'owl-dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            dotsWrap.appendChild(dot);
        });
        carousel.appendChild(dotsWrap);
        var dots = dotsWrap.querySelectorAll('.owl-dot');
        
        var navWrap = document.createElement('div');
        navWrap.className = 'owl-nav';
        navWrap.innerHTML = '<button class="owl-prev" aria-label="Previous slide"><i class="bi bi-chevron-left"></i></button><button class="owl-next" aria-label="Next slide"><i class="bi bi-chevron-right"></i></button>';
        carousel.appendChild(navWrap);

        function goTo(index) {
            var oldItem = items[current];
            oldItem.classList.remove('active', 'slide-in');
            oldItem.classList.add('slide-out');
            dots[current].classList.remove('active');
            current = ((index % total) + total) % total;
            items[current].classList.add('active', 'slide-in');
            dots[current].classList.add('active');
            setTimeout(function () { oldItem.classList.remove('slide-out'); }, 1200);
            var anims = items[current].querySelectorAll('.animated, .wow');
            anims.forEach(function (el) {
                el.classList.remove('animated');
                el.style.visibility = 'hidden';
                requestAnimationFrame(function() {
                    el.style.visibility = 'visible';
                    el.classList.add('animated');
                });
            });
        }
        function startAuto() { timer = setInterval(function () { goTo(current + 1); }, 5000); }
        function resetAuto() { clearInterval(timer); startAuto(); }
        navWrap.querySelector('.owl-prev').addEventListener('click', function () { goTo(current - 1); resetAuto(); });
        navWrap.querySelector('.owl-next').addEventListener('click', function () { goTo(current + 1); resetAuto(); });
        dots.forEach(function (dot, i) { dot.addEventListener('click', function () { goTo(i); resetAuto(); }); });
        startAuto();
    }

    function initTestimonialCarousel() {
        var carousel = document.querySelector('.testimonial-carousel');
        if (!carousel) return;
        var items = Array.prototype.slice.call(carousel.querySelectorAll('.testimonial-item'));
        if (!items.length) return;
        var total = items.length, current = 0;
        carousel.classList.add('owl-loaded');
        var contentWrap = document.createElement('div');
        contentWrap.className = 'testimonial-content';
        items.forEach(function (item) { contentWrap.appendChild(item); });
        carousel.appendChild(contentWrap);
        var dotsWrap = document.createElement('div');
        dotsWrap.className = 'owl-dots';
        items.forEach(function (item, i) {
            var dot = document.createElement('button');
            dot.className = 'owl-dot' + (i === 0 ? ' active' : '');
            var dotHtml = item.getAttribute('data-dot');
            if (dotHtml) dot.innerHTML = dotHtml;
            dot.setAttribute('aria-label', 'Testimonial ' + (i + 1));
            dotsWrap.appendChild(dot);
        });
        carousel.insertBefore(dotsWrap, contentWrap);
        var dots = dotsWrap.querySelectorAll('.owl-dot');
        items.forEach(function (item, i) { item.style.display = i === 0 ? 'block' : 'none'; });
        function goTo(index) {
            items[current].style.display = 'none';
            dots[current].classList.remove('active');
            current = ((index % total) + total) % total;
            items[current].style.display = 'block';
            dots[current].classList.add('active');
        }
        dots.forEach(function (dot, i) { dot.addEventListener('click', function () { goTo(i); }); });
        setInterval(function () { goTo(current + 1); }, 6000);
    }

    function initPortfolioFilter() {
        var filterList = document.querySelector('#portfolio-flters');
        if (!filterList) return;
        var portfolioItems = Array.prototype.slice.call(document.querySelectorAll('.portfolio-item'));
        if (!portfolioItems.length) return;
        filterList.querySelectorAll('li').forEach(function (li) {
            li.addEventListener('click', function () {
                filterList.querySelectorAll('li').forEach(function (l) { l.classList.remove('active'); });
                li.classList.add('active');
                var filter = li.getAttribute('data-filter');
                portfolioItems.forEach(function (item) {
                    var show = filter === '*' || item.classList.contains(filter.replace('.', ''));
                    item.style.display = show ? '' : 'none';
                });
            });
        });
    }

    function initLightbox() {
        var links = document.querySelectorAll('[data-lightbox]');
        if (!links.length) return;
        var overlay = document.createElement('div');
        overlay.id = 'lb-overlay';
        overlay.setAttribute('role', 'dialog');
        overlay.setAttribute('aria-modal', 'true');
        overlay.setAttribute('aria-label', 'Image viewer');
        overlay.style.cssText = 'display:none;position:fixed;inset:0;background:rgba(0,0,0,.92);z-index:9999;align-items:center;justify-content:center;';
        var img = document.createElement('img');
        img.style.cssText = 'max-width:90vw;max-height:90vh;border-radius:6px;object-fit:contain;box-shadow:0 8px 40px rgba(0,0,0,.6);';
        img.alt = 'Portfolio image';
        var closeBtn = document.createElement('button');
        closeBtn.innerHTML = '&times;';
        closeBtn.setAttribute('aria-label', 'Close');
        closeBtn.style.cssText = 'position:absolute;top:16px;right:24px;background:none;border:none;color:#fff;font-size:3rem;cursor:pointer;line-height:1;opacity:.8;';
        overlay.appendChild(closeBtn);
        overlay.appendChild(img);
        document.body.appendChild(overlay);
        function open(src) { img.src = src; overlay.style.display = 'flex'; document.body.style.overflow = 'hidden'; }
        function close() { overlay.style.display = 'none'; img.src = ''; document.body.style.overflow = ''; }
        links.forEach(function (link) {
            link.addEventListener('click', function (e) { e.preventDefault(); open(link.href); });
        });
        closeBtn.addEventListener('click', close);
        overlay.addEventListener('click', function (e) { if (e.target === overlay) close(); });
        document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
    }

    document.addEventListener('DOMContentLoaded', function () {
        initHeaderCarousel();
        initAnimations();   // mobile guard inside: skips on <= 768px
        initCounters();
        initTestimonialCarousel();
        initPortfolioFilter();
        initLightbox();
    });
    // Form Validation and Newsletter Handling
    document.addEventListener('DOMContentLoaded', function () {
        // Bootstrap Form Validation & SweetAlert Integration
        var forms = document.querySelectorAll('.needs-validation');
        forms.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                event.stopPropagation();

                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                } else {
                    // Show Success Alert
                    Swal.fire({
                        title: 'Submitted!',
                        text: 'Your request has been sent successfully. We will get back to you soon.',
                        icon: 'success',
                        confirmButtonColor: '#0A2540',
                        timer: 3000,
                        timerProgressBar: true
                    }).then(function() {
                        form.reset();
                        form.classList.remove('was-validated');
                    });
                }
            }, false);
        });

        // Newsletter Signup Logic with SweetAlert
        var newsletterBtn = document.querySelector('.newsletter-section button');
        if (newsletterBtn) {
            newsletterBtn.addEventListener('click', function(e) {
                var emailInput = newsletterBtn.parentElement.querySelector('input');
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (emailInput && !emailPattern.test(emailInput.value)) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Please enter a valid email address.',
                        icon: 'error',
                        confirmButtonColor: '#0A2540'
                    });
                } else if (emailInput && emailInput.value) {
                    Swal.fire({
                        title: 'Thank You!',
                        text: 'You have been subscribed to our newsletter.',
                        icon: 'success',
                        confirmButtonColor: '#0A2540'
                    });
                    emailInput.value = '';
                }
            });
        }
    });

})();
