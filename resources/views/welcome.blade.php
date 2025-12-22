@extends('layouts.guest', ['page_title' => !empty($eligibility) ? ($eligibility == 1 ? 'Immeuble éligible' : 'Immeuble non éligible') : 'Global Broadband Solution'])

@section('guest-content')

                    <form method="POST" action="{{ !empty($eligibility) ? ($eligibility == 1 ? route('buildings') : '') : route('home') }}" class="login100-form validate-form">
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
                    </form>

@endsection
