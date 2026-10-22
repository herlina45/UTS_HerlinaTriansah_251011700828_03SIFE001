@extends('layouts.app')

@section('title', $artwork->title . ' - Matcha Muse Gallery')

@section('content')
<div class="container py-3">
    <!-- Tombol Kembali ke Daftar Karya -->
    <div class="mb-4">
        <a href="{{ route('artworks.index') }}" class="btn btn-sm px-3 shadow-sm" style="background-color: #DCE8D5; color: #2f4f2f; font-weight: 600; border: none; transition: all 0.2s;">
            &larr; Kembali ke Daftar Karya
        </a>
    </div>

    <div class="row g-5 align-items-center bg-white p-4 p-md-5 rounded-4 shadow-sm border-0">
        <!-- Kolom Gambar Karya -->
        <div class="col-lg-6 text-center">
            <div class="position-relative overflow-hidden rounded-3 shadow-sm" style="background-color: #f7f3ed; max-height: 500px;">
                <img src="{{ asset('assets/images/' . $artwork->image) }}" 
                     alt="{{ $artwork->title }}" 
                     class="img-fluid w-100 object-fit-contain rounded-3"
                     style="max-height: 480px;"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/600x500?text=Matcha+Muse+Gallery';">
            </div>
        </div>

        <!-- Kolom Detail Informasi Karya -->
        <div class="col-lg-6">
            <!-- Medium Badge -->
            <span class="badge mb-3 px-3 py-2" style="background-color: #DCE8D5; color: #2f4f2f; font-weight: 600; font-size: 0.9rem;">
                {{ $artwork->medium }}
            </span>

            <!-- Judul Karya -->
            <h1 class="fw-bold mb-2" style="color: #2c3e50; font-size: 2rem;">
                {{ $artwork->title }}
            </h1>

            <!-- Seniman dan Tahun -->
            <p class="text-muted fs-5 mb-4">
                Karya oleh <strong style="color: #2f4f2f;">{{ $artwork->artist }}</strong> ({{ $artwork->year }})
            </p>

            <hr class="my-4" style="border-top: 1px solid #eae5df;">

            <!-- Harga (Format Rupiah) -->
            <div class="mb-4">
                <span class="d-block text-muted small text-uppercase tracking-wider mb-1">Estimasi Nilai Koleksi / Harga</span>
                <h3 class="fw-bold mb-0" style="color: #5c2833;">
                    Rp {{ number_format($artwork->price, 0, ',', '.') }}
                </h3>
            </div>

            <!-- Catatan Galeri Sederhana (Tanpa Kolom Database Tambahan) -->
            <div class="p-4 rounded-3 mb-4" style="background-color: #FFF9F1; border-left: 4px solid #DCE8D5;">
                <p class="mb-0 small text-secondary">
                    <strong>Catatan Galeri:</strong> Karya seni kurasi dari koleksi klasik terpilih. Nilai harga di atas adalah data simulasi galeri untuk kebutuhan pameran dan demonstrasi tugas akademik UTS.
                </p>
            </div>

            <!-- Aksi Tombol -->
            <div class="d-flex gap-2">
                <a href="{{ route('artworks.index') }}" class="btn btn-strawberry px-4 py-2">
                    Jelajahi Karya Lainnya
                </a>
            </div>
        </div>
    </div>
</div>
@endsection