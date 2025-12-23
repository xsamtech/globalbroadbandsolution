@extends('layouts.guest', ['page_title' => !empty($eligibility) ? ($eligibility == 1 ? 'Immeuble éligible' : 'Immeuble non éligible') : 'Global Broadband Solution'])

@section('guest-content')

            <!-- Eligibility Section -->
            <section id="eligibility" class="about section gbs-dark-blue">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle gbs-text-greenish">Éligibilité de mon immeuble</span>
                    <h2 class="text-white">Tester l’éligibilité de mon immeuble</h2>
                    <p class="text-white-50">
                        Découvrez si votre immeuble est éligible à la Fibre Optique GBS.
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-body pl-lg-5 p-sm-4 p-3 rounded-4">
                                <form method="POST" action="{{ route('home') }}">
    @csrf
                                    <div class="row g-4">
                                        <div class="col-sm-4">
                                            <label for="building_name" class="form-label text-black fw-bold">Nom de l’immeuble</label>
                                            <input type="text" name="building_name" id="building_name" class="form-control py-3" placeholder="Comment s’appelle votre immeuble" required autofocus>
                                        </div>

                                        <div class="col-sm-4">
                                            <label for="area" class="form-label text-black fw-bold">Commune</label>
                                            <select name="area" id="area" class="form-select py-3" aria-label="Dans quelle commune, votre immeuble ?">
    @forelse ($areas as $area)
                                                <option>{{ $area->name }}</option>
    @empty
                                                <option class="small" disabled selected>La liste est vide</option>
    @endforelse
                                            </select>
                                        </div>

                                        <div class="col-sm-4 d-flex align-items-end">
                                            <button type="submit" class="btn gbs-btn-greenish position-relative w-100 py-3">
                                                <span>Découvrez maintenent</span>
                                                <div id="ajax-loader" class="spinner-border position-absolute d-none" role="status" style="top: 0.8rem; right: 0.8rem;">
                                                    <span class="visually-hidden">Chargement...</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Eligibility Section -->

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
                                {{-- <div class="hero-cta" data-aos="fade-up" data-aos-delay="200"> --}}
                                <div class="hero-cta mt-4">
                                    <a href="#eligibility" class="btn-primary gbs-btn-dark-blue">Tester éligibilité de votre immeuble</a>
                                    {{-- <a role="button" class="btn-secondary glightbox">
                                        <i class="bi bi-whatsapp me-2 text-success"></i>Parler à un conseiller WhatsApp
                                    </a> --}}
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
                                <img src="{{ asset('assets/img/about/about-square-10.png') }}" alt="Accueil hero" class="img-fluid rounded-5">

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

            <!-- Why Us Section -->
            <section id="why-us" class="why-us section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">A propos</span>
                    <h2>Pourquoi nous ?</h2>

                    <p>Pourquoi choisir <strong>Global Broadband Solution</strong> (GBS) ?</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-lg-5">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="content">
                                <h2>Confort numérique grâce à une fibre optique premium</h2>

                                <p>
                                    Chez GBS, nous déployons une fibre optique premium, spécialement conçue pour les immeubles résidentiels modernes de la Gombe, où la stabilité, la performance et le confort numérique sont essentiels.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-wrapper">
                                <img src="{{ asset('assets/img/about/about-8.png') }}" alt="A propos" class="img-fluid rounded-5">
                            </div>
                        </div>
                    </div>

                    <div class="features-grid" data-aos="fade-up" data-aos-delay="400">
                        <div class="row g-5">
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-wifi"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Internet rapide et constant, même en forte affluence</h3>

                                        <p>
                                            We stay ahead of industry trends, implementing cutting-edge technologies and methodologies that drive transformational results for your business growth.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-bar-chart"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Volume illimité sur tous les forfaits</h3>

                                        <p>
                                            Our team brings decades of combined experience across multiple industries, ensuring strategic insights and tactical execution that delivers measurable outcomes.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-wrench"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Assistance technique locale, disponible et efficace</h3>
                                        <p>
                                            Round-the-clock availability with personalized attention from dedicated account managers who understand your unique challenges and objectives.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-item">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-box-arrow-in-right"></i>
                                    </div>

                                    <div class="feature-content">
                                        <h3>Souscription immédiate, sans complexité</h3>
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

            <!-- Services Section -->
            <section id="services" class="services section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Services</span>
                    <h2>Offres & forfaits</h2>
                    <p>
                        Nos forfaits résidentiels fibre optique (<i>Exclusivement pour les appartements</i>)
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>

                                <h2 class="gbs-text-dark-blue">FLEX</h2>
                                <h5>Jusqu’à 50 Mbps</h5>
                                <h2 class="fw-light">49 $ / mois TTC</h2>

                                {{-- <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-universal-access-circle"></i>
                                </div>

                                <h2 class="gbs-text-dark-blue">ACCESS</h2>
                                <h5>Jusqu’à 100 Mbps</h5>
                                <h2 class="fw-light">79 $ / mois TTC</h2>

                                {{-- <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-asterisk"></i>
                                </div>

                                <h2 class="gbs-text-dark-blue">ESSENTIEL</h2>
                                <h5>Jusqu’à 150 Mbps</h5>
                                <h2 class="fw-light">120 $ / mois TTC</h2>

                                {{-- <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-chevron-bar-contract"></i>
                                </div>

                                <h2 class="gbs-text-dark-blue">CONFORME</h2>
                                <h5>Jusqu’à 200 Mbps</h5>
                                <h2 class="fw-light">175 $ / mois TTC</h2>

                                {{-- <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="bi bi-brightness-high"></i>
                                </div>

                                <h2 class="gbs-text-dark-blue">EXCEPTIONNEL</h2>
                                <h5>Jusqu’à 250 Mbps</h5>
                                <h2 class="fw-light">230 $ / mois TTC</h2>

                                {{-- <a href="service-details.html" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div><!-- End Service Item -->
                    </div>
                </div>
            </section><!-- /Services Section -->

            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="content">
                                <h2>Choisir mon forfait</h2>

                                <p>Un Internet pensé pour votre quotidien</p>
                                <ul class="some-list">
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Télétravail et visioconférences sans interruption</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Streaming HD / 4K fluide</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Gaming en ligne avec faible latence</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Connexion simultanée de plusieurs appareils</li>
                                </ul>

                                <p>Comment ça marche ?</p>
                                <ul class="some-list">
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Choisissez votre forfait</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Contactez-nous via WhatsApp ou formulaire</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Installation rapide par notre équipe technique</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Profitez d’un Internet performant et illimité</li>
                                </ul>

                                <p>Un service local, proche de vous</p>
                                <ul class="some-list">
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Équipe technique basée à Kinshasa</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Assistance rapide en cas de besoin</li>
                                    <li><i class="bi bi-check-lg gbs-text-cyan me-2"></i>Suivi client personnalisé</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-wrapper">
                                <img src="{{ asset('assets/img/about/about-square-12.webp') }}" alt="About us" class="img-fluid rounded-5">
                                <div class="floating-card" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="card-content">
                                        <div class="icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Appelez-nous</h4>
                                            <p>+(243) 808 808 800</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /About Section -->

@endsection
