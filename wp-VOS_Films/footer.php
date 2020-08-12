    <!-- FOOTER SECTION -->
    <section id="footer-section" class="section">
        <div class="container has-text-centered footer-content">
            <img class="footer-logo2" src="assets/img/VOS_text_logo.png" alt="">
            <div class="footer-wrapper">
                <ul class="footer-quick-links">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- <h1 class="footer-title">Follow us on Social Media!</h1> -->
            <div class="footer-wrapper">
                <ul class="footer-social-links">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/visionofsyndicates/">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/vosfilms/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.youtube.com/channel/UCYCt0dIB_MUcMLIzBvHMa8A">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="footer-copyright text-center py-3">
        <h1>
            © 2020 VOS Films. Developed by <a target="_blank" href="http://www.ayushlal.com.au">Ayush Lal</a>
        </h1>
    </div>

        <!-- Bootstrap & MD Bootstrap JS/jQuery Plugins -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/venobox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="js/object-fit-video.js"></script>
    <script src="js/app.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        $(document).ready(function () {
            $('.venobox').venobox();
        });
    </script>

    <script>
        AOS.init();
    </script>

    <!-- Scroll animation to #contactme & #portfolio -->
    <script>
        $('a[href*="#"]').on('click', function (e) {
            e.preventDefault()

            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top,
                },
                500,
                'linear'
            )
        })
    </script>

    <!-- Creates a fade-in effect on page reload via div.preloader -->
    <script>
        $(window).load(function () {
            $('.preloader').delay(400).fadeOut('slow');
        })
    </script>
</body>

</html>