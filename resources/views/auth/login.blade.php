@extends('layouts.guest', ['page_title' => 'Connexion'])

@section('guest-content')

            <!-- Services Section -->
            <section class="services section bg-white my-5 py-5">
                <!-- Section Title -->
                <div class="container section-title mt-5" data-aos="fade-up">
                    <span class="subtitle">Identification</span>
                    <h2>Connexion</h2>
                    <p>
                        Espace réservé l’admin
                    </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-lg-5 col-sm-7 mx-auto">
                            <div class="card card-body p-sm-4">
                                <form method="POST" action="{{ route('login') }}">
    @csrf
    @if ($errors->has('login'))
                                    <div class="mb-0">
    @else
                                    <div class="mb-3">
    @endif
                                        <label for="login" class="form-label">Email ou n° de téléphone</label>
                                        <input type="text" name="login" class="form-control @error('login') is-invalid m-0 @enderror" id="login" value="{{ old('login') }}" required @error('login') autofocus @enderror>
    @error('login')
                                        <small class="d-inline-block w-100 p-0 text-danger text-end">{{ $message }}</small>
    @enderror
                                    </div>

    @if ($errors->has('password'))
                                    <div class="mb-0">
    @else
                                    <div class="mb-3">
    @endif
                                        <label for="password" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid m-0 @enderror" id="password" required @error('password') autofocus @enderror>
    @error('password')
                                        <small class="d-inline-block w-100 p-0 text-danger text-end">{{ $message }}</small>
    @enderror
                                    </div>

                                    <div class="mb-3 form-check d-flex justify-content-center">
                                        <input type="checkbox" name="remember" class="form-check-input me-2" id="remember">
                                        <label role="button" class="form-check-label" for="remember">Rester connecté</label>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 rounded-pill">Connexion</button>
    @if (!$admins_exist)
                                    <a href="{{ route('register') }}" class="btn btn-secondary w-100 mt-2 rounded-pill text-white">Créer un compte</a>
    @endif
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- /Services Section -->

@endsection
