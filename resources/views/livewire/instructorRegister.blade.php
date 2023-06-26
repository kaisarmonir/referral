
@extends('layouts.app')

    @section('content')

    <div class="container pt-3">
    <div class="row justify-content-around py-3">
        <div class="col-10 col-md-6 col-lg-5">

            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Instructor Register</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('instructor/register')}}" method="post">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    @error('name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{old('name')}}" required>
                  </div>

                  <div class="form-group">
                    @error('mobile')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" value="{{old('mobile')}}" required>
                  </div>

                  <div class="form-group">
                    @error('email')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" required>
                  </div>

                  <div class="form-group">
                    @error('code')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="code">Refer code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Enter refer code" value="{{old('code')}}" required>
                  </div>

                  <div class="form-group">
                    @error('password')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" required>
                  </div>

                  <div class="form-group">
                    @error('password_confirmation')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
                    <label for="password_confirmation">Confirm password</label>
                    <input type="text" class="form-control" name="password_confirmation" id="password_confirmation" required>
                  </div>

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Register</button>
                  <span class="refer" style="cursor:pointer; margin-left:6px">don't have a refer code?</span>
                  <span class="code d-none" style="cursor:pointer; margin-left:6px">use 12345 as refer code</span>
                </div>
              </form>
            </div>
        </div>


        </div>
    </div>
</div>


    @endsection
