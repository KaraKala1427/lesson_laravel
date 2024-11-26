@extends('layouts.standard')

@section('title')пользователь Yernar @endsection

@section('content')

    <table>
        <tr>
            <th>Аты</th>
            <th>Қаласы</th>
            <th>Жасы</th>
        </tr>
        <br>
        <hr>
        @foreach($result as $person)
            <tr>
                <td> {{ $person->FirstName }}</td>
                <td>{{ $person->City }}</td>
                <td> {{ $person->age }}</td>
            </tr>
        @endforeach
    </table>

@endsection
