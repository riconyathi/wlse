@extends('dashboard.layouts.app')


@section('content')
  <div class="main-content" id="panel">
  
    @include('dashboard/layouts/header')

    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">All</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Vacancies</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_user" class="btn btn-sm btn-neutral">Add User</a>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      
     
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">Users</h3>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                <span class="btn-inner--text">Export</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush table-striped">
            <thead class="thead-light">
              <tr>
                <th>Created By</th>
                <th>Name</th>
                <th>Role</th>
                <th>email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach($users as $user)
               
                      <tr>
                        <td class="table-user">
                          <img src="{{ asset('dash_assets/img/theme/team-2.jpg') }}" class="avatar rounded-circle mr-3">
                          <b>{{$user->first_name}}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{$user->last_name}}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{$user->role->name}}</span>
                        </td>
                        <td>
                          {{$user->email}}
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_user{{$user->id}}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                    <form method="POST" action="{{ route('users.destroy',$user->id) }}" onclick="return confirm('Are you sure you want to delete this User')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete vacancy">
                
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                        </td>
                      </tr>

                      


                      {{-- edit modal --}}
  <div class="modal fade" id="edit_user{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="update_blog" action="{{route('users.update',$user->id)}}" method="POST" enctype="mutlipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                   <label >First Name</label>
                    <input type="text" class="form-control" name="first_name"  value="{{$user->first_name}}"  >
                          
                   </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                 <label >Last Name</label>
                  <input type="text" class="form-control" name="last_name"  value="{{$user->last_name}}"  >
                        
                 </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
               <label >Role</label>
                <select name="role" class="form-control" >
                  <option value="{{$user->role->id}}">{{$user->role->name}}</option>
                  @foreach($roles as $role)
                  <option value="{{$role->id}}">{{$role->name}}</option> 
                  @endforeach
                  
                </select>                      
               </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
             <label >Email</label>
              <input type="email" class="form-control" name="email"  value="{{$user->email}}"  >
                    
             </div>
        </div>
       
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="saveBtn"></span>&nbsp;Update</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/user-crud/modals')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


@endsection
