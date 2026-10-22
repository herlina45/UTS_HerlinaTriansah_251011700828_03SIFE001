@extends('layouts.app')

@section('title', 'Beranda - Matcha Muse Gallery')

@section('content')
<div class="row justify-content-center py-4">
    <!-- Welcome Section -->
    <div class="col-lg-10 text-center mb-5">
        <div class="p-5 rounded-4 shadow-sm" style="background-color: #FFFFFF; border: 1px solid #DCE8D5;">
            <h1 class="fw-bold mb-3" style="color: #2f4f2f;">🌿 Selamat Datang di Matcha Muse Gallery</h1>
            <p class="text-muted lead mb-4" style="font-size: 1.1rem; max-width: 800px; margin: 0 auto;">
                Galeri seni digital dengan konsep pastel minimalis yang menghadirkan kurasi karya seni penuh ketenangan, inspirasi, dan keindahan estetika visual.
            </p>
            <a href="{{ route('artworks.index') }}" class="btn btn-strawberry btn-lg px-4 py-2 shadow-sm">
                Lihat Koleksi Seni &rarr;
            </a>
        </div>
    </div>

    <!-- Identitas Pembuat Proyek -->
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm p-4 rounded-4" style="background-color: #FFFFFF;">
            <h4 class="fw-bold mb-3 pb-2 border-bottom" style="color: #2f4f2f;">
                👤 Identitas Pembuat Proyek
            </h4>
            <div class="row g-3" style="color: #2c3e50;">
                <div class="col-sm-4 fw-semibold text-secondary">Nama Lengkap</div>
                <div class="col-sm-8">Herlina Triansah</div>

                <div class="col-sm-4 fw-semibold text-secondary">NIM</div>
                <div class="col-sm-8">251011700828</div>

                <div class="col-sm-4 fw-semibold text-secondary">Program Studi</div>
                <div class="col-sm-8">Sistem Informasi</div>

                <div class="col-sm-4 fw-semibold text-secondary">Email</div>
                <div class="col-sm-8">
                    <a href="mailto:herlinatriansah45@gmail.com" class="text-decoration-none" style="color: #5c2833;">
                        herlinatriansah45@gmail.com
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection