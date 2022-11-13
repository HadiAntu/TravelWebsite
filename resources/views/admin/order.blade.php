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
        
        
      </tr>
    </thead>
   
        
    <tbody>
      <tr>
        
        <td></td>
        <td></td>
        
        
        
  </tr>
    
    </tbody>
   
  </table>
  
      




@endsection 