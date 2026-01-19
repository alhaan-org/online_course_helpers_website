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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid px-4">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
          <img src="assets/Online-Course-Helpers-768x538.png" alt="Online Course Helpers" class="img-fluid"
            style="height: 80px;" />
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler order-lg-last border-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
          style="color: white;">
          <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto gap-3 align-items-center">
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
  </header>

  <main> <!-- Hero Section -->
    <section class="hero-section">
      <div class="d-flex flex-wrap align-items-center justify-content-center p-5">
        <div class="row d-flex align-items-center justify-content-between g-4">
          <!-- Left Content -->
          <div class="col-lg-7">
            <h1 class="hero-title mb-4" style="font-size: clamp(2rem, 5vw, 2.25rem);">
              Hire Professional Online Course Helpers For Extra College Credits
            </h1>
            <p class="hero-text mb-4">
              Want an expert for your online course? We offer the best online
              course help in USA through professionals. We handle everything
              from coursework to exams, quizzes, and assignments. Let's get you
              additional credits fast.
            </p>

            <div class="d-flex flex-wrap gap-3 mb-4">
              <p class="feature-item">
                <i class="fa fa-file feature-icon"></i>
                <span>Original content</span>
              </p>
              <p class="feature-item">
                <i class="fa fa-handshake feature-icon"></i>
                <span>Timely Submissions</span>
              </p>
              <p class="feature-item">
                <i class="fa fa-file-text feature-icon"></i>
                <span>Expert Course Takers</span>
              </p>
            </div>

            <div class="d-flex align-items-center flex-wrap gap-3 mb-4">
              <small class="trusted-by">Trusted By:</small>
              <div class="d-flex gap-3 align-items-center">
                <img src="../assets/banner-logo-new.png" alt="Leader Badge" class="trusted-by-logo" />
              </div>
            </div>

            <button class="btn btn-primary-custom">
              Live Chat <i class="fa fa-comments ms-2"></i>
            </button>
          </div>

          <!-- Right Form -->
          <div class="col-lg-5">
            <div class="hero-form-card">
              <div class="limited-offer-badge">
                <img src="../assets/limited-offer-1024x613.webp" alt="Limited Offer" />
              </div>
              <h4 class="mb-4 text-center fw-bold text-dark">
                Save Upto 50% On First Order
              </h4>

              <form id="contactForm">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name" required />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" required />
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone No</label>
                  <input type="tel" class="form-control" id="phone" placeholder="Phone No" required />
                </div>
                <div class="mb-4">
                  <label for="service" class="form-label">Services</label>
                  <select class="form-select" id="service" required>
                    <option value="" disabled selected>Select Service</option>
                    <option value="1">Online Class</option>
                    <option value="2">Online Course</option>
                    <option value="3">Assignments</option>
                    <option value="4">Dissertation</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-submit">
                  Send
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="custom-shape-divider-bottom-1768237457">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
        </svg>
      </div>
    </section>
    <!-- Trust Section -->
    <section class="academic-section">
      <div class="slider-images-container">
        <div class="slider-images">
          <img src="../assets/uni-1.webp" alt="..." />
          <img src="../assets/uni-2.webp" alt="..." />
          <img src="../assets/uni-3.webp" alt="..." />
          <img src="../assets/uni-4.webp" alt="..." />
          <img src="../assets/uni-5.webp" alt="..." />
          <img src="../assets/uni-6.webp" alt="..." />
          <img src="../assets/uni-7.webp" alt="..." />
          <img src="../assets/uni-8.webp" alt="..." />
          <img src="../assets/uni-9.webp" alt="..." />
          <img src="../assets/uni-10.webp" alt="..." />
          <img src="../assets/uni-11 (1).webp" alt="..." />
          <img src="../assets/uni-12.webp" alt="..." />
          <img src="../assets/uni-13.webp" alt="..." />
          <img src="../assets/uni-14.webp" alt="..." />
          <img src="../assets/uni-15.webp" alt="..." />
          <img src="../assets/uni-1.webp" alt="..." />
          <img src="../assets/uni-2.webp" alt="..." />
          <img src="../assets/uni-3.webp" alt="..." />
          <img src="../assets/uni-4.webp" alt="..." />
          <img src="../assets/uni-5.webp" alt="..." />
        </div>
      </div>
      <div class="container mt-5">
        <div class="row align-items-center g-5">

          <!-- Right Image Placeholder -->
          <div class="col-lg-6">
            <div class="image-placeholder">
              <img src="../assets/About-Us-1024x956.png" alt="..." class="img-fluid" />
            </div>
          </div>


          <!-- Left Content -->
          <div class="col-lg-6">
            <h1 class="heading-title">
              Reach New Academic Heights with Our <span class="highlight">Cheap Online Course Help USA</span>
            </h1>

            <p class="section-text">
              With the surety of exceptional grades, ask expert online course takers at Online Course Helpers to
              do my online course for me. We offer the best support for your online course challenges at the best
              price. Not only that, but our 24/7 professional support ensures you are never alone when it comes to
              your courses. No matter how tough your course is or how confused you are or how many additional
              credits you need, just text us and see your problems fade. With our aim to retain 100% clients and
              offer full client satisfaction, we secure our clients with our 100% money-back guarantee policy.
              Aren't all these offers so fascinating? So, next time when you decide to pay someone to take your
              online course for you, make sure it is Online Course Helpers.
            </p>

            <div class="d-flex gap-3 flex-wrap">
              <button class="btn btn-call"><i class="fa fa-phone me-2"></i>Live Call</button>
              <button class="btn btn-chat"><i class="fa fa-comments me-2"></i>Live Chat</button>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- Benefits Section -->
    <section class="yellow-section py-5">
      <div class="container text-center">
        <h2 class="fw-bold mb-3">Affordable Help with Online Course for All Domains</h2>
        <p class="mx-auto mb-5" style="max-width: 800px;">
          With our professional course helpers, you can be sure of earning additional credits fast. Instead of wasting
          time trying multiple services, you should hire us.
        </p>

        <div class="horizontal-scroll-wrapper">
          <div class="course-card-container">
            <div class="course-card">
              <h3>Finance Course Help</h3>
              <div class="card-content">

                <p>We address investment strategies, budgeting, financial planning, and risk analysis. Our
                  experts enable you to understand financial formulas, real-life case studies and assignments.
                  Be it micro or corporate finance, we give you credible academic assistance so that you can
                  excel. Learn more effectively and understand your finances with low-cost, professional
                  advice.</p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>

          <div class="course-card-container">
            <div class="course-card">
              <h3>Business Law Help</h3>
              <div class="card-content">

                <p>
                  Our Business Law course help simplifies commercial contracts, torts, corporate structures,
                  and others. We facilitate legal case studies, assignments and exam preparation. Understand
                  business ethics, rights, and obligations through easy-to-follow expert guidance. Ideally
                  suited to students desiring to succeed in business law without being confused by legal
                  issues, inexpensive assistance is just a single click away. </p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>

          <div class="course-card-container">
            <div class="course-card">
              <h3>Statistics Help</h3>
              <div class="card-content">

                <p>We help with probability, data analysis, testing hypotheses and so on. Be it learning
                  distributions or assignments, our professionals make complex issues simple. Master real-life
                  data interpretation as you get assistance with projects, quizzes and exams. It is easy and
                  more affordable to score highly in your statistics course with our help.</p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>

          <div class="course-card-container">
            <div class="course-card">
              <h3>Statistics Help</h3>
              <div class="card-content">

                <p>We help with probability, data analysis, testing hypotheses and so on. Be it learning
                  distributions or assignments, our professionals make complex issues simple. Master real-life
                  data interpretation as you get assistance with projects, quizzes and exams. It is easy and
                  more affordable to score highly in your statistics course with our help.</p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>

          <div class="course-card-container">
            <div class="course-card">
              <h3>Statistics Help</h3>
              <div class="card-content">

                <p>We help with probability, data analysis, testing hypotheses and so on. Be it learning
                  distributions or assignments, our professionals make complex issues simple. Master real-life
                  data interpretation as you get assistance with projects, quizzes and exams. It is easy and
                  more affordable to score highly in your statistics course with our help.</p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>

          <div class="course-card-container">
            <div class="course-card">
              <div class="card-content">
                <h3>Statistics Help</h3>
                <p>We help with probability, data analysis, testing hypotheses and so on. Be it learning
                  distributions or assignments, our professionals make complex issues simple. Master real-life
                  data interpretation as you get assistance with projects, quizzes and exams. It is easy and
                  more affordable to score highly in your statistics course with our help.</p>
                <button class="btn btn-dark">Live Chat</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="custom-shape-divider-bottom-1768328670">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
              d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
              opacity=".25" class="shape-fill">
            </path>
            <path
              d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
              opacity=".5" class="shape-fill">
            </path>
            <path
              d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
              class="shape-fill">
            </path>
          </svg>
        </div>
      </div>
    </section>

    <section class="blue-section py-3">
      <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
          <div class="content-left text-white w-60">
            <h1 class="fw-bold mb-4">Can You Do My Course With Guaranteed Top Grades? <span class="highlight">Yes,
                We Can.</span></h1>
            <div class="d-flex gap-3">
              <button class="btn btn-call"><i class="fa fa-phone me-2"></i>Live Call</button>
              <button class="btn btn-chat"><i class="fa fa-comments me-2"></i>Live Chat</button>
            </div>
          </div>
          <div class="image-right mt-4 mt-md-0">
            <img src="../assets/pay-someone-to-do-assignment-reviews-2.webp" alt="Support Specialist"
              class="img-fluid custom-img">
          </div>
        </div>
      </div>
    </section>

    <section class="curved">
      <div class="d-none">content goes here this is dummy content</div>
    </section>
    <!-- Services Section -->

    <section class="services-section py-5">
      <div class="container text-center">
        <h2 class="fw-bold mb-3">Our Reliable Online Course Help Services: Beyond Just Grades</h2>
        <p class="mx-auto mb-5 text-muted" style="max-width: 900px;">
          Our services range from personalized aid in all respects to data protection and grade-enhancing services...
        </p>

        <div class="row g-4 mb-5">
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-headset service-icon"></i>
              <h3>Qualified Course Experts</h3>
              <p>Learn with subject matter experts who know your syllabus inside out and provide expert-level
                assistance.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-clock-rotate-left service-icon"></i>
              <h3>All-Time Experts Availability</h3>
              <p>Access to competent professionals available 24/7 to help you when you need it, day or night.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-circle-info service-icon"></i>
              <h3>Guaranteed A+ Performance</h3>
              <p>We do not just help you score higher. Expect top grades, on-time submissions, and reliable academic
                excellence.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-dollar-sign service-icon"></i>
              <h3>Affordable Pricing for All</h3>
              <p>Good assistance should not be expensive. Savour the low prices and high-quality services to meet your
                study objectives.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-file-word service-icon"></i>
              <h3>100% Unique & Original Content</h3>
              <p>All papers are original, plagiarism-free, and precisely aligned with your course requirements and
                guidelines.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <i class="fa-solid fa-lock service-icon"></i>
              <h3>Complete Privacy & Security</h3>
              <p>We keep your data and your identity secure. We operate encrypted systems and tight confidentiality
                protocols.</p>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center gap-3">
          <button class="btn btn-yellow rounded-pill px-5 py-3 fw-bold">Live Call <i
              class="fa-solid fa-phone ms-2"></i></button>
          <button class="btn btn-light-grey rounded-pill px-5 py-3 fw-bold">Whatsapp <i
              class="fa-brands fa-whatsapp ms-2"></i></button>
        </div>
      </div>

    </section>

    <!-- Moodle Section -->
    <section class="platform-section py-5">
      <div class="custom-shape-divider-top-1768582152">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill"></path>
        </svg>
      </div>
      <div class="container text-center mt-5">
        <h2 class="fw-bold mb-3">Expert Course Help on Every Major E-learning Platform</h2>
        <p class="mx-auto mb-5 text-muted" style="max-width: 800px;">
          We are the leaders of the best course help services on Canvas, WGU, Brightspace, and other platforms, which
          guarantees our clients an expert level of support, improved grades, and academic success that will not be
          accompanied by any stress
        </p>

        <div class="row g-4">
          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/brightspace.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Brightspace</h5>
                  <p class="small">Use Brightspace course help service to boost grades in your modules,
                    quizzes, and interactive assignments.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/mgh.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Mc Graw Hill</h5>
                  <p class="small">McGraw Hill course help service is here to assist you in your online
                    platform requirements, to guarantee fast turnarounds and improved academic performance.
                  </p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/wgu.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">WGU</h5>
                  <p class="small">Our WGU course help service promotes competency-based degrees where 24/7
                    expert tutors are available to produce quick results.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/straighterline.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Straighter Line</h5>
                  <p class="small">
                    Our Straighter Line course help service guarantees quality tutoring and timely task
                    submissions for consistent grade improvement.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/onlineed.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Onlineed</h5>
                  <p class="small">
                    Online Ed course help service is a support facility in professional development that
                    provides assistance in expert-directed learning and speedy completion of tasks</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/act-1.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">ACT</h5>
                  <p class="small">
                    ACT course help service guarantees smarter preparation, faster answers, and a better
                    academic reputation; all masterfully handled. </p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/moodle.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Moodle</h5>
                  <p class="small">
                    Our Moodle course help service is all about easy learning and fast delivery, to achieve
                    the best scores.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/cengage.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Cengage</h5>
                  <p class="small">
                    Cengage course help service gives comprehensive support on various disciplines to
                    achieve excellent performance and submission without stress.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/sophia-1.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Sophia</h5>
                  <p class="small">
                    Sophia course help service facilitates general education credits that offer quicker
                    completion and coursework assistance by experts.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/canvas.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Canvas</h5>
                  <p class="small">
                    Affordable Canvas course help service on quizzes, discussions, and assignments-
                    streamlined to accelerate and simplify learning.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/aleks.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Aleks</h5>
                  <p class="small">
                    Our Aleks course help service will help you get the correct solutions to your
                    deadline-driven math and science assignments.
                  </p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-6 col-md-4 col-lg-3">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front d-flex flex-column align-items-center justify-content-center">
                  <div class="img-placeholder mb-3">
                    <img id="flip-card-img" src="../assets/mathway.webp" alt="" />
                  </div>
                </div>
                <div class="flip-card-back d-flex flex-column align-items-center justify-content-center px-3">
                  <h5 class="text-warning">Mathway</h5>
                  <p class="small">
                    Mathway course help service has the mathematical expertise of qualified professionals to
                    find accurate answers to your mathematics problems swiftly.</p>
                  <button class="btn btn-sm btn-outline-light">See More</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center gap-3 mt-5">
          <button class="btn btn-darkcyan rounded-pill px-4 py-3 fw-bold" style="z-index: 2;">
            Live Call <i class="fa-solid fa-phone ms-2"></i>
          </button>
          <button class="btn btn-chat rounded-pill px-4 py-3 fw-bold" style="z-index: 2;">
            Whatsapp <i class="fa-brands fa-whatsapp ms-2"></i>
          </button>
        </div>
      </div>
      <div class="custom-shape-divider-bottom-1768583792">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill">
          </path>
        </svg>
      </div>
    </section>
    <!-- Cheap Price Section -->
    <section class="cheap-price-section py-5">
      <div class="container">
        <div class="row align-items-start g-5">

          <div class="col-lg-7">
            <h1 class="fw-bold mb-4 text-navy">
              Can You <span class="text-highlight">Take My Online Course</span> For Me At Cheap Price
            </h1>
            <p class="lead text-muted mb-5 pe-lg-5">
              Have you ever searched through all of Google, browsing “Can I pay someone to take my online course
              for me? Your search ends here! At Online Course Helpers, we provide professional, safe, and
              inexpensive course-taking services that assure performance. Whether it is about working on your
              assignments and quizzes or full semester workloads, our professionals are available to come to your
              rescue. No juggling deadlines or falling behind anymore. Choose us as your coursework partner to
              receive committed service, absolute confidentiality, and genuine academic specialists working on
              your course carefully. Be it a single subject or multiple, we have your back. Concentrate on life as
              we concentrate on your GPA- because smart students outsource smartly.
            </p>

            <div class="d-flex flex-wrap gap-3">
              <a href="#" class="btn btn-call rounded-pill px-4 py-3 fw-bold">
                Live Call <i class="fa-solid fa-phone ms-2"></i>
              </a>
              <a href="#" class="btn btn-chat rounded-pill px-4 py-3 fw-bold">
                Live Chat <i class="fa-solid fa-comment-dots ms-2"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="hero-image-frame">
              <div class="cheap-price-section-image-placeholder">
                <img src="../assets/Screenshot_5-768x788.png" alt="Cheap Online Course Help" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Remaining Sections -->
    <section class="py-5 bg-light">
      <div class="container text-center">
        <h1 class="fw-bold mb-4">Finish My Online Course With Top Grades and Guaranteed Credits on Top Platforms</h1>
        <p>Get expert help with your online course. We provide 24/7 service and dedicated support with online course
          assignments, quizzes and assessments on all platforms.</p>
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="platform-filters">
          <button class="btn btn-dark active py-2 px-3" data-platform="aleks">Aleks</button>
          <button class="btn btn-secondary py-2 px-3" data-platform="mcgrawhill">McGraw Hill</button>
          <button class="btn btn-secondary py-2 px-3" data-platform="pearson">Pearson</button>
          <button class="btn btn-secondary py-2 px-3" data-platform="blackboard">BlackBoard</button>
          <button class="btn btn-secondary py-2 px-3" data-platform="sophia">Sophia</button>
        </div>

        <div class="row g-4" id="cards-container">
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
              <h4 class="card-title">Aleks Elementary Course Help</h4>
              <p class="text-muted small">ALEKS Elementary is an online learning platform. It covers topics in
                maths, science, and language arts. Our expert online Aleks course takers are ready to provide
                help with every topic.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
              <h4 class="card-title">Aleks Middle School Course Help</h4>
              <p class="text-muted small">ALEKS Middle School is a similar online learning platform designed for
                middle school students. We offer help with the online Alex middle school course, with every part
                of the online Alex course.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm p-4">
              <h4 class="card-title">Aleks High School Course Help</h4>
              <p class="text-muted small">ALEKS High School is an online learning platform that provides adaptive,
                personalized instruction for high school students. Get online Alex High School course help,
                which is designed to help students.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-white">
      <div class="d-flex mb-5 px-3">
        <div class="bg-darkcyan text-white p-5 rounded-5 overflow-hidden position-relative">
          <div class="row align-items-center">
            <div class="col-lg-10 mx-auto">
              <div class="inner-box custom-scrollbar">
                <section class="inner-box-content">
                  <h2>Smarter Learning Starts Here: Your Go-To Online Course Helpers</h2>
                  <p>Do you feel overwhelmed with your online coursework? You are wondering how to balance
                    work, family and life, and at the same time manage your studies?<br>Welcome to
                    <strong>Online Course Helpers</strong>, your go-to online course help in the USA.<br>We
                    provide academic credit optimization. We have your back, whether you want to fast-track
                    college degree completion service or pay someone to complete online course.
                  </p>
                  <h3>Why Are So Many Students Turning to Online Course Help?</h3>
                  <p>The advent of online learning platforms has made students more empowered and more
                    overwhelmed at the same time.<br>Juggling assignments and learning to manoeuvre through
                    complicated online courses are not always the student-friendly features of the digital
                    education environment.<br>That is why Online Course Helpers is here to make your
                    academic journey easier, more supportive, and focused.</p>
                  <h4>Some of the most common reasons why students turn to our services are:</h4>
                  <ul>
                    <li>Lack of time due to work or family responsibilities</li>
                    <li>Difficulty understanding course materials</li>
                    <li>Wanting to earn college credit hours online fast</li>
                    <li>Managing multiple courses or academic deadlines</li>
                  </ul>
                  <p>We provide individualised care and ensure that the individual needs of each student are
                    considered by actual professionals.</p>
                  <h3>Can I Really Pay Someone to Complete My Online Course?</h3>
                  <p>Absolutely. Thousands of students pay someone to do online courses, and they are safe and
                    discreet every year. We offer valid confidential assistance for full-course completion.
                  </p>
                  <h3>Our Comprehensive Course Help Services:</h3>
                  <ul>
                    <li>Weekly assignments, exams, and discussion boards</li>
                    <li>Full platform navigation for systems like Canvas, Blackboard, and Moodle</li>
                    <li>Grade and progress tracking</li>
                    <li>On-time submissions and 100% plagiarism-free work</li>
                  </ul>
                  <p>We simplify, moralise, and make it work, whether you require expert help with online
                    course completion or you wish to hire an expert for online course help.</p>
                  <h3>Is It Worth Paying Someone to Take My Online Course for Me?</h3>
                  <p>In case you are wondering, <em>can I pay someone to take my online course for me?</em>
                    The answer is YES, and to a good number, it’s a game-changer.<br>Our accredited online
                    course takers are seasoned, time-conscious, and devoted to your educational achievement.
                  </p>
                  <h4>What We Handle:</h4>
                  <ul>
                    <li>Full-term course management</li>
                    <li>Real-time updates on progress</li>
                    <li>Custom solutions for exams and written work</li>
                  </ul>
                  <h3>How We Help Optimise Your Academic Journey With Accredited Courses &amp; Programs</h3>
                  <table style="width: 100%; border-collapse: collapse; border: 1px solid white;" cellspacing="0"
                    cellpadding="8">
                    <thead>
                      <tr>
                        <th>Goal</th>
                        <th>Common Student Challenge</th>
                        <th>Our Expert Solution</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Graduate faster</td>
                        <td>Delayed due to lost credits</td>
                        <td>University credit hour transfer consultancy, transcript mapping, transfer
                          equivalency</td>
                      </tr>
                      <tr>
                        <td>Save money</td>
                        <td>Repeating similar courses</td>
                        <td>Academic credit optimisation, credit-by-exam programs, prior learning
                          assessment (PLA)</td>
                      </tr>
                      <tr>
                        <td>Pass online courses</td>
                        <td>Struggling with course load</td>
                        <td>Expert help with online course completion, hire an expert for online course
                          help</td>
                      </tr>
                      <tr>
                        <td>Earn credits online</td>
                        <td>Need flexible learning</td>
                        <td>Buy college credit courses online</td>
                      </tr>
                      <tr>
                        <td>Custom support</td>
                        <td>Need tutoring and guidance</td>
                        <td>Help with online course, guide with online course</td>
                      </tr>
                    </tbody>
                  </table>
                  <h3>How Does Fast-Track College Degree Completion Work?</h3>
                  <p>Wish to reduce college years and get into the workforce sooner? The college degree
                    completion service is fast-tracked and requires students to use their previous
                    experience.</p>
                  <h4>We Help You:</h4>
                  <ul>
                    <li>Use credit-by-exam programs like CLEP and DSST</li>
                    <li>Apply prior learning assessment (PLA) for job experience</li>
                    <li>Optimise your learning via modular course completion</li>
                  </ul>
                  <h3>Can You Really Buy College Credit Courses Online?</h3>
                  <p>Yes! We assist you buy college credit courses online from accredited institutions that
                    fit your present or future school.</p>
                  <h4>What We Offer:</h4>
                  <ul>
                    <li>Course matching via course articulation agreements</li>
                    <li>Recommendations based on your degree plan</li>
                  </ul>
                  <p>Most universities have recognised these courses because of our understanding of regional
                    accreditation.</p>
                  <h3>How Can I Reduce Credit Hours Online Fast?</h3>
                  <p>Want to reduce your workload by half without compromising on your degree? We assist you
                    in cutting credit hours online within a short time by evaluating your previous
                    coursework and proposing fast-track options.</p>
                  <h4>Our Optimisation Methods:</h4>
                  <ul>
                    <li>Degree audit to avoid redundant classes</li>
                    <li>Submit for academic credit optimisation</li>
                    <li>Take approved online courses to fill in gaps</li>
                  </ul>
                  <p>This translates to fewer years in school and more years in your career.</p>
                  <h3>What If I Just Need Help With Online Courses?</h3>
                  <p>You do not necessarily have to do the full course. Need help with online course,
                    lectures, or exams? We also provide coaching and tutoring Services.</p>
                  <h4>Support Includes:</h4>
                  <ul>
                    <li>Weekly tutoring sessions</li>
                    <li>Discussion board brainstorming</li>
                    <li>Guide with online course participation</li>
                    <li>Email and live chat check-ins</li>
                  </ul>
                  <p>This would be perfect when you are a self-starter but would like to be guided at times.
                  </p>
                  <h3>Why Choose Online Course Helpers?</h3>
                  <p>All the academic assistance services available online are numerous; yet few can match
                    affordability, trust, and expertise. Here’s what sets us apart:</p>
                  <ul>
                    <li><strong>white Services:</strong> We know what we have to offer. You want to
                      pay someone to do my online course on my behalf, and you also require assistance in
                      credit hour evaluation. We can discuss all the specifics.</li>
                    <li><strong>Accredited Support:</strong> Our services are in line with regional
                      accreditation and meet the distance education standards. You will not run the risk
                      of credits being turned down in the future.</li>
                    <li><strong>Real Human Help:</strong> You’re never left on your own. We have 24/7 chat,
                      phone and email service.</li>
                    <li><strong>Affordable Pricing:</strong> Seeking cheap online course help USA? We
                      provide differentiated pricing schemes to fit all budgets.</li>
                  </ul>
                  <h3>Mastering Transfer Equivalency and Transcript Mapping</h3>
                  <p>College transfers are not as simple as sending transcripts: they involve a process of
                    transfer equivalency and transcript mapping.<br>Online Course Helpers, we apply the
                    guesswork out of the process by explaining your academic history and correlating it with
                    the credit policies of your target institution.<br>This will guarantee that the courses
                    that you have already taken are properly adjusted with similar courses in your new
                    college to maximise your transferable credits.</p>
                  <p>We operate hand in hand with the latest institutional information so that your credits
                    would count where they matter.<br>Our college credit reduction online experts enable you
                    to prevent unnecessary repetition by determining course overlaps and similar course
                    descriptions.<br>Having expert-level university credit hour consultancy, we enable you
                    to follow the most effective route towards graduation.</p>
                  <h3>How Distance Education Compliance Impacts Your Success</h3>
                  <p>In the digital education world of today, distance education compliance is as essential a
                    coursework as it is a requirement.<br>Be it the enrolment of new courses, it is
                    essential to ensure that the coursework you do is in line with the accepted
                    accreditation standards and the needs of your institution.<br>This is where Online
                    Course Helpers comes in.</p>
                  <p>We can help by confirming institutional legitimacy, examining regional accreditation, and
                    making sure that all the course articulation agreements have been properly
                    coordinated.<br>This means that the courses you undertake via online learning platforms
                    not only improve your education but also preserve academic integrity.<br>It is our
                    expert-level online college platform help services that ensure your credits are accepted
                    and your efforts are not put to waste under any circumstance,<br>safeguarding your time,
                    finances, and future ambitions.</p>
                  <h3>Ready to Take Control of Your Education?</h3>
                  <p>Whatever your academic challenge is, whether it is time or complexity, or a change of
                    school, Hire our best course completion help service. We are available in all aspects
                    that include:</p>
                  <ul>
                    <li>college credit courses online</li>
                    <li>Pay someone to take my online course for me</li>
                    <li>Reduce credit hours online fast</li>
                    <li>Online college platform help services</li>
                  </ul>
                  <p>We work hand in hand with students, advisors, and universities to ensure seamless
                    transitions and successful outcomes.</p>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-navy text-white text-center" style="background-color: #00334d;">
      <div class="container">
        <h2 class="fw-bold mb-4 text-white">Want to Complete Your Online Course Fast For Extra Credits? Hire
          experienced professionals</h2>
        <p>Get expert help with your online course. We provide 24/7 service and dedicated support with online course
          assignments, quizzes and assessments on all platforms.</p>
        <div class="d-flex justify-content-center gap-3">
          <a href="#" class="btn btn-chat rounded-pill px-4">Live Chat <i class="fa-solid fa-comment-dots ms-2"></i></a>
          <a href="#" class="btn btn-call rounded-pill px-4">Whatsapp <i class="fa-brands fa-whatsapp ms-2""></i></a>
        </div>
    </div>
</section>

<section class=" py-5 bg-light">
              <div class="container text-center">
                <h2 class="fw-bold mb-3">Trusted Professionals to Help You Succeed at All Educational Levels
                </h2>
                <p class="text-muted mb-5 mx-auto" style="max-width: 800px;">
                  Enroll in the stress-free program in the USA with experienced course helpers to guide you
                  through your education.
                  Your course is done efficiently by our team, maintaining your academic standards.
                </p>

                <div class="row g-4 justify-content-center">
                  <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-lg text-white p-4"
                      style="background-color: #242f3e; border-radius: 15px;">
                      <div class="card-body">
                        <h4 class="text-white fw-bold mb-3">Associate Level Course Help</h4>
                        <p class="small opacity-75">
                          Our <span class="text-white">associate-level course help</span> services
                          assist students in enhancing their knowledge of critical academic concepts.
                          Our professionals provide quality, well-formatted work in terms of
                          assignments and case studies.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-lg text-white p-4"
                      style="background-color: #1a222c; border-radius: 15px; transform: scale(1.05);">
                      <div class="card-body">
                        <h4 class="text-white fw-bold mb-3">Undergraduate Level Course Help</h4>
                        <p class="small opacity-75">
                          Struggling with your degree course? Our <span
                            class="text-white border-bottom border-white">undergraduate level course
                            help</span> is designed for students who strive to achieve academic
                          excellence without stress.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-lg text-white p-4"
                      style="background-color: #242f3e; border-radius: 15px;">
                      <div class="card-body">
                        <h4 class="text-white fw-bold mb-3">Master's Level Course Help</h4>
                        <p class="small opacity-75">
                          We have <span class="text-white">masters level course help</span> that best
                          fits graduate students with advanced theories, data-driven research or
                          project based studies.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </section>

    <section class="py-5 bg-white">
      <div class="container text-center">
        <h2 class="fw-bold mb-2">What Students Say About Our Online Course Assistance</h2>
        <p class="text-muted mb-5">Real experiences - Real results. See the way we have offered students success.</p>

        <div class="row g-4 text-start">
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/reviews-logo-white-1-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/trustpilot-logo-white-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/sitejabber-logo-white-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/sitejabber-logo-white-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/trustpilot-logo-white-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-white p-4"
              style="background-color: #00334d; border-radius: 15px;">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                <img src="../assets/reviews-logo-white-1-300x88.webp" alt="Review Logo" class="review-image">
              </div>
              <p class="small opacity-75">These guys helped me do my online stats course. All activities were
                completed within the set deadline, and the outcomes were awesome.</p>
              <div class="d-flex align-items-center mt-4">
                <div class="rounded-circle bg-secondary me-3" style="width: 40px; height: 40px;"></div>
                <div>
                  <h6 class="mb-0 fw-bold">Ahsan</h6>
                  <small class="opacity-50">New York</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-5 d-flex justify-content-center gap-3">
          <button class="btn btn-call fw-bold rounded-pill">Live Call <i class="fa fa-phone ms-2"></i></button>
          <button class="btn btn-chat fw-bold rounded-pill">Live Chat <i class="fa fa-comments ms-2"></i></button>
        </div>
      </div>
    </section>

    <section class="py-5 text-white" style="background-color: #00334d;">
      <div class="container">
        <div class="row text-center align-items-center g-4">
          <div class="col-md-4">
            <div class="mb-3 text-white fs-1"><img src="../assets/timely-delivery.webp" alt="On-Time Delivery" />
            </div>
            <h5 class="fw-bold">On-Time Delivery</h5>
            <p class="small opacity-75">We never miss deadlines. Always get high-quality work on time to stay ahead.
            </p>
          </div>
          <div class="col-md-4">
            <div class="mb-3 text-white fs-1"><img src="../assets/our-writers.webp" alt="100% Unique Work" /></div>
            <h5 class="fw-bold">100% Unique Work</h5>
            <p class="small opacity-75">All assignments are human written and plagiarism free. Submit without fear
              of penalty.</p>
          </div>
          <div class="col-md-4">
            <div class="mb-3 text-white fs-1"><img src="../assets/customer-support.webp" alt="Professional Support" />
            </div>
            <h5 class="fw-bold">Professional Support</h5>
            <p class="small opacity-75">Questions? Updates? We're here 24/7. Contact us any time.</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <button class="btn btn-call fw-bold rounded-pill">Live Call <i class="fa fa-phone ms-2"></i></button>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container overflow-hidden">
        <div class="row g-0">
          <div class="left-box col-lg-7 p-5 rounded-start-3">
            <h2 class="fw-bold mb-4">Frequently Asked Questions</h2>
            <p>Explore our most frequently asked questions to learn more about our online course help. It’s fast,
              secure, and stress-free.</p>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item bg-white border-bottom border-dark py-2 px-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed bg-white fw-bold text-dark px-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#q1">
                    Is your service confidential and secure?
                  </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse bg-white text-dark px-0" data-bs-parent="#faqAccordion">
                  <div class="accordion-body px-0">Absolutely. We value your privacy. Your information is
                    never shared, and we work with encrypted systems. Your name and coursework remain 100
                    percent confidential at all times.</div>
                </div>
              </div>
            </div>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item bg-white border-bottom border-dark py-2 px-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed bg-white fw-bold text-dark px-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#q1">
                    Can I hire someone to take multiple online courses at once?
                  </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body px-0">Yes! Our specialists can handle the number of courses
                    simultaneously: assignments, quizzes, exams, and everything. All you do is pass on your
                    schedule, and we will take care of everything from beginning to end.</div>
                </div>
              </div>
            </div>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item bg-white border-bottom border-dark py-2 px-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed bg-white fw-bold text-dark px-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#q1">
                    How do I know the work will be plagiarism-free?
                  </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body px-2">We compose all the assignments from scratch and scan every
                    task with high-quality plagiarism software. You will always get original and
                    high-quality work that satisfies your academic requirements.</div>
                </div>
              </div>
            </div>
            <div class="accordion accordion-flush" id="faqAccordion">
              <div class="accordion-item bg-white border-bottom border-dark py-2 px-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed bg-white fw-bold text-dark px-0" type="button"
                    data-bs-toggle="collapse" data-bs-target="#q1">
                    What happens if I’m not satisfied with the results?
                  </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body px-0">We provide revisions and a money-back guarantee. Not
                    satisfied, we will make it right quickly or refund your money according to our
                    satisfaction policy.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 p-5 text-white rounded-end-3" style="background-color: #00334d;">
            <h3 class="fw-bold mb-4">Free Features includes</h3>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> Title Page</span>
                <span class="badge bg-success rounded-pill px-3">Free</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> Reference Page</span>
                <span class="badge bg-success rounded-pill px-3">Free</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> In-text Citation</span>
                <span class="badge bg-success rounded-pill px-3">Free</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> Plagiarism Check</span>
                <span class="badge bg-success rounded-pill px-3">Free</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> Unlimited Revisions</span>
                <span class="badge bg-success rounded-pill px-3">
                  Free</span>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-3">
                <span><i class="fa fa-star text-white me-2"></i> Editing &amp; Proofreading</span>
                <span class="badge bg-success rounded-pill px-3">
                  Free</span>
              </li>
            </ul>
            <div class="text-center mt-5">
              <p>Get all features for <a href="#" class="text-success me-2">FREE</a></p>
            </div>
            <div class="text-center mt-3">
              <button class="btn btn-success fw-bold rounded-pill px-5">Place an order</button>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section>
      <div class="payment-info d-flex align-items-center justify-content-around mt-4 px-3 py-4">
        <h4 class="fw-bold text-center">Secure payment with</h4>
        <div class="d-flex gap-5 align-items-center justify-content-between">
          <img src="../assets/paypal.webp" alt="paypal" class="payment-icon" />
          <img src="../assets/master-card.webp" alt="master-card" class="payment-icon" />
          <img src="../assets/2560px-Stripe_Logo2C_revised_2016.webp" alt="stripe" class="payment-icon" />
          <img src="../assets/visa.webp" alt="visa" class="payment-icon" />
        </div>
      </div>
    </section>
  </main>

  <footer class="pt-5 text-white" style="background-color: #002a4d;">
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-lg-3">
          <img src="../assets/Online-Course-Helpers-768x538.png" alt="Logo" class="footer-logo mb-3">
          <p class="small opacity-75">Online Course Helpers offers a one-stop solution to students seeking
            additional credits. Hire professional helpers with full confidentiality.</p>
        </div>
        <div class="col-lg-3">
          <h5 class="text-warning fw-bold mb-4">Our Services</h5>
          <ul class="list-unstyled small opacity-75 lh-lg">
            <li class="footer-link"><a href="#">Aleks Course Help</a></li>
            <li class="footer-link"><a href="#">Pearson Course Help</a></li>
            <li class="footer-link"><a href="#">McGraw Hill Course Help</a></li>
            <li class="footer-link"><a href="#">Blackboard Course Help</a></li>
            <li class="footer-link"><a href="#">Sophia Course Help</a></li>
            <li class="footer-link"><a href="#">WGU Course Help</a></li>
            <li class="footer-link"><a href="#">Brightspace Course Help</a></li>
            <li class="footer-link"><a href="#">Straighterline Course Help</a></li>
            <li class="footer-link"><a href="#">Cengage Course Help</a></li>
            <li class="footer-link"><a href="#">ACT Course Help</a></li>
            <li class="footer-link"><a href="#">Moodle Course Help</a></li>
            <li class="footer-link"><a href="#">CANVAS Course Help</a></li>
            <li class="footer-link"><a href="#">Mathway Course Help</a></li>
          </ul>
        </div>
        <div class="col-lg-2">
          <h5 class="text-warning fw-bold mb-4">Information</h5>
          <ul class="list-unstyled small opacity-75 lh-lg">
            <li class="footer-link"><a href="#">Home</a></li>
            <li class="footer-link"><a href="#">Blog</a></li>
            <li class="footer-link"><a href="#">Terms and Conditions</a></li>
            <li class="footer-link"><a href="#">Refund Policy</a></li>
            <li class="footer-link"><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h5 class="text-warning fw-bold mb-4">Contact us</h5>
          <p class="small mb-2"><i class="fa fa-location text-warning me-2"></i> 110 Central Ave, Jersey City, NJ
            07307</p>
          <p class="small mb-2"><i class="fa fa-envelope text-warning me-2"></i> info@onlinecoursehelpers.com</p>
          <p class="small mb-4"><i class="fa fa-phone text-warning me-2"></i> (+1) 218 419 2935</p>
          <h5 class="text-warning fw-bold mt-4">Follow us</h5>
          <div class="d-flex gap-3 fs-5">
            <i class="fab fa-facebook footer-social-icon"></i>
            <i class="fab fa-instagram footer-social-icon"></i>
            <i class="fab fa-pinterest footer-social-icon"></i>
            <i class="fab fa-twitter footer-social-icon"></i>
            <i class="fab fa-linkedin footer-social-icon"></i>
          </div>
          <div class="img-fluid">
            <img src="../assets/gaurantee-img-300x65.png" alt="Trust Seal" class="mt-4"
              style="width: 200px; height: auto;">
          </div>
        </div>
      </div>
    </div>
    <div style="background-color: #00334d;" class="py-3">
      <div class="text-center small opacity-50">Copyright &copy; Online Course Helpers 2025. All rights reserved.
      </div>
    </div>
  </footer>
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>