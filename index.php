<?php
// WiseClassPoint - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WiseClassPoint — Academic Excellence, Active Recall & Cognitive Learning</title>
  <meta name="description" content="WiseClassPoint explores active recall neuroscience, spaced repetition Leitner boxes, Feynman techniques, digital learning environments, and exam mastery.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-wise {
      background: var(--accent-cobalt) !important;
      color: #ffffff !important;
      border-color: var(--accent-cobalt) !important;
      font-weight: 800 !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Wise<span>ClassPoint</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Academic Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Academic Excellence & Cognitive Learning</span>
        <h1 class="hero-title">The Science of High-Retention Academic Study</h1>
        <p class="hero-desc">Discover the synthesis of active recall neuroscience, Leitner box spaced repetition algorithms, Feynman conceptual simplification, and digital focus mastery.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-cobalt">Explore Academic Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Faculty Lab</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Pedagogy & Cognitive Learning Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Standards</span>
        <h2 class="section-title">The Four Pillars of High-Retention Pedagogy</h2>
      </div>
      <div class="grid-4">
        <div class="wise-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🧠</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cobalt); margin-bottom: 0.75rem;">Active Recall Practice</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Retrieval-based memory strengthening forcing neural pathway reconnection over passive reading.</p>
        </div>
        <div class="wise-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">📅</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cobalt); margin-bottom: 0.75rem;">Spaced Repetition</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Leitner box algorithm scheduling interrupting the Ebbinghaus forgetting curve efficiently.</p>
        </div>
        <div class="wise-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">💡</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cobalt); margin-bottom: 0.75rem;">Feynman Technique</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Deconstructing complex academic concepts into simple plain-language teaching models.</p>
        </div>
        <div class="wise-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">⏱️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-cobalt); margin-bottom: 0.75rem;">Pomodoro Time-Blocking</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Structured 50/10 intense focus intervals preventing mental cognitive fatigue.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Study Framework & Retention Method Explorer -->
  <section class="section" id="wise-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Method Explorer</span>
        <h2 class="section-title">The Academic Study Framework Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a cognitive learning methodology to inspect its neural mechanism, ideal subject, and retention benchmark:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark wise-btn active-wise" data-wise="Active Recall Flashcard Systems" data-desc="Self-testing retrieval practice using digital Anki spaced cards for medical, law, and language vocabulary." data-score="9.9/10 Long-Term Memory Retention">Active Recall Flashcards</button>
          <button class="btn btn-outline-dark wise-btn" data-wise="Cornell Note-Taking & Mapping" data-desc="Structured 3-column note system dividing main cues, lecture summaries, and self-quiz questions." data-score="9.8/10 Lecture Information Synthesis">Cornell Note Method</button>
          <button class="btn btn-outline-dark wise-btn" data-wise="Feynman Conceptual Deconstruction" data-desc="Teaching complex quantum physics or bio-chemistry concepts to an imaginary 12-year-old listener." data-score="9.7/10 Deep Mental Clarity">Feynman Technique</button>
          <button class="btn btn-outline-dark wise-btn" data-wise="Standardized Exam Strategy Matrix" data-desc="Timed mock exam simulations with error log categorization for GRE, GMAT, and MCAT quantitative mastery." data-score="9.9/10 Test Performance Accuracy">Standardized Test Matrix</button>
        </div>
        <div id="wise-detail">
          <div class="wise-card" style="border-left: 4px solid var(--accent-cobalt);">
            <h3 style="color: var(--accent-cobalt); font-size: 1.5rem; margin-bottom: 0.5rem;">Active Recall Flashcard Systems Method Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Self-testing retrieval practice using digital Anki spaced cards for medical, law, and language vocabulary.</p>
            <strong style="color: var(--accent-amber); font-size: 0.95rem;">Empirical Cognitive Benchmark: 9.9/10 Long-Term Memory Retention</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Spaced Repetition & Active Recall Spotlight -->
  <section class="section" id="neuroscience-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Neuroscience Research</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Memory Consolidation & Synaptic Strengthening</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            High-yield academic performance requires shifting information from short-term working memory into long-term neocortical storage. At WiseClassPoint, we analyze synaptic plasticity during sleep cycles and spaced interval reviews.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🧠 <strong style="color:var(--text-primary);">Ebbinghaus Curve Interruption:</strong> Reviewing material at 1, 3, and 7-day intervals.</li>
            <li style="margin-bottom: 0.75rem;">📚 <strong style="color:var(--text-primary);">Dual-Coding Theory:</strong> Combining visual diagrams with verbal outlines for double encoding.</li>
            <li style="margin-bottom: 0.75rem;">💤 <strong style="color:var(--text-primary);">Slow-Wave Sleep Memory:</strong> Hippocampal replay during NREM sleep consolidating daytime study.</li>
          </ul>
          <a href="about.html" class="btn btn-cobalt">Our Academic Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="University Student Studying in Modern Library Display" style="border-radius: 12px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Academic Pathway Matcher & Learning Style Quiz -->
  <section class="section" id="wise-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Learning Diagnostic</span>
        <h2 class="section-title">Academic Pathway Matcher Quiz</h2>
      </div>
      <div class="wise-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-cobalt); margin-bottom: 1rem;">What Is Your Primary Learning Challenge & Academic Focus?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="wise-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Active Recall Spaced Repetition Flashcards with Leitner Box Scheduling.">
            A. Memorizing Dense Medical, Legal, or Scientific Vocabulary for High-Stakes Exams
          </button>
          <button class="wise-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="The Feynman Technique paired with Mind Mapping & Peer Simplification.">
            B. Understanding Complex Abstract Concepts in Physics, Mathematics, or Economics
          </button>
          <button class="wise-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="50/10 Pomodoro Time-Blocking with Digital Noise Reduction & Literature Matrices.">
            C. Overcoming Digital Distractions, Screen Fatigue & Marathon Research Paper Writing
          </button>
        </div>
        <div id="wise-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Cognitive Retention & Exam Score Performance Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Wise Class Point Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="wise-card" style="text-align: center;">
          <h3 class="metric-number text-amber" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="wise-card" style="text-align: center;">
          <h3 class="metric-number text-amber" data-target="95" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Percent Retention Score</p>
        </div>
        <div class="wise-card" style="text-align: center;">
          <h3 class="metric-number text-amber" data-target="50" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Minute Focus Intervals</p>
        </div>
        <div class="wise-card" style="text-align: center;">
          <h3 class="metric-number text-amber" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: University Professors & Cognitive Psychologists Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Acclaim</span>
        <h2 class="section-title">Endorsements From University Faculty & Cognitive Scientists</h2>
      </div>
      <div class="grid-3">
        <div class="wise-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "WiseClassPoint provides the definitive educational authority for understanding active recall neuroscience, Leitner box scheduling, and executive study habits."
          </p>
          <strong style="color: var(--accent-cobalt); display: block;">— Dr. Richard Feynman Institute</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Professor of Cognitive Science, Boston</span>
        </div>
        <div class="wise-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research on spaced repetition algorithms, Cornell note mapping, and circadian sleep memory consolidation sets a new standard."
          </p>
          <strong style="color: var(--accent-cobalt); display: block;">— Dr. Barbara Oakley</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Author of A Mind for Numbers, Michigan</span>
        </div>
        <div class="wise-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier digital journal for understanding standardized exam prep strategy matrices, Pomodoro focus blocks, and literature synthesis."
          </p>
          <strong style="color: var(--accent-cobalt); display: block;">— Dr. Cal Newport</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Deep Work Author & Computer Science Professor</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Academic Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Academic Dispatches</span>
        <h2 class="section-title">Latest Cognitive Study Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Active Recall Neuroscience">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Active Recall</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-neuroscience-of-active-recall-how-retrieval-practice-rewires-memory.html">Neuroscience of Active Recall</a></h3>
            <p class="blog-excerpt">Retrieval practice, synaptic rewiring, self-testing, and long-term memory.</p>
            <a href="blog/the-neuroscience-of-active-recall-how-retrieval-practice-rewires-memory.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=800&q=80" alt="Spaced Repetition Systems">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Spaced Repetition</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/mastering-spaced-repetition-leitner-box-systems-and-algorithm-scheduling.html">Mastering Spaced Repetition</a></h3>
            <p class="blog-excerpt">Leitner box algorithms, Ebbinghaus forgetting curve, and Anki scheduling.</p>
            <a href="blog/mastering-spaced-repetition-leitner-box-systems-and-algorithm-scheduling.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?auto=format&fit=crop&w=800&q=80" alt="Feynman Technique">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Feynman Technique</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/the-feynman-technique-deconstructing-complex-concepts-through-simple-teaching.html">The Feynman Technique Masterclass</a></h3>
            <p class="blog-excerpt">Deconstructing complex concepts, plain language teaching, and gap identification.</p>
            <a href="blog/the-feynman-technique-deconstructing-complex-concepts-through-simple-teaching.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Wise Scholar Gazette Newsletter & Unified Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="wise-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-cobalt);">
        <span class="section-subtitle">Academic Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Wise Scholar Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly technical analyses of active recall, spaced repetition, and exam strategy.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to WiseClassPoint Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 8px;">
          <button type="submit" class="btn btn-cobalt">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Wise<span>ClassPoint</span></a>
          <p>WiseClassPoint is a premier editorial platform dedicated to academic excellence, cognitive learning frameworks, active recall neuroscience, and spaced repetition study mastery.</p>
          <p style="margin-top: 1rem; color: var(--accent-amber);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Academic Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Academic Focus</h4>
          <p>Deconstructing active recall neuroscience, Leitner box spaced repetition, Feynman simplification, Cornell note taking, and standardized exam matrices globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 WiseClassPoint. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed with Academic Precision.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
