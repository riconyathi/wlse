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
                  <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" data-toggle="modal" data-target="#create_course" class="btn btn-sm btn-neutral">Create Course</a>
             
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
              <h3 class="mb-0">Striped table</h3>
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
                <th>Title</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if ($course->count() > 0)
                
              
      @foreach ($course as $course)
        
               
              
                      <tr>
                        <td class="table-user">
                          <img src="{{ asset('dash_assets/img/theme/team-2.jpg') }}" class="avatar rounded-circle mr-3">
                          <b>{{ $course->user->first_name}}</b>
                        </td>
                        <td>
                          <span class="text-muted">{{ $course->course_title }}</span>
                        </td>
                        <td>
                          <span class="text-muted">{{ $course->category->category_name}}</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">{{ $course->created_at->toDateString()}}</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action editVacancy" data-toggle="modal" data-target="#edit_course{{ $course->id }}" data-original-title="Edit vacancy">
                            <i class="fas fa-user-edit"></i>
                          </a>
                    <form method="POST" action="{{ route('programs.destroy',$course->id) }}" onclick="return confirm('Are you sure you want to delete this course')" 
                   class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Course">
                   <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                      @csrf
                      @method('DELETE')
                    </form>
                        </td>
                      </tr>


                      {{-- edit modal --}}
  <div class="modal fade" id="edit_course{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title order-table-title" id="exampleModalLabel">Edit Job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="update_vacancy" action="{{ route('programs.update',$course->id) }}" method="POST" enctype="mutlipart/form-data">
            @csrf
            @method('PATCH')
              <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                   <label >Course Title</label>
                    <input type="text" class="form-control" name="course_title"  value="{{ $course->course_title }}"  >
                          
                   </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                 <label >Category</label>
                 <select class="form-control" name="category_id">
                   <option value="{{ $course->category->id }}">{{ $course->category->category_name }}</option>
                  @foreach ($category as $cate)
                  <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                  @endforeach
                  
                </select>
                  
                 </div>
            </div>
              <div class="col-md-12">
                  <div class="form-group">
                   <textarea name="body" class="form-control" cols="30" rows="10">{{ $course->body }}</textarea>
                   </div>
              </div>              
  
              </div>
          <div class="modal-footer">
          <button type="submit" class="btn btn-success" id="saveBtn"></span>&nbsp;Create</button>
        </div>		
        </form>
        </div>
        
      </div>
    </div>
  </div>
  @endforeach 
  @else
  <p>No courses at the moment</p>
  @endif
              
            </tbody>
          </table>
        </div>
      </div>
      
     
      <!-- Footer -->
   @include('dashboard/layouts/footer')
    </div>
  </div>
  @include('dashboard/miscellaneous/courses-crud/modals')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
         
         $(document).on('submit', '.courses', function(e){        
          e.preventDefault();
          $("#spinner").fadeIn(500);
          
          $.ajax({
          type:"POST",
          url:"{{ route('programs.store') }}",
           data:new FormData(this),
          contentType: false, // The content type used when sending data to the server.
          cache: false, // To unable request pages to be cached
          processData:false, 
          success:function(data){
            //$("#spinner").fadeOut(500);
            alert(data);
           $('#create_course').modal('hide'); 		//then refresh page
           //window.location.reload();
          }
          });
        });

      
        
  </script>

@endsection
