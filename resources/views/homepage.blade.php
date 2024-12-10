@extends('layouts.standard')

@section('title') Жаңалықтар @endsection

@section('content')
    <h1>Жаңалықтар</h1>

    <table class=" table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Тақырып</th>
            <th scope="col">Автор</th>
            <th scope="col">Текст</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $newsOne)
            <tr>
                <td> {{ $newsOne->title}}</td>
                <td>{{ $newsOne->author_name }}</td>
                <td> {{ $newsOne->text }}
                    <a href="{{ route('one-news', $newsOne->id) }}">
                        <button class="btn btn-warning">
                            Детально
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
