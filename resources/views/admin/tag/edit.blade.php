
<form action="/admin/tag/update/{{$item -> id}}" method="Post">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{$item -> name}}">
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
