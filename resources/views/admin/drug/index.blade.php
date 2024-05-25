<x-app-layout>
    <x-slot name="header">
            {{ __('ListObat') }}
    </x-slot>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary d-flex align-items-center">DataTables Obat</h6>
            <a href="{{ route('obat.create') }}" class="btn btn-primary">Tambah Obat</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Satuan</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($drugs as $drug)
                            <tr>
                                <td>{{ $drug->nama }}</td>
                                <td>{{ $drug->jenis }}</td>
                                <td>{{ $drug->satuan }}</td>
                                <td>{{ $drug->harga_beli }}</td>
                                <td>{{ $drug->harga_jual }}</td>
                                <td>{{ $drug->stok }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
