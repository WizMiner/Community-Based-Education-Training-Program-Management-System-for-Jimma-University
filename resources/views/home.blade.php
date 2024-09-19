<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/custom/style.css') }}">

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="/"><span>{{ env('APP_NAME') }}</span></a></h1>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home&emsp;&emsp;</a></li>
                        <li><a class="nav-link scrollto" href="#about">About&emsp;&emsp;</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contact&emsp;&emsp;</a></li>
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login&emsp;&emsp;</a></li>
                        {{-- <li><a class="nav-link scrollto" href="{{ route('register') }}">Register&emsp;&emsp;</a></li> --}}
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>
    <!-- ======= End Header ======= -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>Community Based Education</h1>
            <h2>We are in the community!</h2>
        </div>
    </section>
    <!-- ======= End Hero Section ======= -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <h2>About</h2>
                        <h3>This web based system is a tool to manage trainings easly. </h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <p>
                           Community Based Education Training Program Management System have:
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> CBTP Training</li>
                            <li><i class="ri-check-double-line"></i> TTP Training</li>
                            <li><i class="ri-check-double-line"></i> Managing Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <div class="section-title">
                            <h2>Contact</h2>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.986937787976!2d36.850919947461996!3d7.684549493119282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17adb8c661cf00f5%3A0xe5062027d5f5242f!2sJimma%20University%20Specialized%20Hospital!5e0!3m2!1sen!2set!4v1659976992717!5m2!1sen!2set"
                            width="400" height="300" style="border:0;width: 100%;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="info mt-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Jimma, Ethiopia</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-4">
                                <div class="info">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>ero@ju.edu.et</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info w-100 mt-4">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+251-(0)47-111-2202</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End Contact Section ======= -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Jimma University</h3>
                        <p>
                            Jimma University ICT department<br>
                            <strong>E-mail</strong> : ero@ju.edu.et<br>
                            <strong>Website</strong>: www.ju.edu.et<br>
                            <strong>Tel</strong> : +251-(0)47-111-2202<br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://ju.edu.et/ict/">ICT Development Office</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://ju.edu.et/academic-calendar">Academic Calendar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://ju.edu.et/ju-library/">Library</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank"
                                    href="https://ju.edu.et/contact-us-3/">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ env('APP_URL') }}/admin/home">Admin
                                </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ env('APP_URL') }}/school/home">School</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="{{ env('APP_URL') }}/department/home">Department</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ env('APP_URL') }}/user/home">User</a>
                            </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <a target="_blank" href="https://ju.edu.et"><b>Jimma</b>-<em>University</em></a>.
                    All Rights Reserved
                </div>
                <div class="credits">
                    Inspired by <a href="https://bootstrapmade.com/">Bootstrap Made</a>
                </div>
            </div>

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://twitter.com/JimmaUniv" target="_blank" class="twitter">
                    <i class="bx bxl-twitter"></i>
                </a>
                <a href="https://www.facebook.com/JimmaUniv/" target="_blank" class="facebook">
                    <i class="bx bxl-facebook"></i>
                </a>
                <a href="https://www.youtube.com/channel/UCtyhlHBXkxzIsS20ZPd3vow" target="_blank" class="youtube">
                    <i class="bx bxl-youtube"></i>
                </a>
                <a href="https://www.ju.edu.et/?q=contact-us#" target="_blank" class="google-plus">
                    <i class="bx bxl-google-plus"></i>
                </a>
                <a href="https://et.linkedin.com/jimmauniv" target="_blank" class="linkedin">
                    <i class="bx bxl-linkedin"></i>
                </a>
            </div>
        </div>
    </footer>
    <!-- ======= End Footer ======= -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }} "></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }} "></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/custom/script.js') }}"></script>
</body>

</html>
