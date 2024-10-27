@extends('layouts.app')
@section('title', 'Добавление объявления :: Мои объявления')
@section('content')

<form action="{{ route('bb.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input name="title" id="txtTitle" 
                class="form-control @error('title') is-invalid @enderror">
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <textarea name="content" id="txtContent" 
                    class="form-control @error('content') is-invalid @enderror" 
                    row="3"></textarea>
    </div>
    <div class="mb-3">
        <label class="txtPrice" class="form-label">Цена</label>
        <input name="price" id="txtPrice" 
                class="form-control @error('price') is-invalid @enderror">
    </div>
    <input type="submit" class="btn btn-primary" value="{{ old('title') }}">
</form>
@endsection('content')
