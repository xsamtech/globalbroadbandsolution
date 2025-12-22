<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="globalbroadbandsolution.com">
        <meta name="keywords" content="gbs,global,broadband,solution,globalbroadband">
        <meta name="gbs-url" content="{{ getWebURL() }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Découvrez si votre immeuble est éligible à la Fibre Optique GBS">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Font icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- Addons CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/axis/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/jquery/jquery-ui/jquery-ui.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/sweetalert2/dist/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/jquery/datetimepicker/css/jquery.datetimepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/cropper/css/cropper.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/axis/aos/aos.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/axis/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/axis/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.axis.css') }}">

        <!-- Core theme CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.custom.css') }}" />
        <style>
            .header { padding: 5px 0; }
            .header .logo img { max-height: 80px; margin-right: 8px; }
            #ourStrengths { padding: 0; }
            #ourStrengths li { font-size: 1.125rem; line-height: 1.7; color: color-mix(in srgb, var(--default-color), transparent 20%); list-style: none; }
        </style>

        <title>
@if (!empty($page_title))
            {{ $page_title }}
@else
            Global Broadband Solution
@endif
        </title>
    </head>

    <body class="index-page">
        <!-- Header -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Accueil</a></li>
                        <li><a href="#about">A propos</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </header>

        <!-- Main -->
        <main class="main">
@yield('guest-content')

            <!-- Contact Section -->
            <section id="contact" class="contact section light-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Contact</span>
                    <h2>Connectons-nous</h2>
                    <p>
                        Ecrivez-nous et faites-nous savoir votre besoin. Notre agent vous envoie un mail dans les minutes suivent.
                    </p>
                </div><!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="info-item">
                                <div class="info-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>

                                <div class="info-content">
                                    <h4>Connectons-nous</h4>
                                    <p>Nous sommes ici pour discuter de votre vision et explorer comment nous pouvons la concrétiser ensemble.</p>
                                </div>
                            </div>

                            <div class="contact-details">
                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="bi bi-envelope-open"></i>
                                    </div>

                                    <div class="detail-content">
                                        <span class="detail-label">E-mail</span>
                                        <span class="detail-value">contact@example.com</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="bi bi-telephone-outbound"></i>
                                    </div>

                                    <div class="detail-content">
                                        <span class="detail-label">Appel</span>
                                        <span class="detail-value">+1 (555) 432-8976</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="detail-content">
                                        <span class="detail-label">Adresse</span>
                                        <span class="detail-value">547 Madison Avenue<br>New York, NY 10022</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="form-wrapper">
                                <div class="form-header">
                                    <h3>Envoyez-nous un message</h3>
                                </div>

                                <form action="forms/contact.php" method="post"class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom complet</label>
                                                <input type="text" name="name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Adresse email</label>
                                                <input type="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Sujet</label>
                                        <input type="text" name="subject" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectMessage">Message</label>
                                        <textarea name="message" id="projectMessage" rows="5" required></textarea>
                                    </div>

                                    <div class="my-3">
                                        <div class="loading">Chargement...</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
                                    </div>

                                    <button type="submit" class="submit-btn">
                                        <span>Envoyer Message</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Contact Section -->
        </main>

        <footer id="footer" class="footer dark-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">Axis</span>
                        </a>

                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.
                        </p>

                        <div class="social-links d-flex mt-4">
                            <a href><i class="bi bi-twitter-x"></i></a>
                            <a href><i class="bi bi-facebook"></i></a>
                            <a href><i class="bi bi-instagram"></i></a>
                            <a href><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">A propos</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><a>Web Design</a></li>
                            <li><a>Web Development</a></li>
                            <li><a>Product Management</a></li>
                            <li><a>Marketing</a></li>
                            <li><a>Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Nous contacter</h4>
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p>United States</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Global Broadband Solution</strong>
                    <span>Tous droits réservés</span></p>

                    <div class="credits">
                        Designed by <a href="https://xsamtech.com/">Xsam Technologies</a>
                    </div>
                </div>
            </footer>

            <!-- Scroll Top -->
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            <!-- Preloader -->
            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="{{ asset('assets/addons/axis/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/php-email-form/validate.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/aos/aos.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/purecounter/purecounter_vanilla.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('assets/addons/axis/swiper/swiper-bundle.min.js') }}"></script>

            <!-- Main JS File -->
            <script src="{{ asset('assets/js/scripts.axis.js') }}"></script>

        <script src="{{ asset('assets/js/scripts.custom.js') }}"></script>
    </body>
</html>
