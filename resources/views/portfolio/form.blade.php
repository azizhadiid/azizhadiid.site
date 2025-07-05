<div class="mb-3">
    <label>Foto:</label>
    <input type="file" name="foto" class="form-control">
    @if(isset($portfolio))
        <img src="{{ asset($portfolio->foto) }}" width="100" class="mt-2">
    @endif
</div>
<div class="mb-3">
    <label>Nama Proyek:</label>
    <input type="text" name="nama_proyek" class="form-control" value="{{ old('nama_proyek', $portfolio->nama_proyek ?? '') }}">
</div>
<div class="mb-3">
    <label>Kategori:</label>
    <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $portfolio->kategori ?? '') }}">
</div>
<div class="mb-3">
    <label>Tanggal Pembuatan:</label>
    <input type="date" name="tanggal_pembuatan" class="form-control" value="{{ old('tanggal_pembuatan', $portfolio->tanggal_pembuatan ?? '') }}">
</div>
<div class="mb-3">
    <label>Link:</label>
    <input type="url" name="link" class="form-control" value="{{ old('link', $portfolio->link ?? '') }}">
</div>
<div class="mb-3">
    <label>Deskripsi:</label>
    <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $portfolio->deskripsi ?? '') }}</textarea>
</div>
