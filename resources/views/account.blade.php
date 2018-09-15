@extends('app')

@section('title')
    Beheer uw account
@endsection

@section('content')
    <section class="section">
        <form method="POST" action="{{ route('account') }}">
            {{ csrf_field() }}
            <div class="field">
                <label class="label">Voornaam</label>
                <div class="control">
                    <input id="first_name" type="email"
                           class="input {{ $errors->has('first_name') ? ' is-danger' : '' }}" name="first_name"
                           value="{{ $user->first_name }}"
                           required autofocus>
                    @if ($errors->has('first_name'))
                        <span class="icon is-small is-right">
                            <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if ($errors->has('first_name'))
                    <p class="help is-danger">{{ $errors->first('first_name') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">Achternaam</label>
                <div class="control">
                    <input id="first_name" type="email"
                           class="input {{ $errors->has('surname') ? ' is-danger' : '' }}"
                           name="surname"
                           value="{{ $user->surname }}"
                           required autofocus>
                    @if ($errors->has('surname'))
                        <span class="icon is-small is-right">
                            <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if ($errors->has('surname'))
                    <p class="help is-danger">{{ $errors->first('surname') }}</p>
                @endif
            </div>
            <label class="label">Geboortedatum</label>
            <div class="control">
                <datepicker></datepicker>
            </div>
        </form>
    </section>
@endsection
