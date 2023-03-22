<form action="/admin/user/update/{{Auth::user()->id}}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{Auth::user()->name}}">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{Auth::user()->username}}" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{Auth::user()->email}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="mt-3 mb-3">
            <label>Current Image</label>
            <br>
            <img style='width:150px;' src="/img/user/{{Auth::user() -> image}}" alt="">
          </div>
        <div class="form-group">
            <label for="password">Image</label><br/>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name='image'>
              <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>
