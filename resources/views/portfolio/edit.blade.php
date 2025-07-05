@extends('layouts.app')

@section('content')
<form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('portfolio.form', ['portfolio' => $portfolio])
    <button class="btn btn-primary">Update</button>
</form>
@endsection
