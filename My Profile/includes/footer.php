<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->


<footer class="bg-dark text-center text-dark" style="overflow: hidden;">
   
    <ul class="nav justify-content-center mt-3 mb-3">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About Me</a></li>
        <li class="nav-item"><a href="my_projects.php" class="nav-link px-2 text-muted">My Projects</a></li>
        <li class="nav-item"><a href="about.php #experience" class="nav-link px-2 text-muted">Experience</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li> -->
    </ul>
    
    <ul class="nav justify-content-center">

        <script>
            // This script is for pop-up message that appears when hover on button
            document.addEventListener('DOMContentLoaded', function () {
                var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
                var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
                    return new bootstrap.Popover(popoverTriggerEl);
                });
            });
        </script>
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="top" data-bs-content="Don't have an account">
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"
                    disabled><i class="fab fa-facebook-f"></i></a>
            </span>

            <!-- Telegram -->
            <a class="btn text-white btn-floating m-1" style="background-color: #55acee;"
                href="https://t.me/Rishabh_gaur" target="_blank"
                role="button"><i class="fab fa-telegram-plane"></i>
            </a>

            <!-- Twitter X -->
            <!-- <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="top" data-bs-content="Don't have an account">
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                    </svg>
                </a>
            </span> -->
            
            <!-- Google -->
            <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;"
                href="https://mail.google.com/mail/?view=cm&fs=1&to=rishabhgaur8756@gmail.com" target="_blank"
                role="button"><i class="fab fa-google"></i></a>
            <!-- Instagram -->
            <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;"
                href="https://www.instagram.com/rishabh_chand_sharma?igsh=b24yZGRmYWM1YzUy" target="_blank" role="button"><i
                    class="fab fa-instagram"></i></a>
            <!-- whatsapp -->
            <a class="btn text-white btn-floating m-1" style="background-color: #11ba25;"
                href="https://wa.me/+918756546190" target="_blank" role="button"><i class="fab fa-whatsapp"></i></a>
            <!-- Linkedin -->
            <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;"
                href="https://www.linkedin.com/in/rishabh-gaur-86a356245" target="_blank" role="button"><i
                    class="fab fa-linkedin-in"></i></a>
            <!-- Github -->
            <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus"
                data-bs-placement="top" data-bs-content="Don't have an account">
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </span>
        </section>
        <!-- Section: Social media -->
    </ul>

    <ul class="nav justify-content-center border-bottom">
        <li class="nav-item">
            <p class="text-center text-muted">Contact: +91-8756546190</p>
        </li>
    </ul>
    <div class="text-center text-muted" style="padding:15px">© 2024 Rishabh Gaur, Inc</div>

    <!-- <p class="text-center text-muted pb-3 mb-3" style="margin-bottom:0px">© 2021 Company, Inc</p> -->

</footer>

<style>
    .text-muted:hover {
    text-decoration: underline;
}

.btn-floating:focus {
/* outline: none; */
box-shadow: 0 0 0 4px rgba(108, 117, 125, 0.5); /* Add shadow if needed */
}
</style>