
@extends('layouts.app')

    @section('content')

<div class="container pt-3" style="min-height: 100vh">
    <div class="row justify-content-around py-3">
        <div class="col-10 col-md-6 col-lg-5 col-xl-4">

            <div class="card">
            @if(session()->has('status'))
            <div class="text-danger">
                {{$status}}
            </div>
        @endif


            <div class="card-header">
                <h3 class="card-title">Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('login')}}" method="post">
                @csrf


                <div class="card-body">
                  <div class="form-group">
                    @error('email')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="{{old('email')}}" required>
                  </div>



                  <div class="form-group">
                    @error('password')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password"  required>
                  </div>


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input"  id="remember_me" >
                    <label class="form-check-label" id="remember_me" name="remember" for="remember_me">Remember me</label>
                  </div>

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Login</button>

                  <span style="cursor:pointer; margin-left:12px"><a href="/register">Register Now</a></span> <span style="cursor:pointer; margin-left:12px"><a href="/forgot-password">Forgot Password?</a></span>
                </div>
              </form>
            </div>
        </div>
            </div>


        </div>
    </div>



    @endsection
