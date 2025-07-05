@extends('layouts.app')

@section('content')
<a href="{{ route('portfolio.create') }}" class="btn btn-primary mb-3">Tambah Proyek</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nama Proyek</th>
            <th>Kategori</th>
            <th>Tanggal</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($portfolios as $item)
        <tr>
            <td><img src="{{ asset($item->foto) }}" alt="Foto Proyek" width="150"></td>
            <td>{{ $item->nama_proyek }}</td>
            <td>{{ $item->kategori }}</td>
            <td>{{ $item->tanggal_pembuatan }}</td>
            <td><a href="{{ $item->link }}" target="_blank">Kunjungi</a></td>
            <td>
                <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Yakin ingin hapus?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
