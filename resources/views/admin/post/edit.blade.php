
<form action="/admin/post/update/{{$item->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-4 ml-4 mr-5">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$item->title}}">
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-group">
                <label>Tag</label>
                <select class="form-control" name="tagId">
                    @foreach ( $tag as $tagItem )
                        @if ($item->tagId == $tagItem -> id)
                            <option value="{{$tagItem -> id}}" selected> {{$tagItem -> name}}</option>
                        @else
                            <option value="{{$tagItem -> id}}" > {{$tagItem -> name}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name='categoryId'>
                    <option value="0"> -- NULL --</option>
                    @foreach ( $cate as $cateItem )
                        @if ($item->categoryId == $cateItem -> id)
                            <option value="{{$cateItem -> id}}" selected> {{$cateItem -> name}}</option>
                        @else
                            <option value="{{$cateItem -> id}}" > {{$cateItem -> name}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label>Subscibe</label>
                <select class="form-control" name="subscribe">
                  <option value="0">None</option>
                  <option value="1">Subscibe</option>
                </select>
            </div>
          </div>
          </div>
          <div class="mt-3 mb-3">
            <label>Current Image</label>
            <br>
            <img style='width:450px; height: 170px' src="/img/post/{{$item -> image}}" alt="">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input name='image' type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" class="form-control" id="description" name='description' rows="8">{{$item->description}} </textarea>
          </div>
        </div>
        <script>

        </script>
        <div class="col-7">
          <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="edit" name='content' rows="8">{!!$item->content!!} </textarea>
        </div>
      </div>
    </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
