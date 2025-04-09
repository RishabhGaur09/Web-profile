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

    <title>Rishabh Gaur | My Projects</title>
    <style>
        .breadcrumb {
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
            <li class="breadcrumb-item active" aria-current="page">My Projects</li>
        </ol>
    </nav>

    <div class="container" style="width:70%;">
        <div class="mb-3 mt-3" style="font-family: 'Open Sans', sans-serif;">
            <h1>My Projects</h1>
        </div>
        <div class="card mb-3 mt-3">
            <!-- ***************************************************************************************************** -->
            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="images/PGlife-1.jpeg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="images/PGlife-2.jpeg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="images/PGlife-3.jpeg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div> -->
                    </div>
                    <div class="carousel-item">
                        <img src="images/PGlife-4.jpeg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div> -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- ***************************************************************************************************** -->
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body text-center">
                <h5 class="card-title"><u>PG-Life</u></h5>
                <p class="card-text">PG-Life is a solution for students seeking rental rooms beyond restrictive hostel 
                    boundaries. It offers a user-friendly platform to explore numerous rental options, saving time and effort. 
                    Students can easily find accommodations that match their preferences and budget, 
                    ensuring a comfortable living experience during their college or university years.</p>
                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="right" data-bs-content="Coming soon... (Currently offline)">
                    <a type="button" class="btn btn-outline-secondary" style="margin:2px 0px" href="#">Live Project</a>
                </span>
            </div>
            <div class="card-footer text-center">
                <small class="text-body-secondary">Last updated 2024</small>
            </div>
        </div>
    </div>
    <script>
        // This script is for pop-up message that appears when hover on button
        document.addEventListener('DOMContentLoaded', function () {
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });
        });
    </script>
    <?php include 'includes/footer.php'; ?>
</body>

</html>