@extends('layout')

@section('content')

<p style="font-size: x-large"><b>Here are the informations recorded, organised in a Datatable</b></p>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="laptops_table" class="table table-bordered table-striped table-hover">
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
                            <td>{{ $laptop->brand }}</td>
                            <td>{{ $laptop->model }}</td>
                            <td>{{ $laptop->processor }}</td>
                            <td>{{ $laptop->cores }}</td>
                            <td>{{ $laptop->ram }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
    
<script>

    $(document).ready( function () {
        $('#laptops_table').DataTable();
    });

</script>

@endpush