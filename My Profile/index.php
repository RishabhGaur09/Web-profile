<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rishabh Gaur's professional web portfolio. Computer Science graduate with skills in web development, programming, and digital marketing.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Rishabh Gaur">
    <meta name="google-site-verification" content="verification_code">  <!-- Need to look and uncomment after hosting -->

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Rishabh Gaur | Web Developer & Computer Science Graduate">
    <meta property="og:description" content="Explore the professional portfolio of Rishabh Gaur, showcasing expertise in web development, programming, and digital marketing.">
    <meta property="og:image" content="https://yourwebsite.com/images/profile.jpg">  <!-- Need to look and uncomment after hosting -->
    <meta property="og:url" content="https://rishabhgaurportfolio.com"> <!-- Need to look and uncomment after hosting -->
    <meta property="og:type" content="profile">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rishabh Gaur | Web Developer & Computer Science Graduate">
    <meta name="twitter:description" content="Explore the professional portfolio of Rishabh Gaur, showcasing expertise in web development, programming, and digital marketing.">
    <meta name="twitter:image" content="https://yourwebsite.com/images/profile.jpg"> <!-- Need to look and uncomment after hosting -->
    <meta name="twitter:url" content="https://rishabhgaurportfolio.com">    <!-- Need to look and uncomment after hosting -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <title>Rishabh Gaur | Home</title>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav> -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\1st.jpg" height="550" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my profile</h5>
                    <p>Solutions with innovation.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\6th.jpg" height="550" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my profile</h5>
                    <p>Solutions with innovation.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\3rd.jpg" height="550" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to my profile</h5>
                    <p>Solutions with innovation.</p>
                </div>
            </div>
            <!-- <div class="btn-group carousel-caption d-none d-sm-block" role="group" aria-label="Basic outlined example">
                <a type="button" class="btn btn-outline-secondary" href="#">About</a>
                <a type="button" class="btn btn-outline-secondary" href="#">Projects</a>
                <a type="button" class="btn btn-outline-secondary" href="">Experience</a>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>

    <div class="container" id="skills">
        <h4 style="text-align:center; text-decoration: underline;"><b>MY SKILLS</b></h4>
        <hr>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3">  <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/html-css.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">HTML & CSS</h5>
                                <p class="card-text">HTML provides web page structure, whereas CSS is mainly used to
                                    control web page styling.</p>
                                <a href="https://html.com/" class="card-link ">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images\bootstrap.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">Bootstrap</h5>
                                <p class="card-text">A free, open source front-end development framework for creating websites and web apps.</p>
                                <a href="https://getbootstrap.com/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/php.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">PHP</h5>
                                <p class="card-text">An open source server-side scripting language that is widely used for web development and business application. </p>
                                <a href="https://www.php.net/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                            <!-- here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/mysql.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">MySQL</h5>
                                <p class="card-text">MySQL is an Oracle-backed open source relational database management system
                                    based on Structured Query Language (SQL).</p>
                                <a href="https://www.mysql.com/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/laravel.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">Laravel 10</h5>
                                <p class="card-text">A powerful open-source PHP web application framework known for its elegant syntax and robust features.</p>
                                <a href="https://laravel.com/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Beginner</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Beginner</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images\js.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">JavaScript</h5>
                                <p class="card-text">JavaScript is a cross-platform, object-oriented programming language used to make web pages interactive.</p>
                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" class="card-link">Read
                                    more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images\java.jpeg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">JAVA</h5>
                                <p class="card-text">A multiplatform, object-oriented programming language that runs on
                                    billions of devices worldwide.</p>
                                <a href="https://www.java.com/en/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/python.jpeg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">Python</h5>
                                <p class="card-text">Python is an interpreted, object-oriented, high-level programming
                                    language with dynamic semantics. </p>
                                <a href="https://www.python.org/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images\C.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">C</h5>
                                <p class="card-text">C language is a system programming language because 
                                    it can be used to do low-level programming (for example driver and kernel).</p>
                                <a href="https://www.java.com/en/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-3"> <!-- style="max-width: 540px;" -->
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/cpp.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8" style="display: flex; flex-direction: column;">
                            <div class="card-body">
                                <h5 class="card-title">C++</h5>
                                <p class="card-text">C++ is an object-oriented programming language which gives 
                                    a clear structure to programs and allows code to be reused, lowering development costs. </p>
                                <a href="https://www.python.org/" class="card-link">Read more</a>
                                <!-- <p class="card-text"><small class="text-body-secondary">Level: Intermediate</small></p> -->
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                    <small class="text-body-secondary">Level: Intermediate</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
