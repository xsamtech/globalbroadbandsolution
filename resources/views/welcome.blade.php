@extends('layouts.guest', ['page_title' => !empty($eligibility) ? ($eligibility == 1 ? 'Immeuble éligible' : 'Immeuble non éligible') : 'Global Broadband Solution'])

@section('guest-content')
            <!-- Hero Section -->
            <section id="hero" class="hero section light-background">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 data-aos="fade-up" data-aos-delay="200">L’internet à la hauteur de votre adresse</h1>

                                <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
                                    Travaillez, streamez et naviguez sans coupure, même aux heures de pointe.
                                </p>

                                <ul id="ourStrengths">
                                    <li><i class="bi bi-check-lg me-2"></i>Connexion stable et ultra-rapide</li>
                                    <li><i class="bi bi-check-lg me-2"></i>Volume Internet illimité</li>
                                    <li><i class="bi bi-check-lg me-2"></i>Support technique local et réactif</li>
                                </ul>
                                <div class="hero-cta" data-aos="fade-up" data-aos-delay="200">
                                    <a href="#about" class="btn-primary gbs-btn-dark-blue">Souscrire maintenant</a>
                                    <a role="button" class="btn-secondary glightbox">
                                        <i class="bi bi-whatsapp me-2 text-success"></i>Parler à un conseiller WhatsApp
                                    </a>
                                </div>

                                <div class="hero-stats" data-aos="fade-up" data-aos-delay="100">
                                    <div class="stat-item">
                                        <div class="stat-number">24/7</div>
                                        <div class="stat-label">Aide et assistance</div>
                                    </div>

                                    <div class="stat-item">
                                        <div class="stat-number">98%</div>
                                        <div class="stat-label">Satisfaction client</div>
                                    </div>

                                    <div class="stat-item">
                                        <div class="stat-number">10+</div>
                                        <div class="stat-label">Ans d’expérience</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                                <img src="{{ asset('assets/img/about/about-square-10.png') }}" alt="Business Success" class="img-fluid">

                                <div class="floating-card" data-aos="zoom-in" data-aos-delay="600">
                                    <div class="card-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>

                                    <div class="card-content">
                                        <h5>Croissance revenue</h5>
                                        <div class="growth-percentage">+45%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">About</span>
                    <h2>About Us</h2>
                    <p>
                        Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="content">
                                <h2>Crafting Excellence Through Innovation and Dedication</h2>

                                <p class="lead">
                                    We are passionate professionals committed to delivering exceptional results that exceed expectations and drive meaningful transformation.
                                </p>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>

                                <div class="stats-row">
                                    <div class="stat-item">
                                        <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"></div>
                                        <div class="stat-label">Years Experience</div>
                                    </div>

                                    <div class="stat-item">
                                        <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1"></div>
                                        <div class="stat-label">Projects Completed</div>
                                    </div>

                                    <div class="stat-item">
                                        <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="240" data-purecounter-duration="1"></div>
                                        <div class="stat-label">Happy Clients</div>
                                    </div>
                                </div>

                                <div class="cta-section">
                                    <a href="#" team class="btn-outline">Meet Our Team</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-wrapper">
                                <img src="assets/img/about/about-square-12.webp" alt="About us" class="img-fluid">
                                <div class="floating-card" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="card-content">
                                        <div class="icon">
                                            <i class="bi bi-award"></i>
                                        </div>

                                        <div class="text">
                                            <h4>Award Winning</h4>
                                            <p>Recognized for excellence in our industry</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /About Section -->

            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Services</span>
                    <h2>What We Do Offer</h2>
                    <p>
                        Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>

                                <h3>Strategic Consulting</h3>

                                <p>
                                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam.
                                </p>

                                <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-palette"></i>
                                </div>

                                <h3>Brand Development</h3>

                                <p>
                                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.
                                </p>

                                <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>

                                <h3>Digital Solutions</h3>

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris vitae congue nulla. Proin eget tortor risus vestibulum.
                                </p>

                                <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-megaphone"></i>
                                </div>

                                <h3>Marketing Strategy</h3>

                                <p>
                                    Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Cras ultricies ligula sed magna dictum porta.
                                </p>

                                <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <h3>Team Building</h3>

                                <p>
                                    Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                </p>

                                <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>

                                <h3>Data Analytics</h3>

                                <p>
                                    Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh.
                                </p>

                                <a href="service-details.html" class="service-link"> Learn More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div><!-- End Service Item -->
                    </div>
                </div>
            </section><!-- /Services Section -->

            <!-- Why Us Section -->
            <section id="why-us" class="why-us section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Why Us</span>
                    <h2>Why Choose Us</h2>

                    <p>
                        Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="content">
                                <h2>Why Partner With Us</h2>

                                <p>
                                    We deliver exceptional results through proven expertise, cutting-edge innovation, and unwavering commitment to your success. Our comprehensive approach ensures sustainable growth and competitive advantage.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-wrapper">
                                <img src="assets/img/about/about-8.webp" alt="Professional team collaboration" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="features-grid" data-aos="fade-up" data-aos-delay="400">
                        <div class="row g-5">
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Innovation Leadership</h3>

                                        <p>
                                            We stay ahead of industry trends, implementing cutting-edge technologies and methodologies that drive transformational results for your business growth.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-award"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Proven Expertise</h3>

                                        <p>
                                            Our team brings decades of combined experience across multiple industries, ensuring strategic insights and tactical execution that delivers measurable outcomes.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-headset"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>24/7 Dedicated Support</h3>
                                        <p>
                                            Round-the-clock availability with personalized attention from dedicated account managers who understand your unique challenges and objectives.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Cost Efficiency</h3>
                                        <p>
                                            Streamlined processes and intelligent resource allocation reduce overhead while maximizing ROI, delivering premium results within your budget parameters.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->
                        </div>
                    </div>
                </div>
            </section><!-- /Why Us Section -->

                    {{-- <form method="POST" action="{{ !empty($eligibility) ? ($eligibility == 1 ? route('buildings') : '') : route('home') }}" class="login100-form validate-form">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="200">
                        </div>

                        <span class="login100-form-title p-b-43">
                            Découvrez si votre immeuble est éligible à la Fibre Optique GBS
                        </span>

    @if (!empty($eligibility))
        @if ($eligibility == 1)

                        <p class="lead text-center mb-3"><i class="bi bi-check-circle text-success" style="font-size: 30px; vertical-align: -3px; margin-right: 8px;"></i>Votre immeuble est éligible</p>

        @else

                        <p class="lead text-center"><i class="bi bi-x-lg text-danger" style="font-size: 30px; vertical-align: -3px; margin-right: 8px;"></i>Votre immeuble n’est pas éligible</p>

                        <div class="container-login100-form-btn p-t-30">
                            <a class="login100-form-btn gbs-btn-cyan">Découvrez maintenent</a>
                        </div>
        @endif
    @else
        @csrf

                        <div class="wrap-input100 validate-input" data-validate = "Veuillez donner le nom de votre immeuble !">
                            <input class="input100" type="text" name="building_name" autofocus>
                            <span class="focus-input100"></span>
                            <span class="label-input100">Nom de l’immeuble</span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <label for="area" style="font-size: 0.8rem; color: #999; padding: 0 20px;">Commune</label>
                            <select id="area" name="area" class="form-control" style="font-family: Montserrat-Regular; font-size: 18px; color: #555555; background: transparent; border: 0; padding: 0 20px;">
        @forelse ($areas as $area)
                                <option style="font-family: Montserrat-Regular; color: #555555;">{{ $area->name }}</option>
        @empty
                                <option class="small" disabled selected>La liste est vide</option>
        @endforelse
                            </select>
                        </div>

                        <div class="container-login100-form-btn p-t-30">
                            <button class="login100-form-btn gbs-btn-cyan">Découvrez maintenent</button>
                        </div>
    @endif
                    </form> --}}

@endsection
