@extends('layout.app')
@section('title', 'Мои объявления')
@section('content')

<p class="text-end"><a href="">Добавить объявление</a></p>
@if (count ($bbs) > 0)
<table class="table-striped table-borderless">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена руб. </th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bbs as $bb)
            <tr>
                <td>{{ $bb->title }}</td>
                <td>{{ $bb->price }}</td>
                <td>
                    <a href="">Изменить</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection('content')
