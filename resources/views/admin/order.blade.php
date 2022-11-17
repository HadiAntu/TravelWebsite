@extends('admin.layout')

@section('container')

@if(session()->has('message'))
<div class="alert alert-success">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  {{session()->get('message')}}
</div>
@endif





<div class="card-header">
    <strong> Order TABLE</strong> 
</div>

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        
        
        
        <th scope="col">Trip</th>
        <th scope="col">Email</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
        
        
      </tr>
    </thead>
   
        
    <tbody>
      <tr>
        
        <td></td>
        <td></td>
        
        
        
  </tr>
  @foreach ($data as $order)
        
  <tbody>
    <tr>
      
      <td>{{$order->id}}</td>
      <td>{{$order->name}}</td>
      <td>{{$order->email}}</td>
      <td>{{$order->trip}}</td>
      <td>{{$order->price}}</td>
      
      
      
     
 
      <td>
        <form action="" method="post">
            @csrf
            @method('Delete')
            <a href="" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
        </form> 
      </td> 
       {{-- <td>
        <a href="{{ route('updateProductForm', $order->id) }}" class="btn btn-info" onclick="return confirm('Are you sure you want to Change this')">UPDATE</a>
      </td>  --}}
      
</tr>
  
  </tbody>
  @endforeach
    
    </tbody>
   
  </table>
  
      




@endsection 