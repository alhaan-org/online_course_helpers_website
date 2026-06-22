<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php'; ?>

<body>
  <?php include 'include/navbar.php'; ?>
  <main>
    <section class="hero-section">
      <div class="container" data-aos="fade-up">
        <div class="d-lg-flex flex-column align-items-center justify-content-center text-center">
          <h1 class="hero-title mb-4 display-3">
            Dear,
            <span><?php echo $_SESSION['superhero']; ?></span>, Thank You for choosing this service
          </h1>
          <p class="hero-text mb-4 fs-3">
            Your form has been submitted and we will reply back shortly
          </p>
          <a href="/" class="btn btn-primary-custom px-5 py-3">
            Back to Home <i class="fa fa-home ms-2"></i>
          </a>
        </div>
      </div>
    </section>
  </main>
  <?php include 'include/footer.php' ?>
</body>

</html>