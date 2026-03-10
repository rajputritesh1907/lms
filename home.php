<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | EduParth Platform</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Specific styles for Map Search */
    .map-bg-pattern {
      background-image: 
        linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)),
        radial-gradient(#6366f1 1px, transparent 1px);
      background-size: cover, 40px 40px;
      background-position: center;
    }
    .college-pin {
      position: absolute;
      color: var(--accent-color);
      font-size: 2rem;
      cursor: pointer;
      transition: transform 0.3s;
      filter: drop-shadow(0 0 10px rgba(236,72,153,0.5));
    }
    .college-pin:hover {
      transform: scale(1.2) translateY(-5px);
    }
    .pin-label {
      background: var(--card-bg);
      backdrop-filter: blur(5px);
      padding: 0.2rem 0.5rem;
      border-radius: 4px;
      font-size: 0.8rem;
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      white-space: nowrap;
      border: 1px solid var(--border-color);
    }
    
    /* Updates card */
    .update-item {
      padding: 1rem;
      border-bottom: 1px solid var(--border-color);
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }
    .update-item:last-child {
      border-bottom: none;
    }
    .update-date {
      color: var(--primary-color);
      font-weight: 600;
      font-size: 0.9rem;
      min-width: 60px;
    }

    /* Modal for College Profile */
    .modal-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.7);
      backdrop-filter: blur(5px);
      z-index: 2000;
      justify-content: center;
      align-items: center;
    }
    .modal-content {
      background: var(--bg-color);
      width: 90%;
      max-width: 800px;
      max-height: 90vh;
      overflow-y: auto;
      border-radius: 16px;
      border: 1px solid var(--border-color);
      position: relative;
    }
    .modal-close {
      position: absolute;
      top: 1rem; right: 1rem;
      background: rgba(0,0,0,0.1);
      border: none;
      color: var(--text-main);
      width: 32px; height: 32px;
      border-radius: 50%;
      cursor: pointer;
      display: flex; justify-content: center; align-items: center;
    }
    .college-hero {
      height: 200px;
      background: linear-gradient(to top, var(--bg-color), transparent), url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=1000') center/cover;
    }
  </style>
</head>
<body>
  <div class="floating-bg">
    <!-- Existing Icons -->
    <i class="fa-solid fa-graduation-cap bg-icon" style="top: 10%; left: 5%; animation-duration: 25s; font-size: 2rem;"></i>
    <i class="fa-solid fa-book bg-icon" style="top: 20%; left: 80%; animation-duration: 30s; animation-delay: -5s;"></i>
    <i class="fa-solid fa-pencil bg-icon" style="top: 60%; left: 15%; animation-duration: 22s; animation-delay: -2s;"></i>
    <i class="fa-solid fa-flask bg-icon" style="top: 80%; left: 70%; animation-duration: 35s; animation-delay: -10s; font-size: 2.5rem;"></i>
    <i class="fa-solid fa-calculator bg-icon" style="top: 40%; left: 90%; animation-duration: 28s;"></i>
    <i class="fa-solid fa-brain bg-icon" style="top: 15%; left: 40%; animation-duration: 40s; animation-delay: -15s; opacity: 0.03;"></i>
    <i class="fa-solid fa-lightbulb bg-icon" style="top: 70%; left: 10%; animation-duration: 20s; animation-delay: -8s; color: var(--accent-color);"></i>
    <i class="fa-solid fa-globe bg-icon" style="top: 50%; left: 50%; animation-duration: 45s; animation-delay: -20s;"></i>
    
    <!-- New Icons -->
    <i class="fa-solid fa-microscope bg-icon" style="top: 30%; left: 20%; animation-duration: 32s; animation-delay: -3s;"></i>
    <i class="fa-solid fa-at bg-icon" style="top: 5%; left: 60%; animation-duration: 18s; animation-delay: -12s; font-size: 1.2rem;"></i>
    <i class="fa-solid fa-award bg-icon" style="top: 85%; left: 30%; animation-duration: 27s; animation-delay: -6s;"></i>
    <i class="fa-solid fa-language bg-icon" style="top: 45%; left: 5%; animation-duration: 38s; animation-delay: -9s;"></i>
    <i class="fa-solid fa-atom bg-icon" style="top: 12%; left: 95%; animation-duration: 24s; animation-delay: -18s; font-size: 1.8rem;"></i>
    <i class="fa-solid fa-medal bg-icon" style="top: 75%; left: 90%; animation-duration: 31s; animation-delay: -1s;"></i>
    <i class="fa-solid fa-pen-nib bg-icon" style="top: 55%; left: 45%; animation-duration: 34s; animation-delay: -7s;"></i>
    <i class="fa-solid fa-shapes bg-icon" style="top: 90%; left: 5%; animation-duration: 29s; animation-delay: -4s;"></i>
    <i class="fa-solid fa-vial bg-icon" style="top: 25%; left: 75%; animation-duration: 26s; animation-delay: -11s;"></i>
    <i class="fa-solid fa-compass bg-icon" style="top: 65%; left: 85%; animation-duration: 33s; animation-delay: -14s;"></i>
    <i class="fa-solid fa-user-graduate bg-icon" style="top: 40%; left: 55%; animation-duration: 35s; animation-delay: -2s; opacity: 0.03;"></i>
    <i class="fa-solid fa-file-invoice bg-icon" style="top: 5%; left: 25%; animation-duration: 22s; animation-delay: -5s;"></i>
  </div>

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
    <div class="user-profile" style="display: flex; align-items: center; gap: 1rem;">
       <span class="badge" style="background: rgba(138, 21, 56, 0.1); padding: 0.4rem 1rem; border-radius: 20px; font-size:0.9rem; color: var(--primary-color);">CUET Target: 750/800</span>
       <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--primary-color); display: flex; align-items: center; justify-content: center; font-weight: bold;">AS</div>
    </div>
  </nav>

  <div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <a href="home.php" class="sidebar-link active"><i class="fa-solid fa-house"></i> Dashboard</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-book-open"></i> My Courses</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-file-pen"></i> Assessments</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-chart-line"></i> Analytics</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-comments"></i> Community</a>
      <a href="premium.php" class="sidebar-link" style="color: var(--accent-color); border: 1px solid var(--accent-glow);"><i class="fa-solid fa-rocket"></i> Accelerator Pro</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <h2 class="mb-1 animate-fade-up">Welcome Back, Aspirant 👋</h2>
      
      <!-- Continue Learning Banner -->
      <div class="glass animate-fade-up animate-delay-1" style="padding: 1.5rem 2.5rem; display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; background: linear-gradient(135deg, rgba(138, 21, 56, 0.05) 0%, rgba(212, 175, 55, 0.05) 100%);">
        <div>
          <span class="badge" style="background: rgba(138, 21, 56, 0.1); color: var(--primary-color); padding: 0.3rem 0.8rem; border-radius: 12px; font-size: 0.8rem; font-weight: bold; margin-bottom: 0.8rem; display: inline-block;">Resume Module</span>
          <h3 style="font-size: 1.8rem; margin-bottom: 0.5rem; color: var(--text-main);">Microeconomics: Consumer Behaviour</h3>
          <p class="text-muted" style="margin-bottom: 1.5rem;">Chapter 2 • 15 mins left in this video</p>
          <div style="display: flex; align-items: center; gap: 1rem;">
             <div style="background: rgba(0,0,0,0.1); border-radius: 10px; height: 8px; width: 200px;">
                 <div style="background: var(--primary-color); height: 100%; border-radius: 10px; width: 65%;"></div>
             </div>
             <span style="font-size: 0.85rem; font-weight: 600;">65%</span>
          </div>
        </div>
        <button class="btn btn-primary" style="font-size: 1.1rem; padding: 1rem 2rem;"><i class="fa-solid fa-play"></i> Continue Learning</button>
      </div>
      
      <!-- Top Section: 2 Graphs -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;" class="animate-fade-up animate-delay-1">
        
        <!-- Graph 1: Overall Progress -->
        <div class="glass" style="padding: 1.5rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                <h3 style="margin: 0;"><i class="fa-solid fa-chart-pie" style="color: #10b981;"></i> Overall Progress</h3>
                <span class="badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981; padding: 0.2rem 0.6rem; border-radius: 12px; font-size: 0.8rem; font-weight: bold;">Past 30 Days</span>
            </div>
            <div style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
                <div style="position: relative; height: 160px; width: 160px; flex-shrink: 0; margin: 0 auto;">
                    <canvas id="performanceChart"></canvas>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                       <span style="font-size: 1.4rem; font-weight: bold; color: var(--primary-color);">85%</span>
                       <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: -4px;">Accuracy</div>
                    </div>
                </div>
                <div style="flex: 1; display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem; min-width: 150px;">
                    <div style="background: rgba(0,0,0,0.02); padding: 0.8rem; border-radius: 8px; border: 1px solid var(--border-color);">
                        <div style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 0.2rem;">Total Attempt</div>
                        <div style="font-size: 1.1rem; font-weight: bold; color: var(--text-main);">1,240</div>
                    </div>
                    <div style="background: rgba(16, 185, 129, 0.05); padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(16, 185, 129, 0.2);">
                        <div style="font-size: 0.75rem; color: #10b981; margin-bottom: 0.2rem;">Correct Answer</div>
                        <div style="font-size: 1.1rem; font-weight: bold; color: #10b981;">1,054</div>
                    </div>
                    <div style="background: rgba(239, 68, 68, 0.05); padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(239, 68, 68, 0.2);">
                        <div style="font-size: 0.75rem; color: #ef4444; margin-bottom: 0.2rem;">Wrong Answer</div>
                        <div style="font-size: 1.1rem; font-weight: bold; color: #ef4444;">120</div>
                    </div>
                    <div style="background: rgba(245, 158, 11, 0.05); padding: 0.8rem; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2);">
                        <div style="font-size: 0.75rem; color: #f59e0b; margin-bottom: 0.2rem;">Leave Question</div>
                        <div style="font-size: 1.1rem; font-weight: bold; color: #f59e0b;">66</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graph 2: Subject-wise Accuracy -->
        <div class="glass" style="padding: 1.5rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                <h3 style="margin: 0;"><i class="fa-solid fa-chart-bar" style="color: var(--accent-color);"></i> Subject Accuracy</h3>
                <span class="badge" style="background: rgba(212, 175, 55, 0.1); color: var(--accent-color); padding: 0.2rem 0.6rem; border-radius: 12px; font-size: 0.8rem; font-weight: bold;">Top: Economics</span>
            </div>
            <div style="position: relative; height: 180px; width: 100%;">
                <canvas id="subjectChart"></canvas>
            </div>
        </div>
      </div>

      <!-- Performance Insights Module (Separated) -->
      <h3 class="animate-fade-up animate-delay-1" style="font-size: 1.2rem; margin: 1rem 0 0.5rem 0;"><i class="fa-solid fa-lightbulb" style="color: var(--accent-color);"></i> Performance Insights</h3>
      <div class="glass animate-fade-up animate-delay-1" style="padding: 1rem 1.5rem; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; gap: 2rem; flex-wrap: wrap; background: linear-gradient(135deg, rgba(138, 21, 56, 0.02) 0%, rgba(212, 175, 55, 0.05) 100%); border: 1px solid rgba(212, 175, 55, 0.15);">
          <div style="display: flex; align-items: center; gap: 1rem;">
              <div style="width: 40px; height: 40px; background: rgba(16, 185, 129, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: #10b981; font-size: 1.1rem;">
                  <i class="fa-solid fa-trophy"></i>
              </div>
              <div>
                  <div style="font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; font-weight: bold;">Best Performer</div>
                  <div style="font-weight: 700; font-size: 1rem; color: var(--text-main);">Economics <span style="color: #10b981; font-size: 0.85rem; margin-left: 5px; font-weight: 500;">92% Accuracy</span></div>
              </div>
          </div>
          
          <div style="width: 1px; height: 35px; background: var(--border-color); display: none; @media (min-width: 600px) { display: block; }"></div>

          <div style="display: flex; align-items: center; gap: 1rem;">
              <div style="width: 40px; height: 40px; background: rgba(239, 68, 68, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: #ef4444; font-size: 1.1rem;">
                  <i class="fa-solid fa-triangle-exclamation"></i>
              </div>
              <div>
                  <div style="font-size: 0.7rem; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; font-weight: bold;">Improve Subject</div>
                  <div style="font-weight: 700; font-size: 1rem; color: var(--text-main);">Mathematics <span style="color: #ef4444; font-size: 0.85rem; margin-left: 5px; font-weight: 500;">65% Accuracy</span></div>
              </div>
          </div>
          
          <button class="btn btn-outline" style="padding: 0.4rem 1rem; font-size: 0.85rem; font-weight: bold;" onclick="openSubjectModal()">View Details</button>
      </div>

      <!-- Mock Tests Section -->
      <h3 class="mb-1 animate-fade-up animate-delay-1"><i class="fa-solid fa-file-pen"></i> Recent Mock Tests</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.2rem; margin-bottom: 1.5rem;" class="animate-fade-up animate-delay-1">
          <!-- Mock Card 1 -->
          <div class="glass" style="padding: 1.5rem; display: flex; flex-direction: column; gap: 1rem;">
              <div style="display: flex; justify-content: space-between;">
                 <span style="font-weight: 600; color: var(--primary-color);">Full Length Mock 1</span>
                 <span class="badge" style="background: rgba(16, 185, 129, 0.1); color: #10b981; font-size: 0.8rem; padding: 0.2rem 0.5rem; border-radius: 4px;">Completed</span>
              </div>
              <div style="font-size: 0.9rem; color: var(--text-muted);">Score: 710/800 | Accuracy: 88%</div>
              <button class="btn btn-outline" style="padding: 0.5rem; width: 100%; font-size: 0.9rem;">View Analysis</button>
          </div>
          <!-- Mock Card 2 -->
          <div class="glass" style="padding: 1.5rem; display: flex; flex-direction: column; gap: 1rem;">
              <div style="display: flex; justify-content: space-between;">
                 <span style="font-weight: 600; color: var(--primary-color);">Sectional: Economics</span>
                 <span class="badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; font-size: 0.8rem; padding: 0.2rem 0.5rem; border-radius: 4px;">Pending</span>
              </div>
              <div style="font-size: 0.9rem; color: var(--text-muted);">40 Questions | 45 Minutes</div>
              <button class="btn btn-primary" style="padding: 0.5rem; width: 100%; font-size: 0.9rem;">Start Now</button>
          </div>
          <!-- Mock Card 3 -->
          <div class="glass" style="padding: 1.5rem; display: flex; flex-direction: column; gap: 1rem;">
              <div style="display: flex; justify-content: space-between;">
                 <span style="font-weight: 600; color: var(--primary-color);">Sectional: Accountancy</span>
                 <span class="badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; font-size: 0.8rem; padding: 0.2rem 0.5rem; border-radius: 4px;">Pending</span>
              </div>
              <div style="font-size: 0.9rem; color: var(--text-muted);">40 Questions | 45 Minutes</div>
              <button class="btn btn-primary" style="padding: 0.5rem; width: 100%; font-size: 0.9rem;">Start Now</button>
          </div>
      </div>

      <!-- Video Classes Section -->
      <h3 class="mb-1 animate-fade-up animate-delay-2"><i class="fa-solid fa-play-circle"></i> Video Classes</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.2rem; margin-bottom: 1.5rem;" class="animate-fade-up animate-delay-2">
          <!-- Video 1 -->
          <div class="glass" style="overflow: hidden; border-radius: 12px;">
              <div style="height: 140px; background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=600') center/cover; position: relative;">
                  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                      <i class="fa-solid fa-play"></i>
                  </div>
              </div>
              <div style="padding: 1rem;">
                  <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Macroeconomics - Ch 1</h4>
                  <p style="font-size: 0.85rem; color: var(--text-muted);">Duration: 45:20</p>
              </div>
          </div>
          
          <!-- Video 2 -->
          <div class="glass" style="overflow: hidden; border-radius: 12px;">
              <div style="height: 140px; background: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80&w=600') center/cover; position: relative;">
                  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                      <i class="fa-solid fa-play"></i>
                  </div>
              </div>
              <div style="padding: 1rem;">
                  <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Accounting for Partnership Forms</h4>
                  <p style="font-size: 0.85rem; color: var(--text-muted);">Duration: 52:10</p>
              </div>
          </div>

          <!-- Video 3 -->
          <div class="glass" style="overflow: hidden; border-radius: 12px;">
              <div style="height: 140px; background: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&q=80&w=600') center/cover; position: relative;">
                  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(0,0,0,0.5); width: 40px; height: 40px; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                      <i class="fa-solid fa-play"></i>
                  </div>
              </div>
              <div style="padding: 1rem;">
                  <h4 style="margin-bottom: 0.5rem; font-size: 1rem;">Business Environment</h4>
                  <p style="font-size: 0.85rem; color: var(--text-muted);">Duration: 38:45</p>
              </div>
          </div>
      </div>

      <!-- Enrolled Courses -->
      <h3 class="mb-1 animate-fade-up animate-delay-2"><i class="fa-solid fa-book-open"></i> My Enrolled Courses</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.2rem; margin-bottom: 1.5rem;" class="animate-fade-up animate-delay-2">
          <!-- Course Card 1 -->
          <div class="glass" style="padding: 1.5rem; border-radius: 12px; transition: transform 0.3s; cursor: pointer;">
             <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 50px; height: 50px; background: rgba(138, 21, 56, 0.1); border-radius: 10px; display: flex; justify-content: center; align-items: center; color: var(--primary-color); font-size: 1.5rem;">
                   <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                   <h4 style="margin: 0; font-size: 1.1rem;">Economics Masterclass</h4>
                   <span style="font-size: 0.85rem; color: var(--text-muted);">Prof. Sharma</span>
                </div>
             </div>
             <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 0.5rem; font-weight: 600;">
                <span>Progress</span>
                <span>45%</span>
             </div>
             <div style="background: rgba(0,0,0,0.1); border-radius: 10px; height: 6px; width: 100%; margin-bottom: 1.5rem;">
                 <div style="background: var(--primary-color); height: 100%; border-radius: 10px; width: 45%;"></div>
             </div>
             <button class="btn btn-outline" style="width: 100%; padding: 0.6rem;">Go to Course</button>
          </div>
          <!-- Course Card 2 -->
          <div class="glass" style="padding: 1.5rem; border-radius: 12px; transition: transform 0.3s; cursor: pointer;">
             <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 50px; height: 50px; background: rgba(212, 175, 55, 0.2); border-radius: 10px; display: flex; justify-content: center; align-items: center; color: var(--accent-color); font-size: 1.5rem;">
                   <i class="fa-solid fa-calculator"></i>
                </div>
                <div>
                   <h4 style="margin: 0; font-size: 1.1rem;">Accountancy Basics</h4>
                   <span style="font-size: 0.85rem; color: var(--text-muted);">Prof. Gupta</span>
                </div>
             </div>
             <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 0.5rem; font-weight: 600;">
                <span>Progress</span>
                <span>80%</span>
             </div>
             <div style="background: rgba(0,0,0,0.1); border-radius: 10px; height: 6px; width: 100%; margin-bottom: 1.5rem;">
                 <div style="background: var(--accent-color); height: 100%; border-radius: 10px; width: 80%;"></div>
             </div>
             <button class="btn btn-outline" style="width: 100%; padding: 0.6rem;">Go to Course</button>
          </div>
          <!-- Course Card 3 -->
          <div class="glass" style="padding: 1.5rem; border-radius: 12px; transition: transform 0.3s; cursor: pointer;">
             <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.1); border-radius: 10px; display: flex; justify-content: center; align-items: center; color: #10b981; font-size: 1.5rem;">
                   <i class="fa-solid fa-briefcase"></i>
                </div>
                <div>
                   <h4 style="margin: 0; font-size: 1.1rem;">Business Studies</h4>
                   <span style="font-size: 0.85rem; color: var(--text-muted);">Prof. Verma</span>
                </div>
             </div>
             <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 0.5rem; font-weight: 600;">
                <span>Progress</span>
                <span>12%</span>
             </div>
             <div style="background: rgba(0,0,0,0.1); border-radius: 10px; height: 6px; width: 100%; margin-bottom: 1.5rem;">
                 <div style="background: #10b981; height: 100%; border-radius: 10px; width: 12%;"></div>
             </div>
             <button class="btn btn-outline" style="width: 100%; padding: 0.6rem;">Go to Course</button>
          </div>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        <!-- Feature 3: Updates -->
        <div class="glass" style="padding: 1.5rem;">
          <h3 class="mb-1"><i class="fa-solid fa-bell" style="color: #fbbf24;"></i> Latest Announcements</h3>
          <div class="update-item">
            <div class="update-date">Oct 15</div>
            <div>
              <strong>NTA Notification Released</strong>
              <div style="font-size: 0.85rem; color: var(--text-muted);">CUET UG 2026 exam dates have been tentatively scheduled.</div>
            </div>
          </div>
          <div class="update-item">
            <div class="update-date">Oct 10</div>
            <div>
              <strong>Registration Timeline</strong>
              <div style="font-size: 0.85rem; color: var(--text-muted);">Application forms will open in the first week of February.</div>
            </div>
          </div>
        </div>

        <!-- Feature 4: Communities -->
        <div class="glass" style="padding: 1.5rem;">
          <h3 class="mb-1"><i class="fa-brands fa-whatsapp" style="color: #25D366;"></i> WhatsApp Groups</h3>
          <div style="display: flex; flex-direction: column; gap: 1rem;">
             <div style="display: flex; justify-content: space-between; align-items: center; background: rgba(0,0,0,0.02); padding: 1rem; border-radius: 8px; border: 1px solid var(--border-color);">
               <div>
                  <strong>Commerce Stream Batch A</strong>
                  <div style="font-size: 0.85rem; color: var(--text-muted);">Accountancy, BST, Economics</div>
               </div>
               <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Join</button>
             </div>
             <div style="display: flex; justify-content: space-between; align-items: center; background: rgba(0,0,0,0.02); padding: 1rem; border-radius: 8px; border: 1px solid var(--border-color);">
               <div>
                  <strong>Humanities Target 800</strong>
                  <div style="font-size: 0.85rem; color: var(--text-muted);">History, Pol Sci, Geography</div>
               </div>
               <button class="btn btn-outline" style="padding: 0.5rem 1rem;">Join</button>
             </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- College Profile Modal -->
  <div class="modal-overlay" id="collegeModal">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
      <div class="college-hero"></div>
      <div style="padding: 2rem;">
        <h2 id="modalCollegeName">Shri Ram College of Commerce (SRCC)</h2>
        <p class="text-muted"><i class="fa-solid fa-location-dot"></i> University of Delhi, North Campus</p>
        
        <div class="mt-2 text-muted">
          A premier institution in the country for education in Business and Economics, known for consistently high cutoffs and excellent placements.
        </div>

        <h3 class="mt-2 text-main">Courses Offered & Seats</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1rem;">
           <div class="glass" style="padding: 1rem;">
             <h4>B.Com (Hons)</h4>
             <p style="color: var(--primary-color);">Seats: 719</p>
             <p style="font-size: 0.9rem; margin-top: 0.5rem;">Prev Cutoff: ~ 780/800</p>
           </div>
           <div class="glass" style="padding: 1rem;">
             <h4>BA Economics (Hons)</h4>
             <p style="color: var(--primary-color);">Seats: 155</p>
             <p style="font-size: 0.9rem; margin-top: 0.5rem;">Prev Cutoff: ~ 755/800</p>
           </div>
        </div>

        <div class="mt-3" style="text-align: center;">
          <button class="btn btn-primary" onclick="alert('Added to your Dream College Tracker!')"><i class="fa-solid fa-heart"></i> Set as Dream College</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Subject Analysis Modal -->
  <div class="modal-overlay" id="subjectModal">
    <div class="modal-content" style="max-width: 900px;">
      <button class="modal-close" onclick="closeSubjectModal()"><i class="fa-solid fa-xmark"></i></button>
      <div style="padding: 1.5rem 4rem 1.5rem 1.5rem; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
          <h2 style="margin: 0; font-size: 1.4rem;"><i class="fa-solid fa-chart-line" style="color: var(--primary-color);"></i> Performance Increment Analysis</h2>
          <div style="display: flex; align-items: center; gap: 0.8rem;">
              <span style="font-size: 0.85rem; color: var(--text-muted);">Filter Range:</span>
              <select id="incrementFilter" class="glass" style="padding: 0.4rem 0.8rem; border-radius: 8px; font-size: 0.85rem; font-weight: 600; cursor: pointer; border: 1px solid var(--border-color); color: var(--text-main);" onchange="updateIncrementChart()">
                  <option value="7">Last 7 Days</option>
                  <option value="30">Last 30 Days</option>
              </select>
          </div>
      </div>
      <div style="padding: 1.5rem;">
          <div style="display: grid; grid-template-columns: 1fr 300px; gap: 2rem;">
              <div class="glass" style="padding: 1.5rem; height: 350px;">
                  <canvas id="incrementChart"></canvas>
              </div>
              <div>
                  <h3 style="font-size: 1.1rem; margin-bottom: 1rem;">Subject Breakdown</h3>
                  <div style="display: flex; flex-direction: column; gap: 1rem;">
                      <div class="glass" style="padding: 1rem; border-left: 4px solid #10b981;">
                          <div style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase;">Economics (Overall)</div>
                          <div style="font-size: 1.4rem; font-weight: 800; color: #10b981;">92% <i class="fa-solid fa-caret-up" style="font-size: 0.9rem;"></i></div>
                          <div style="font-size: 0.8rem; color: var(--text-muted);">+4% incriment this week</div>
                      </div>
                      <div class="glass" style="padding: 1rem; border-left: 4px solid #ef4444;">
                          <div style="font-size: 0.75rem; color: var(--text-muted); text-transform: uppercase;">Mathematics (Overall)</div>
                          <div style="font-size: 1.4rem; font-weight: 800; color: #ef4444;">65% <i class="fa-solid fa-caret-up" style="font-size: 0.9rem;"></i></div>
                          <div style="font-size: 0.8rem; color: var(--text-muted);">+12% incriment this week</div>
                      </div>
                      <div style="background: rgba(138, 21, 56, 0.05); padding: 1rem; border-radius: 12px; border: 1px solid rgba(138, 21, 56, 0.1);">
                          <p style="font-size: 0.85rem; margin: 0; color: var(--primary-color);"><strong>Note:</strong> Your progress in Mathematics is increasing faster than Economics. Keep focuses on algebra questions.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // Initialize Performance Graph (Doughnut)
    document.addEventListener('DOMContentLoaded', function() {
      const perfCtx = document.getElementById('performanceChart').getContext('2d');
      new Chart(perfCtx, {
        type: 'doughnut',
        data: {
          labels: ['Correct', 'Wrong', 'Leave Question'],
          datasets: [{
            data: [1054, 120, 66],
            backgroundColor: [
              '#10b981', // green for correct
              '#ef4444', // red for wrong
              '#f59e0b'  // yellow for unattempted
            ],
            borderWidth: 0,
            hoverOffset: 4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '75%',
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: 'rgba(0,0,0,0.8)',
              padding: 10,
              titleFont: { family: "'Inter', sans-serif", size: 13 },
              bodyFont: { family: "'Inter', sans-serif", size: 14, weight: 'bold' },
              displayColors: true,
            }
          }
        }
      });

      // Initialize Subject Accuracy Graph
      const subjectCtx = document.getElementById('subjectChart').getContext('2d');
      new Chart(subjectCtx, {
        type: 'bar',
        data: {
          labels: ['Eco', 'Acc', 'BST', 'English', 'Maths'],
          datasets: [{
            label: 'Correct Answers (%)',
            data: [92, 85, 78, 88, 65],
            backgroundColor: 'rgba(212, 175, 55, 0.8)', // accent color
            borderRadius: 6,
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: 'rgba(0,0,0,0.8)',
              padding: 10,
              titleFont: { family: "'Inter', sans-serif", size: 13 },
              bodyFont: { family: "'Inter', sans-serif", size: 14, weight: 'bold' },
              displayColors: false,
              callbacks: {
                label: function(context) { return context.parsed.y + '% Accuracy'; }
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              max: 100,
              grid: { color: 'rgba(0,0,0,0.05)', drawBorder: false },
              ticks: { font: { family: "'Inter', sans-serif", size: 11 }, color: '#6b7280', stepSize: 20 }
            },
            x: {
              grid: { display: false, drawBorder: false },
              ticks: { font: { family: "'Inter', sans-serif", size: 11 }, color: '#6b7280' }
            }
          }
        }
      });
    });

    function openCollegeModal(name) {
      if(name !== 'Search Result') document.getElementById('modalCollegeName').innerText = name;
      document.getElementById('collegeModal').style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
      document.getElementById('collegeModal').style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    let incrementChart;

    function openSubjectModal() {
      document.getElementById('subjectModal').style.display = 'flex';
      document.body.style.overflow = 'hidden';
      setTimeout(initIncrementChart, 100);
    }

    function closeSubjectModal() {
      document.getElementById('subjectModal').style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    function initIncrementChart() {
      if (incrementChart) {
          updateIncrementChart();
          return;
      }
      
      const ctx = document.getElementById('incrementChart').getContext('2d');
      const data = getMockIncrementData(7);
      
      incrementChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: data.labels,
          datasets: [{
            label: 'Economics',
            data: data.eco,
            borderColor: '#10b981',
            backgroundColor: 'rgba(16, 185, 129, 0.1)',
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            borderWidth: 3
          }, {
            label: 'Mathematics',
            data: data.math,
            borderColor: '#ef4444',
            backgroundColor: 'rgba(239, 68, 68, 0.1)',
            fill: true,
            tension: 0.4,
            pointRadius: 4,
            borderWidth: 3
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { 
                position: 'top',
                labels: { font: { family: "'Inter', sans-serif", weight: '600' } }
            }
          },
          scales: {
            y: {
              beginAtZero: false,
              grid: { color: 'rgba(0,0,0,0.05)' },
              ticks: { callback: value => value + '%' }
            },
            x: { grid: { display: false } }
          }
        }
      });
    }

    function updateIncrementChart() {
      const days = document.getElementById('incrementFilter').value;
      const data = getMockIncrementData(days);
      
      incrementChart.data.labels = data.labels;
      incrementChart.data.datasets[0].data = data.eco;
      incrementChart.data.datasets[1].data = data.math;
      incrementChart.update();
    }

    function getMockIncrementData(days) {
      const labels = [];
      const eco = [];
      const math = [];
      
      for (let i = days - 1; i >= 0; i--) {
        const d = new Date();
        d.setDate(d.getDate() - i);
        labels.push(d.toLocaleDateString('en-US', { weekday: 'short' }));
        
        // Mocking steady progress
        const dayFactor = (days - i) / days;
        eco.push(88 + Math.floor(Math.random() * 2) + Math.floor(dayFactor * 4));
        math.push(50 + Math.floor(Math.random() * 5) + Math.floor(dayFactor * 15));
      }
      
      return { labels, eco, math };
    }

    // Hide Loader on Page Load
    window.addEventListener('load', () => {
        setTimeout(() => {
            const loader = document.getElementById('page-loader');
            if (loader) {
                loader.classList.add('loader-hidden');
                // Ensure it's removed from layout after transition
                setTimeout(() => loader.style.display = 'none', 500);
            }
        }, 500); 
    });
  </script>
</body>
</html>
