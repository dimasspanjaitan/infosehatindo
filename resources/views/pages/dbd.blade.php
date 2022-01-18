@extends('layout.blog')

@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>DEMAM BERDARAH DENGUE (DBD)</h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Info DBD</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs Section -->

<section class="inner-page">
    <div class="container">
        <div class="gallery-item pb-5">
            <a href="{{ asset('assets/img/penyakit/dbd.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/dbd.png') }}" alt="" class="img-fluid">
            </a>
        </div>
        <h3>Pengertian</h3>
        <p>Demam Berdarah Dengue (DBD) adalah infeksi akut yang disebabkan oleh arbovirus dan ditularkan melalui gigitan nyamuk Aedes Aegypti dan Aedes Albacpictus.</p>

        <h3>Penularan</h3>
        <p>Penularan DBD terjadi melalui gigitan nyamuk Aedes betina yang sebelumnya telah membawa virus dalam tubuhnya dari penderita demam berdarah lain.</p>

        <h3>Ciri dan Sifat Nyamuk Aedes</h3>
        <ol>
            <li>Warna hitam dan bercak putih pada badan dan kaki</li>
            <li>Hidup dan berkembang biak di dalam rumah, tempatnya di tempat yang gelap dan lembab</li>
            <li>Menggigit di siang hari</li>
            <li>Berkembang biak dalam genangan air. Misal: bak mandi, gentong, drum, dll</li>
        </ol>

        <h3>Pencegahan, lakukan 4M Plus!</h3>
        <ol>
            <li>Menguras</li>
            <p>Menguras wadah air yang terdapat di dalam rumah seperti bak mandi, ember, vas bunga dan lainnya agar telur dan jentik nyamuk mati.</p>
            <li>Menutup</li>
            <p>Menutup rapat semua wadah air agar nyamuk Aedes tidak dapat masuk dan bertelur.</p>
            <li>Mengubur</li>
            <p>Mengubur semua barang bekas yang berada di sekitar luar rumah agar tidak menjadi tempat penampungan air hujan yang dapat menjadi tempat bersarang nyamuk.</p>
            <li>Memantau</li>
            <p>Semua wadah air yang berpotensi sebagai tempat perindukan nyamuk Aedes.</p>
        </ol>
        <p>LAKUKAN 4M Plus SEMINGGU SEKALI!!!</p>

        <h3>Gejala DBD</h3>
        <ol>
            <li>Demam akut yang tetap tinggi selama 2-7 hari</li>
            <li>Nyeri perut (ulu hati)</li>
            <li>Pendarahan berupa: bintik-bintik merah di kulit, atau mimisan, atau gusi berdarah, dan yang lebih parah dapat disertai dengan muntah darah, dan bercak darah</li>
            <li>Tanda-tanda syok: lemah, kulit dingin, basah, tidak sadar</li>
        </ol>

        <h3>Pertolongan Pertama pada Korban DBD!</h3>
        <ol>
            <li>Segera bawa ke petugas kesehatan, puskesmas atau rumah sakit</li>
            <li>Beri minum sebanyak-banyaknya, air putih, susu, teh atau air minum lainnya</li>
            <li>Beri kompres air hangat pada saat demam</li>
            <li>Beri obat penurun demam</li>
        </ol>

        <div class="gallery-item pt-2 pb-2">
            <a href="{{ asset('assets/img/penyakit/dbd2.png') }}" class="galelry-lightbox">
                <img src="{{ asset('assets/img/penyakit/dbd2.png') }}" alt="" class="img-fluid">
            </a>
        </div>
    </div>
</section>
@endsection
