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
        <h3 class="card-title"> Edit contact information</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{url('contact').'/'.$contact->id}}" method="post" >
        @csrf
        @method('patch')


        <div class="card-body">


              <div class="form-group">
                @error('address')
                <div class="error text-danger">{{ $message }}</div>
            @enderror
                <label for="address">Service address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Service Name" value="{{$contact->address}}" required>
              </div>

          <div class="form-group">
            @error('email')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="email">Service email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$contact->email}}" required>
          </div>

          <div class="form-group">
            @error('mobile')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" value="{{$contact->mobile}}" required>
          </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
    <!-- /.card -->


<!-- /.card-hefffffffffffffffffffffffffffffffffffffff sddddddddddddddddddd wsader -->


</div>
@endsection
