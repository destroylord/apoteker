<div class="mb-3">
    <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama') ?? $drug->nama }}">
</div>
<div class="mb-3">
    <input type="text" name="jenis" class="form-control" placeholder="Jenis" value="{{ old('jenis') ?? $drug->jenis }}">
</div>
<div class="mb-3">
    <input type="number" name="satuan" class="form-control" placeholder="Satuan" value="{{ old('satuan') ?? $drug->satuan }}">
</div>
<div class="mb-3">
    <input type="number" name="harga_beli" class="form-control" placeholder="Harga Beli" value="{{ old('harga_beli') ?? $drug->harga_beli }}">
</div>
<div class="mb-3">
    <input type="number" name="harga_jual" class="form-control" placeholder="Harga Jual" value="{{ old('harga_jual') ?? $drug->harga_jual }}">
</div>

<div class="mb-3">
    <input type="number" name="stok" class="form-control" placeholder="Stok" value="{{ old('stok') ?? $drug->stok }}">
</div>


<div class="mb-3">
    <button class="btn btn-primary" type="submit">Simpan</button>
</div> 