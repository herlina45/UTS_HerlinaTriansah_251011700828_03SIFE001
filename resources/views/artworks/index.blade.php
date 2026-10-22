@extends('layouts.app')

@section('title', 'Koleksi Karya - Matcha Muse Gallery')

@section('content')
<div class="row mb-4">
    <div class="col-md-12 text-center py-3">
        <h1 class="fw-bold" style="color: #2f4f2f;">🌿 Matcha Muse Gallery</h1>
        <p class="text-muted lead" style="font-size: 1.05rem;">
            Menampilkan kurasi karya seni pilihan dengan sentuhan pastel minimalis yang tenang dan penuh inspirasi.
        </p>
        <hr class="w-25 mx-auto" style="border-top: 2px solid #DCE8D5;">
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @forelse($artworks as $artwork)
    <div class="col">
        <div class="card h-100 shadow-sm border-0" style="background-color: #FFFFFF; border-radius: 12px; overflow: hidden;">
            <!-- Gambar Karya Seni -->
            <div style="height: 250px; overflow: hidden; background-color: #f7f3ed; position: relative;">
                <img src="{{ asset('assets/images/' . $artwork->image) }}"
                    alt="{{ $artwork->title }}"
                    class="w-100 h-100 object-fit-cover"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300?text=Matcha+Muse+Gallery';">
            </div>

            <div class="card-body d-flex flex-column p-4">
                <!-- Judul Karya -->
                <h5 class="card-title fw-bold mb-1" style="color: #2c3e50; font-size: 1.15rem;">
                    {{ $artwork->title }}
                </h5>

                <!-- Nama Seniman & Tahun -->
                <p class="text-muted small mb-2">
                    Oleh <strong>{{ $artwork->artist }}</strong> ({{ $artwork->year }})
                </p>

                <!-- Medium / Teknik Seni -->
                <p class="small mb-3" style="color: #555;">
                    <span class="badge" style="background-color: #DCE8D5; color: #2f4f2f; font-weight: 500;">
                        {{ $artwork->medium }}
                    </span>
                </p>

                <div class="mt-auto pt-2 d-flex justify-content-between align-items-center border-top">
                    <!-- Harga dengan Format Rupiah -->
                    <span class="fw-bold" style="color: #5c2833; font-size: 1rem;">
                        Rp {{ number_format($artwork->price, 0, ',', '.') }}
                    </span>

                    <!-- Tombol Lihat Detail mengarah ke route artworks.show -->
                    <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-sm btn-strawberry px-3">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <div class="p-5 bg-white rounded-3 shadow-sm border">
            <h4 class="text-secondary">Belum ada karya seni yang tersedia.</h4>
            <p class="text-muted small mb-3">Pastikan seeder database sudah dijalankan dengan benar.</p>
            <code>php artisan db:seed --class=ArtworkSeeder</code>
        </div>
    </div>
    @endforelse
</div>
<div class="d-flex justify-content-center mt-5">
    {{ $artworks->links() }}
</div>
@endsection