@extends('app')
@section('title') Login
@endsection

@section('content')
<section class="section has-text-centered">
    <div class="title">
        Login
    </div>
</section>
<section class="section">
    <div class="container-small">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="field is-horizontal">
                <div class="field-label is-normal">E-Mail Adres</div>
                <div class="field-body">
                    <div class="field">
                        <div class="control has-icons-right">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}"
                                required autofocus> @if ($errors->has('email'))
                            <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                        </div>
                        @if ($errors->has('email'))
                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">Wachtwoord</div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>                            @if ($errors->has('password'))
                            <span class="icon is-small is-right">
                                        <i class="fa fa-warning"></i>
                                    </span> @endif
                        </div>
                        @if ($errors->has('password'))
                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="control">
                        <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}>Onthoud mij
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="control">
                        <button type="submit" class="button is-primary">
                                Inloggen
                            </button>
                    </div>
                    <div class="control">
                        <a class="button is-text" href="{{ route('password.request') }}">
                               Bent u uw wachtwoord vergeten?
                            </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection