@extends('layouts.app')

    @section('content')

    <div class="container py-3">

            <div class="d-flex justify-content-center">

    <!-- Small boxesffffffffffffffffffffffffffffffffffffffffffffffffff (Stat box) -->


<div class="card card-primary col-md-8">

@if(session()->has('success'))
<p class="alert alert-success">
{{ session()->get('success') }}
</p>
@endif
      <div class="card-header">
        <h3 class="card-title">Edit service</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form action="{{url('service').'/'.$service->id}}" method="post" >
        @csrf
        @method('patch')


        <div class="card-body">


              <div class="form-group">
                @error('name')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
                <label for="Name">Service Name</label>
                <input type="text" class="form-control" id="Name" name="name" placeholder="Service Name" value="{{$service->name}}" required>
              </div>

          <div class="form-group">
            @error('title')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="title">Service Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$service->title}}" required>
          </div>

          <div class="form-group">
            @error('price')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="price">Service price</label>
            <input type="text" class="form-control" id="title" name="price" placeholder="price" value="{{$service->price}}" required>
          </div>



          <div class="form-group">
            @error('description')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="description">Service description</label>
            <textarea class="form-control" name="description" id="description" rows="5">{{$service->description}}</textarea required>
          </div>




        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>
      </form>
    </div>
    <!-- /.card -->


<!-- /.card-hefffffffffffffffffffffffffffffffffffffff sddddddddddddddddddd wsader -->


</div>
@endsection
