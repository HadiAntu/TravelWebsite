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
    <form action="{{route('blogAdd')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="row form-group">
              <div class="col col-md-3">
                  <label class=" form-control-label">ADD NEW</label>
              </div>
              <div class="col-12 col-md-9">
                  <p class="form-control-static">BLOG</p>
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



<div class="card-header">
    <strong> BLOG TABLE</strong> 
</div>

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        
        <th scope="col">Description</th>
        
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        
        
      </tr>
    </thead>
    @foreach ($data as $blog)
        
    <tbody>
      <tr>
        
        <td>{{$blog->id}}</td>
        <td>{{$blog->title}}</td>
        
        <td>{{Str::limit($blog->description, 30), ' (...)'}}</td>
        
        <td><img height="100" width="50" src="/Blogimage/{{$blog->image}}" alt=""></td>
   
        <td>
          <form action="" method="post">
              @csrf
              @method('Delete')
              <a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
          </form> 
        </td> 
         {{-- <td>
          <a href="{{ route('updateProductForm', $blog->id) }}" class="btn btn-info" onclick="return confirm('Are you sure you want to Change this')">UPDATE</a>
        </td>  --}}
        
  </tr>
    
    </tbody>
    @endforeach
  </table>
  
      




@endsection 