@extends('admin.layouts.admin_layout')

@section('admin_main')

        <div class="col-md-8 " style="margin-left:17%">
          <!-- general form elements -->
           @if(count($errors)>0)
        <div class="alert alert-danger ">
            {{-- ALL Fields which have <b style="color:red">Asterik (*)</b> are Mendatory --}}
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">
                {{ $error }}
            </li>
            @endforeach
        </div>
        @endif
          <div class="box box-primary">
        @if(Session::has('success'))
          <div class="alert alert-info hidout" role="alert">
            {{ Session::get('success') }}
          </div>
            @endif
             <form  method="POST" action="{{ route('user.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control"  name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
@endsection