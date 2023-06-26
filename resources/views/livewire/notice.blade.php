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
        <h3 class="card-title">Edit Notice</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{url('order').'/'.$order->id}}" method="post" >
        @csrf
        @method('patch')


        <div class="card-body">


  <div class="form-group">
            @error('notice')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
            <label for="description">Notice</label>
            <textarea class="form-control" name="notice" id="notice" rows="5">{{$order->notice}}</textarea required>
          </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Save change</button>
        </div>
      </form>
    </div>
    <!-- /.card -->


<!-- /.card-hefffffffffffffffffffffffffffffffffffffff sddddddddddddddddddd wsader -->


</div>
@endsection
