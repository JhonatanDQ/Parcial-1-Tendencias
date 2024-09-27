@extends('layouts.applogin')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 24rem; border-radius: 20px;">
        <div class="card-body p-5">

            <!-- Título del Formulario -->
            <h4 class="text-center mb-4" style="font-weight: bold;">Iniciar sesión</h4>

            <!-- Formulario de Login -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Input de Email -->
                <div class="mb-3">
                    <label for="email" class="form-label visually-hidden">Correo Electrónico</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="User@example.com">
                        @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Input de Password -->
                <div class="mb-4">
                    <label for="password" class="form-label visually-hidden">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="********">
                        @error('password')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- Botones de Login y Registro -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-3">
                    <button type="submit" class="btn btn-primary btn-lg mr-2" style="border-radius: 10px; font-size: 0.9rem; transition: background-color 0.3s, transform 0.3s;">
                        Iniciar Sesión
                    </button>
                    <a href="{{ route('register') }}" class="btn btn-success btn-lg" style="border-radius: 10px; font-size: 0.9rem; transition: background-color 0.3s, transform 0.3s;">
                        Registrarse
                    </a>
                </div>

                <!-- Enlace de "Forgot Password" -->
                <div class="text-center mb-3">
                    @if (Route::has('password.request'))
                    <a class="text-primary" href="{{ route('password.request') }}" style="font-size: 0.9rem;">
                        Olvidó su contraseña?
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .btn-primary:hover, .btn-success:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .btn-success:hover {
        background-color: #4caf50;
        transform: scale(1.05);
    }
</style>
@endsection
