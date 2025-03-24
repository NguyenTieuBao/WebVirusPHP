@extends('Layouts.Navbar')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb ml-5 mt-2">
            <div class="pull-left mb-2">
                <h2>List Category</h2>
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
            <a class="btn btn-success add mb-4" href="{{ route('category.create') }}"> Create New Category</a>
            </div>
        </div>

    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success ml-4">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger ml-4">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered ml-5">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Total Product</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $item->image }}" width="100px"></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->products->count() }}</td>
            <td>
                <form action="{{ route('category.destroy',$item->id) }}" method="POST" id="form-delete">
      
                    <a class="btn btn-info" href="{{ route('category.show',$item->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('category.edit',$item->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger btnDelete" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     <div class="pag">
        {!! $categories->appends(request()->all())->links() !!}
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

     <script>
        
     </script>
 
@endsection