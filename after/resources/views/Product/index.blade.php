@extends('Layouts.Navbar')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb ml-5 mt-5">
            <div class="pull-left">
                <h2>List Product</h2>
            </div>
            <hr>
            <form action="" class="form-inline search mr-5">
                <div class="form-group" >
                    <input type="text" name="key" class="form-control" placeholder="Enter Your Type">
                </div>
                <button class="btn btn-primary" type="submit">
                    <i class="bx bx-search"></i>
                </button>
            </form>
            <hr>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success add mb-4" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
        </div>

    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success ml-4">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered ml-5">
        <tr>
            <th>No</th>
            <th>Group Virus Name</th>
            <th>Name Virus</th>
            <th>Link</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->cat->name }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->link }}</td>
            <td>
                <form action="{{ route('product.destroy',$item->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('product.show',$item->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('product.edit',$item->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     <div class="pag">
        {!! $products->appends(request()->all())->links() !!}
     </div>
     <style>
        .pag, .add{
            float: right;
            margin-right: 5rem;
        }
        .search {
            margin-left: 50%;
        }
     </style>
 
@endsection