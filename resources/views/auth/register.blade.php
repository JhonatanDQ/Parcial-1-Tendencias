@extends('layouts.applogin')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 24rem; border-radius: 20px;">
        <div class="card-body p-5">
            <h4 class="text-center mb-4" style="font-weight: bold;">Crear Cuenta</h4>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-user"></i>
                        </span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                               required autocomplete="name" autofocus placeholder="Nombre">
                        @error('name')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                               required autocomplete="email" placeholder="Correo Electrónico">
                        @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                               placeholder="Contraseña">
                        @error('password')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                    </div>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <button type="submit" class="btn btn-primary btn-sm" style="border-radius: 10px; padding: 0.5rem 1rem;">
                        {{ __('Registrar') }}
                    </button>
                    <a href="{{ route('login') }}" class="btn btn-success btn-sm" style="border-radius: 10px; padding: 0.5rem 1rem;">
                        {{ __('Ya tengo una cuenta') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
