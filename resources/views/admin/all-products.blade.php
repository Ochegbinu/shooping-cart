@extends('admin.navbar')

@section('content')
    <div class="container">
        <table class="table table-striped table-condensed">
            <tr>

                <th>Product</th>
                <th>description</th>
                <th>price</th>
                <th>Action</th>
            </tr>
            <tr>
                @foreach ($product as $item)
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{route('destroy', [$item])}}" class="btn btn-danger btn-sm"><i class="fa fa-times-rectangle" aria-hidden="true"></i></a><br><br>
                        <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>

                    </td>

            </tr>
            @endforeach


        </table>
    </div>
@endsection
