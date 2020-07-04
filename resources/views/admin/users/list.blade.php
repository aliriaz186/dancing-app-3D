@extends('admin.layouts.admin_layout')

@section('admin_main')
<div class="col-lg-12 col-xs-12 ">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User List</h3>
            </div>
            <!-- /.box-header -->
             @if(Session::has('warn'))
             <div class="alert alert-warning hidout" role="alert">
                {{  Session::get('warn')}}
            </div>
            @endif
            @if(Session::has('success'))
          <div class="alert alert-info hidout" role="alert">
            {{ Session::get('success') }}
          </div>
            @endif

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($users))
                  @foreach ($users as $user )
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>
                      {{ $user->email }}
                    </td>
                    <td>@if($user->is_admin) <button class="btn btn-success btn-sm"> Admin</button> @else <button
                        class="btn btn-info btn-sm">Simple User</button> @endif</td>
                    <td>@if($user->block) <a href="{{ route('status.toggle',['id'=>$user->id]) }}"><button class="btn btn-danger btn-sm">Blocked</button></a> @else <a href="{{ route('status.toggle',['id'=>$user->id]) }}"><button
                        class="btn btn-primary btn-sm">Active</button></a> @endif</td>
                    <td>
                     <i class="fa fa-eye contact-detail" style="color:blue"
                     data-toggle="modal" data-target="#contactModal" data-id="{{ $user->id }}"
                     ></i>
                     
                      
                    <a href="{{ route('user.delete',['id'=>$user->id]) }}"> 
                       <i class="fa fa-trash" style="color:red"></i>
                    </a>
                      </td>
                  </tr>
                  @endforeach
                  @endif
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
{{-- Modal start --}}
                  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">User Detail</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" id="contact_model">
                        </div>
                      </div>
                </div>
                </div>
{{-- modal end --}}
          @endsection