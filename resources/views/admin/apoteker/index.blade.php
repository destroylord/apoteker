<x-app-layout>
    <x-slot name="header">
            {{ __('List akun apoteker') }}
    </x-slot>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary d-flex align-items-center">DataTables Apoteker</h6>
            <a href="/admin/apoteker/create" class="btn btn-primary">Tambah Akun Apoteker</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Option</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($apotekers as $apoteker)
                            <tr>
                                <td>{{ $apoteker->name }}</td>
                                <td>{{ $apoteker->email }}</td>
                                <td>
                                    <form action="/apoteker/delete-account/{{ $apoteker->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
