<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduParth | CUET 2026 🎯 Preparation Platform</title>
  <meta name="description" content="EduParth is your complete CUET 2026 preparation platform. Mock tests, PYQs, expert mentorship, and smart revision system to get you into your dream college.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- Skeleton Loader -->
  <div class="loader-wrapper" id="page-loader">
    <div class="skeleton-container">
      <div class="skeleton-item skeleton-title"></div>
      <div class="skeleton-item skeleton-text"></div>
      <div class="skeleton-item skeleton-text-short"></div>
      <div class="skeleton-grid-box">
        <div class="skeleton-item skeleton-card-item"></div>
        <div class="skeleton-item skeleton-card-item"></div>
        <div class="skeleton-item skeleton-card-item"></div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-brand">
      <i class="fa-solid fa-graduation-cap"></i> Edu<span>Parth</span>
    </div>
    <div class="nav-links">
      <a href="#features">Features</a>
      <a href="home.php">Dashboard</a>
      <a href="premium.php" style="color: var(--accent-color); font-weight: bold;">Accelerator</a>
    </div>
    <a href="home.php" class="btn btn-primary">Sign In</a>
  </nav>

  

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-tagline">EduParth | CUET 2026 🎯</div>
    <h1 class="animate-fade-up">Until We Meet On Campus 🎓</h1>
    <p class="animate-fade-up animate-delay-1">All the resources you need to get into your dream college — in one place. Start your journey today.</p>
    
    <div class="countdown glass animate-fade-up animate-delay-2">
      <div class="countdown-item">
        <span class="number" id="days-left">142</span>
        <span class="label">Days Left</span>
      </div>
      <div class="countdown-item">
        <span class="number" id="hours-left">14</span>
        <span class="label">Hours</span>
      </div>
      <div class="countdown-item">
        <span class="number" id="mins-left">30</span>
        <span class="label">Mins</span>
      </div>
      <div class="countdown-item">
        <span class="number" id="secs-left">00</span>
        <span class="label">Secs</span>
      </div>
    </div>

    <a href="home.php" class="btn btn-primary btn-large mt-2 animate-fade-up animate-delay-3">Start Your Journey Today <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </section>

  <!-- Pricing Section -->
  <section class="pricing-section">
    <h2 class="section-title animate-fade-up">Choose Your Path to Success</h2>
    
    <div class="pricing-grid">
      <!-- Tier 1 -->
      <div class="pricing-card glass card-free animate-fade-up animate-delay-1">
        <h3 class="pricing-title">Basic Foundation</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Start your preparation completely free.</p>
        <div class="pricing-price">₹0<span>/forever</span></div>
        <ul class="pricing-features">
          <li><i class="fa-solid fa-circle-check"></i> PYQs Included</li>
          <li><i class="fa-solid fa-circle-check"></i> CUET Mentorship Community Access</li>
        </ul>
        <button class="btn btn-outline" style="width: 100%; border-color:#475569; color:#475569; margin-top: auto; border-radius: 30px;">Get Started Free</button>
      </div>

      <!-- Tier 2 -->
      <div class="pricing-card glass card-tier2 animate-fade-up animate-delay-2">
        <h3 class="pricing-title">Advanced Practice</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Evaluate yourself with Mock Tests.</p>
        <div class="pricing-price">₹999<span>/course</span></div>
        <ul class="pricing-features">
          <li><i class="fa-solid fa-circle-check"></i> <b>Mocks Tests</b></li>
          <li><i class="fa-solid fa-circle-check"></i> CUET Mentorship Community Access</li>
          <li><i class="fa-solid fa-circle-check"></i> Personal Tracking Dashboard</li>
        </ul>
        <button class="btn btn-outline" style="width: 100%; border-color:#3b82f6; color:#3b82f6; margin-top: auto; border-radius: 30px;">Enroll Now</button>
      </div>

      <!-- Tier 3 -->
      <div class="pricing-card glass card-tier3 popular animate-fade-up animate-delay-3" style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(24cf, 248, 255, 0.4) 100%);">
        <div class="popular-badge">POPULAR</div>
        <h3 class="pricing-title">Complete Accelerator</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">The best value for a serious aspirant.</p>
        <div class="pricing-price">₹2999<span>/course</span></div>
        <ul class="pricing-features">
          <li><i class="fa-solid fa-circle-check"></i> <b>Recording Lectures</b></li>
          <li><i class="fa-solid fa-circle-check"></i> Mocks Tests</li>
          <li><i class="fa-solid fa-circle-check"></i> CUET Mentorship Community Access</li>
          <li><i class="fa-solid fa-check"></i> Personal Tracking Dashboard</li>
          <li><i class="fa-solid fa-plus" style="color: var(`--text-muted);"></i> etc...</li>
        </ul>
        <button class="btn btn-primary" style="width: 100%; margin-top: auto; border-radius: 30px;">Join Accelerator</button>
      </div>

      <!-- Tier 4 -->
      <div class="pricing-card glass card-tier4 animate-fade-up animate-delay-3">
        <h3 class="pricing-title">Ultimate Pack</h3>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">Experience VIP 1-on-1 interaction.</p>
        <div class="pricing-price">₹5999<span>/course</span></div>
        <ul class="pricing-features">
          <li><i class="fa-solid fa-star" style="color: var(--accent-color);"></i> <b>Live Classes & Doubt Support</b></li>
          <li><i class="fa-solid fa-circle-check"></i> Recorded Lectures</li>
          <li><i class="fa-solid fa-circle-check"></i> Mocks Tests</li>
          <li><i class="fa-solid fa-circle-check"></i> CUET Mentorship Community Access</li>
          <li><i class="fa-solid fa-check"></i> Personal Tracking Dashboard</li>
          <li><i class="fa-solid fa-plus" style="color: var(--text-muted);"></i> etc...</li>
        </ul>
        <button class="btn btn-outline" style="width: 100%; border-color:#8b5cf6; color:#8b5cf6; margin-top: auto; border-radius: 30px; background: rgba(139, 92, 246, 0.05);">Enroll Ultimate</button>
      </div>
    </div>
  </section>

  
  <!-- Features Section -->
  <section id="features" class="features-section">
    <h2 class="section-title">Everything You Need To Succeed</h2>
    
    <div class="features-grid">
      <!-- 1 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-file-lines"></i></div>
        <h3 class="feature-title">Previous Year Questions</h3>
        <p class="feature-desc">CUET Previous Year Questions on an interface similar to the official NTA exam interface. Become comfortable with the real exam environment.</p>
      </div>

      <!-- 2 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-laptop-code"></i></div>
        <h3 class="feature-title">Mock Tests</h3>
        <p class="feature-desc">Full Subject Mocks and Sectional Mocks on an NTA-style interface. Practice complete exams and topic-wise preparation.</p>
      </div>

      <!-- 3 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
        <h3 class="feature-title">Guidance & Mentorship</h3>
        <p class="feature-desc">Preparation guidance, strategy sessions, and 24/7 doubt solving to ensure you always have access to help.</p>
      </div>

      <!-- 4 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-building-columns"></i></div>
        <h3 class="feature-title">Virtual Campus Tour</h3>
        <p class="feature-desc">Explore target colleges before admissions. See campus photos, courses offered, seat counts, and previous year cutoffs.</p>
      </div>

      <!-- 5 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-chart-line"></i></div>
        <h3 class="feature-title">Journey Tracking</h3>
        <p class="feature-desc">Personalized tracking to monitor your mock performance and see exactly how close you are to your dream college.</p>
      </div>

      <!-- 6 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-brands fa-whatsapp"></i></div>
        <h3 class="feature-title">Student Community</h3>
        <p class="feature-desc">Subject-wise WhatsApp communities to discuss doubts, stay updated, and maintain a competitive edge.</p>
      </div>

      <!-- 7 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-book-open-reader"></i></div>
        <h3 class="feature-title">Curated Resources</h3>
        <p class="feature-desc">Subject-wise roadmaps, one-pager revision notes, and compilations of all important preparation resources.</p>
      </div>

      <!-- 8 -->
      <div class="feature-card glass">
        <div class="feature-icon"><i class="fa-solid fa-brain"></i></div>
        <h3 class="feature-title">Smart Revision System</h3>
        <p class="feature-desc">Automatically collect incorrect and flagged questions into a 'Reappear' section. Re-attempt only what you struggled with.</p>
      </div>
    </div>
  </section>



  <!-- Final CTA -->
  <section class="cta-section">
    <div class="cta-box glass">
      <h2>Ready to Crack CUET 2026?</h2>
      <p>Join thousands of aspirants preparing on EduParth. Get all your resources organized in one premium platform.</p>
      <a href="home.php" class="btn btn-primary btn-large">JOIN US NOW</a>
    </div>
  </section>

  <script>
    // Set the target date for CUET 2026 (For example, May 15, 2026)
    const countDownDate = new Date("May 15, 2026 09:00:00").getTime();

    // Update the countdown every 1 second
    const updateCountdown = () => {
      const now = new Date().getTime();
      const distance = countDownDate - now;

      if (distance < 0) {
          document.getElementById('days-left').innerText = "0";
          document.getElementById('hours-left').innerText = "0";
          document.getElementById('mins-left').innerText = "0";
          document.getElementById('secs-left').innerText = "0";
          return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById('days-left').innerText = days;
      document.getElementById('hours-left').innerText = hours;
      document.getElementById('mins-left').innerText = minutes;
      document.getElementById('secs-left').innerText = seconds;
    };

    // Run initially to populate right away, then every 1 second (1000ms)
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // Hide Loader on Page Load
    window.addEventListener('load', () => {
        setTimeout(() => {
            const loader = document.getElementById('page-loader');
            if (loader) loader.classList.add('loader-hidden');
        }, 500); // 500ms artificial delay to show off the cool skull loader
    });
  </script>
</body>
</html>
