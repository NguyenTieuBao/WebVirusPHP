@extends('Layouts.UserNav')

@section('content')
  
@foreach ($category as $item)

<section class="content">
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="col-12">
              <img src="\images\{{$item->image}}" name="image" class="product-image " alt="Product Image"></div>  
            </div>
            
          <div class="col-12 col-sm-6">
            <h3 class="my-3 name">{{$item->name}}</h3>
            <h4>List viruses in group virus</h4>
            <hr>
            @foreach ($item->products as $pro)
              
            <div>
              <h4 class="fs-3">Virus: {{$pro->name}}</h4>
            

              <h4 class="mt-3 fs-4">Link: <a href="{{$pro->link}}">{{$pro->link}}</a></h4>
            </div>
            <hr>
            @endforeach
          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active fs-2" id="product-desc-tab" data-toggle="tab"
               href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active fs-4" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              {{$item->detail}}
            </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
@endforeach
  <div class="pag mb-4">
          {!! $category->links() !!}
  </div>

<style>
    .name {
      font-size: 4rem;
    }
    .pag{
      margin-left: 80%;
    }
    .content {
      margin-top: 5%;
    }
</style>

@endsection