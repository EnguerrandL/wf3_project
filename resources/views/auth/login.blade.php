@extends('layouts.app')

@section('content')

<h1 class="text-center policesnippet mb-4">Connexion Pour Administrateur</h1>

                <form class="col-md-6 col-xs-12 mx-auto" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group policesnippet">
                            <label for="email" class="col-md-10 col-form-label text-center">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control mb-4 col-12 mx-auto policesnippet @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group policesnippet">
                            <label for="password" class="col-md-10 col-form-label text-center">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control mb-4 col-12 mx-auto policesnippet @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        <div class="form-group policesnippet">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label ml-2 text-center" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se Connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de Passe Oublié ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>



@endsection
