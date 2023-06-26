
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
                <h3 class="card-title">Edit payment information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('paymentInfo/1')}}" method="post">
                @csrf
                @method('patch')

                <div class="card-body">
                  <div class="form-group">
                    @error('method')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="method">Payment method</label>
                    <input type="text" class="form-control" name="method" id="method"  value="{{$paymentInfo->method}}" required>
                  </div>





                  <div class="form-group">
                    @error('number')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="number">number</label>
                    <textarea class="form-control" name="number" id="number" rows="5">{{$paymentInfo->number}}</textarea required>
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
