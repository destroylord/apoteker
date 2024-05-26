<x-app-layout>
    <x-slot name="header">
            {{ __('Tambah Apoteker') }}
    </x-slot>


    <div class="row">
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">Tambah Apoteker</div>
        <div class="card-body">

            <form action="{{ route('admin.apoteker.store') }}" method="POST">
                @csrf
                @include('admin.apoteker.partials.form')
            </form>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>