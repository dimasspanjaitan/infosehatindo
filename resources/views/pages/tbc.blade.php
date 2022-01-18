@extends('layout.blog')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>TUBERKULOSIS (TBC)</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Info TBC</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
    <div class="container">
        <div class="gallery-item pb-5">
            <a href="{{ asset('assets/img/penyakit/tbc.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/tbc.png') }}" alt="" class="img-fluid">
            </a>
        </div>
        <h3>Pengertian</h3>
        <p>TBC atau Tuberkulosis adalah penyakit menular yang disebabkan oleh kuman TBC (Mycobacterium Tuberculosis). Kuman ini menyerang tubuh manusia, terutama pada paru. TBC bukan penyakit turunan, bukan disebabkan oleh kutukan ataupun guna-guna.</p>

        <h3>Bagaimana Penularan TBC?</h3>
        <p>Kuman TBC keluar ke udara (melalui dropet/percikan dahak) pada saat penderita TBC batuk, bersin atau berbicara tanpa menutup mulut atau menggunakan masker.</p>
        <p>Kuman TBC yang keluar, terhirup oleh orang lain melalui saluran pernafasan menuju paru-paru dan dapat menyebar ke bagian tubuh lainnya. Di dalam tubuh, kuman TBC dilawan oleh daya tahan tubuh.</p>
        <p>Jika daya tahan tubuh lemah, orang tersebut menjadi sakit TBC. Jika daya tahan tubuh kuat, orang tersebut akan tetap sehat.</p>

        <h3>Gejala-gejala TBC</h3>
        <ol>
            <li>Gejala Utama</li>
            <p>Batuk terus menerus (berdahak maupun tidak berdahak)</p>
            <li>Gejala Lainnya</li>
            <ul>
                <li>Demam meriang (demam tidak terlalu tinggi)</li>
                <li>Batuk berdahak (dapat bercampur darah)</li>
                <li>Nyeri dada</li>
                <li>Berkeringat tanpa sebab (terutama pada sore-malam hari)</li>
                <li>Nafsu makan menurun</li>
                <li>Berat badan menurun</li>
            </ul>
        </ol>

        <h3>Pemeriksaan TBC</h3>
        <ol>
            <li>Pemeriksaan Dahak</li>
            <p>Dahak diambil 2 kali dalam waktu 1 hari atau 2 hari, yaitu: </p>
            <ul>
                <li>SEWAKTU datang ke fasilitas kesehatan (hari ke-1) diambil 2 dahak dengan interval minimal 1 jam, atau</li>
                <li>SEWAKTU datang ke fasilitas kesehatan (hari ke-1) PAGI hari setelah bangun tidur (hari ke-2)</li>
            </ul>
            <li>Rontgen Dada</li>
            <p>Pemeriksaan tambahan berupa rontgen foto dada (bila pemeriksaan dahak hasilnya negatif, sedangkan gejala TBC lainnya ada).</p>
        </ol>

        <h3>Pengobatan TBC</h3>
        <p>Pengobatan berlangsung selama 6-8 bulan yang terbagi dalam 2 tahap: </p>
        <ol>
            <li>Tahap Awal</li>
            <p>Obat diminum setiap hari selama 2 atau 3 bulan</p>
            <li>Tahap Akhir</li>
            <p>Obat diminum 3 kali seminggu selama 4 atau 5 bulan</p>
        </ol>

        <h3>Gaya Hidup Sehat dan Pencegahan TBC</h3>
        <ol>
            <li>Makan makanan yang bergizi untuk meningkatkan daya tahan tubuh</li>
            <li>Membuka jendela agar rumah mendapatkan cukup sinar matahari dan udara segar</li>
            <li>Menjamur alas tidur agar tidak lembab</li>
            <li>Mendapatkan suntikan vaksin BCG bagi anak usia di bawah 5 tahun untuk menghindari TBC berat (meningitis dan milier)</li>
            <li>Olahraga teratur</li>
            <li>Tidak merokok</li>
        </ol>

        <div class="gallery-item pt-2 pb-2">
            <a href="{{ asset('assets/img/penyakit/tbc2.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/tbc2.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection
