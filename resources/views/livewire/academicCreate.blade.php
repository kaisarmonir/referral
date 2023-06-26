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
                <h3 class="card-title">Create a course</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/academic')}}" method="post" >
                @csrf


                <div class="card-body">


                      <div class="form-group">
                        @error('name')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                        <label for="Name">Course Name</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="Course Name" value="{{old('name')}}" required>
                      </div>

                  <div class="form-group">
                    @error('title')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="title">Course Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{old('title')}}" required>
                  </div>

                  <div class="form-group">
                    @error('price')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="price">Course price</label>
                    <input type="text" class="form-control" id="title" name="price" placeholder="price" value="{{old('price')}}" required>
                  </div>



                  <div class="form-group">
                    @error('description')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="description">Course description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea value="{{old('description')}}" required>
                  </div>




                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Publish</button>
                </div>
              </form>


<!-- /.card-hefffffffffffffffffffffffffffffffffffffff sddddddddddddddddddd wsader -->
</div>
</div>
</div>
@endsection
