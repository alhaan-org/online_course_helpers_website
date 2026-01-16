# QA Documentation: Online Course Helpers Website
**Date:** January 16, 2026  
**Status:** Code Review & Bug Identification  

---

## 📋 Summary
This document provides a comprehensive QA review of the Online Course Helpers website, identifying all bugs, issues, and areas requiring fixes across PHP, JavaScript, and CSS files.

---

## 🐛 CRITICAL ISSUES

### 1. **index.php**

#### Issue 1.1: Empty PHP Tag
**Severity:** ⚠️ Low | **Type:** Code Quality  
**Location:** Lines 1-3

```php
<?php
// index.php
?>
```

**Problem:** The opening PHP tag contains only a comment with no functional code.  
**Impact:** Unnecessary overhead; confusing for developers.  
**Fix:** Remove empty PHP tags since no server-side processing occurs on this page.

---

#### Issue 1.2: Dead Navigation Links
**Severity:** 🔴 High | **Type:** Functionality  
**Location:** Lines 44-60

```php
<!-- Navigation Items -->
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto gap-3 align-items-center">
    <li class="nav-item">
      <a class="nav-link active" href="#">Home</a>          <!-- ❌ DEAD LINK -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Services</a>             <!-- ❌ DEAD LINK -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Platforms</a>            <!-- ❌ DEAD LINK -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Courses</a>              <!-- ❌ DEAD LINK -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Education Level</a>      <!-- ❌ DEAD LINK -->
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>                 <!-- ❌ DEAD LINK -->
    </li>
```

**Problem:** All navigation links point to `#` (nowhere). Navigation will not work.  
**Impact:** Users cannot navigate to different sections of the website.  
**Fix:** Replace `href="#"` with proper anchors like `href="#services"`, `href="#platforms"`, etc. and ensure corresponding section IDs exist in the HTML.

---

## 🐛 MAJOR ISSUES

### 2. **hero_section.php**

#### Issue 2.1: No Form Validation & Backend Processing
**Severity:** 🔴 High | **Type:** Security & Functionality  
**Location:** Lines 49-73

```php
<form id="contactForm">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name" required />
        <!-- ❌ No pattern validation, no sanitization -->
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" required />
        <!-- ❌ No server-side validation, vulnerable to injection attacks -->
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone No</label>
        <input type="tel" class="form-control" id="phone" placeholder="Phone No" required />
        <!-- ❌ No international format support, no backend processing -->
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
        <!-- ❌ No CSRF token for security -->
    </button>
</form>
```

**Problems:**
- No backend PHP script to process the form submission
- Missing CSRF token for security
- No input sanitization or validation
- No email verification
- Potential SQL injection vulnerability
- No error handling

**Impact:** Form data is lost; users have no feedback; security vulnerabilities exposed.  
**Fix:** 
- Create a backend handler (e.g., `process_form.php`)
- Add CSRF token to form
- Implement server-side validation and sanitization
- Add error handling and user feedback

---

#### Issue 2.2: Missing Alt Text on Images
**Severity:** ⚠️ Medium | **Type:** Accessibility & SEO  
**Location:** Line 37

```php
<img src="../assets/banner-logo-new.png" alt="Leader Badge" class="trusted-by-logo" />
<!-- ✓ This one has proper alt text -->
```

**Problem:** While this specific image has alt text, it's not descriptive enough for SEO purposes.  
**Impact:** Poor SEO; accessibility issues for screen readers.

---

### 3. **benefits_section.php**

#### Issue 3.1: Duplicate Course Cards (Major Content Issue)
**Severity:** 🔴 High | **Type:** Content & User Experience  
**Location:** Lines 44-80+

```php
<!-- Card 1: Finance Course Help -->
<div class="course-card-container">
    <div class="course-card">
        <h3>Finance Course Help</h3>
        <!-- Content... -->
    </div>
</div>

<!-- Card 2: Business Law Help -->
<div class="course-card-container">
    <div class="course-card">
        <h3>Business Law Help</h3>
        <!-- Content... -->
    </div>
</div>

<!-- Card 3: Statistics Help -->
<div class="course-card-container">
    <div class="course-card">
        <h3>Statistics Help</h3>
        <!-- Content... -->
    </div>
</div>

<!-- ❌ DUPLICATE: Statistics Help (Exact Copy) -->
<div class="course-card-container">
    <div class="course-card">
        <h3>Statistics Help</h3>
        <p>We help with probability, data analysis, testing hypotheses and so on...</p>
        <!-- IDENTICAL TO CARD 3 -->
    </div>
</div>

<!-- ❌ DUPLICATE: Statistics Help (Exact Copy #2) -->
<div class="course-card-container">
    <div class="course-card">
        <h3>Statistics Help</h3>
        <p>We help with probability, data analysis, testing hypotheses and so on...</p>
        <!-- IDENTICAL TO CARD 3 -->
    </div>
</div>

<!-- ❌ DUPLICATE: Statistics Help (Exact Copy #3) -->
<div class="course-card-container">
    <div class="course-card">
        <div class="card-content">
            <h3>Statistics Help</h3>
            <p>We help with probability, data analysis, testing hypotheses and so on...</p>
        </div>
    </div>
</div>
```

**Problem:** 
- 3 identical "Statistics Help" cards are repeated
- Wastes horizontal scroll space
- Poor user experience
- Appears unprofessional

**Impact:** Users see redundant content; confusing navigation; reduced trust.  
**Fix:** Replace duplicate cards with unique course offerings:
- Biology Course Help
- Chemistry Course Help
- Economics Course Help
- Literature Course Help
- Computer Science Course Help
- Psychology Course Help

---

### 4. **cheap_price_section.php**

#### Issue 4.1: Empty Section
**Severity:** 🔴 High | **Type:** Incomplete Feature  
**Location:** Entire file

```php
<section class="cheap-price-section"></section>
```

**Problem:** Section is completely empty; no content is rendered.  
**Impact:** Users expect pricing information; section title suggests pricing content should exist.  
**Fix:** Implement pricing table or pricing tier cards with:
- Basic, Standard, Premium plan tiers
- Feature comparisons
- Price points
- Call-to-action buttons

---

### 5. **moodle_section.php**

#### Issue 5.1: Empty Alt Attributes
**Severity:** ⚠️ Medium | **Type:** Accessibility & SEO  
**Location:** Lines 18, 30, 40, 50, 60, 70, 80+ (Multiple instances)

```php
<img id="flip-card-img" src="../assets/brightspace.webp" alt="" />
<!-- ❌ Empty alt attribute -->

<img id="flip-card-img" src="../assets/mgh.webp" alt=""/>
<!-- ❌ Empty alt attribute -->

<img id="flip-card-img" src="../assets/wgu.webp" alt=""/>
<!-- ❌ Empty alt attribute -->
```

**Problem:** Empty `alt=""` attributes provide no alternative text for screen readers or when images fail to load.  
**Impact:** Accessibility issues; poor SEO; fail WCAG standards.  
**Fix:** Add descriptive alt text:

```php
<img id="flip-card-img" src="../assets/brightspace.webp" alt="Brightspace Learning Platform Logo" />
<img id="flip-card-img" src="../assets/mgh.webp" alt="McGraw Hill Learning Platform Logo" />
<img id="flip-card-img" src="../assets/wgu.webp" alt="Western Governors University Platform Logo" />
```

---

#### Issue 5.2: Duplicate ID Attribute
**Severity:** ⚠️ Medium | **Type:** HTML Standards Violation  
**Location:** Multiple images (Lines 18, 30, 40, 50, etc.)

```php
<img id="flip-card-img" src="../assets/brightspace.webp" alt="..." />
<!-- First instance -->

<img id="flip-card-img" src="../assets/mgh.webp" alt="..." />
<!-- ❌ DUPLICATE ID: Should be unique! -->

<img id="flip-card-img" src="../assets/wgu.webp" alt="..." />
<!-- ❌ DUPLICATE ID: Should be unique! -->
```

**Problem:** HTML IDs must be unique within a page. Having multiple elements with the same ID violates HTML standards and breaks CSS/JavaScript selectors.  
**Impact:** CSS and JavaScript targeting may only affect the first element; unpredictable behavior; hard to debug.  
**Fix:** Use classes instead or create unique IDs:

```php
<!-- Option 1: Use class instead -->
<img class="flip-card-img" src="../assets/brightspace.webp" alt="Brightspace Logo" />
<img class="flip-card-img" src="../assets/mgh.webp" alt="McGraw Hill Logo" />

<!-- Option 2: Create unique IDs -->
<img id="flip-card-img-brightspace" src="../assets/brightspace.webp" alt="Brightspace Logo" />
<img id="flip-card-img-mgh" src="../assets/mgh.webp" alt="McGraw Hill Logo" />
```

---

## 🎨 CSS ISSUES

### 6. **styles.css**

#### Issue 6.1: Invalid Gradient Color Stop Order
**Severity:** ⚠️ Medium | **Type:** CSS Error  
**Location:** Lines 25-32

```css
.hero-section::before {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: "";
  background: linear-gradient(135deg,
      #003d4d 0%,
      #003042 60%,         /* ❌ 60% */
      rgb(0, 39, 54) 20%,  /* ❌ 20% (WRONG ORDER! Should be after 60%) */
      #f3ef00 100%);
  z-index: 1;
  opacity: 0.95;
}
```

**Problem:** Gradient color stops are out of order (60% before 20%). This is illogical and may cause unexpected gradient rendering.  
**Impact:** Incorrect visual rendering; gradient may not display as intended.  
**Fix:** Arrange color stops in ascending order:

```css
background: linear-gradient(135deg,
    #003d4d 0%,
    #003042 20%,           /* ✓ Corrected order */
    rgb(0, 39, 54) 60%,    /* ✓ Corrected order */
    #f3ef00 100%);
```

---

#### Issue 6.2: SCSS Syntax in Regular CSS File
**Severity:** ⚠️ Medium | **Type:** CSS Compilation Error  
**Location:** Lines 283-294

```css
.slider-images {
  display: flex;
  gap: 10px;
  overflow-x: auto;
  white-space: nowrap;

  /* Hide scrollbar for Chrome, Safari, Edge, and Opera */
  &::-webkit-scrollbar {        /* ❌ SCSS Syntax! Not valid CSS */
    display: none;
  }

  /* Hide scrollbar for Firefox */
  scrollbar-width: none;

  /* Hide scrollbar for IE and older Edge */
  -ms-overflow-style: none;
}
```

**Problem:** The `&::-webkit-scrollbar` selector uses SCSS nesting syntax (`&`), which is invalid in standard CSS.  
**Impact:** This CSS rule will not work; scrollbar styling will fail.  
**Fix:** Convert to standard CSS:

```css
.slider-images {
  display: flex;
  gap: 10px;
  overflow-x: auto;
  white-space: nowrap;
  scrollbar-width: none;
  -ms-overflow-style: none;
}

/* Hide scrollbar for Chrome, Safari, Edge, and Opera */
.slider-images::-webkit-scrollbar {
  display: none;
}
```

---

#### Issue 6.3: Duplicate `.highlight` Class Definition
**Severity:** ⚠️ Low | **Type:** CSS Maintainability  
**Location:** Lines 244 and 318

```css
/* First definition (Line 244) */
.highlight {
  background-color: #ffd000;
  padding: 2px 6px;
}

/* ... other rules ... */

/* Second definition (Line 318) - DUPLICATE */
.highlight {
  background-color: #FFCC00;
  color: #000;
  padding: 2px 10px;
}
```

**Problem:** Two conflicting definitions of the same class. The second one will override the first.  
**Impact:** Confusion; potential CSS conflicts; hard to maintain.  
**Fix:** Create separate classes or merge the definitions:

```css
.highlight {
  background-color: #FFCC00;
  color: #000;
  padding: 2px 10px;
}

/* Remove the first definition or rename it */
```

---

#### Issue 6.4: Missing Shadow Effect on Hover
**Severity:** ⚠️ Low | **Type:** UX Enhancement  
**Location:** Lines 512-516

```css
.service-box {
    background-color: #00334d;
    color: #ffffff;
    padding: 40px 30px;
    border-radius: 8px;
    height: 100%;
    transition: transform 0.3s ease;
    /* ❌ No box-shadow defined */
}

.service-box:hover {
    transform: translateY(-5px);
    /* ❌ No enhanced shadow on hover */
}
```

**Problem:** Hover effect only applies `translateY` but no shadow enhancement. This looks incomplete compared to modern UI patterns.  
**Impact:** Less polished visual feedback; inconsistent with contemporary design standards.  
**Fix:** Add shadow effects:

```css
.service-box {
    /* ... existing styles ... */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}
```

---

#### Issue 6.5: Repeated CSS Rule Definition
**Severity:** ⚠️ Low | **Type:** Code Redundancy  
**Location:** Lines 400-415 and 506-520

```css
/* First definition */
.horizontal-scroll-wrapper::-webkit-scrollbar {
  height: 8px;
}

.horizontal-scroll-wrapper {
  scrollbar-color: #00334d #FFE066;
  scrollbar-width: thin;
}

/* Later in file - essentially repeats the scrollbar styling */
```

**Problem:** Similar scrollbar styling rules appear in multiple places.  
**Impact:** Code bloat; harder to maintain.  
**Fix:** Consolidate repeated rules into a single location.

---

## 🔧 JAVASCRIPT ISSUES

### 7. **app.js**

#### Issue 7.1: Inefficient Scroll Event Listener
**Severity:** ⚠️ Medium | **Type:** Performance  
**Location:** Lines 53-63

```javascript
$(window).scroll(function () {
  if ($(this).width() > 992) {
    $(".navbar").css("background-color", "#111 !important");
    /* ❌ This runs on EVERY pixel scrolled - very inefficient! */
  }
  if ($(this).scrollTop() > 10) {
    $(".navbar").addClass("scrolled");
  } else {
    $(".navbar").removeClass("scrolled");
  }
});
```

**Problems:**
1. Scroll event fires hundreds of times per second (on every pixel)
2. DOM manipulation (`.css()`) happens on every scroll event
3. Inline `!important` flag is used (CSS anti-pattern)
4. No throttling or debouncing
5. Width check runs unnecessarily on every scroll

**Impact:** 
- Performance degradation on lower-end devices
- Excessive CPU usage
- Battery drain on mobile devices
- Janky scrolling experience

**Fix:** Implement throttling and optimize the code:

```javascript
let lastScrollTime = 0;
const throttleDelay = 100; // milliseconds

$(window).scroll(function () {
  const currentTime = Date.now();
  
  // Throttle scroll event
  if (currentTime - lastScrollTime < throttleDelay) return;
  lastScrollTime = currentTime;
  
  // Move width check outside scroll handler - only check once
  if ($(this).scrollTop() > 10) {
    $(".navbar").addClass("scrolled");
  } else {
    $(".navbar").removeClass("scrolled");
  }
});

// Check width only on window resize, not on scroll
$(window).resize(function () {
  if ($(this).width() > 992) {
    $(".navbar").removeClass("scrolled-mobile");
  } else {
    $(".navbar").addClass("scrolled-mobile");
  }
});
```

---

#### Issue 7.2: Ambiguous Variable Names
**Severity:** ⚠️ Low | **Type:** Code Quality  
**Location:** Lines 30-40

```javascript
$horizontalScrollCards.on("click", () => {
  let direction = 1;
  const value = 300;  /* ❌ What is 'value'? Pixels? Milliseconds? Unclear */
  const currentScroll = $horizontalScrollWrapper.scrollLeft();
  
  const maxScroll = $horizontalScrollWrapper[0].scrollWidth - $horizontalScrollWrapper.outerWidth();

  if (currentScroll >= maxScroll - 5)
      direction = -1; 
  else if (currentScroll <= 0) {
      direction = 1; 
  }
```

**Problem:** Variable names are vague; poor documentation.  
**Impact:** Hard to maintain; confusing for other developers.  
**Fix:** Use descriptive names:

```javascript
const SCROLL_DISTANCE = 300; // pixels
const ANIMATION_DURATION = 300; // milliseconds
const SCROLL_END_THRESHOLD = 5; // pixels
```

---

## 📊 SUMMARY TABLE

| Issue ID | File | Severity | Type | Status |
|----------|------|----------|------|--------|
| 1.1 | index.php | Low | Code Quality | Not Started |
| 1.2 | index.php | High | Functionality | Not Started |
| 2.1 | hero_section.php | High | Security | Not Started |
| 2.2 | hero_section.php | Medium | Accessibility | Not Started |
| 3.1 | benefits_section.php | High | Content | Not Started |
| 4.1 | cheap_price_section.php | High | Incomplete | Not Started |
| 5.1 | moodle_section.php | Medium | Accessibility | Not Started |
| 5.2 | moodle_section.php | Medium | HTML Violation | Not Started |
| 6.1 | styles.css | Medium | CSS Error | Not Started |
| 6.2 | styles.css | Medium | CSS Syntax | Not Started |
| 6.3 | styles.css | Low | Maintenance | Not Started |
| 6.4 | styles.css | Low | UX Enhancement | Not Started |
| 6.5 | styles.css | Low | Code Redundancy | Not Started |
| 7.1 | app.js | Medium | Performance | Not Started |
| 7.2 | app.js | Low | Code Quality | Not Started |

---

## ✅ Recommended Fix Priority

### 🔴 **Priority 1: CRITICAL (Fix Immediately)**
1. Issue 1.2: Dead navigation links
2. Issue 2.1: Form validation & backend processing
3. Issue 3.1: Duplicate course cards
4. Issue 4.1: Empty pricing section

### 🟡 **Priority 2: IMPORTANT (Fix Soon)**
1. Issue 6.1: Invalid gradient color stops
2. Issue 6.2: SCSS syntax in CSS
3. Issue 7.1: Inefficient scroll event
4. Issue 5.1: Empty alt attributes

### 🟢 **Priority 3: NICE-TO-HAVE (Fix When Time Permits)**
1. Issue 6.3: Duplicate .highlight class
2. Issue 6.4: Missing shadow effects
3. Issue 7.2: Ambiguous variable names

---

## 📝 Notes
- All issues documented with code snippets for easy reference
- Fixes suggested for each issue
- Testing recommended after each fix
- Consider implementing linting tools (ESLint, StyleLint) to prevent future issues

---

**End of QA Documentation**
