
<form action="/admin/category/update/{{$item -> id}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$item -> name}}">
        </div>
        <div class="mt-3 mb-3">
          <label>Current Image</label>
          <br>
          <img style='width:250px;' src="/img/category/{{$item -> image}}" alt="">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name='image' >
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea type="text" class="form-control" id="intro" name='intro' rows="4" >{{ $item -> intro}}</textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
