@extends('layout.app')

@section('content')

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                    {{-- <img src="{{ asset('assets/img/infosehatindo-favicon.png') }}" alt=""> --}}
                    {{-- <h3>Why Choose Medilab?</h3> --}}
                    {{-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad
                        corporis.
                    </p>
                    <div class="text-center">
                        <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                    </div> --}}
                </div>
            </div>
            
        </div>

    </div>
</section><!-- End Why Us Section -->

<section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Penyakit</h2>
            <p>Beberapa penyakit yang umum diderita masyarakat beserta gejala dan cara pencegahannya. Dapat menjadi pedoman dalam kehidupan sehari-hari kita.</p>
        </div>

        <div class="row">
            @foreach ($penyakits as $item)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="{{ route($item->slug) }}">{{ $item->name }}</a></h4>
                        <p>{{ substr($item->description, 0, 130)."..." }}</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section><!-- End Services Section -->
@endsection
