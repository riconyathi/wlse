<div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="form-group col-sm-6">
              <label >First Name</label>
              <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group col-sm-6">
              <label >Last Name</label>
              <input type="text" name="last_name" class="form-control" required>
            </div>
  
            <div class="form-group col-sm-6">
              <label >Role</label>
              <select name="role" class="form-control" required>
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                     <option value="{{ $role->id }}">{{ $role->name }}</option>
                     @endforeach
              </select>
            </div>
            <div class="form-group col-sm-6">
              <label >Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group col-sm-6">
              <label >Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group col-sm-6">
              <label >Password Confirm</label>
              <input type="password" name="password_confirm" class="form-control" required>
            </div>
          </div>
              <input type="submit" value="Create" class="mt-4 btn btn-sm  btn-primary float-right">
          </form>
          
        </div>
        
      </div>
    </div>
  </div>
  
  
  