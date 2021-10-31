@extends('layout')

@section('content')

<p style="font-size: x-large"><b>Here are the informations recorded, organised in a Datatable</b></p>
<a class="btn btn-primary" href="{{ route('create.pdf.laptop') }}">Export to PDF</a>
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
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('js')
    
<script type="text/javascript">

    $(document).ready( function () {
        //alert("rftgdfgdf");

        
        // $('#laptops_table').DataTable(
        //     processing: true;
        //     serverSide:true;

        //     ajax:"/view-list",

        //     columns: [
        //         {data: 'id' , name:'id'}
        //         {data: 'brand' , name:'brand'}
        //         {data: 'model' , name:'model'}
        //         {data: 'processor' , name:'processor'}
        //         {data: 'cores' , name:'cores'}
        //         {data: 'ram' , name:'ram'}
        //         {
        //             data: 'action', 
        //             name: 'action', 
        //             orderable: true, 
        //             searchable: true,
        //         }
        //     ]

        // );

        $('#laptops_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('view.laptop.list') }}",
            columns: [
                {data: 'id' , name:'id'},
                {data: 'brand' , name:'brand'},
                {data: 'model' , name:'model'},
                {data: 'processor' , name:'processor'},
                {data: 'cores' , name:'cores'},
                {data: 'ram' , name:'ram'},
                {
                    data: 'action', 
                    name: 'action', 
                    orderable: true, 
                    searchable: true,
                }
            ]
        });


    });

</script>

@endpush