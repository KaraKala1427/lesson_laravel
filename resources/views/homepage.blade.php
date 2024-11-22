@extends('layouts.standard')

@section('title') Домашняя страница @endsection

@section('content')
    <h1>Домашняя страница</h1>
    <p>
        In the realm of stars and infinite space,<br>
        A cosmic dance takes place at a steady pace.<br>
        Planets, galaxies, and comets so bright,<br>
        Amidst the darkness, they shine with light.
    </p>
    <p>
        But in the center, with its fiery glow,<br>
        The sun stands proud, like a king bestow.<br>
        Radiating warmth, life, and energies vast,<br>
        It guards the solar system, unsurpassed.
    </p>
    <p>
        Look up to the sky, when the night is undone,<br>
        The sun will rise, starting a new day's run.<br>
        From dawn till dusk, it guides our way,<br>
        Lighting up the world with its golden ray.
    </p>
    <div class="sun">&#9728;</div>

    <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('company') }}">Про нас</a>
@endsection
