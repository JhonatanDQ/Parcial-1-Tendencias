@extends('layouts.applogin')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="card shadow" style="width: 24rem; border-radius: 20px;">
        <div class="card-body p-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h4 class="text-center mb-4" style="font-weight: bold;">Restablecer Contraseña</h4>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text bg-primary text-white rounded-start">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Correo Electrónico">
                        @error('email')
                        <span class="invalid-feedback d-block">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm" style="border-radius: 10px; padding: 0.5rem 1rem;">
                            {{ __('Reestablecer Contraseña') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
