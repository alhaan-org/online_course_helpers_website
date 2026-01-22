<?php
$all_cards_data = [
  [
    'title' => 'Aleks Elementary Course Help',
    'description' => 'ALEKS Elementary is an online learning platform. It covers topics in
                maths, science, and language arts. Our expert online Aleks course takers are ready to provide
                help with every topic.',
    'platform' => 'aleks',
  ],
  [
    'title' => 'Aleks Middle School Course Help',
    'description' => 'ALEKS Middle School is a similar online learning platform designed for
                middle school students. We offer help with the online Alex middle school course, with every part
                of the online Alex course.',
    'platform' => 'aleks',
  ],
  [
    'title' => 'Aleks High School Course Help',
    'description' => 'ALEKS High School is an online learning platform that provides adaptive,
                personalized instruction for high school students. Get online Alex High School course help,
                which is designed to help students.',
    'platform' => 'aleks',
  ],
  [
    'title' => 'PreK- 12 Course Help',
    'description' => 'The Online Course Helpers offer help with online course in core subjects like math, computer science, and career and technical education (CTE), covering grades from early childhood through high school.',
    'platform' => 'mcgrawhill',
  ],
  [
    'title' => 'Elementary and Middle School Course Help',
    'description' => 'We offer a complete guide with online course for elementary and middle school courses. Whether you need help with your assignments or online tests, we provide comprehensive online course help in USA.',
    'platform' => 'mcgrawhill',
  ],
  [
    'title' => 'High School Course Help',
    'description' => 'At the Online Course Helpers, our expert online course takers provide help with subjects like algebra, geometry, trigonometry, AP calculus, AP physics, AP chemistry and AP statistics to excel in online courses.',
    'platform' => 'mcgrawhill',
  ],
  [
    'title' => 'Full Pearson Course Help',
    'description' => 'If you are feeling overwhelmed, we can manage your whole class for you. Our online course takers will complete everything from homework to tests. Let us handle your course for you.',
    'platform' => 'pearson',
  ],
  [
    'title' => 'Help with Pearson Quizzes & Tests',
    'description' => 'Do your tests make you feel nervous? Our online course takers are here to help you prepare and guide you before any quiz or exam, so you don’t feel lost or scared.',
    'platform' => 'pearson',
  ],
  [
    'title' => 'Pearson Homework Assistance USA',
    'description' => 'Many students get stuck with their homework. With our help with online course, we give you the correct answers and also explain each one in a way you will understand.',
    'platform' => 'pearson',
  ],
  [
    'title' => 'Blackboard Program Course Help',
    'description' => 'A Blackboard Programme Course can support Programme Leads to open a communication channel with their students and share programme-level content. Programme courses must not contain any teaching content or assessments.',
    'platform' => 'blackboard'
  ],
  [
    'title' => 'Blackboard Custom (Arbitrary) Course Help',
    'description' => 'A Blackboard Programme Course can support Programme Leads to open a communication channel with their students and share programme-level content. Programme courses must not contain any teaching content or assessments.',
    'platform' => 'blackboard'
  ],
  [
    'title' => 'Blackbox Sandbox Course Help',
    'description' => 'A Sandbox is a course used for personal training and testing. You can create a personal Sandbox course in the current Original course format or the new ULTRA format.',
    'platform' => 'blackboard'
  ],
  [
    'title' => 'Low-Cost Course Help',
    'description' => 'Sophia provides online course help in USA primarily aimed at undergraduate students. Courses are designed to be flexible, accessible any time and everywhere, and most can be completed at any time.',
    'platform' => 'sophia'
  ],
  [
    'title' => 'Self-Paced Course Help',
    'description' => 'Sophia courses are self-paced and designed to earn credit for a specific degree program. The courses taught by professors at Online Course Helpers, earn scholar distinction, ensuring high grades and timely submissions.',
    'platform' => 'sophia'
  ],
  [
    'title' => 'Online College-Level Course Help',
    'description' => 'The expert online Course takers at the Online Course Helpers offer complete help with online course for college level offered by Sophia to help students earn credit towards an associate or bachelor\'s degree.',
    'platform' => 'sophia'
  ]
]
  // Added the array for rendering the content dynamically later
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

  <script src="js/app.js"></script>
</head>

<body>
  <!-- Navbar -->
  <?php include 'include/header.php'; ?>

  <main>
    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="row container">
          <!-- Left Content -->
          <div class="col-lg-8">
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
          <div class="col-lg-4">
            <div class="hero-form-card">
              <div class="limited-offer-badge">
                <img src="../assets/limited-offer-1024x613.webp" alt="Limited Offer" />
              </div>
              <h4 class="mb-4 text-center fw-bold text-dark">
                Save Upto 50% On First Order
              </h4>

              <form id="contactForm">
                <div class="mb-3">
                  <input type="text" class="form-control" id="name" placeholder="Name" required />
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="email" placeholder="Email" required />
                </div>
                <div class="mb-3">
                  <input type="tel" class="form-control" id="phone" placeholder="Phone No" required />
                </div>
                <div class="mb-4">
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
        <div class="slider-images owl-carousel owl-theme">
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
          <div class="owl-carousel scroll-wrapper">
            <div class="course-card-container">
              <div class="course-card">
                <h3>Finance Course Help</h3>
                <div class="card-content">
                  <p>We address investment strategies, budgeting, financial planning, and risk analysis. Our
                    experts enable you to understand financial formulas, real-life case studies and assignments.
                    Be it micro or corporate finance, we give you credible academic assistance so that you can
                    excel. Learn more effectively and understand your finances with low-cost, professional
                    advice.</p>
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
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
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
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
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>

            <div class="course-card-container">
              <div class="course-card">
                <h3>Biology Course Help</h3>
                <div class="card-content">
                  <p>
                    Our biology course help simplifies genetics, cell biology, and evolution for all learners. We offer
                    specific help with assignments, lab reports, and exams, being familiar with DNA to the point of
                    knowing how to work with ecosystems, too. Discover the intricacies of life through stimulating
                    advice that makes biology fun. Cheap assistance is now a click away; improve your grades using
                    science-backed learning. </p>
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>

            <div class="course-card-container">
              <div class="course-card">
                <h3>Accounting Course Help</h3>
                <div class="card-content">
                  <p>
                    Access stress free <a>accounting course help</a> on issues such as financial statements, ledgers,
                    and budgeting. Our professionals simplify
                    accounting principles into easy-to-follow steps to enhance your knowledge. Be it managerial
                    accounting or tax, we assist you in solving issues with ease. Keep pace with your studies and pass
                    your exams at an affordable rate, along with the needs of your coursework. </p>
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>

            <div class="course-card-container">
              <div class="course-card">
                <h3>Management Course Help</h3>
                <div class="card-content">
                  <p>
                    Get professional management course help for strategic planning, leadership, operations, and more. We
                    discuss all fundamental issues such as HR, marketing and decision making. We help you complete your
                    assignments, presentations and exams clearly and confidently. Learn and acquire experience, at the
                    same time as you advance your grades; our affordable services will enable you to be management
                    savvy.
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>
            <div class="course-card-container">
              <div class="course-card">
                <h3>Calculus Course Help</h3>
                <div class="card-content">
                  <p>
                    Having difficulty with derivatives or integrals? <a>Our math course help</a>
                    is developed to explain limits, functions and real-life applications to you. We break down such
                    notions as differentiation and integration to make them more comprehensible. Be it homework or
                    testing, our professionals will help you to keep up. Study how you learn best and achieve desired
                    results through professional help at a reasonable price.
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>
            <div class="course-card-container">
              <div class="course-card">
                <h3>Criminal Justice Course Help</h3>
                <div class="card-content">
                  <p>
                    Require assistance in interpreting law systems, policies and criminology? Our criminal justice
                    course
                    help can help you with case studies, laws and criminal theories. We provide help in writing, in test
                    preparation, in the structure and organization of courts and correctional systems. Learn about
                    justice
                    aspects simply and inexpensively with the help of the experienced professionals who understand the
                    area
                    in and out.
                </div>
                <button class="mt-5 btn btn-dark">Live Chat</button>
              </div>
            </div>
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


    <!-- Can you do my Course Section -->
    <?php include 'include/can_you_do_my_course.php'; ?>

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

    <!-- Elearning Experts Section -->
    <?php include 'include/elearning_experts.php'; ?>

    <!-- Cheap Price Section -->
    <section class="cheap-price-section py-5">
      <div class="container">
        <div class="row align-items-start g-5">

          <div class="col-lg-7">
            <h2 class="fw-bold mb-4 text-navy">
              Can You <span class="text-highlight">Take My Online Course</span> For Me At Cheap Price
            </h2>
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
                <p class="text-muted mb-5 mx-auto">
                  Enroll in the stress-free program in the USA with experienced course helpers to guide you
                  through your education.
                  Your course is done efficiently by our team, maintaining your academic standards.
                </p>
                <div class="coverflow-swiper swiper my3dSwiper">
                  <div class="h-100 swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="coverflow-card card h-50 h-lg-100 text-white p-4"
                        style="background-color: #242f3e; border-radius: 15px;">
                        <div class="card-body">
                          <h5 class="text-warning fw-bold mb-3">High School Course Help</h5>
                          <p style="font-size: 12px;"><span style="font-weight: 400">Our </span><a
                              href="https://onlinecoursehelpers.com/high-school-level-course-help/"
                              class="text-warning"><span style="font-weight: 400">high school level
                                course help</span></a><span style="font-weight: 400"> is created to assist students who
                              want to enter the field of
                              higher studies and scholarship development. Our professionals offer individualized
                              guidance
                              in projects, assignments, and tests, enabling students to develop good analytical and
                              critical thinking abilities. Through our carefully organized assistance, students can be
                              confident and can readily move on to the next level of learning.</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="coverflow-card card h-50 h-lg-100 text-white p-4"
                        style="background-color: #242f3e; border-radius: 15px;">
                        <div class="card-body">
                          <h5 class="text-warning fw-bold mb-3">Undergraduate Level Course Help</h5>
                          <p style="font-size: 12px;"><span style="font-weight: 400">Struggling with your degree course?
                              Our </span><a href="https://onlinecoursehelpers.com/undergraduate-level-course-help/"
                              class="text-warning"><span style="font-weight: 400">undergraduate level course
                                help</span></a><span style="font-weight: 400"> is designed for students who strive to
                              achieve academic excellence
                              without having to stress themselves in the process. We are ready to help with essays,
                              online
                              discussions, and exams, and make sure it is accurate, confidential, and ready on
                              time.</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="coverflow-card card h-50 h-lg-100 text-white p-4"
                        style="background-color: #242f3e; border-radius: 15px;">
                        <div class="card-body">
                          <h5 class="text-warning fw-bold mb-3">Master's Level Course Help</h5>
                          <p style="font-size: 12px;"><span style="font-weight: 400">We have a </span><a
                              href="https://onlinecoursehelpers.com/masters-level-course-help/"
                              class="text-warning"><span style="font-weight: 400">masters level course
                                help</span></a><span style="font-weight: 400"> that best fits graduate students with
                              advanced theories,
                              data-driven research or project based studies. With professional guidance and individual
                              academic support, you can comfortably </span><span style="font-weight: 400">complete your
                              course</span><span style="font-weight: 400"> and succeed in graduation.</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="coverflow-card card h-50 h-lg-100 text-white p-4"
                        style="background-color: #242f3e; border-radius: 15px;">
                        <div class="card-body">
                          <h5 class="text-warning fw-bold mb-3">Associative Level Course Help</h5>
                          <p style="font-size: 12px;"><span style="font-weight: 400">Our </span><a
                              href="https://onlinecoursehelpers.com/associate-level-course-help/"
                              class="text-warning"><span style="font-weight: 400">associate-level course
                                help</span></a><span style="font-weight: 400"> services assist students in enhancing
                              their
                              knowledge of critical
                              academic concepts. Our professionals in the U.S. provide quality, well-formatted work in
                              terms of assignments, research projects, and case studies. We assist you in catering to
                              difficult subjects and excelling in all subjects.</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="coverflow-card card h-50 h-md-100 text-white p-4"
                        style="background-color: #242f3e; border-radius: 15px;">
                        <div class="card-body">
                          <h5 class="text-warning fw-bold mb-3">Doctorate Level Course Help</h5>
                          <p style="font-size: 12px;"><span style="font-weight: 400">Our </span><a
                              href="https://onlinecoursehelpers.com/doctorate-level-course-help/"
                              class="text-warning"><span style="font-weight: 400">doctoral-level course
                                help</span></a><span style="font-weight: 400"> offers specialized support to
                              research-oriented students focused
                              on dissertations, analytical writing, and data interpretation. Each of our projects is
                              original, accurate, and supported by the best in the U.S. expertise, academic excellence,
                              and the highest level of scholarly integrity. </span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-none">
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    </section>


    <script>
      const coverflowSwiper = new Swiper(".my3dSwiper", {
        initialSlide: 1,
        centeredSlides: true,
        effect: "coverflow",
        slidesPerView: "auto",
        spaceBetween: 20,
        grabCursor: true,
        breakpoints: {
          992: {
            effect: "coverflow",
            slidesPerView: 3,
            coverflowEffect: {
              rotate: 40,
              stretch: -10,
              depth: 100,
              modifier: 1,
              slideShadows: true,
            },
          }
        },

        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

    </script>

    <section class="py-5 bg-white">
      <div class="container text-center">
        <h2 class="fw-bold mb-2">What Students Say About Our Online Course Assistance</h2>
        <p class="text-muted mb-5">Real experiences - Real results. See the way we have offered students success.</p>

        <div class="row g-4 text-start">
          <div class="col-md-4">
            <div class="card h-50  border-0 shadow-sm text-white p-4"
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
            <div class="card h-50 border-0 shadow-sm text-white p-4"
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
            <div class="card h-50 border-0 shadow-sm text-white p-4"
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
            <div class="card h-50 border-0 shadow-sm text-white p-4"
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
            <div class="card h-50 border-0 shadow-sm text-white p-4"
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
            <div class="card h-50 border-0 shadow-sm text-white p-4"
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
      <div class="payment-info d-flex flex-column flex-lg-row align-items-center justify-content-around mt-4 px-2 py-4">
        <h4 class="fw-bold text-center">Secure payment with</h4>
        <div class="d-flex gap-1 gap-lg-4 align-items-center justify-content-between py-3 px-4">
          <img src="../assets/paypal.webp" alt="paypal" class="payment-icon" />
          <img src="../assets/master-card.webp" alt="master-card" class="payment-icon" />
          <img src="../assets/2560px-Stripe_Logo2C_revised_2016.webp" alt="stripe" class="payment-icon" />
          <img src="../assets/visa.webp" alt="visa" class="payment-icon" />
        </div>
      </div>
    </section>
  </main>


  <!-- Footer -->
  <?php include 'include/footer.php'; ?>

  <script src="owlcarousel/owl.carousel.min.js"></script>
</body>

</html>