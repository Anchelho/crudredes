@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");

@import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@700&display=swap');

html,
body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif
}

body {
    background: url(https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80) no-repeat center center fixed;
    background-size: cover
}

.container {
    width: 60%;

}

.frame {
    height: 450px;
    width: 350px;
    background: #0005;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 1px #4c559347;
    border-radius: 10px;
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: all .5s ease
}

.tt {
    height: 70px;
    padding-top: 20px;
    transition: all .5s ease;
}

.tt- {
    font-size: 26px;
    font-family: 'Oxygen', sans-serif;
    display: block;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    padding-right: 10px;
    color: #fff;
}

.form-styling {
    width: 80%;
    height: 35px;
    display: block;
    flex-direction: row;
    padding-left: 20px;
    color: #000;
    border: none;
    border-radius: 20px;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, .5)
}

.form-styling input {
    color: #ffffff;
    font-size: 13px;
}

:focus {
    outline: none
}

.form-group input:focus,
textarea:focus {
    background: rgba(255, 255, 255, .7);
    border: none;
    padding-right: 40px;
    transition: background .5s ease
}

#msg.form-styling {
    height: 100px;
    border-radius: 30px;
}

.btn- {
    float: left;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 13px;
    text-align: center;
    color: rgba(255, 255, 255, 1);
    padding-top: 8px;
    width: 80%;
    height: 35px;
    border: none;
    border-radius: 20px;
    margin-top: 2px;
    margin-left: 60px;
    background-color: rgba(16, 89, 255, 1);
}

.btn-:hover {
  cursor: pointer;
    background-color: #0F4FE6;
    transition: background-color .2s
}


</style>
