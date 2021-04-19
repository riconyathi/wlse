<div class="modal fade" id="create_testimonial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title order-table-title" id="exampleModalLabel">Create Testimonial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="testimonial" action="{{ route('appreciation.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                 <label >Title</label>
                  <input type="text" class="form-control" name="testimonial_title"  placeholder="Job Title" required >
                        
                 </div>
            </div>
        
            <div class="col-md-12">
                <div class="form-group">
                 <textarea name="body" class="form-control" cols="30" rows="10"></textarea>
                 </div>
            </div>              

            <div class="col-md-6">
                <div class="form-group">
                 <label>Picture</label>
                  <input type="file" name="testimonial_image" class="form-control" accept="image/*">
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

