@extends('layout')

@section('content')
    
<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Brand Name</th>
                    <th>Model Name</th>
                    <th>Processor</th>
                    <th>Number of Cores</th>
                    <th>RAM</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($laptops as $laptop)
                    <tr>
                        <td>{{ $laptop->id }}</td>
                        <td>{{ $laptop->brand  }}</td>
                        <td>{{ $laptop->model  }}</td>
                        <td>{{ $laptop->processor }}</td>
                        <td>{{ $laptop->cores }}</td>
                        <td>{{ $laptop->ram }}</td>
                    </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>






@endsection