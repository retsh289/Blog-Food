<form action="/admin/user/create" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="{{old('username')}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="password">Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name='image'>
              <label class="custom-file-label" for="customFile">Choose File</label>
            </div>
        </div>
        <div class="form-group d-none">
            <label for='roleId'>Role</label>
            <input type="text" class="form-control" value="{{$title}}" name='roleId' disabled>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
