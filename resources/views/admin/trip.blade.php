@extends('admin.layout')

@section('container')

@if(session()->has('message'))
<div class="alert alert-success">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  {{session()->get('message')}}
</div>
@endif

<div class="card">
  <div class="card-header">
      <strong>ADD BLOG</strong> 
  </div>
  <div class="card-body card-block">
    <form action="{{route('tripadd')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="row form-group">
              <div class="col col-md-3">
                  <label class=" form-control-label">ADD NEW</label>
              </div>
              <div class="col-12 col-md-9">
                  <p class="form-control-static">Trip</p>
              </div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">TITLE</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="text" id="text-input" name="title" placeholder="Title" class="form-control">
                  <small class="form-text text-muted">Enter The Title</small>
              </div>
          </div>
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="text-input" class=" form-control-label">Price</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="number" id="text-input" name="price" placeholder="Price" class="form-control">
                  <small class="form-text text-muted">Enter The Price</small>
              </div>
          </div>
       
          
         
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="textarea-input" class=" form-control-label">Description</label>
              </div>
              <div class="col-12 col-md-9">
                  <textarea name="description" id="textarea-input" rows="9" placeholder="Description..." class="form-control"></textarea>
              </div>
          </div>
         
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="image" class=" form-control-label">Image</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="file" id="file-input" name="image" class="form-control-file">
              </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm" onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        
          
      </form>
  </div>
  
</div>




  
      




@endsection 