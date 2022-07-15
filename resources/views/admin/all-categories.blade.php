@extends('admin.navbar')

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th>Category Name</th>
            <th>Description</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
        
            @foreach ($category as $item)
           <tr> 
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>

               <td> <a href=""><button class="btn btn-sm btn-danger">Delete</button></a></td>

            @endforeach
            
        </tr>
    </tbody>
</table>   
@endsection