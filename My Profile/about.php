<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <title>Rishabh Gaur | About</title>
    <style>
        .breadcrumb{
            margin: 1px 0 0 0; 
            padding: 0 15px; 
        }
        a {
            color: #6c757d;
        }
        .breadcrumb-item a:hover {
            color: rgba(255, 255, 255, .55);
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-dark">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
    <div class="container" style="width:70%">
        <div class="card mb-3">
            <!-- <img src="images/me.jpeg" class="card-img-top img-fluid" alt="..."> -->
            <div id="carouselExampleFade" class="carousel slide"> <!-- class= "carousel-fade" -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/me.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/me2.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="btn-group carousel-caption d-none d-sm-block" role="group" aria-label="Basic outlined example">
                        <a type="button" class="btn btn-outline-secondary" style="margin:2px 0px" href="#education">Education</a>
                        <a type="button" class="btn btn-outline-secondary" style="margin:2px 0px" href="#trainings">Trainings & courses</a>
                        <a type="button" class="btn btn-outline-secondary" style="margin:2px 0px" href="#experience">Experience</a>
                        <!-- <a type="button" class="btn btn-outline-secondary" style="margin:2px 0px" href="my_projects.php">My Projects</a> -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="card-body text-center">
                <h5 class="card-title"><u>About Me:</u></h5>
                <p class="card-text">
                    I am a highly motivated and detail-oriented individual with a strong passion for technology and
                    continuous learning. Known for my problem-solving skills and a proactive approach,
                    I thrive in dynamic environments and enjoy tackling challenging projects.
                    My adaptability, combined with a keen eye for detail, ensures that I consistently deliver
                    high-quality work.
                    I am a collaborative team player who values clear communication and is always eager to contribute to
                    innovative solutions.
                </p>
                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 2024</small></p> -->
            </div>
            <div class="card-footer text-center">
                <small class="text-body-secondary">Last updated 2024</small>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title" id="education"><u>Education:</u></h5>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="images/cms.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">10th</h5>
                                <p class="card-text">Completed my class 10th from City Montessori School, Rajendra Nagar, Lucknow, India.</p>
                                <p class="card-text">Scored: 1st Division</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Year: 2017-2018</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/cms.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">12th</h5>
                                <p class="card-text">Completed my class 12th from City Montessori School, Rajendra Nagar, Lucknow, India.</p>
                                <p class="card-text">Scored: 1st Division</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Year: 2019-2020</small></p> -->
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Year: 2019-2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/srmu.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Bachelor of Computer Application (BCA)</h5>
                                <p class="card-text">Completed my graduation in Bachelor of Computer Application from Shri Ramswaroop Memorial University, Deva Road, Lucknow, India.</p>
                                <p class="card-text">Scored: 7.69 CGPA</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Year: 2020-2023</small></p> -->
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Year: 2020-2023</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/srmu.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Master of Computer Applications (MCA)</h5>
                                <p class="card-text">Completed my post-graduation in Master of Computer Application from Shri Ramswaroop Memorial University, Deva Road, Lucknow, India.</p>
                                <p class="card-text">Scored: 7.14 CGPA</p>
                                <!-- <p class="card-text"><small class="text-body-secondary">Year: 2023-2025</small></p> -->
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Year: 2023-2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title" id="trainings"><u>Trainings & Courses:</u></h5>
                <!-- <div class="row row-cols-1 row-cols-md-2 g-4"> -->
                    <!-- <div class="col">  -->
                    <div class="row">

                        <!-- TWO CARDS IN EACH ROW VIEW (ALTERNATE PREVIOUS VERSION) -->
                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                        <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                                <img src="images/google.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Digital Marketing</h5>
                                    <p class="card-text">A Digital Marketing & E-commerce training and certificate by Google that focuses on the skills that employers are seeking, including email marketing.</p>
                                    <p class="card-text">Duration: 36 hours</p>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#digital_market_Modal" href="#" class="btn btn-outline-secondary mb-3">View Certificate</a>
                                    <p class="card-text"><small class="text-body-secondary">Year: 2020</small></p>
                                </div>
                            </div>
                        </div>
                        <?php // include 'includes/digital_market_modal.php'; ?>

                        <div class="col-sm-6">
                            <div class="card">
                            <img src="images/internshala.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Web Development</h5>
                                    <p class="card-text">A complete online web development course by Internshala.com, including technologies like HTML, CSS, Bootstrap, PHP, MySQL, and Javascript.</p>
                                    <p class="card-text">Duration: 3 months</p>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#web_dev_Modal" href="#" class="btn btn-outline-secondary mb-3">View Certificate</a>
                                    <p class="card-text"><small class="text-body-secondary">Year: 2022</small></p>
                                </div>
                            </div>
                        </div> -->
                        <?php // include 'includes/web_development_modal.php'; ?>
                    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                        <div class="card-group">
                            <div class="card" style="border: 1px solid #ddd; border-radius: 4px;">
                                <img src="images/google.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Digital Marketing</h5>
                                    <p class="card-text">A Digital Marketing & E-commerce training and certificate by Google that focuses on the skills that employers are seeking, including email marketing.</p>
                                    <p class="card-text">Duration: 36 hours</p>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#digital_market_Modal" href="#" class="btn btn-outline-secondary mb-3">View Certificate</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Year: 2020</small>
                                </div>
                                <?php include 'includes/digital_market_modal.php'; ?>
                            </div>
                            
                            <div class="card mx-3" style="border: 1px solid #ddd; border-radius: 4px;">
                                <img src="images/devtown.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Python & Data Visualization</h5>
                                    <p class="card-text">A complete online web development course by Internshala.com, including technologies like HTML, CSS, Bootstrap, PHP, MySQL, and Javascript.</p>
                                    <p class="card-text">Duration: 3 months</p>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#data_visual_Modal" href="#" class="btn btn-outline-secondary mb-3">View Certificate</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Year: 2021</small>
                                </div>
                                <?php include 'includes/data_visualization_modal.php'; ?>
                            </div>

                            <div class="card" style="border: 1px solid #ddd; border-radius: 4px;">
                                <img src="images/internshala.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Web Development</h5>
                                    <p class="card-text">A complete online web development course by Internshala.com, including technologies like HTML, CSS, Bootstrap, PHP, MySQL, and Javascript.</p>
                                    <p class="card-text">Duration: 3 months</p>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#web_dev_Modal" href="#" class="btn btn-outline-secondary mb-3">View Certificate</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">Year: 2022</small>
                                </div>
                                <?php include 'includes/web_development_modal.php'; ?>
                            </div>
                        </div>

                    </div>
                    
                    
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title" id="experience"><u>Experience:</u></h5>
                <!-- <div class="row row-cols-1 row-cols-md-2 g-4"> -->
                    <!-- <div class="col">  -->
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="images/paliwal.jpeg" class="img-fluid rounded-start" style="height:100%" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Internship</h5>
                                        <p class="card-text">A web-development internship at Paliwal Web Services, Munshi-puliya, Lucknow, India.</p>
                                        <p class="card-text">Duration: 6 months</p>
                                        <a type="button" class="btn btn-outline-secondary mb-3" href="https://paliwalwebservices.com/">Visit Site</a>
                                        <!-- <p class="card-text"><small class="text-body-secondary">Year: 2024</small></p> -->
                                    </div>
                                    <div class="card-footer">
                                            <small class="text-body-secondary">Year: 2023</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

    </div>
    <!-- ************************************************************************************************* -->
    <?php include 'includes/footer.php'; ?>

</body>

</html>