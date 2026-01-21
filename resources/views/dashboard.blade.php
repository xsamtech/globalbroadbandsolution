@extends('layouts.guest', ['page_title' => 'Clients enregistrés'])

@section('guest-content')

            <!-- Services Section -->
            <section class="services section bg-white my-5 py-5">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span class="subtitle">Enregistrements</span>
                    <h2>Clients enregistrés</h2>
                    <p>Gestion de clients inscrits après test d’éligibilité </p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-lg-12">
                            <div class="card card-body">
                                <!-- Data list content -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered border-top">
                                        <thead>
                                            <tr>
                                                {{-- <th></th> --}}
                                                <th>Noms</th>
                                                <th>Contact</th>
                                                <th>Building</th>
                                                <th>Adresse building</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
@forelse ($customers as $user)
                                            <tr>
                                                {{-- <td>
                                                    <img src="{{ $user['avatar_url'] }}" alt="{{ $user['firstname'] . ' ' . $user['lastname'] }}" class="rounded-circle" width="50">
                                                </td> --}}
                                                <td>{{ $user['firstname'] . ' ' . $user['lastname'] }}</td>
                                                <td>
                                                    <p class="m-0"><a href="mailto:{{ $user['email'] }}">{{ $user['email'] }}</a></p>
                                                    <p class="m-0">{{ $user['phone'] }}</p>
                                                </td>
                                                <td>
                                                    <p class="m-0" style="max-width: 10rem; white-space: normal;">{{ $user['buildings'][0]['building_name'] }}</p>
                                                </td>
                                                <td>
                                                    <p class="m-0" style="max-width: 10rem; white-space: normal;">{{ $user['buildings'][0]['full_address'] }}</p>
                                                </td>
                                                {{-- <td>
                                                    <a>
                                                        @lang('miscellaneous.details')<i class="feather-chevrons-right ms-1"></i>
                                                    </a>
                                                </td> --}}
                                            </tr>
@empty
                                            <tr>
                                                <td colspan="6" class="lead text-center">@lang('miscellaneous.empty_list')</td>
                                            </tr>
@endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-3">
                                    {{ $customers_req->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section><!-- /Services Section -->

@endsection
