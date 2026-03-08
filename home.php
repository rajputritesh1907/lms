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
      <a href="home.php" class="sidebar-link active"><i class="fa-solid fa-house"></i> Home Dashboard</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-file-pen"></i> Attempt PYQs</a>
      <a href="#" class="sidebar-link"><i class="fa-solid fa-map-location-dot"></i> Explore Campuses</a>
      <a href="#" class="sidebar-link"><i class="fa-brands fa-whatsapp"></i> Communities</a>
      <a href="premium.php" class="sidebar-link" style="color: var(--accent-color); border: 1px solid var(--accent-glow);"><i class="fa-solid fa-rocket"></i> Accelerator Pro</a>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <h2 class="mb-2 animate-fade-up">Welcome Back, Aspirant 👋</h2>
      
      <!-- Feature 1: PYQ Shortcut -->
      <div class="glass p-3 mb-3 animate-fade-up animate-delay-1" style="padding: 2rem;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
          <div>
            <h3>NTA Pattern PYQ Practice</h3>
            <p class="text-muted">Start practicing previous year questions on an official-style interface.</p>
          </div>
          <button class="btn btn-primary">Start New Session</button>
        </div>
      </div>

      <!-- Feature 2: Explore Your Campus -->
      <h3 class="mb-1 animate-fade-up animate-delay-2">Explore Your College</h3>
      <div class="map-search-container map-bg-pattern glass animate-fade-up animate-delay-2">
        <!-- Interactive Map Pins -->
        <div class="college-pin" style="top: 30%; left: 40%;" onclick="openCollegeModal('SRCC')">
          <i class="fa-solid fa-location-dot"></i>
          <div class="pin-label">SRCC, Delhi Univ</div>
        </div>
        <div class="college-pin" style="top: 50%; left: 60%;" onclick="openCollegeModal('Hindu')">
          <i class="fa-solid fa-location-dot"></i>
          <div class="pin-label">Hindu College</div>
        </div>
        
        <div class="map-overlay">
          <h2 style="text-shadow: 0 2px 10px rgba(0,0,0,0.5);">Find Your Dream Campus</h2>
          <div class="search-bar mt-1">
            <i class="fa-solid fa-magnifying-glass" style="margin-left: 10px; color: var(--text-muted);"></i>
            <input type="text" placeholder="Search for colleges (e.g., Delhi University)...">
            <button onclick="openCollegeModal('Search Result')">Search</button>
          </div>
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

  <script>
    function openCollegeModal(name) {
      if(name !== 'Search Result') document.getElementById('modalCollegeName').innerText = name;
      document.getElementById('collegeModal').style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
    
    function closeModal() {
      document.getElementById('collegeModal').style.display = 'none';
      document.body.style.overflow = 'auto';
    }

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
