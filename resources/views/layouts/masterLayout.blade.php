<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CoralBlue UI</title>
  <link rel="stylesheet" href={{ asset('css/style.css') }} />
</head>
<body>
  <div class="layout">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">CoralBlue</h2>
      @section('sidebar')
      <nav>
        <ul>
          <li><a href="#" class="active">🏠 Dashboard</a></li>
          <li><a href="#">📁 Projects</a></li>
          <li><a href="#">💬 Chat</a></li>
          <li><a href="#">⚙️ Settings</a></li>
        </ul>
      </nav>
      @show
    </aside>

    <!-- Main Content -->
    <div class="main">
      <!-- Top Navigation -->
      <header class="topbar">
        <div class="nav-links">
          <a href="/">Home</a>
          <a href="/about">About</a>
          <a href="/contact">Contact</a>
        </div>
        <button class="btn">👤 Account</button>
      </header>

      <!-- Page Content -->
      <main class="content">
       @yield('content')
      </main>

      <!-- Footer -->
      <footer class="footer">
        <p>&copy; 2025 CoralBlue. All rights reserved.</p>
      </footer>
    </div>
  </div>
  @stack('scripts')
</body>
</html>
