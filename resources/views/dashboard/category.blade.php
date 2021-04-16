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
                  <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_category" class="btn btn-sm btn-neutral">Create Category</a>
              
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
              <h3 class="mb-0">Course Categories</h3>
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
                <th>Category Name</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                            
              @if ($category->count() > 0)
                @foreach ($category as $category)
                  
               
              
                      <tr>                       
                        <td>
                          <span class="text-muted">{{ $category->category_name }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $category->created_at->diffForHumans() }}</span>
                        </td>
                        
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_category{{ $category->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                    <form method="POST" action="{{ route('category.destroy',$category->id) }}"
                       onclick="return confirm('Are you sure you want to delete this category')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete vacancy">
                   @csrf
                      @method('DELETE')
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      
                    </form>
                        </td>
                      </tr>


                      {{-- edit modal --}}
  <div class="modal fade" id="edit_category{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Category Name</label>
                   <input type="text" class="form-control" name="category_name"  value="{{ $category->category_name }}" required >
                          
                   </div>
              </div>
          
            </div>
              
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="saveBtn"></span>&nbsp;Create</button>
        </div>		
        </form>		
        </form>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach
  @endif
          
              
            </tbody>
          </table>
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/category-crud/modals')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
         
         $(document).on('submit', '.category', function(e){        
          e.preventDefault();
           
          $.ajax({
          type:"POST",
          url:"{{ route('category.store') }}",
           data:new FormData(this),
          contentType: false,
          cache: false, 
          processData:false, 
          success:function(data){
            
            alert(data);
           $('#create_category').modal('hide');
           
          }
          });
        });

      
        
  </script>

@endsection
