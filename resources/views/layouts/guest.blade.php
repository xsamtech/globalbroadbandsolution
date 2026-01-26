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
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/addons/custom/cropper/css/cropper.min.css') }}">
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
            header, .btn { transition: .5s ease all; }
            .header { padding: 5px 0; }
            .header .logo img { max-height: 80px; margin-right: 8px; }
            #ourStrengths, .some-list { padding: 0; }
            #ourStrengths li, .some-list li { font-size: 1.125rem; line-height: 1.7; color: color-mix(in srgb, var(--default-color), transparent 20%); list-style: none; }
            .services .service-item .service-icon { background: #2d3d51!important; }
            .services .service-item h5 { color: #999!important; }
            #eligibility { margin-top: 90px; }
            #starter-section { margin-top: 30px; }
            .scroll-top { right: 32px; bottom: 90px; }
            /* Style du bouton flottant */
            #whatsapp-btn {
                position: fixed;
                bottom: 20px;  /* Distance depuis le bas */
                right: 20px;   /* Distance depuis la droite */
                z-index: 1000; /* Assure que le bouton reste visible */
            }
            #whatsapp-btn img {
                width: 60px;  /* Taille de l'icône */
                height: 60px; /* Taille de l'icône */
            }
            /* Ajouter un effet de luminescence à l'alert-success */
            .alert-success {
                box-shadow: 0 0 15px rgba(76, 175, 80, 0.3); /* Le vert de l'alerte + effet lumineux */
                transition: box-shadow 0.3s ease-in-out; }
            /* Une classe pour l'effet clignotant */
            .alert-glow { animation: glow .5s ease-in-out infinite alternate; }
            /* Définition de l'animation glow */
            @keyframes glow {
                0% { box-shadow: 0 0 15px rgba(76, 175, 80, 0.3); }
                100% { box-shadow: 0 0 25px rgba(76, 175, 80, 1); }
            }
        </style>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17852742799"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag(){
                dataLayer.push(arguments);
            }

            gtag('js', new Date());
            gtag('config', 'AW-17852742799');
        </script>

        <title>
@if (!empty($page_title))
            {{ $page_title }}
@else
            Global Broadband Solution
@endif
        </title>
    </head>

    <body class="index-page">
        <!-- MODALS-->
        <!-- ### Crop other user image ### -->
        <div class="modal fade" id="cropModal_profile" tabindex="-1" aria-hidden="true" data-bs-backdrop="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header py-0">
                        <button type="button" class="btn-close mt-1" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-center text-muted">Recadrer l'image avant de l'enregistrer</h5>

                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-sm-0 mb-4">
                                    <div class="bg-image">
                                        <img src="" id="retrieved_image_profile" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary px-4 rounded-pill text-white" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" id="crop_profile" class="btn btn-primary px-4 rounded-pill" data-bs-dismiss="modal">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODALS-->

@if (Session::has('success_message'))
        <!-- Alert -->
        <div class="position-relative">
            <div class="row position-fixed w-100" style="opacity: 0.7; z-index: 999;">
                <div class="col-lg-5 col-sm-6 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show rounded-0" role="alert">
                        <i class="bi bi-check-circle me-2 fs-4" style="vertical-align: -3px;"></i> {!! Session::get('success_message') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif
@if (Session::has('error_message'))
        <!-- Alert -->
        <div class="position-relative">
            <div class="row position-fixed w-100" style="opacity: 0.7; z-index: 999;">
                <div class="col-lg-5 col-sm-6 mx-auto">
                    <div class="alert alert-danger alert-dismissible fade show rounded-0" role="alert">
                        <i class="bi bi-x-circle me-2 fs-4" style="vertical-align: -3px;"></i> {!! Session::get('error_message') !!}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                </div>
            </div>
        </div>
@endif

        <!-- Header -->
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="/#eligibility">Eligibilité</a></li>
                        <li><a href="/#hero" class="active">Accueil</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="/#why-us">A propos</a></li>
                        <li><a href="/#contact">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
@auth
                <div class="dropdown position-relative">
                    <a role="button" class="d-sm-inline-block d-none flex-row ms-5 my-3 rounded-pill user-account user-image" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong class="d-lg-inline-block d-none text-gradient">{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}</strong>
                        <img src="{{ !empty(Auth::user()->avatar_url) ? Auth::user()->avatar_url : asset('assets/img/user.png') }}" alt="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}" width="50" class="ms-1 rounded-circle img-thumbnail">
                    </a>

                    <ul class="dropdown-menu position-absolute" style="right: 0; top: 3.1rem; width: 12rem;">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-person me-2"></i>Mon compte</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
    @csrf
                                <button class="dropdown-item"><i class="bi bi-power me-2"></i>Quitter la session</button>
                            </form>
                        </li>
                    </ul>
                </div>
@endauth
            </div>
        </header>

        <!-- Main -->
        <main class="main">
@yield('guest-content')

@if (Route::is('home'))
            <!-- Contact Section -->
            <section id="contact" class="contact section light-background">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Contact</span>
                    <h2>Connectons-nous</h2>
                    <p>
                        Ecrivez-nous et faites-nous savoir votre besoin. Notre agent vous envoie un mail dans les minutes qui suivent.
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
                                        <span class="detail-value">sales@corp.gbs.cd</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="bi bi-telephone-outbound"></i>
                                    </div>

                                    <div class="detail-content">
                                        <span class="detail-label">Appel</span>
                                        <span class="detail-value">+(243) 808 808 800</span>
                                    </div>
                                </div>

                                <div class="detail-item">
                                    <div class="detail-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="detail-content">
                                        <span class="detail-label">Adresse</span>
                                        <span class="detail-value">769, Avenue de l’Équateur,<br>Gombe – Kinshasa</span>
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

                                    <button type="submit" class="submit-btn gbs-btn-dark-bluish">
                                        <span>Envoyer Message</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Contact Section -->
@endif
        </main>

        <footer id="footer" class="footer dark-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="{{ route('home') }}" class="d-inline-block mb-3">
                            <img src="{{ asset('assets/img/logo-reverse.png') }}" alt="" width="200" height="129">
                        </a>

                        <p>
                            Chez Global Broadband Solution, nous déployons une fibre optique premium, spécialement conçue pour les immeubles résidentiels modernes de la Gombe, où la stabilité, la performance et le confort numérique sont essentiels.
                        </p>

                        <div class="social-links d-flex mt-4">
                            <a><i class="bi bi-twitter-x"></i></a>
                            <a><i class="bi bi-facebook"></i></a>
                            <a><i class="bi bi-instagram"></i></a>
                            <a><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links mt-sm-5">
                        <h4>Liens utiles</h4>
                        <ul>
                            <li><a href="/#hero">Accueil</a></li>
                            <li><a href="/#eligibility">Eligibilité</a></li>
                            <li><a href="/#why-us">A propos</a></li>
                            <li><a href="/#services">Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links mt-sm-5">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><a>Flex</a></li>
                            <li><a>Access</a></li>
                            <li><a>Essentiel</a></li>
                            <li><a>Conforme</a></li>
                            <li><a>Exceptionnel</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start mt-lg-5">
                        <h4>Nous contacter</h4>
                        <p>769, Avenue de l’Équateur, Gombe</p>
                        <p>Congo – Kinshasa</p>
                        <p class="mt-4"><strong>Tél. :</strong> <span>+243 808 808 800</span></p>
                        <p><strong>E-mail :</strong> <span>sales@corp.gbs.cd</span></p>
                        <p><strong>Site web :</strong> <span><a href="https://www.gbs.cd" target="_blank">www.gbs.cd</a></span></p>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>
                    © <span>Copyright</span> <strong class="px-1 sitename">Global Broadband Solution</strong>
                    <span>Tous droits réservés</span>
                </p>

                <div class="credits">
                    Designed by <a href="https://xsamtech.com/" target="_blank">Xsam Technologies</a>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- WhatsApp Chat -->
        <a href="https://wa.me/243817625616" target="_blank" id="whatsapp-btn">
        {{-- <a role="button" id="whatsapp-btn" data-bs-toggle="modal" data-bs-target="#whatsappModal"> --}}
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Chat with us on WhatsApp" />
        </a>

        <!-- Modale de WhatsApp -->
        <div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="whatsappModalLabel">Chattez avec l'Admin sur WhatsApp</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p>Vous êtes sur le point de commencer une conversation avec l'admin via WhatsApp. Cliquez sur le lien ci-dessous pour commencer à discuter.</p>
                        <!-- Lien vers WhatsApp -->
                        <a href="https://wa.me/TON_NUMERO" target="_blank" class="btn btn-success">Commencer le chat</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script type="text/javascript" src="{{ asset('assets/addons/custom/jquery/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/custom/jquery/js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/custom/jquery/datetimepicker/js/jquery.datetimepicker.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/php-email-form/validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/aos/aos.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/glightbox/js/glightbox.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/purecounter/purecounter_vanilla.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/axis/swiper/swiper-bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/custom/autosize/js/autosize.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/custom/cropper/js/cropper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/addons/custom/sweetalert2/dist/sweetalert2.min.js') }}"></script>

        <!-- Main JS File -->
        <script type="text/javascript" src="{{ asset('assets/js/scripts.axis.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/scripts.custom.js') }}"></script>
@if (Session::has('building_name'))
        <script type="text/javascript">
            // $(function () {
            //     $('#ajax-alert-container').removeClass('d-none');

            //     setInterval(() => {
            //         // Adding alert to do DOM
            //         $('#ajax-alert-container').fadeOut();
            //     }, 3000);
            // });

            // On sélectionne l'élément de l'alerte
            const alertElement = document.getElementById('alert');

            // Fonction pour démarrer l'animation clignotante
            function startGlowing() {
                alertElement.classList.add('alert-glow');
            }

            // On démarre l'animation immédiatement
            startGlowing();
        </script>
@endif
        <script type="text/javascript">
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

            $(function () {
                /**
                 * Ajax to send
                 */
                /* Check eligibility */
                $('#eligibility form').on('submit', function (e) {
                    e.preventDefault();

                    // Afficher l'animation de chargement
                    $('#ajax-loader').removeClass('d-none');

                    var formData = new FormData(this);

                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // Cacher l'animation de chargement
                            $('#ajax-loader').addClass('d-none');

                            if (response.isEligible) {
                                window.location.href = '/registration';

                                // Swal.fire({
                                //     title: 'Félicitation !',
                                //     text: response.message,
                                //     icon: 'success',
                                //     showCancelButton: true,
                                //     confirmButtonColor: '#494f5d',
                                //     cancelButtonColor: '#d33',
                                //     confirmButtonText: 'Commencer inscription',
                                //     cancelButtonText: 'Annuler'
                                // }).then((result) => {
                                //     if (result.isConfirmed) {
                                //         // Rediriger vers la route /registration
                                //         window.location.href = '/registration';
                                //     }
                                // });

                            } else {
                                Swal.fire({
                                    title: 'Désolé !',
                                    text: response.message,
                                    icon: 'error'
                                });
                            }

                            // Réinitialiser tous les champs du formulaire
                            $('#eligibility form')[0].reset();
                        },
                        error: function (xhr, error, status_description) {
                            console.log(xhr.responseJSON);
                            console.log(xhr.status);
                            console.log(error);
                            console.log(status_description);

                            // Cacher l'animation de chargement
                            $('#ajax-loader').addClass('d-none');

                            // Afficher une alerte d'erreur
                            Swal.fire({
                                title: 'Erreur interne',
                                text: xhr.responseJSON && xhr.responseJSON.message ? xhr.responseJSON.message : (xhr.responseText && xhr.responseText.message ? xhr.responseText.message : status_description),
                                icon: 'error'
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>
