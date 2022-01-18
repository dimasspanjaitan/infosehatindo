@extends('layout.blog')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>ISPA</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Info ISPA</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
    <div class="container">
        <div class="gallery-item pb-5">
            <a href="{{ asset('assets/img/penyakit/ispa.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/ispa.png') }}" alt="" class="img-fluid">
            </a>
        </div>
        <h3>Pengertian</h3>
        <p>ISPA merupakan penyakit infeksi akut yang menyerang satu atau lebih saluran pernafasan mulai dari hidung hingga kantong paru-paru termasuk jaringan adneksanya seperti sinus/rongga telinga tengah dan pleura.</p>

        <h3>Apa Penyebab ISPA</h3>
        <ol>
            <li>Bakteri</li>
            <li>Virus</li>
            <li>Jamur</li>
        </ol>

        <h3>Gejala ISPA</h3>
        <ol>
            <li>Batuk</li>
            <li>Demam</li>
            <li>Filek</li>
            <li>Radang Tenggorokan</li>
        </ol>

        <h3>Cara Penularan</h3>
        <p>ISPA ditularkan melalui pernafasan maupun percikan ludah penderita. Kuman yang terhirup akan masuk ke saluran pernafasan dan menyebar ke seluruh tubuh.</p>

        <h3>Faktor Risiko Penyakit ISPA</h3>
        <ol>
            <li>Faktor Individu</li>
            <ul>
                <li>Umur</li>
                <li>Jenis Kelamin</li>
                <li>Status Gizi</li>
            </ul>
            <li>Faktor Individu</li>
            <ul>
                <li>Pengetahuan</li>
                <li>Ekonomi</li>
                <li>Sikap Masyarakat</li>
            </ul>
            <li>Faktor Lingkungan</li>
            <ul>
                <li>Rumah sehat:</li>
                <p>Pencahayaan minimal 60 lux, ventialsi 10% dari luas lantai, kepadatan hunian minimal 8 meter per 1 orang,  kelembaban 40%-70%, suhu 18-30 derajat C, terdapat cerobong asap dapur.</p>
            </ul>
        </ol>

        <h3>Pencegahan</h3>
        <ol>
            <li>Menjaga jarak dengan penderita ISPA</li>
            <li>Menjaga sirkulasi udara bersih dalam rumah dengan membuka jendela (ventilasi cukup)</li>
            <li>Menjaga kebersihan rumah dan lingkungan</li>
            <li>Hindari polusi udara dalam rumah seperti: asap dapur dan asap rokok</li>
            <li>Hindari hunian dalam satu kamar tidur lebih dari 3 orang</li>
            <li>Menyemen lantai rumah</li>
            <li>Sering mengganti sarung bantal</li>
            <li>Memakai masker</li>
        </ol>

        <div class="gallery-item pt-2 pb-2">
            <a href="{{ asset('assets/img/penyakit/ispa2.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/ispa2.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection
