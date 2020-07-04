 <table id="order-listing" class="table">
                  <thead>
                    <tr class="bg-primary text-white">
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Role</th>
                        <th>Image</th>                        

                        
                    </tr>
                  </thead>
                  <tbody>
                    @if(isset($data))
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->profile->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->phone_no }}</td>
                        <td>{{ $data->profile->address }}</td>
                        <td>{{ $data->profile->desigenation }}</td>
                        <td>
                            @if(!$data->block) 
                            <button class="btn btn-success">Active</button>
                            @else<button class="btn btn-danger">Blocked</button>
                            @endif
                        </td>
                        <td>@if($data->is_admin) <button class="btn btn-success">Admin</button> @else
                        <button class="btn btn-danger">simple User</button>
                        @endif
                        </td>
                <td>
                    {{-- {{ $data->profile->image }} --}}
                    <img src="{{ asset($data->profile->image) }}" class="rounded" alt="no image" height="30px" width="30px"></td>
                    </tr>
                @endif
                  </tbody>
                </table>
