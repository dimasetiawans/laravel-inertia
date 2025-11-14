<template>
  <div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#">
          MyWebsite
        </a>

        <div class="d-flex">
          <a href="/login" class="btn btn-primary">
            Sign In
          </a>
        </div>
      </div>
    </nav>

    <!-- HERO SECTION -->
    <header class="hero d-flex align-items-center">
      <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3">Welcome to My Website</h1>
        <p class="lead text-muted mb-4">
          A simple homepage built with Bootstrap 5 + Inertia.
        </p>

        <a href="/register" class="btn btn-lg btn-primary">Get Started</a>
      </div>
    </header>

    <!-- FOOTER -->
    <footer class="text-center mt-5 py-4 text-muted small">
      © {{ new Date().getFullYear() }} – MyWebsite
    </footer>
  </div>
</template>

<style scoped>
.hero {
  height: 75vh;
  background: #f8f9fa;
}
</style>
