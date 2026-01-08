<?php
// index.php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Course Helpers - Website</title>

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="../css/styles.css"
    />
    <script src="js/app.js"></script>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="z-index: 50;">
      <div class="container-fluid px-4">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img
            src="assets/Online-Course-Helpers-768x538.png"
            alt="Online Course Helpers"
            class="img-fluid"
            style="height: 48px;"
          />
        </a>

        <!-- Mobile Toggle Button -->
        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
          style="color: white;"
        >
          <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto gap-3">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Platforms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Education Level</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <button class="btn btn-primary-custom">
                Live Chat <i class="fa fa-comments ms-2"></i>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <?php include 'include/hero_section.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>