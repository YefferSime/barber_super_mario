@extends('layout')

@section('title', 'Contact')

@section('content')

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Contact</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-5">
                    <p class="d-inline-block bg-dark text-primary py-1 px-4">Contact Me</p>
                    <h1 class="text-uppercase mb-4">Have Any Query? Please Contact Me!</h1>

                    <div class="d-flex align-items-center mb-2">
    <div class="btn-square flex-shrink-0 me-3">
        <span class="fa fa-map-marker-alt text-primary"></span>
    </div>
    <h4 class="text-uppercase mb-0">915 N Stafford St, Arlington VA 22203, USA</h4>
</div>
<div class="d-flex align-items-center mb-2">
    <div class="btn-square flex-shrink-0 me-3">
        <span class="fa fa-phone-alt text-primary"></span>
    </div>
    <h4 class="text-uppercase mb-0">+1 571 320 6362</h4>
</div>
<div class="d-flex align-items-center mb-2">
    <div class="btn-square flex-shrink-0 me-3">
        <span class="fa fa-envelope-open text-primary"></span>
    </div>
    <h4 class="text-uppercase mb-0">example@gmail.com</h4>
</div>

                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
    <div class="h-100" style="min-height: 400px;">
    <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.053053877121!2d-77.09311!3d38.880161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b69073a81977%3A0x7a27e5c126385d68!2s2718%20Washington%20Blvd%2C%20Arlington%2C%20VA%2022201%2C%20USA!5e0!3m2!1sen!2sus!4v1713189919579!5m2!1sen!2sus"
    width="100%"
    height="100%"
    frameborder="0"
    style="border:0; filter: grayscale(100%) contrast(90%);"
    allowfullscreen=""
    aria-hidden="false"
    tabindex="0">
</iframe>

    </div>
</div>

        </div>
    </div>
</div>
<!-- Contact End -->
    
@endsection
