@extends('Layouts.Navbar')
  
@section('content')
    <div class="row ml-5 mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Contact Message</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary back" href="{{ route('contact') }}"> Back</a>
            </div>
        </div>
    </div>
      
    <div class="row ml-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $contact->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $contact->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone:</strong>
                {{ $contact->phone }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                {{ $contact->message }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Create at:</strong>
                {{ $contact->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Update at:</strong>
                {{ $contact->updated_at }}
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