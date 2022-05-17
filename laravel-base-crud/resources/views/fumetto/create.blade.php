
@extends('layouts.main')



@section('main-content')
    <form action="{{route('fumetti.store')}}" method="post">
        @csrf
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">

        <label for="description">Descrizione</label>
        <input type="text" name="description" id="description">

        <label for="thumb">url</label>
        <input type="text" name="thumb" id="thumb">

        <label for="price">prezzo</label>
        <input type="text" name="price" id="price">

        <label for="series">Serie</label>
        <input type="text" name="series" id="series">

        <label for="sale_date">Data</label>
        <input type="text" name="sale_date" id="sale_date">

        <label for="type">Tipo</label>
        <input type="text" name="type" id="type">

        <input type="submit" value="INVIA">

    </form>
@endsection