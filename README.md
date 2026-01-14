## Online Course Helpers Website

> Built on Custom HTML, CSS and Javascript (JQuery Plugin) and Bootstrap. Using PHP for serving the website

# To run the local server for development, follow these instructions:

* Install XAMPP Server on your PC
* Navigate to the project directory
* Run the Server and see the localhost server running on your browser, woohoo!
* Make changes, do development, tweak CSS if needed!


How to change things, change content where needed

To do this, the sections are in include folder and each section tells us different story
the index.php contains the included sections like this:

```php
    <!-- HTML Content going -->
    <?php include 'include/hero_section.php'; ?>
    <!-- Trust Section -->
    <?php include 'include/trust_section.php'; ?>
    <!-- Benefits Section -->
     <?php include 'include/benefits_section.php'; ?>
     <!-- Services Section -->
    <?php include 'include/services_section.php'; ?>
```

TO add more sections, just reference it like this.