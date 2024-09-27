@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                        <a class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4" href="{{ route('service') }}">{{ __('service') }}</a>
                    </div>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
