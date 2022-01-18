@extends('layout.blog')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>DIARE</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Info Diare</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
    <div class="container">
        <div class="gallery-item pb-5">
            <a href="{{ asset('assets/img/penyakit/diare.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/diare.png') }}" alt="" class="img-fluid">
            </a>
        </div>
        <h3>Pengertian</h3>
        <p>Diare adalah air besar, tinja berbentuk cair atau setengah cair dan kandungan air tinja lebih banyak dari
            biasanya lebih dari 200 gram atau 200 ml per 24 jam. Diare dapat juga membuat seseorang buang air besar
            encer lebih dari 3 kali per hari, buang air besar tersebut dapat disertai lendir atau darah.</p>

        <h3>Cara Penularan</h3>
        <ol>
            <li>Makanan yang terkontaminasi dengan bakteri yang dibawa oleh lalat</li>
            <li>Air minum tidak direbus sampai mendidih</li>
            <li>Tangan yang terkontaminasi dengan bakteri E. Coli karena tidak cuci tangan</li>
            <li>Air sungai yang tercemar yang dipakai mencuci bahan makanan, sikat gigi, dll</li>
        </ol>

        <h3>Gejala dan Tanda Diare</h3>
        <ol>
            <li>Buang air besar lebih dari biasa (3 x atau lebih)</li>
            <li>Bentuk tinja encer/cair atau berlendir</li>
            <li>Disertai muntah atau perut mulas</li>
            <li>Bila berlanjut dapat bergejala dehidrasi :</li>
            <ul>
                <li>Mata cekung, bibir kering membiru</li>
                <li>Pada bayi ubun-ubun cekung</li>
                <li>Bila dicubit lipatan kulit sulit kembali</li>
                <li>Jarang buang air kecil</li>
                <li>Lemas, nafsu makan kurang kedangkala disertai panas</li>
            </ul>
        </ol>
        <div class="gallery-item pt-2 pb-2">
            <a href="{{ asset('assets/img/penyakit/diare2.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/diare2.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection
