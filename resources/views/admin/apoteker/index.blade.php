<x-app-layout>
    <x-slot name="header">
            {{ __('ListObat') }}
    </x-slot>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary d-flex align-items-center">DataTables Obat</h6>
            <a href="/admin/apoteker/create" class="btn btn-primary">Tambah Akun Apoteker</a>
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
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- @foreach ($drugs as $drug)
                            <tr>
                                <td>{{ $drug->nama }}</td>
                                <td>{{ $drug->jenis }}</td>
                                <td>{{ $drug->satuan }}</td>
                                <td>{{ $drug->harga_beli }}</td>
                                <td>{{ $drug->harga_jual }}</td>
                                <td>{{ $drug->stok }}</td>
                                <td>
                                    <a href="{{ route('obat.edit', $drug->id) }}" class="btn btn-warning">Edit</a> 
                                    <form action="{{ route('obat.destroy', $drug->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
