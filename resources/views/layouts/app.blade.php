<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title') – Aljun B. Dalman Portfolio</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Enhanced Theme Styles -->
  <style>
    :root {
      scroll-behavior: smooth;
      --transition-speed: 0.3s;
    }

    /* Dark mode base */
    [data-bs-theme="dark"] {
      background-color: #121212;
      color: #e9ecef;
      background-image: radial-gradient(circle at top left, #1c1c1c, #121212);
      background-attachment: fixed;
      background-size: cover;
    }

    /* Dark mode components */
    [data-bs-theme="dark"] .navbar,
    [data-bs-theme="dark"] .card,
    [data-bs-theme="dark"] .dropdown-menu,
    [data-bs-theme="dark"] .modal-content,
    [data-bs-theme="dark"] .list-group-item,
    [data-bs-theme="dark"] [data-theme-sensitive] {
      background-color: #1c1c1c !important;
      color: #e9ecef !important;
    }

    /* Buttons */
    [data-bs-theme="dark"] .btn-primary {
      background-color: #0d6efd;
      border-color: #0d6efd;
      color: #fff;
    }

    [data-bs-theme="dark"] .btn-outline-light {
      border-color: #e9ecef;
      color: #e9ecef;
    }
    [data-bs-theme="dark"] .btn-outline-light:hover {
      background-color: #e9ecef;
      color: #121212;
    }

    /* Links */
    [data-bs-theme="dark"] a { color: #66b2ff; }
    [data-bs-theme="dark"] a:hover { color: #99ccff; }

    /* Smooth transitions */
    html, body, main, header, footer,
    .navbar, .card, .dropdown-menu,
    .modal-content, .list-group-item,
    .btn, a {
      transition: background-color var(--transition-speed) ease,
                  color var(--transition-speed) ease,
                  background-image var(--transition-speed) ease;
    }

    /* Dropdown submenu */
    .dropdown-submenu { position: relative; }
    .dropdown-submenu .dropdown-menu {
      top: 0; left: 100%; margin-top: -1px;
    }

    /* Fixed-size table */
    .table-fixed { table-layout: fixed; width: 100%; }
    .table-fixed th, .table-fixed td {
      overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
    }

    /* Floating Buttons */
    #back-to-top, #theme-toggle {
      position: fixed;
      z-index: 999;
      width: 44px;
      height: 44px;
      font-size: 1.2rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    #back-to-top {
      bottom: 20px;
      right: 20px;
      opacity: 0;
      pointer-events: none;
      transition: opacity var(--transition-speed) ease;
    }
    #back-to-top.show {
      opacity: 1;
      pointer-events: auto;
    }

    #theme-toggle {
      bottom: 74px;
      right: 20px;
    }

    /* Button hover animation */
    .btn {
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }

    /* Reduced motion preference */
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      .btn, a { transition: none !important; }
    }
  </style>

  @stack('styles')
</head>
<body class="bg-body" role="document">

  @include('partials.header')

  <main role="main">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Back to Top Button -->
  <button id="back-to-top" class="btn btn-primary shadow" title="Back to top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- Theme Toggle Button -->
  <button id="theme-toggle" class="btn btn-outline-secondary shadow" title="Switch Theme" aria-label="Toggle theme">
    <i class="fas fa-moon"></i>
  </button>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Back to Top Script -->
  <script>
    const backToTop = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    });
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  </script>

  <!-- Dropdown Submenu Fix -->
  <script>
    document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();
        const submenu = el.nextElementSibling;
        document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(openMenu => {
          if (openMenu !== submenu) openMenu.classList.remove('show');
        });
        if (submenu && submenu.classList.contains('dropdown-menu')) {
          submenu.classList.toggle('show');
        }
      });
    });

    document.addEventListener('click', e => {
      document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(submenu => {
        if (!submenu.contains(e.target)) submenu.classList.remove('show');
      });
    });
  </script>

  <!-- Theme Toggle Script -->
  <script>
    const toggleBtn = document.getElementById('theme-toggle');
    const html = document.documentElement;

    function applyTheme(theme) {
      html.setAttribute('data-bs-theme', theme);
      localStorage.setItem('theme', theme);
      toggleBtn.innerHTML = theme === 'dark'
        ? '<i class="fas fa-sun"></i>'
        : '<i class="fas fa-moon"></i>';
      toggleBtn.setAttribute('title', theme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode');
    }

    // Initialize theme
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    applyTheme(savedTheme || (prefersDark ? 'dark' : 'light'));

    toggleBtn.addEventListener('click', () => {
      const current = html.getAttribute('data-bs-theme');
      applyTheme(current === 'dark' ? 'light' : 'dark');
    });
  </script>

  @stack('scripts')
</body>
</html>
