@extends('layouts.guest', ['page_title' => __('notifications.' . $exception->getStatusCode() . '_title')])

@section('guest-content')

            <!-- Error 404 Section -->
            <section id="error-404" class="error-404 section">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8">
                            <div class="error-content">
                                <div class="error-number gbs-text-green" data-aos="zoom-in" data-aos-delay="200">401</div>

                                <h1 class="error-title" data-aos="fade-up" data-aos-delay="300">@lang('notifications.401_title')</h1>

                                <p class="error-description" data-aos="fade-up" data-aos-delay="400">@lang('notifications.401_description')</p>

                                <div class="error-actions" data-aos="fade-up" data-aos-delay="500">
                                    <a href="/" class="btn-primary gbs-btn-dark-blue">@lang('miscellaneous.back_home')</a>
                                    <a href="#contact" class="btn-secondary">Contact Support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Error 404 Section -->

@endsection
