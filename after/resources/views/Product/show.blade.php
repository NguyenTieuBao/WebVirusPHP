@extends('Layouts.Navbar')
  
@section('content')
    <div class="row ml-5 mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary back" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
      
    <div class="row ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Link:</strong>
                {{ $product->link }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $product->cat->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Create at:</strong>
                {{ $product->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Update at:</strong>
                {{ $product->updated_at }}
            </div>
        </div>
    </div>
    <style>
        .back {
            float: right;
            margin-right: 5rem;
        }
    </style>
@endsection