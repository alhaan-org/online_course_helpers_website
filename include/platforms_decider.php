<?php

$all_cards_data = [
    // ALEKS
    [
        'title' => 'Aleks Elementary Course Help',
        'description' => 'ALEKS Elementary is an online learning platform. It covers topics in maths, science, and language arts. Our expert <a href="aleks-course-help">online Aleks course helpers</a> are ready to provide help with every topic.',
        'platform' => 'aleks',
    ],
    [
        'title' => 'Aleks Middle School Course Help',
        'description' => 'ALEKS Middle School is a similar online learning platform designed for middle school students. We offer help with the online Alex middle school course, with every part of the online Alex course.',
        'platform' => 'aleks',
    ],
    [
        'title' => 'Aleks High School Course Help',
        'description' => 'ALEKS High School is an online learning platform that provides adaptive, personalized instruction for high school students. Get online Alex High School course help, which is designed to help students.',
        'platform' => 'aleks',
    ],
    // PEARSON
    [
        'title' => 'Full Pearson Course Help',
        'description' => 'If you are feeling overwhelmed, we can manage your whole class for you. Our experts at online <a href="pearson-course-help">Pearson course help</a> will complete everything from homework to tests. Let us handle your course for you.',
        'platform' => 'pearson',
    ],
    [
        'title' => 'Help With Pearson Quizzes & Tests',
        'description' => 'Do your tests make you feel nervous? Our online course takers are here to help you prepare and guide you before any quiz or exam, so you don’t feel lost or scared.',
        'platform' => 'pearson',
    ],
    [
        'title' => 'Pearson Homework Assistance USA',
        'description' => 'Many students get stuck with their homework. With our help with online course, we give you the correct answers and also explain each one in a way you will understand.',
        'platform' => 'pearson',
    ],
    // BLACKBOARD
    [
        'title' => 'Blackboard Program Course Help',
        'description' => 'A Blackboard Programme Course can support Programme Leads to open a communication channel with their students and share programme-level content. Programme courses must not contain any teaching content or assessments. Feeling overwhelmed by endless lectures and deadlines of your blackboard course? Wondering, “Can I <a href="blackboard-course-help">pay someone to take my blackboard course</a>? If yes, then The Online Course Helpers steps in as your steady academic companion, offering personalized support for your Blackboard course that keeps you engaged, organized, and confident even when things feel like too much to handle.',
        'platform' => 'blackboard'
    ],
    [
        'title' => 'Blackboard Custom (Arbitrary) Course Help',
        'description' => 'Custom courses are used for staff training and school, department or faculty information and communication. Custom courses are set up directly in Blackboard. The ID and title are specified by the person requesting the course.',
        'platform' => 'blackboard'
    ],
    [
        'title' => 'Blackbox Sandbox Course Help',
        'description' => 'A Sandbox is a course used for personal training and testing. You can create a personal Sandbox course in the current Original course format or the new ULTRA format.',
        'platform' => 'blackboard'
    ],
    // MCGRAW HILL
    [
        'title' => 'PreK- 12 Course Help',
        'description' => 'The Online Course Helpers offer <a href="mcgrawhill-course-help">help with McGraw Hill course</a> in core subjects like math, computer science, and career and technical education (CTE), covering grades from early childhood through high school.',
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
    // SOPHIA
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
        'description' => 'The expert <a href="sophia-course-help">online Sophia closure helpers</a> at the Online Course Helpers offer complete help with online course for college level offered by Sophia to help students earn credit towards an associate or bachelor\'s degree.',
        'platform' => 'sophia'
    ]
];
// Added the array for rendering the content dynamically later
?>


<section class="py-5 finish-my-course" style="background-color: #dadadaff;" data-aos="fade-up">
    <div class="container text-center">
        <h1 class="fw-medium mb-4 px-5">Finish My Online Course With Top Grades and Guaranteed Credits on Top Platforms
        </h1>
        <p class="px-5">Get expert help with your online course. We provide 24/7 service and dedicated support with
            online course
            assignments, quizzes and assessments on all platforms.</p>
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" id="platform-filters-buttons">
            <button id="platformChanger" class="btn btn-dark active py-2 px-3" data-platform="aleks">Aleks</button>
            <button id="platformChanger" class="btn btn-outline-dark py-2 px-3" data-platform="mcgrawhill">McGraw
                Hill</button>
            <button id="platformChanger" class="btn btn-outline-dark py-2 px-3" data-platform="pearson">Pearson</button>
            <button id="platformChanger" class="btn btn-outline-dark py-2 px-3"
                data-platform="blackboard">BlackBoard</button>
            <button id="platformChanger" class="btn btn-outline-dark py-2 px-3" data-platform="sophia">Sophia</button>
        </div>

        <div class="row g-4" id="cards-container">
            <?php foreach ($all_cards_data as $data): ?>
                <div class="col-md-4 card-helpers" style="<?= $data["platform"] === "aleks" ? '' : 'display: none;' ?>"
                    data-platform="<?= $data["platform"] ?>">

                    <div class="d-flex flex-column h-100 bg-light border-0 shadow-sm py-5 px-5 justify-content-center">

                        <h4 class="text-start fw-semibold mb-2 text-dark text-navy">
                            <?= $data["title"] ?>
                        </h4>

                        <p class="text-start text-muted small mb-0 text-navy">
                            <?= $data["description"] ?>
                        </p>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>