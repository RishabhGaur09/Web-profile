<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- <img src="images/logo1.png" alt="..." class="img-fluid" style="height:40px; width:80px;"> -->
    <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">iCoder</a> -->
        <img src="images/logo1.png" alt="..." class="img-fluid" style="height:40px; width:80px; margin-right: 8px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_projects.php">My Projects</a>
                </li>

                <!-- <script>
                    // This script is for pop-up message that appears when hover on button
                    document.addEventListener('DOMContentLoaded', function () {
                        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
                        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                            return new bootstrap.Popover(popoverTriggerEl);
                        });
                    });
                </script>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Live Projects
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <li>
                            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="Coming soon... (Currently offline)">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-home"></i> PG-Life
                                </a>
                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item disabled text-dark" href="#" disabled>More to come...</a></li>
                    </ul>
                </li> -->

                <li class="nav-item dropdown" style="margin-right:8px">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Contact
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                            href="https://t.me/Rishabh_gaur" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="https://mail.google.com/mail/?view=cm&fs=1&to=rishabhgaur8756@gmail.com" target="_blank"><i
                                    class="fas fa-envelope"></i> E-mail</a></li>
                        <li><a class="dropdown-item"
                                href="https://www.instagram.com/rishabh_chand_sharma?igsh=b24yZGRmYWM1YzUy" target="_blank"><i
                                    class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a class="dropdown-item" href="https://wa.me/+918756546190" target="_blank"><i class="fab fa-whatsapp"></i>
                                WhatsApp</a></li>
                        <li><a class="dropdown-item" href="https://www.linkedin.com/in/rishabh-gaur-86a356245" target="_blank"><i
                                    class="fab fa-linkedin"></i> LinkedIn</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item disabled text-dark" href="#" disabled>Call: +91-8756546190</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="resume" href="resources\Rishabh Gaur_RESUME_2023.pdf" download>Download Resume</a>
                    <!-- <button type="button" class="btn btn-secondary">Download Resume</button>
                    <button type="button" class="btn btn-outline-secondary">Download Resume</button> -->
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex" id="searchForm" method="get">
                <input class="form-control me-2" id="search" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<style>
    #resume{
        border:solid #6c757d 1px; 
        border-radius: 4px; 
        display: inline-block; 
        padding:6px 12px; 
        margin: 2px 0px;
    }
    #search:focus {
    /* outline: none; */
    border-color: #6c757d; /* Change to your desired color */
    box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5); /* Add shadow if needed */
    }
   /* Remove blue background from active and focused dropdown items */
   .dropdown-item:active {
          background-color: #e9ecef;
          color: inherit;
    }
</style>

<script>
    // script to make search bar functional
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        const searchTerm = document.getElementById('search').value.toLowerCase();
        const section = document.getElementById(searchTerm);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        } else {
            alert('No matching result found on this page!');
        }
    });
</script>

<!-- <script>
    // script to make search bar functional
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        const searchTerm = document.getElementById('search').value.toLowerCase().replace(/\s+/g, '-');
        window.location.href = '#' + searchTerm;
    });
</script> -->

<script>
    // script to make current navigator on navbar as active
    document.addEventListener('DOMContentLoaded', () => {
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-link');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
            menuItem[i].classList.add('active');
        }
    }
});

</script>