@extends('layout')

@section('content')

<table border="3">
    <tr>
        <td>id</td>
        <td>Brand name</td>
        <td>Model name</td>
        <td>Processor</td>
        <td>Number of cores</td>
        <td>RAM</td>
    </tr>
    
    @foreach ($request as $req )
    
    <tr>
        <td>{{ $req["id"] }}</td>
        <td>{{ $req["name"] }}</td>
        <td>{{ $req["model"] }}</td>
        <td>{{ $req["processor"] }}</td>
        <td>{{ $req["cores"] }}</td>
        <td>{{ $req["RAM"] }}</td>
    </tr>

    @endforeach

@endsection