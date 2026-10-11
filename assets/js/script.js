/**
 * KINEVA STUDIOS — FULL SCREEN FIT & ANTIGRAVITY CONTROLS
 * Supports full-screen section snapping, side dot navigation, keyboard shortcuts, FAQ, and forms
 */

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileMenu();
  initHeroModernInteractions();
  initSideDotNav();
  initKeyboardNav();
  initFaqAccordion();
  initServiceSelectTriggers();
  initContactForm();
  initSmoothScroll();
});

/**
 * Sticky Header Scroll State
 */
function initStickyHeader() {
  const header = document.getElementById('siteHeader');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 20) {
      header.classList.add('shadow-sm', 'bg-[#F8F9FA]/95');
      header.classList.remove('bg-[#F8F9FA]/90');
    } else {
      header.classList.remove('shadow-sm', 'bg-[#F8F9FA]/95');
      header.classList.add('bg-[#F8F9FA]/90');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/**
 * Mobile Navigation Drawer Toggle
 */
function initMobileMenu() {
  const toggleBtn = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  if (!toggleBtn || !navMenu) return;

  toggleBtn.addEventListener('click', () => {
    const isHidden = navMenu.classList.contains('hidden');
    if (isHidden) {
      navMenu.classList.remove('hidden');
      navMenu.classList.add('flex');
      toggleBtn.setAttribute('aria-expanded', 'true');
    } else {
      navMenu.classList.add('hidden');
      navMenu.classList.remove('flex');
      toggleBtn.setAttribute('aria-expanded', 'false');
    }
  });

  // Close when clicking internal links
  navMenu.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.add('hidden');
      navMenu.classList.remove('flex');
      toggleBtn.setAttribute('aria-expanded', 'false');
    });
  });
}

/**
 * Side Dot Navigation Indicator and Click Handler
 */
function initSideDotNav() {
  const dotsContainer = document.getElementById('sideNavDots');
  if (!dotsContainer) return;

  const dots = dotsContainer.querySelectorAll('.side-dot');
  const sections = document.querySelectorAll('.screen-section');

  // Dot click scrolls to corresponding section
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const targetId = dot.getAttribute('data-target');
      const targetSection = document.getElementById(targetId);
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // Observe active section to update dots
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -20% 0px',
    threshold: 0.4
  };

  const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        dots.forEach(dot => {
          if (dot.getAttribute('data-target') === id) {
            dot.classList.add('active');
          } else {
            dot.classList.remove('active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach(section => {
    sectionObserver.observe(section);
  });
}

/**
 * Keyboard Navigation (Up / Down arrows for full section jump)
 */
function initKeyboardNav() {
  const sections = Array.from(document.querySelectorAll('.screen-section'));
  if (!sections.length) return;

  window.addEventListener('keydown', (e) => {
    // Avoid hijacking keys if user is typing in form inputs
    const activeTag = document.activeElement.tagName.toLowerCase();
    if (activeTag === 'input' || activeTag === 'textarea' || activeTag === 'select') return;

    if (e.key === 'ArrowDown' || e.key === 'PageDown') {
      const currentIndex = getCurrentSectionIndex(sections);
      if (currentIndex < sections.length - 1) {
        e.preventDefault();
        sections[currentIndex + 1].scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    } else if (e.key === 'ArrowUp' || e.key === 'PageUp') {
      const currentIndex = getCurrentSectionIndex(sections);
      if (currentIndex > 0) {
        e.preventDefault();
        sections[currentIndex - 1].scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  });

  function getCurrentSectionIndex(sectionList) {
    const scrollPos = window.scrollY + window.innerHeight / 3;
    let closestIndex = 0;
    let minDistance = Infinity;

    sectionList.forEach((sec, idx) => {
      const secTop = sec.offsetTop;
      const distance = Math.abs(scrollPos - secTop);
      if (distance < minDistance) {
        minDistance = distance;
        closestIndex = idx;
      }
    });
    return closestIndex;
  }
}

/**
 * FAQ Accordion with Keyboard Support & Accessible ARIA States
 */
function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.ag-faq-item, .faq-item');
  if (!faqItems.length) return;

  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.ag-faq-question, .faq-question');
    const answerElem = item.querySelector('.ag-faq-answer, .faq-answer');

    if (!questionBtn || !answerElem) return;

    questionBtn.addEventListener('click', () => {
      const isExpanded = item.classList.contains('active');

      // Close other items
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
          const otherBtn = otherItem.querySelector('.ag-faq-question, .faq-question');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          const otherAnswer = otherItem.querySelector('.ag-faq-answer, .faq-answer');
          if (otherAnswer) otherAnswer.style.maxHeight = null;
        }
      });

      // Toggle current item
      if (!isExpanded) {
        item.classList.add('active');
        questionBtn.setAttribute('aria-expanded', 'true');
        answerElem.style.maxHeight = answerElem.scrollHeight + 'px';
      } else {
        item.classList.remove('active');
        questionBtn.setAttribute('aria-expanded', 'false');
        answerElem.style.maxHeight = null;
      }
    });
  });
}

/**
 * Pre-select Service in Contact Form Dropdown
 * Handles exact value match as well as resilient keyword fallback matching
 */
function initServiceSelectTriggers() {
  const serviceSelect = document.getElementById('serviceSelect');
  const selectButtons = document.querySelectorAll('.select-service-btn');
  if (!serviceSelect || !selectButtons.length) return;

  selectButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const targetService = btn.getAttribute('data-service-value');
      if (targetService) {
        let matched = false;
        // 1. Try exact match
        for (let i = 0; i < serviceSelect.options.length; i++) {
          if (serviceSelect.options[i].value === targetService) {
            serviceSelect.selectedIndex = i;
            matched = true;
            break;
          }
        }

        // 2. Fallback to keyword match if option text differs
        if (!matched) {
          const lowerTarget = targetService.toLowerCase();
          for (let i = 0; i < serviceSelect.options.length; i++) {
            const optVal = serviceSelect.options[i].value.toLowerCase();
            if (
              (lowerTarget.includes('landing') && optVal.includes('landing')) ||
              (lowerTarget.includes('woo') && optVal.includes('woo')) ||
              (lowerTarget.includes('store') && optVal.includes('store')) ||
              (lowerTarget.includes('figma') && optVal.includes('figma')) ||
              (lowerTarget.includes('redesign') && optVal.includes('redesign')) ||
              (lowerTarget.includes('fix') && optVal.includes('fix')) ||
              (lowerTarget.includes('custom') && optVal.includes('custom'))
            ) {
              serviceSelect.selectedIndex = i;
              matched = true;
              break;
            }
          }
        }

        // Highlight briefly
        serviceSelect.style.borderColor = '#111111';
        serviceSelect.style.boxShadow = '0 0 0 3px rgba(0, 0, 0, 0.12)';
        setTimeout(() => {
          serviceSelect.style.borderColor = '';
          serviceSelect.style.boxShadow = '';
        }, 1500);
      }
    });
  });
}

/**
 * Interactive Contact Form Handling & Validation
 */
function initContactForm() {
  const form = document.getElementById('projectForm');
  const successBox = document.getElementById('formSuccess');
  const resetBtn = document.getElementById('resetFormBtn');
  const submitBtn = document.getElementById('submitBtn');

  if (!form || !successBox) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    let isValid = true;

    const nameInput = document.getElementById('clientName');
    const businessInput = document.getElementById('businessName');
    const emailInput = document.getElementById('clientEmail');
    const serviceInput = document.getElementById('serviceSelect');
    const detailsInput = document.getElementById('projectDetails');

    const validateField = (input, condition) => {
      const group = input.closest('.form-group');
      if (!condition) {
        group.classList.add('has-error');
        isValid = false;
      } else {
        group.classList.remove('has-error');
      }
    };

    validateField(nameInput, nameInput.value.trim().length > 0);
    validateField(businessInput, businessInput.value.trim().length > 0);

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    validateField(emailInput, emailRegex.test(emailInput.value.trim()));

    validateField(serviceInput, serviceInput.value !== '');
    validateField(detailsInput, detailsInput.value.trim().length > 3);

    if (!isValid) {
      const firstError = form.querySelector('.has-error input, .has-error select, .has-error textarea');
      if (firstError) firstError.focus();
      return;
    }

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span>Processing...</span>';

    setTimeout(() => {
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<span>Submit Request</span><span>→</span>';
      successBox.classList.remove('hidden');
      successBox.classList.add('flex');
      form.reset();
    }, 600);
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      form.reset();
      form.querySelectorAll('.form-group').forEach(g => g.classList.remove('has-error'));
      successBox.classList.add('hidden');
      successBox.classList.remove('flex');
      const nameInput = document.getElementById('clientName');
      if (nameInput) nameInput.focus();
    });
  }

  form.querySelectorAll('input, select, textarea').forEach(input => {
    input.addEventListener('input', () => {
      const group = input.closest('.form-group');
      if (group) group.classList.remove('has-error');
    });
    input.addEventListener('change', () => {
      const group = input.closest('.form-group');
      if (group) group.classList.remove('has-error');
    });
  });
}

/**
 * Smooth scrolling for internal hash links with section snapping
 */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#' || targetId === '') return;

      const targetElem = document.querySelector(targetId);
      if (targetElem) {
        e.preventDefault();
        targetElem.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
}

/**
 * Modern Minimal Hero Ambient Interactions
 * Features a subtle cursor spotlight aura and gentle magnetic button micro-interactions
 */
function initHeroModernInteractions() {
  const heroSection = document.getElementById('hero');
  const spotlight = document.getElementById('heroSpotlight');
  if (!heroSection || !spotlight) return;

  let mouseX = 0, mouseY = 0;
  let currentX = 0, currentY = 0;
  let isHovered = false;

  // Track mouse coordinates over Hero
  heroSection.addEventListener('mousemove', (e) => {
    const rect = heroSection.getBoundingClientRect();
    mouseX = e.clientX - rect.left;
    mouseY = e.clientY - rect.top;
    isHovered = true;
    spotlight.style.opacity = '1';
  }, { passive: true });

  heroSection.addEventListener('mouseleave', () => {
    isHovered = false;
    spotlight.style.opacity = '0';
  });

  // Silky lerp loop for spotlight aura
  function updateSpotlight() {
    if (isHovered) {
      currentX += (mouseX - currentX) * 0.12;
      currentY += (mouseY - currentY) * 0.12;
      spotlight.style.setProperty('--mouse-x', `${currentX}px`);
      spotlight.style.setProperty('--mouse-y', `${currentY}px`);
    }
    requestAnimationFrame(updateSpotlight);
  }
  requestAnimationFrame(updateSpotlight);

  // Subtle magnetic attraction for CTA buttons & badge
  const magneticItems = heroSection.querySelectorAll('.magnetic-btn, .magnetic-item');
  magneticItems.forEach(item => {
    item.addEventListener('mousemove', (e) => {
      const rect = item.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      item.style.transform = `translate3d(${x * 0.18}px, ${y * 0.18}px, 0)`;
    });

    item.addEventListener('mouseleave', () => {
      item.style.transform = 'translate3d(0, 0, 0)';
    });
  });
}

