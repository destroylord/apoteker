<div class="mb-3">
    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $drug->nama ?? old('nama') }}">
</div>
<div class="mb-3">
    <input type="text" name="jenis" class="form-control" placeholder="Jenis" value="{{ $drug->jenis ?? old('jenis') }}">
</div>
<div class="mb-3">
    <input type="number" name="satuan" class="form-control" placeholder="Satuan" value="{{ $drug->satuan ?? old('satuan') }}">
</div>
<div class="mb-3">
    <input type="number" name="harga_beli" class="form-control" placeholder="Harga Beli" value="{{ $drug->harga_beli ?? old('harga_beli') }}">
</div>
<div class="mb-3">
    <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual" value="{{ $drug->harga_jual ?? old('harga_jual') }}">
</div>

<div class="mb-3">
    <input type="number" name="stok" class="form-control" placeholder="Stok" value="{{ $drug->stok ?? old('stok') }}">
</div>


<div class="mb-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div> 