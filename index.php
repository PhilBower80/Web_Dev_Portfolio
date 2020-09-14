<?php 
    $pageTitle = 'Philip Bower | Home';
    include('inc/head.php'); 
    include('inc/header.php'); 
?>



<!-- Hero -->
<div id="home" class="hero-section">
    <div class="container hero">
        <div class="hero-text">
            <h1>Philip <span>Bower</span></h1>
            <h2>Web Developer</h2>
            <p>My passion is bringing simplicity, beauty and function to your ideas...</p>
        </div>
    </div>
</div>

<!-- About me -->
<section id="about-me" class="about-me">
    <div class="section-title">
        <h1>About me...</h1>
    </div>

    <div class="container about-content">

        <div class="profile-image">
            <img src="./img/Philip_Bower.png" alt="Profile Picture">
        </div>

        <div class="about-text">
            <p>I am a self motivated, proactive, adaptable and determined person who enjoys
                working in a team environment or equally solo. I have worked in customer
                service / sales support for the past 20 years and have gained excellent
                communication and interpersonal skills. I have long held a desire to work in IT
                and further to gaining an opportunity to join the Netmatters Scion Coalition
                scheme I have trained in front and back end technologies to realise my dream.
                I am now looking to continue this journey as a Junior Web Developer in the
                real world whilst continuing to learn to improve and gain additional skills in
                this field.</p>
        </div>
    </div>


    <!-- Skills -->

    <div class="section-title">
        <h2>Skills</h2>
    </div>


    <div class="container">
        <div class="grid">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-html5 fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>HTML5</h4>
                    <p>Several months of experience both
                        personally and professionally.
                        Comfortable with semantic markup
                        and general structuring.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fab fa-css3-alt fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>CSS3</h4>
                    <p>Able to manage layouts with both
                        Flexbox and CSS Grid.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fab fa-sass fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>SASS</h4>
                    <p>Knowledge of variables, nesting, partials, mixins and the use of extend/inheritance as well as operators.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fab fa-js fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>JavaScript</h4>
                    <p>Able to use vanilla JavaScript as well
                        as jQuery and AJAX.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fab fa-php fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>PHP</h4>
                    <p>Basic knowledge of the language,
                        including an understanding of the
                        core features.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <i class="fab fa-github fa-5x"></i>
                </div>
                <div class="card-body">
                    <h4>GitHub</h4>
                    <p>Used frequently while working on
                        projects.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Projects -->
<section id="projects" class="projects">

    <div class="section-title">
        <h1>Projects</h1>
    </div>

    <div class="container">

        <ul class="project-links">
            <li>
                <a href="https://github.com/PhilBower80/HTML-CSS-Reflection" target="_blank">Netmatters
                    reflection</a>
                <img src="./img/netmattersReflection.PNG" alt="Netmatters Reflection">
            </li>
            <li>
                <a href="https://github.com/PhilBower80/randomImageGenerator" target="_blank">Random Image
                    Generator</a>
                <img src="./img/randomImageGenerator.PNG" alt="Random Image Generator">
            </li>
        </ul>

        <div class="github-link">
            <a href="https://github.com/PhilBower80" target="_blank"><i
                    class="fab fa-github fa-5x"></i>https://github.com/PhilBower80</a>
        </div>

    </div>
</section>

<div class="test-div-link">
    <a href="contactForm.php">Contact me</a>
</div>



<?php include('inc/footer.php'); ?>



