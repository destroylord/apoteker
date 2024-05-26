<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Obat Tersedia') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="row">
            @forelse ($obats as $obat)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $obat->nama }}</h5>
                            <p class="card-text">Jenis Obat: <span class="badge bg-success">{{ $obat->jenis }}</span></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <small class="text-muted">Terakhir diperbarui {{ $obat->updated_at->diffForHumans() }}</small>
                            <a href="#" class="btn btn-primary btn-sm">Detail Obat</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <h4 class="text-center">Tidak ada obat yang tersedia</h4>
                </div>
            @endforelse
        </div>
    </div>

</x-app-layout>
