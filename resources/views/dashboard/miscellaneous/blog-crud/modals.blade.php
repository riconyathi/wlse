<div class="modal fade" id="create_blog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title order-table-title" id="exampleModalLabel">Create Blog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
          <div class="form-group col-sm-6">
            <label >Blog Title</label>
            <input type="text" name="blog_title" class="form-control" required>
          </div>

          <div class="form-group col-sm-6">
            <label >Category</label>
            <select name="blog_category" class="form-control" required>
              <option value="">Select category</option>
              @foreach ($category as $category)
                   <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                   @endforeach
            </select>
          </div>
          </div>
            @trix(\App\Model\Blog::class, 'data')
            <input type="submit" value="Create" class="mt-4 btn btn-sm  btn-primary float-right">
        </form>
        
      </div>
      
    </div>
  </div>
</div>


