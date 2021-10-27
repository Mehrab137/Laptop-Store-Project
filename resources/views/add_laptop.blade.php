@extends('layout')

@section('content')

<h3> Please fill out the informations below </h3><br>

<form action="{{ route('add.laptop.submit') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Brand Name</label>
        <input type="text" name="brand" class="form-control">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Model Name</label>
        <input type="text" name="model" class="form-control">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Processor</label>
        <input type="text" name="processor" class="form-control"> 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Number of Cores</label>
        <input type="number" name="cores" class="form-control">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">RAM</label>
        <input type="text" name="ram" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

</form>

@endsection