@extends('backend.master')

@section('contents')


<a href="{{route('create.category')}}"><span class="btn btn-success">+Createn New Category</span></a>
    <h1>Category Table:</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($CategoryList as $key=>$list)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img width="100px" style="border-radius: 10px" src="{{url('/uploads/uploads'.$list->image)}}" alt="category_image">
      </td>
      <td>{{$list->name}}</td>
      <td>{{$list->description}}</td>
      <td>{{$list->status}}</td>
      <td>
        <a href="{{route('category.view',$list->id)}}" class="btn btn-primary">View</a>
        <a href="{{route('category.edit',$list->id)}}" class="btn btn-success">edit</a>
        <a href="{{route('category.delete',$list->id)}}" class="btn btn-danger">delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection