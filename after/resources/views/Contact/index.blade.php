@extends('Layouts.Navbar')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb ml-5 mt-2">
            <div class="pull-left mb-2">
                <h2>List Contact</h2>
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
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Create_at</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contact as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->message }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
                <form action="{{url('/contact'. '/' . $item->id)}}" method="POST" id="form-delete">       
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger btnDelete" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     <div class="pag">
        {!! $contact->appends(request()->all())->links() !!}
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