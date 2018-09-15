@extends('app')
@section('title') Register
@endsection

@section('content')
<section class="section has-text-centered">
    <div class="title">
        Registreer
    </div>
</section>
<section class="section">
    <div class="container-small">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="field">
                <div class="label">Voornaam</div>
                <div class="control">
                    <input id="first_name" type="text" class="input" name="first_name" value="{{ old('first_name') }}" required autofocus>                    @if ($errors->has('first_name'))
                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                </div>
                @if ($errors->has('first_name'))
                <p class="help is-danger">{{ $errors->first('first_name') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="label">Achternaam</div>
                <div class="control">
                    <input id="surname" type="text" class="input" name="surname" value="{{ old('surname') }}" required autofocus>                    @if ($errors->has('surname'))
                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                </div>
                @if ($errors->has('surname'))
                <p class="help is-danger">{{ $errors->first('surname') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="label">E-Mail Adres</div>
                <div class="control">
                    <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}"
                        required> @if ($errors->has('email'))
                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                </div>
                @if ($errors->has('email'))
                <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="label">Wachtwoord</div>
                <div class="control">
                    <input id="password" type="password" class="input" name="password" required> @if ($errors->has('password'))
                    <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                </div>
                @if ($errors->has('password'))
                <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="label">Bevestig wachtwoord</div>
                <div class="control">
                    <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                </div>
            </div>

            <hr>

            <div class="field">
                <div class="label">Kies betaalmethode</div>
                <div class="control">
                    <payment-method></payment-method>
                </div>
            </div>

            <hr>

            <div class="has-text-centered subtitle">Je betaalt: 0.19 * €120,- = €22,80</div>

            <label class="checkbox">
                <input type="checkbox">
                    Ik ga akkoord met de <a href="{{ route('algemene-voorwaarden') }}">algemene voorwaarden</a> en geef opdracht tot directe levering van de domeinnaam. Ik ben mij ervan bewust dat ik hiermee afstand doe van mijn recht van ontbinding.
            </label>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link is-pulled-right">
                        Registreer
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection