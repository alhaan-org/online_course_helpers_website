<div class="hero-form-card">
  <div class="limited-offer-badge">
    <img src="assets/img/limited-offer.webp" alt="Limited Offer" />
  </div>
  <h4 class="mb-4 text-center fw-bold text-dark">
    Save Upto 50% On First Order
  </h4>
  <form id="contactForm" action="signup.php" method="POST">
    <div class="mb-3">
      <input type="text" name="name" class="form-control" id="name" placeholder="Name" required />
    </div>
    <div class="mb-3">
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" required />
    </div>
    <div class="mb-3">
      <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone No" required />
    </div>
    <div class="mb-4">
      <select class="form-select" name="service" id="service" required>
        <option value="" disabled selected>Select Service</option>
        <option value="Online Class">Online Class</option>
        <option value="Online Course">Online Course</option>
        <option value="Assignments">Assignments</option>
        <option value="Dissertation">Dissertation</option>
      </select>
    </div>
    <button type="submit" class="btn btn-submit">
      Send
    </button>
  </form>
</div>