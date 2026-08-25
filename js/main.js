/* WiseClassPoint - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Study Framework & Retention Method Explorer
  const wiseButtons = document.querySelectorAll('.wise-btn');
  const wiseDisplay = document.getElementById('wise-detail');

  if (wiseButtons.length > 0 && wiseDisplay) {
    wiseButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        wiseButtons.forEach(b => b.classList.remove('active-wise'));
        this.classList.add('active-wise');
        const wiseName = this.getAttribute('data-wise');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        wiseDisplay.innerHTML = `
          <div class="wise-card" style="border-left: 4px solid var(--accent-cobalt); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-cobalt); font-size: 1.5rem; margin-bottom: 0.5rem;">${wiseName} Method Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-amber); font-size: 0.95rem;">Empirical Cognitive Benchmark: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Academic Pathway Matcher & Learning Style Quiz
  const wiseQuizButtons = document.querySelectorAll('.wise-quiz-btn');
  const wiseQuizResult = document.getElementById('wise-quiz-result');

  if (wiseQuizButtons.length > 0 && wiseQuizResult) {
    wiseQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        wiseQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        wiseQuizResult.innerHTML = `
          <div class="wise-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-cobalt);">
            <h4 style="color: var(--accent-cobalt); margin-bottom: 0.5rem;">Your Curated Academic Study Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
