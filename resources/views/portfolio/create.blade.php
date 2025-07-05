@extends('layouts.app')

@section('content')
<form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('portfolio.form')
    <button class="btn btn-success">Simpan</button>
</form>
@endsection
