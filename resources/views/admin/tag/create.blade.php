
<form action="/admin/tag/create" method="Post">
    @csrf
    <div class="card-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"  value="{{ old('name')}}">
        </div>
        <div class="d-none">
            <input type="text" class="form-control" name="createdAt" placeholder="Enter name">
          </div>
        <div class="form-group">
            <label for="intro">Intro</label>
            <textarea type="text" class="form-control" id="intro" name='intro' rows="4">{{ old('intro')}} </textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
