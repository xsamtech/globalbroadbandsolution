@extends('layouts.guest', ['page_title' => 'Enregistrer votre immeuble'])

@section('guest-content')

            <!-- Starter Section Section -->
            <section id="starter-section" class="starter-section section">
                <!-- Section Title -->
                <div class="page-title pt-4">
                    <div class="row pb-4">
                        <div class="col-lg-6 col-sm-7 col-11 mx-auto">
                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-2 fs-4" style="vertical-align: -3px;"></i> Votre immeuble est éligible. Vous pouvez vous inscrire.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumbs">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bi bi-house"></i> Accueil</a></li>
                                <li class="breadcrumb-item active current">Inscription</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="title-wrapper">
                        <h1 class="fw-bold">La Fibre GBS dès 49$/mois</h1>
                        <h4 class="mb-3 fw-light">Profitez du meilleur de l'internet illimité à la Gombe. Remplissez le formulaire pour réserver votre installation</h4>
                        <p><u>Adresse</u> : <strong>{{ session()->get('full_address') }}</strong></p>
                        <p><u>Commune de l’immeuble</u> : <strong>{{ session()->get('area') }}</strong></p>
                    </div>
                </div><!-- End Section Title -->

                {{-- <div class="container" data-aos="fade-up"> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-sm-11 col-12 mx-auto">
                            <div class="card card-body bg-light pl-lg-5 p-sm-4 p-3 rounded-4">
                                {{-- <form method="POST" action="{{ route('registration') }}"> --}}
                                <form method="POST" action="">
    @csrf
                                    <input type="hidden" name="full_address" value="{{ session()->get('full_address') }}">
                                    <input type="hidden" name="area" value="{{ session()->get('area') }}">

                                    <div class="row g-4">
                                        <!-- First name -->
                                        <div class="col-sm-6">
                                            <label for="firstname" class="form-label text-black fw-bold">Prénom</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control py-3" placeholder="Votre prénom" required autofocus>
                                        </div>

                                        <!-- Last name -->
                                        <div class="col-sm-6">
                                            <label for="lastname" class="form-label text-black fw-bold">Nom</label>
                                            <input type="text" name="lastname" id="lastname" class="form-control py-3" placeholder="Votre nom">
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-sm-6">
                                            <label for="phone" class="form-label text-black fw-bold">Téléphone / WhatsApp</label>
                                            <input type="text" name="phone" id="phone" class="form-control py-3" placeholder="Votre n° de téléphone ou WhatsApp" required>
                                        </div>

                                        <!-- Neighborhood -->
                                        <div class="col-sm-6">
                                            <label for="neighborhood" class="form-label text-black fw-bold">Quartier de l’immeuble</label>
                                            <input type="text" name="neighborhood" id="neighborhood" class="form-control py-3" placeholder="Quartier de votre immeuble" required>
                                        </div>

                                        <div class="col-sm-6 mx-auto">
                                            <button type="submit" class="btn gbs-btn-greenish w-100 py-3">Enregistrer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Starter Section Section -->

@endsection
