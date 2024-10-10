@extends('layouts.appservice')

@section ('title' ,'Servicios')

@section('content')

<!-- Services Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Services</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>

        <div class="row g-4">
            @foreach ($services as $service)
            <div class="col-lg-6">
                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 h-100">
                    <div class="service-icon p-4">
                        <i class="fa {{ $service->image }} fa-4x text-primary"></i>
                    </div>
                    <div class="service-content text-end">
                        <h5 class="mb-4">{{ $service->name }}</h5>
                        <p class="mb-0">{{ $service->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Testimonial</h5>
                    <h1 class="mb-0">Our Clients Say!!!</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    @foreach ($testimonios as $testimonio)
                        <div class="testimonial-item text-center rounded pb-4 h-100 d-flex flex-column">
                            <div class="testimonial-comment bg-light rounded p-4 flex-grow-1">
                                <p class="text-center mb-5">{{ $testimonio->message }}</p>
                            </div>
                            <div class="testimonial-img p-1">
                            <img src="{{ asset($testimonio->image) }}" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div style="margin-top: -35px;">
                                <h5 class="mb-0">{{ $testimonio->user->name }}</h5>
                                <p class="mb-0">{{$ciudades->find($testimonio->ciudad_id)->name }},{{$departamentos->find($ciudades->find($testimonio->ciudad_id)->departamento_id)->name}}</p>
                                <div class="d-flex justify-content-center">
                                    @for ($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star text-primary"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        </div>
    </div>
</div>
<!-- Services End -->

@section('styles')
<link rel="stylesheet" href="{{ asset('sass/testimonials.scss') }}">
<link rel="stylesheet" href="path-to-owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="path-to-owl-carousel/owl.theme.default.min.css">
@endsection

@section('scripts')
<script src="{{ asset('js/testimonials.js') }}"></script>
<script src="path-to-owl-carousel/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

@endsection
