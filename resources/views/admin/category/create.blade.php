
<form action="/admin/category/create"  enctype="multipart/form-data" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Image</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile" name='image' value="{{old('image')}}">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          </div>
        </div>
        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea type="text" class="form-control" id="intro" name='intro' rows="4"> {{old('intro')}}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
