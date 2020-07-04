@extends('admin.layouts.admin_layout')

@section('admin_main')

        <div class="col-md-8 " style="margin-left:17%">
           @if(Session::has('success'))
          <div class="alert alert-info hidout" role="alert">
            {{ Session::get('success') }}
          </div>
            @endif
          <div class="box box-primary">
             <form  method="POST" enctype="multipart/form-data" action="{{ route('user.profile.store',['id'=>$user->id]) }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="">Email address</label>
                  <input type="email"  class="form-control" value="{{ $user->email}}" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" name="username"  value="{{ $user->username}}" placeholder="Enter Username">
                </div>
                  <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name"  value="{{ $user->profile->name}}" placeholder="name">
                </div>
                <div class="form-group">
                  <label for="">Phone no</label>
                  <input type="text" class="form-control" name="phone_no"  value="{{$user->phone_no}}" placeholder="Phone no">
                </div>
                  <div class="form-group">
                  <label for="">Desigenation</label>
                  <input type="text" class="form-control" name="desigenation" placeholder="desigenation" value="{{$user->profile->desigenation}}">
                </div>
                  <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control"  value="{{ $user->profile->address}}" name="address" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="">Image</label>
                  <input type="file" class="form-control" name="image" placeholder="Image">
                </div>
                {{-- <div class="form-group">
                  <label for="">Change Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div> --}}
                    <input type="hidden" class="form-control" name="user_id" value="{{ $user->id}}">
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
@endsection