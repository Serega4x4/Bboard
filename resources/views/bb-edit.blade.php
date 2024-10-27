@extends('layouts.app')
@section('title', 'Правка объявления :: Мои объявления')
@section('content')

<form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input name="title" id="txtTitle" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{ old('title', $bb->title) }}">
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <textarea name="content" id="txtContent" 
                    class="form-control @error('content') is-invalid @enderror" 
                    row="3"
                    value="{{ old('content', $bb->content) }}"></textarea>
    </div>
    <div class="mb-3">
        <label class="txtPrice" class="form-label">Цена</label>
        <input name="price" id="txtPrice" 
                class="form-control @error('price') is-invalid @enderror" 
                value="{{ old('price', $bb->price) }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection('content')
