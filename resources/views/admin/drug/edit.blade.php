<x-app-layout>
    <x-slot name="header">
            {{ __('Edit Obat') }}
    </x-slot>


    <div class="row">
    <div class="col-lg-6">
    <div class="card">
        <div class="card-header">Edit Obat</div>
        <div class="card-body">

            <form action="{{ route('admin.obat.update', $drug->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.drug.partials.form')
            </form>
        </div>
    </div>
        </div>
    </div>
</x-app-layout>