<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="laptops_table" class="table table-bordered table-striped">
                    
                        <tr>
                            <th>id</th>
                            <th>Brand Name</th>
                            <th>Model Name</th>
                            <th>Processor</th>
                            <th>Number of Cores</th>
                            <th>RAM</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($laptops as $laptop)
    
                            <tr>
                                <td>{{$laptop->id}}</td>
                                <td>{{$laptop->brand}}</td>
                                <td>{{$laptop->model}}</td>
                                <td>{{$laptop->processor}}</td>
                                <td>{{$laptop->cores}}</td>
                                <td>{{$laptop->ram}}</td>
                                <td>{{$laptop->action}}</td>
                            </tr>
    
                        @endforeach
                        
                </table>
            </div>
        </div>
    </div>

</body>
</html>