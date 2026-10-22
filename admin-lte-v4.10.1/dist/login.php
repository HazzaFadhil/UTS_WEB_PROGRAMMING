<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Login Page</title>
    <script>
      (() => {
        'use strict';
        const root = document.documentElement;
        if (root.getAttribute('data-lte-color-mode') === 'off') { return; }
        const STORAGE_KEY = 'lte-theme';
        let stored = null;
        try { stored = localStorage.getItem(STORAGE_KEY); } catch {}
        const authored = root.getAttribute('data-bs-theme');
        let resolved = 'light';
        if (stored === 'dark' || stored === 'light') { resolved = stored; } 
        else if (authored === 'dark' || authored === 'light') { resolved = authored; } 
        else if (globalThis.matchMedia('(prefers-color-scheme: dark)').matches) { resolved = 'dark'; }
        root.setAttribute('data-bs-theme', resolved);
        root.style.colorScheme = resolved;
        if (resolved !== authored) { root.setAttribute('data-lte-theme-resolved', ''); }
      })();
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <link rel="preload" href="./css/adminlte.css" as="style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.3.0/index.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.16.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
    <link class="preload" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    <!-- PATH FIXED: Mengarah langsung ke folder css tanpa ../ -->
    <link rel="stylesheet" href="./css/adminlte.css" />
  </head>
  <body class="login-page bg-body-secondary">
    <main class="login-box">
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <!-- Form mengarah langsung ke login_proses.php yang berada di folder yang sama -->
          <form action="login_proses.php" method="post"> 
            <div class="input-group mb-3"> 
              <input name="email" type="email" class="form-control" placeholder="Email" required /> 
              <div class="input-group-text"> <span class="bi bi-envelope"></span> </div> 
            </div> 

            <div class="input-group mb-3"> 
              <input name="password" type="password" class="form-control" placeholder="Password" required /> 
              <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div> 
            </div> 

            <div class="row"> 
              <div class="col-8"></div> 
              <div class="col-4"> 
                <div class="d-grid gap-2"> 
                  <button type="submit" class="btn btn-primary">Sign In</button> 
                </div> 
              </div> 
            </div> 
          </form>

          <p class="mb-0 mt-3">
            <a href="register.php" class="text-center"> Register a new membership </a>
          </p>
        </div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.16.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- PATH FIXED: Mengarah langsung ke folder js tanpa ../ -->
    <script src="./js/adminlte.js"></script>
  </body>
</html>
