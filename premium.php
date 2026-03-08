<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduParth CUET Accelerator | Premium</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .tracker-bar {
      height: 12px;
      background: var(--bg-color);
      border-radius: 6px;
      overflow: hidden;
      margin: 1rem 0;
      border: 1px solid var(--border-color);
    }
    .tracker-fill {
      height: 100%;
      background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
      width: 85%; /* Mock value */
    }
    .metric-card {
      text-align: center;
      padding: 1.5rem;
    }
    .metric-value {
      font-size: 2.5rem;
      font-family: 'Outfit';
      font-weight: 800;
      color: var(--accent-color);
    }
    .reappear-card {
      border-left: 4px solid var(--accent-color);
      padding: 1.5rem;
      background: rgba(236, 72, 153, 0.05);
    }
  </style>
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
      <a href="home.php">Back to Dashboard</a>
    </div>
  </nav>

  <div class="main-content" style="max-width: 1200px; margin: 0 auto;">
    
    <!-- Header -->
    <div class="premium-header animate-fade-up">
      <div class="accelerator-badge"><i class="fa-solid fa-crown"></i> EduParth CUET Accelerator</div>
      <h1 style="font-size: 3rem;">Your Fast Track to the Dream Campus.</h1>
      <p style="color: var(--text-muted); font-size: 1.2rem;">Complete structured program with AI-powered analytics and smart revision.</p>
    </div>

    <!-- Smart Notifications -->
    <div class="glass mb-3" style="padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; border: 1px solid var(--accent-color);">
      <div style="display: flex; align-items: center; gap: 1rem;">
        <i class="fa-solid fa-fire" style="color: #f97316; font-size: 1.5rem;"></i>
        <div>
          <strong style="display: block;">Motivation Check!</strong>
          <span class="text-muted">You are only <span style="color: var(--primary-color); font-weight: bold;">65 marks</span> away from your dream college. Keep pushing!</span>
        </div>
      </div>
      <div>
        <span class="badge" style="background: rgba(138, 21, 56, 0.1); padding: 0.5rem 1rem; border-radius: 20px; color: var(--primary-color); font-weight: 600;">142 Days Left</span>
      </div>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
      
      <!-- Left Column -->
      <div class="animate-fade-up animate-delay-1">
        <!-- Personal Progress Dashboard (Dream College Tracker) -->
        <div class="glass mb-2" style="padding: 2rem;">
          <h3><i class="fa-solid fa-bullseye" style="color: var(--primary-color);"></i> Target: SRCC - B.Com (Hons)</h3>
          
          <div class="tracker-bar mt-2">
            <div class="tracker-fill" style="width: 89%;"></div>
          </div>
          <div style="display: flex; justify-content: space-between; color: var(--text-muted); font-size: 0.9rem;">
            <span>Current Status: <strong style="color: var(--primary-color);">715/800</strong></span>
            <span>Target Cutoff: <strong>780/800</strong></span>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 1rem; margin-top: 2rem;">
             <div class="glass metric-card">
               <div class="metric-value" style="color: #10b981;">89%</div>
               <div class="text-muted font-size-sm">Overall Accuracy</div>
             </div>
             <div class="glass metric-card">
               <div class="metric-value">12</div>
               <div class="text-muted font-size-sm">Mocks Attempted</div>
             </div>
             <div class="glass metric-card">
               <div class="metric-value" style="color: var(--primary-color);">Top 5%</div>
               <div class="text-muted font-size-sm">Percentile</div>
             </div>
          </div>
        </div>

        <!-- Mocks & PYQ -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 2rem;">
           <div class="glass" style="padding: 2rem; text-align: center;">
             <i class="fa-solid fa-laptop-code" style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 1rem;"></i>
             <h4>Complete Mock Test System</h4>
             <p class="text-muted" style="font-size: 0.9rem;">Chapter-wise, Sectional, and Full subject tests on NTA-style UI.</p>
             <button class="btn btn-outline mt-1 w-100">Take a Mock</button>
           </div>
           <div class="glass" style="padding: 2rem; text-align: center;">
             <i class="fa-solid fa-book-open" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
             <h4>Topic-wise PYQ Practice</h4>
             <p class="text-muted" style="font-size: 0.9rem;">Master patterns by solving real past questions sorted by topic.</p>
             <button class="btn btn-outline mt-1 w-100">Practice PYQs</button>
           </div>
        </div>

      </div>

      <!-- Right Column -->
      <div class="animate-fade-up animate-delay-2">
        
        <!-- Reappear / Smart Revision Engine -->
        <div class="glass reappear-card mb-2">
          <div style="display: flex; justify-content: space-between; align-items: start;">
             <h3><i class="fa-solid fa-brain" style="color: var(--accent-color);"></i> Reappear Engine</h3>
             <span class="badge" style="background: var(--primary-color); color: white; padding: 2px 8px; border-radius: 12px; font-size: 0.8rem;">Pro</span>
          </div>
          <p class="text-muted mt-1 font-size-sm">Your intelligent revision system. We've collected your incorrect and flagged questions.</p>
          
          <div style="background: rgba(0,0,0,0.03); border: 1px solid var(--border-color); padding: 1rem; border-radius: 8px; margin-top: 1rem;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
               <span>Incorrect Questions</span>
               <strong style="color: #ef4444;">42</strong>
            </div>
            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
               <span>Flagged / Doubts</span>
               <strong style="color: #f59e0b;">15</strong>
            </div>
            <div style="display: flex; justify-content: space-between;">
               <span>Unattempted</span>
               <strong style="color: #64748b;">28</strong>
            </div>
          </div>

          <button class="btn btn-primary mt-2" style="width: 100%;">Start Weekly Revision Test</button>
        </div>

        <!-- Performance Analysis -->
        <div class="glass" style="padding: 1.5rem;">
          <h4><i class="fa-solid fa-chart-pie" style="color: #3b82f6;"></i> AI Analysis</h4>
          <p class="text-muted font-size-sm mb-1">Insights from your last Full Mock.</p>
          
          <div style="margin-bottom: 1rem;">
             <div style="font-size: 0.9rem; color: #10b981;"><i class="fa-solid fa-arrow-up"></i> Strong Areas</div>
             <div style="padding-left: 1.5rem; color: var(--text-muted); font-size: 0.85rem;">Accountancy (Partnership), Macroeconomics</div>
          </div>
          <div>
             <div style="font-size: 0.9rem; color: #ef4444;"><i class="fa-solid fa-arrow-down"></i> Needs Improvement</div>
             <div style="padding-left: 1.5rem; color: var(--text-muted); font-size: 0.85rem;">Business Studies (Financial Markets), Microeconomics</div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script>
    // Hide Loader on Page Load
    window.addEventListener('load', () => {
        setTimeout(() => {
            const loader = document.getElementById('page-loader');
            if (loader) loader.classList.add('loader-hidden');
        }, 500); 
    });
  </script>
</body>
</html>
