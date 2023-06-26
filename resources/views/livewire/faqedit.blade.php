
@extends('layouts.app')

    @section('content')

<div class="container pt-3" style="min-height: 100vh">
    <div class="row justify-content-around py-3">
        <div class="col-10 col-md-8 col-lg-6">

            <div class="card">
            @if(session()->has('status'))
            <div class="text-danger">
                {{$status}}
            </div>
        @endif


            <div class="card-header">
                <h3 class="card-title">Create FAQ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('faq')}}" method="post">
                @csrf


                <div class="card-body">
                  <div class="form-group">
                    @error('title')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="title">Question</label>
                    <input type="text" class="form-control" name="title" id="title"  value="{{old('title')}}" required>
                  </div>





                  <div class="form-group">
                    @error('description')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea required>
                  </div>


               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>


                </div>
              </form>
            </div>
        </div>
            </div>


        </div>
    </div>



    @endsection
